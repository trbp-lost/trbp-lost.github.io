$(document).ready(function(){
	$("#btn-search").click(function(){

		searchWithPagination(1, true);
	});
});

function searchWithPagination(page_number, search){
	$(this).html("SEARCHING...").attr("disabled", "disabled");
	
	$.ajax({
		url: 'search2.php',
		type: 'POST',
		data: {kata_kunci: $("#kata_kunci").val(), page: page_number, search: search},
		dataType: "json",
		beforeSend: function(e) {
			if(e && e.overrideMimeType) {
				e.overrideMimeType("application/json;charset=UTF-8");
			}
		},
		success: function(response){
			$("<img class='image1' src='https://image.flaticon.com/icons/png/128/34/34202.png'>").html("SEARCH").removeAttr("disabled");
			
			$("#view").html(response.hasil);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.responseText);
		}
	});
}
