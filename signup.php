<?php
error_reporting(0);
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;

        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            /* background-image: url("./images/pexels-katerina-holmes-5905448.jpg"); */
            
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 150px;
            border-radius: 5px;
            background: linear-gradient(360deg, #71b7e6, #9b59b6);
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button123 {
            height: 45px;
            margin: 35px 0
        }

        form .button123 input {
            height: 100%;
            width: 20%;
            border-radius: 22px;
            border: none;
            color: #fff;
            font-size: 22px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: blue;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
        }



        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }

        .roman {
            font-family: "Times New Roman", Times, serif;
            font-style: italic;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <br><br><br>
   
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#" method="POST" onsubmit="return validateFORM()">
                <div class="user-details">
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-user"></i>
                            Full Name
                        </div>
                        <input type="text" placeholder="Enter your name" name="fullname" id="fullname" onkeydown="return alphaOnly(event);">
                    </div>
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-user"></i>
                            Father's name
                        </div>
                        <input type="text" placeholder="Enter your father name" name="fathername" id="fathername" onkeydown="return alphaOnly(event);">
                    </div>
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-envelope"></i>
                            Email
                        </div>
                        <input type="text" placeholder="Enter your email" id="email" name="email">
                    </div>
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-phone"></i>
                            Phone Number
                        </div>
                        <input type="text" placeholder="+91 123 456 7890" name="phone" id="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-address-card"></i>
                            Address
                        </div>
                        <textarea type="text" placeholder="Enter your address" id="address" name="address"></textarea>
                    </div>
                    <div class="input-box">
                        <div class="details">
                            <i class="fas fa-school"></i>
                            School name
                        </div>
                        <input type="text" placeholder="Enter your school name" id="school" name="school">
                    </div>
                    <div class="input-box">
                        <label for="">Grade</label>
                        <select name="standard" id="standard">
                            <option value="not selected">select</option>
                            <option value="8th"><span class="roman">8th</span></option>
                            <option value="9th"><span class="roman">9th</span></option>
                            <option value="10th"><span class="roman">10th</span></option>
                            <option value="11th"><span class="roman">11th</span></option>
                            <option value="12th"><span class="roman">12th</span></option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="">Board</label>
                        <select name="board" id="board">
                            <option value="not selected">select</option>
                            <option value="ICSE">ICSE</option>
                            <option value="CBSE">CBSE</option>
                        </select>
                    </div>

                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" value="Male" id="dot-1">
                    <input type="radio" name="gender" value="Female" id="dot-2">
                    <input type="radio" name="gender" value="Other" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">other</span>
                        </label>
                    </div>
                </div>

                <div class="button123">
                    <input type="submit" name="submit" class="" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
exatly create this type of form  using bootstarp no css needed
if equired attach it
please write full code

<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $fathername = $_POST['fathername'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $standard = $_POST['standard'];
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
            $query = "INSERT INTO register (fullname, fathername, email, phone, address, schoolname, standard, board, gender) 
                      VALUES ('$fullname', '$fathername', '$email', '$phone', '$address', '$school', '$standard', '$board', '$gender')";

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