    function validateFORM() {
  var fullname = document.getElementById("fullname").value;
  var fathername = document.getElementById("fathername").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var school = document.getElementById("school").value;
  var standard = document.getElementById("standard").value;
  var board = document.getElementById("board").value;
  var gender = document.querySelector('input[name="gender"]:checked');

  if (
    fullname === "" ||
    fathername === "" ||
    email === "" ||
    phone === "" ||
    address === "" ||
    school === "" ||
    standard === "not selected" ||
    board === "not selected" ||
    !gender
  ) {
    alert("Please fill in all the required fields.");
    return false; 
  }

  var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!email.match(emailPattern)) {
    alert("Please enter a valid email address");
    return false;
  }


  var phoneInput = document.getElementById("phone");
  var phoneError = document.getElementById("phoneError");
  var phoneValue = phoneInput.value.trim();

  if (phoneValue.length !== 10) {
    phoneError.innerText = "Please enter a 10-digit phone number.";
    return false;
  } else {
    phoneError.innerText = "";
    return true;
  }

  return true;
}