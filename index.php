<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      padding-top: 70px;
      padding-bottom: 70px;
      position: relative;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
    }

    .header .navbar {
      justify-content: flex-end;
    }

    .header .navbar a {
      color: #fff;
      margin-left: 15px;
    }

    .content {
      padding: 20px;
    }

    .footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .social-icons a {
      color: #fff;
      margin: 0 5px;
      
    }
    .company_about_contact_us li{
      border: none;
      text-align: left;
     
    }
    .start-inside2 a:hover{
    font-size: 24px;
    background-color: rgb(229, 229, 216) ;
    color: black;
    border-radius: 6px;


}
  </style>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end start-inside2" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link register-link" href="./signup.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content -->
  <main class="content">
    <div class="container">
      <h1>Welcome to Your Website</h1>
      <p>This is the content of your website.</p>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="image_slider_ex" class="d-block w-100" src="./pexels-polina-tankilevitch-6929190.jpg"
            alt="First slide">
        </div>
        <div class="carousel-item">
          <img id="image_slider_ex" class="d-block w-100" src="./pexels-andrea-piacquadio-3771074.jpg"
            alt="Second slide">
        </div>
        <div class="carousel-item">
          <img id="image_slider_ex" class="d-block w-100" src="./pexels-cottonbro-studio-4861395.jpg"
            alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Grid -->
    <div class="container">
      <?php
      include("./grid.php");
      ?>
      
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="company_about_contact_us">Company
            <li><a href="#">About Us</a></li>
            <li><a href="#">Alumni Speaks</a></li>
          </ul>
        </div>
        <div class="col social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>
