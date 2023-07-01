<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(234, 249, 251, 0.63)0.1%, rgba(239, 249, 251, 0.63)0.1%);
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</head>

<body>
  <div class="container">
    <section class="mb-4">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will get back to you within a matter of hours to help you.</p>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <form id="contactform" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="md-form mb-4">
                  <label for="name"><i class="fas fa-user"></i> Your Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="md-form mb-4">
                  <label for="email"><i class="fas fa-envelope"></i> Your Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="message"><i class="fas fa-comments"></i> Message</label>
                  <textarea type="text" name="message" id="message" rows="3" class="form-control md-textarea" onkeyup="message_counting(this)"></textarea>
                  <p id="charNum">100 characters remaining</p>
                </div>
              </div>
            </div>
            <br>
            <div class="text-center">
              <input type="submit" class="btn btn-primary" name="submit" value="Send Now">
            </div>
          </form>
        </div>
        <div class="col-md-3 text-center text-primary">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt" title="location"></i>&nbsp;Location</li>
            <li class="text-dark">Bbsr, 754140, IND</li>
            <br>
            <li><i class='fas fa-phone' title="phone"></i>&nbsp;Phone</li>
            <li class="text-dark">+91 935 3434 5353</li>
            <br>
            <li><i class="fa fa-envelope" title="email"></i>&nbsp;Email</li>
            <li class="text-dark">example@gmail.com</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <img src="" alt="Example SVG" style="display: block; width: 200px; margin: 0 auto;">
</body>

</html>

<script>
  function message_counting(element) {
    var maxlength = 100;
    var strlength = element.value.length;
    var charactersRemaining = maxlength - strlength;
    if (charactersRemaining < 0) {
      document.getElementById("charNum").innerHTML = "<span style='color:red;'>You have exceeded the limit of " + maxlength + " characters</span>";
    }
     else {
      document.getElementById("charNum").innerHTML = charactersRemaining + ' characters remaining';
    }
  }
</script>
<?php
include("connection.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $sql="insert into contact (name,email,message) values('$name','$email','$message')";
  if(mysqli_query($conn,$sql)){
    echo "data inserted sucessful";
  }else{
    echo "data not inserted";
  }
}
?>
