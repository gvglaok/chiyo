
//get menu class
function getCMenu() {
	$.ajax({
		url: 'menu/shopCart',
		type: 'POST',
		dataType: 'html',
		data: {param1: 'value1'},
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