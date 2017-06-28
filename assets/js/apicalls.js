$("#mostrar").click(function(){

	var apiurl = $("#form1").attr('action');

	$.ajax({
		url: apiurl + $("#id").val(),
		method: 'GET'
	}).then(function(data) {
		console.log(data);
		var myJSON = JSON.stringify(data);
		$("#data").text(myJSON);
	});            	
                                  
})
