function validate_form(){
    var name=document.getElementById("name").value;
    var fathername=document.getElementById("fathername").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var standard=document.getElementById("standard").value;
    if(name.length < 0){
        alert("it should be above 3");
    }
}