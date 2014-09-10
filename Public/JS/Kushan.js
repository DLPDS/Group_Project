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