$(function(){
	$("[id^='mid']").click(function() {
		 
		getCMenu($(this).attr("info"));
	});
	$("[id^='less']").click(function() {
		var mid= $(this).attr("info");
		less(mid);
		
	});
	$("[id^='add']").click(function() {
		//alert($(this).attr("info"));
		add($(this).attr("info"));
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
	.always(function() {
		console.log("complete");
	});
}

function getLess(pmid) {
	$.ajax({
		url: 'cart/sess',
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
		return mes;
	});
}

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
		return mes;
	});
}

function less(id){
	var mNumberID="#mNumber_"+id;
	var num=$(mNumberID).text();
	num--;
	if(num<=1)
	{
		num=1;
	} else {
		var data=getLess(id);
		if (data=='success') {
			$(mNumberID).text(num);
		}
	}
	
}
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
}