
var base_url="/chiyo/";
//预加载
$(function(){
	$("img.mimg").lazyload({
		placeholder : base_url+"skin/customer/img/load.gif",
	    effect : "fadeIn"
	});
	//添加菜品按钮功能
	$("[id^='mid']").click(function() {
		var thisID="#mid_"+$(this).attr("info");
		$(thisID).addClass('animated rubberBand');
		setTimeout(function() {
        	$(thisID).removeClass('animated rubberBand');
		}, 1000);

		getCMenu($(this).attr("info"));
		numberAdd();
		//$(this).removeClass('animated rubberBand');
	});

	$("[id^='less']").click(function() {
		var mid= $(this).attr("info");
		less(mid);
	});
	$("[id^='add']").click(function() {
		add($(this).attr("info"));
	});
	$("[class^='close']").click(function() {
		deleMenu($(this).attr("info"));
	});

	$("#subMenu").click(function() {
		subMenu();
	});
});

//add menu one
function getCMenu(pmid) {
	$.ajax({
		url: base_url+'customer/menu/shopCart',
		type: 'POST',
		dataType: 'html',
		data: {mid: pmid},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() { 
		console.log("error");
	})
	.always(function() {
		console.log("complete");
		//$("#menuNumber").text(mes);
	});
}

//delete mid
function getLess(pmid) {
	var mess='';
	$.ajax({
		url: 'cart/sess',
		type: 'post',
		dataType: 'html',
		data: {mid: pmid}
	})
	.done(function(mes) {
		console.log("success");
		//alert(mes);
		mess = mes;
		//alert(mess);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	//alert(mess);
	return mess;
}
//add mid
function getAdd(pmid) {
	$.ajax({
		url: 'cart/sessAdd',
		type: 'post',
		dataType: 'html',
		data: {mid: pmid}
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function(mes) {
		console.log("complete");
	});
}

//删除mid
function less(id){
	var mNumberID="#mNumber_"+id;
	var num=$(mNumberID).text();
	num--;
	//alert(num);
	if (num>=1) {
		getLess(id);
		$(mNumberID).text(num);
	}
	if(num<=0)
	{
		num=1;
		$(mNumberID).text(num);
	}
	getsum();
	
}

//添加mid
function add(id){
	var mNumberID="#mNumber_"+id;
	var num=$(mNumberID).text();
	num++;
	if(num>=99)
	{
		num=99;
		alert('好胃口！');
	}
	getAdd(id);
	$(mNumberID).text(num);
	getsum();
}

function getsum() {
	var num=0;
	var money=0;
	$("[id^='mNumber']").each(function() {
		var thisNum=Number($(this).text());
		var idPrice="#price_"+$(this).attr("info");
		var price=Number($(idPrice).text());
		money+=thisNum*price;
	});
	$("[id^='mNumber']").each(function() {
		num+=Number($(this).text());
		/*var idPrice="#price_"+$(this).attr("info");
		$(idPrice).text();
		alert(num);*/
	});
	$('#allNumber').text(num);
	$('#allMoney').text(money);
}

//dele menu
function deleMenu(pmid) {
	$.ajax({
		url: 'cart/deleMenu',
		type: 'post',
		dataType: 'html',
		data: {mid: pmid}
	})
	.done(function() {
		console.log("success");
		var lgID="#lg_"+pmid;
		$(lgID).remove();
		getsum();
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});	
}

//页面数字自动增加
function numberAdd(){
	var number=Number($('#menuNumber').text());
	number++;
	$('#menuNumber').text(number);
}

//提交订单
function subMenu() {
	var number=Number($('#menuNumber').text());
	if (number!=0) {
		$.post('cart/addOrder', function(data) {
			alert(data);
			$('#btm').hide();
			//$('#back').hide();
		});
	} else {
		alert('选好菜，再下单哟 :)');
	}
	
}

