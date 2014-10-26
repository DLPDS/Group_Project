/**
 * Created by DLPDS on 9/7/14.
 */
function checkForm() {
    if(reg.priority.value=="Choose a position"){
        alert("Please Choose A Position");
        return false;
    }

    if (document.forms["reg"]["passwordName"].value!=document.forms["reg"]["confirmPassword"].value) {
        alert("Password Does Not Match");
        return false;
    }
    return true;

}

function delete_test(){
    return confirm("Do you want to delete these information");
}

function formSuccess(){
    return confirm("Successfully Submitted ");
}

function FormFail(){
    return confirm("Please Try Again");
}

function showHint(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }

	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML +=xmlhttp.responseText;
	  }}
	xmlhttp.open("GET","book.php?q="+str,true);
	xmlhttp.send();
	document.getElementById("ISBN").value="";
}

function myDeleteFunction(num) {
    var row = num.parentNode.parentNode;
	var table = row.parentNode;
    table.removeChild(row);
}


function prize2(num){
	//var element = document.getElementById("table");
	//var values = element.childNodes[1].childNodes[0].innerText;
    var row = num.parentNode.parentNode;
	var price = row.childNodes[3].childNodes[0].value;
	var quatity = row.childNodes[4].childNodes[0].value;
	var totalPrice = price*quatity;
	row.childNodes[5].childNodes[0].value = totalPrice;
	//num.parentNode.parentNode.getElementById("price12").value = row;
}

function amount(num){
    var row = num.parentNode.parentNode;
	var price = row.childNodes[3].childNodes[0].value;
	var quatity = row.childNodes[4].childNodes[0].value;
	var totalPrice = price*quatity;
	var old = document.getElementById("ta").value;
	document.getElementById("ta").value = parseInt(old) + parseInt(totalPrice);
}

function cal_total() {
    var x = document.getElementsByTagName("tr");
    var total=0;
    var i;
    for (i = 1; i < x.length;i++) {
       var value= parseInt(x[i].childNodes[5].childNodes[0].value);
	   total = total+value;
    }
	document.getElementById("ta").value = total;
}

function cal_change()
{
    var x = document.getElementById("ta").value;
	var y = document.getElementById("paid").value;
	var change = 0;
	change = y-x;
	document.getElementById("give").value = change;
}


function update_books()
{
    var x = document.getElementsByTagName("tr");
    var value = [];
    var i;
    for (i = 1; i < x.length;i++) {
       value.push (x[i].childNodes[0].childNodes[0].value);
	   value.push (parseInt(x[i].childNodes[4].childNodes[0].value));
    } 
	if (value.length > 1){
	var xmlhttp;
    if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		alert(xmlhttp.responseText);
	  }}
	xmlhttp.open("GET","test.php?q="+value,true);
	xmlhttp.send();}

}

function update_sale(){
    var x = document.getElementById("ta").value;
	alert(x);
}