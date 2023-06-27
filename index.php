<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 70px;
      padding-bottom: 70px; /* Add padding bottom to make space for the footer */
      position: relative; /* Add relative position to the body */
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
      position: absolute; /* Change position to absolute */
      bottom: 0;
      left: 0;
      right: 0;
    }

    #image_slider_ex {
      height: 500px;
      width: 500px;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      $('body').css('padding-top', $('.header').outerHeight() + 'px');
    });

    setInterval(function() {
      $('.carousel').carousel('next');
    }, 2000);
  </script>
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
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
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
      <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>
