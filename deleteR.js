$(document).ready(function(){
	$(".delete_link").click(function(){
		var value = ($(this).attr("id")).substring(7);
		var table_row=$(this);
		$.get("delete.php",{id:value},
		function(data){
			if(data == 'GJx2'){
				$(table_row).parent().parent().remove();
			}
		});
	});
});