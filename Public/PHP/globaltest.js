$(function () {
                window.addEventListener('keyup', function (e) {
                    if (e.keyCode === 13) {
						var name = $('input#name').val();
						
							if ($.trim(name) != ''){
								$.getJSON('name.php', {name: name}, function(data){
								
									if (data=="Name not found"){
										alert('bad');
									
									}
									else{
                                        alert('GOOD');
									var elem = document.getElementById("Title");
									elem.value = data['a_list'][0];
									//alert(data['a_list'][0]);
									document.getElementById("Author").value = data['a_list'][1];
									document.getElementById("Genre").value = data['a_list'][2];
                                    document.getElementById("Publisher").value = data['a_list'][3];
                                    document.getElementById("Price").value = data['a_list'][4];
                                    document.getElementById("Qty").value = data['a_list'][5];
                                    document.getElementById("SupID").value = data['a_list'][6];
                                    }
								});
								}
                       }
                }, false);
        
        window.addEventListener('DOMContentLoaded', contentLoaded, false); 
    }());