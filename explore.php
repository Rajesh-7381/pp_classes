<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Grid Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      
      color: white;
    }
    
    .card765 {
      background-color: #333;
      color: white;
    }
    
    .color_white213 {
      color: white;
    }
    
    .color_white213:hover {
      background-color: white;
      color: black;
    }
  </style>
</head>
<body>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="images/pexels-pixabay-36762 (1).jpg" alt="First slide" height="520" width="900">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="images/pexels-pixabay-45853.jpg" alt="Second slide" height="520" width="900">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="images/pexels-vlad-alexandru-popa-1402787.jpg" alt="Third slide" height="520" width="900">
    </div>
  </div>
 <br>
</div>


  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card765">
          <div class="card-body">
            <h5 class="card-title">Column 1</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link color_white213" href="#">Home</a>
                <a class="nav-link color_white213" href="#">Login</a>
                <a class="nav-link color_white213" href="#">Register Details</a>
                <a class="nav-link color_white213" href="#">Contact Us</a>
                <a class="nav-link color_white213" href="#">Explore Program</a>
                <a class="nav-link color_white213" href="#">About Us</a>
                <a class="nav-link color_white213" href="#">Follow Us</a>
                <a class="nav-link color_white213" href="#">Resources</a>
                <a class="nav-link color_white213" href="#">Alumni Speaks</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card765">
          <div class="card-body">
            <h5 class="card-title">Column 2</h5>
            <p class="card-text">This is the content of column 2.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
