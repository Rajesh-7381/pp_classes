<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .form-group label {
            font-weight: bold;
        }

        #colordot56 {
            color: red;
        }

        .container {
            margin-top: 90px;
            margin-left: 25%;
        }

        .form-control.invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem);
            background-image: url('https://cdn.jsdelivr.net/npm/bootstrap-icons%401/1.5.0/exclamation-triangle.svg');
            background-repeat: no-repeat;
            background-position: center right calc(.375em + .1875rem);
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Information Form</h2>
        <form method="POST" onsubmit="return validateFORM()">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Name <span id="colordot56">*</span></label>
                        <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter your name" tabindex="1" >
                        <small id="nameError" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="fatherName"><i class="fas fa-user"></i> Father's Name<span id="colordot56">*</span></label>
                        <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Enter your father's name" tabindex="3" >
                        <small id="fathernameError" class="text-danger"></small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-phone"></i> Phone Number <span id="colordot56">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" tabindex="2" >
                        <small id="phoneError" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="fatherPhone"><i class="fas fa-phone"></i> Father's Phone Number <span id="colordot56">*</span></label>
                        <input type="tel" class="form-control" id="fatherPhone" name="fatherPhone" placeholder="Enter your father's phone number" tabindex="4" >
                        <small id="fatherphoneError" class="text-danger"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email <span id="colordot56">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" tabindex="5" >
                        <small id="emailError" class="text-danger"></small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="school"><i class="fas fa-school"></i> School Name <span id="colordot56">*</span></label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="Enter your school name" tabindex="6" >
                        <small id="schoolError" class="text-danger"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address"><i class="fas fa-map-marker-alt"></i> Address <span id="colordot56">*</span></label>
                        <textarea class="form-control" id="address" name="address" rows="1" placeholder="Enter your address" tabindex="7" ></textarea>
                        <small id="addressError" class="text-danger"></small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="board"><i class="fas fa-clipboard-list"></i> Board <span id="colordot56">*</span></label>
                        <select class="form-control" id="board" name="board" tabindex="8" >
                            <option value="">--Select--</option>
                            <option value="cbse">CBSE</option>
                            <option value="icse">ICSE</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="grade"><i class="fas fa-graduation-cap"></i> Grade<span id="colordot56">*</span></label>
                        <select class="form-control" id="grade" name="grade" tabindex="9" >
                            <option value="">--Select--</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gender"><i class="fas fa-venus-mars"></i> Gender:</label>
                        <select class="form-control" id="gender" name="gender" tabindex="10" >
                            <option value="">Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" tabindex="11">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script>
function validateFORM() {
    var name_Input = document.getElementById("name");
            var nameError = document.getElementById("nameError");
            var nameValue = name_Input.value.trim();

            if (nameValue === "") {
                name_Input.classList.add("invalid");
                nameError.innerText = "Please enter your name.";
                return false;
            } else {
                name_Input.classList.remove("invalid");
                nameError.innerText = "";
            }
    var phone_Input = document.getElementById("phone");
            var phoneError = document.getElementById("phoneError");
            var phoneValue = phone_Input.value.trim();

            if (phoneValue === "") {
                phone_Input.classList.add("invalid");
                phoneError.innerText = "Please enter your name.";
                return false;
            } else {
                name_Input.classList.remove("invalid");
                phoneError.innerText = "";
            }
    var name_Input2 = document.getElementById("fatherName");
            var fathernameError = document.getElementById("fathernameError");
            var fathernameValue = name_Input2.value.trim();

            if (fathernameValue === "") {
                name_Input2.classList.add("invalid");
                fathernameError.innerText = "Please enter your name.";
                return false;
            } else {
                name_Input2.classList.remove("invalid");
                fatherError.innerText = "";
            }
    var fatherphone_Input = document.getElementById("fatherphone");
            var fatherphoneError = document.getElementById("fatherphoneError");
            var fatherphoneValue = fatherphone_Input.value.trim();

            if (fatherphoneValue === "") {
                fatherphone_Input.classList.add("invalid");
                fatherphoneError.innerText = "Please enter your name.";
                return false;
            } else {
                fatherphone_Input.classList.remove("invalid");
                fatherphoneError.innerText = "";
            }  
            
     var email_Input = document.getElementById("email");
            var emailError = document.getElementById("emailError");
            var emailValue = email_Input.value.trim();

            if (emailValue === "") {
                email_Input.classList.add("invalid");
                emailError.innerText = "Please enter your name.";
                return false;
            }  else if (!validateEmail(emailValue))  {
                email_Input.classList.add("invalid");
                emailError.innerText = "Please enter your name.";
                return false;
            }else{
                email_Input.classList.remove("invalid");
                emailError.innerText = "";
            }        
    var address_Input = document.getElementById("address"); 
        var addressError = document.getElementById("addressError");
        var addressValue = address_Input.value.trim();
        if (addressValue === "") {
                address_Input.classList.add("invalid");
                addressError.innerText = "Please enter your name.";
                return false;
            } else {
                address_Input.classList.remove("invalid");
                addressError.innerText = "";
            }  
    var school_Input = document.getElementById("school");  
        var schoolError = document.getElementById("schoolError");
        var schoolValue = school_Input.value.trim();
        if (schoolValue === "") {
                school_Input.classList.add("invalid");
                schoolError.innerText = "Please enter your name.";
                return false;
            } else {
                school_Input.classList.remove("invalid");
                schoolError.innerText = "";
            }  
        


    // var name_Input = document.getElementById("fullname");
    // var name_Input2 = document.getElementById("fathername");

    // var email_Input = document.getElementById("email");
    // var phone_Input = document.getElementById("phone");

    // var address_Input = document.getElementById("address");
    // var school_Input = document.getElementById("school");

    // var nameError = document.getElementById("nameError");
    // var nameError2 = document.getElementById("nameError2");

    // var emailError = document.getElementById("emailError");
    // var phoneError = document.getElementById("phoneError");

    // var addressError = document.getElementById("addressError");
    // var schoolError = document.getElementById("schoolError");

    // var nameValue = name_Input.value.trim();
    // var nameValue2 = name_Input2.value.trim();

    // var emailValue = email_Input.value.trim();
    // var phoneValue = phone_Input.value.trim();

    // var addressValue = address_Input.value.trim();
    // var schoolValue = school_Input.value.trim();

    

    // if (emailValue === "") {
    //     emailError.innerText = "Please enter your email.";
    //     return false;
    // } else if (!validateEmail(emailValue)) {
    //     emailError.innerText = "Please enter a valid email address.";
    //     return false;
    // } else {
    //     emailError.innerText = "";
    // }

    // if (phoneValue.length !== 10) {
    //     phoneError.innerText = "Please enter a 10-digit phone number.";
    //     return false;
    // } else {
    //     phoneError.innerText = "";
    // }

    // if (addressValue === "") {
    //     addressError.innerText = "Please enter your address.";
    //     return false;
    // } else {
    //     addressError.innerText = "";
    // }

    // if (schoolValue === "") {
    //     schoolError.innerText = "Please enter your school name.";
    //     return false;
    // } else {
    //     schoolError.innerText = "";
    // }

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
}

function validateEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}

function alphaOnly(event) {
    var key = event.keyCode;
    return (key >= 65 && key <= 90) || key === 8;
}


</script>



<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $fathername = $_POST['fatherName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fatherphone = $_POST['fatherPhone'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $standard = $_POST['grade'];
    $board = $_POST['board'];
    $gender = $_POST['gender'];

    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $present = mysqli_num_rows($result);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($present > 0) {
?>
            <script>
                alert("This email already exists!");
            </script>
            <?php
        } else {
            $query = "INSERT INTO register (fullname, fatherName, email, phone,fatherPhone, address, schoolname, grade, board, gender) 
                      VALUES ('$fullname', '$fathername', '$email', '$phone','$fathernumber', '$address', '$school', '$standard', '$board', '$gender')";

            $data = mysqli_query($conn, $query);
            if ($data) {
            ?>
                <script>
                    alert("Data inserted successfully!");
                </script>
<?php
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>