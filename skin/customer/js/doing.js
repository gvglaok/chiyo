$(function(){
	$("[id^='mid']").click(function() { 
		getCMenu($(this).attr("info"));
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
});

//get menu class
function getCMenu(pmid) {
	$.ajax({
		url: 'menu/shopCart',
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
	.always(function(mes) {
		console.log("complete");
		$("#menuNumber").text(mes);
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
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}