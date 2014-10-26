$(function () {
                window.addEventListener('keypress', function (e) {
                    if (e.keyCode === 13) {
						var name = $('input#Name').val();
							
							if ($.trim(name) != ''){
								$.getJSON('name.php', {name: name}, function(data){
								
									if (data=="Name not found"){
										alert('bad');
									
									}
									else{
									
									//var elem = document.getElementById("Last_Name");
									document.getElementById("Last_Name").value = data['a_list'][0];
									//alert(data['a_list'][0]);
									document.getElementById("bDay").value = data['a_list'][1];
									document.getElementById("id_title").value = data['a_list'][4]}
								});
								}
                       }
                }, false);
        
        window.addEventListener('DOMContentLoaded', contentLoaded, false); 
    }());