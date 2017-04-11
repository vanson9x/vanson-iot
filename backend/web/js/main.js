$(function(){
	// show modal Create Product
	$('#modalButton').click(function(){
		$('#modal').modal()
		.find('#modalContent')
		.load($(this).attr('value'));

	});

	//show modal View,Update Product
	$('td>a[title="View"],td>a[title="Update"]').click(function(){
		var href = $(this).attr('href');
		$('#titleModal').text($(this).attr('title')=="View"?"Thông tin thiết bị":"Cập nhật thiết bị");
		$('#modal').modal()
		.find('#modalContent')
		.load(href);
		return false;
	});

});
