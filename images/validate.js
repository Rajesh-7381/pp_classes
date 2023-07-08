function validateFORM() {
    var name_Input = document.getElementById("fullname");
    var name_Input2 = document.getElementById("fathername");
    var email_Input = document.getElementById("email");
    var phone_Input = document.getElementById("phone");
    var address_Input = document.getElementById("address");
    var school_Input = document.getElementById("school");
    var messageInput = document.getElementById("message");

    var nameError = document.getElementById("nameError");
    var nameError2 = document.getElementById("nameError2");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var addressError = document.getElementById("addressError");
    var schoolError = document.getElementById("schoolError");
    var messageError = document.getElementById("messageError");

    var nameValue = name_Input.value.trim();
    var nameValue2 = name_Input2.value.trim();
    var emailValue = email_Input.value.trim();
    var phoneValue = phone_Input.value.trim();
    var addressValue = address_Input.value.trim();
    var schoolValue = school_Input.value.trim();
    var messageValue = messageInput.value.trim();

    var gradeSelect = document.getElementById("standard");
    var gradeError = document.getElementById("gradeError");

    var boardSelect = document.getElementById("board");
    var boardError = document.getElementById("boardError");

    var genderRadios = document.getElementsByName("gender");
    var genderError = document.getElementById("genderError");

    if (nameValue === "") {
      nameError.innerText = "Please enter your name.";
      return false;
    } else {
      nameError.innerText = "";
    }

    if (nameValue2 === "") {
      nameError2.innerText = "Please enter your father's name.";
      return false;
    } else {
      nameError2.innerText = "";
    }

    if (emailValue === "") {
      emailError.innerText = "Please enter your email.";
      return false;
    } else if (!validateEmail(emailValue)) {
      emailError.innerText = "Please enter a valid email address.";
      return false;
    } else {
      emailError.innerText = "";
    }

    if (phoneValue.length !== 10) {
      phoneError.innerText = "Please enter a 10-digit phone number.";
      return false;
    } else {
      phoneError.innerText = "";
    }

    if (addressValue === "") {
      addressError.innerText = "Please enter your address.";
      return false;
    } else {
      addressError.innerText = "";
    }

    if (schoolValue === "") {
      schoolError.innerText = "Please enter your school name.";
      return false;
    } else {
      schoolError.innerText = "";
    }
    
    if (messageValue === "") {
      messageError.innerText = "Please enter your message.";
      return false;
  } else if (messageValue.length > 100) {
      messageError.innerText = "Message should not exceed 100 characters.";
      return false;
  } else {
      messageError.innerText = "";
  }

    
    if (gradeSelect.value === "not selected") {
      gradeError.innerText = "Please select a grade.";
      return false;
    } else {
      gradeError.innerText = "";
    }

   
    if (boardSelect.value === "not selected") {
      boardError.innerText = "Please select a board.";
      return false;
    } else {
      boardError.innerText = "";
    }


    var isGenderSelected = false;
    for (var i = 0; i < genderRadios.length; i++) {
      if (genderRadios[i].checked) {
        isGenderSelected = true;
        break;
      }
    }

    if (!isGenderSelected) {
      genderError.innerText = "Please select a gender.";
      return false;
    } else {
      genderError.innerText = "";
    }

    return true;
  }

  function validateEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
  }

  function alphaOnly(event) {
    var key = event.keyCode;
    return (key >= 65 && key <= 90) || key === 8;
  }
  function message_counting(textarea) {
    var maxLength = 100;
    var currentLength = textarea.value.length;
    var remaining = maxLength - currentLength;
    var charNum = document.getElementById("charNum");
    charNum.innerText = remaining + " characters remaining";
    if (currentLength > maxLength) {
        charNum.style.color = "red";
        return false;
    } else {
        charNum.style.color = "";
        return true;
    }
}