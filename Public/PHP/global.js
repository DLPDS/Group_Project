$('input#button').on('click', function(){
	var name = $('input#name').val();
	if ($.trim(name) != ''){
	$.getJSON('name.php', {name: name}, function(data){
	
		if (data=="Name not found"){
			alert(data);
		
		}
		else{
		var elem = document.getElementById("lastname");
		elem.value = data['a_list'][0];
		//alert(data['a_list'][0]);
		$('div#lastname').text(data['a_list'][2]);}
	});
	}
});


