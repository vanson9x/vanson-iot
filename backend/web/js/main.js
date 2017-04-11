$(function(){
	// show modal Create Product
	$('#modalButton').click(function(){
		$('#titleModal').text('Thêm mới');
		$('#modal').modal()
		.find('#modalContent')
		.load($(this).attr('value'));
	});

	//show modal View,Update Product
	$('td>a[title="View"],td>a[title="Update"]').click(function(){
		var href = $(this).attr('href');
		$('#titleModal').text($(this).attr('title')=="View"?"Thông tin chi tiết":"Cập nhật");
		$('#modal').modal()
		.find('#modalContent')
		.load(href);
		return false;
	});

});
