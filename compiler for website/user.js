$(document).ready(function(){
	$("#compile").click(function(){
		if($("#source").val().length!=0){
			$.ajax({
				type: 'POST',
				url: 'post.php',
				data: {
					lang: $("#lang").val(),
					source: $("#source").val(),
				},
				success: function(data){
					$("#result").html(data)
				}
			})
		}	
	});
});
