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
}


function deleteRow(num)
{
    var row = num.parentNode.parentNode;
    document.getElementById("table").deleteRow(row.rowIndex);
    console.log(row);
}