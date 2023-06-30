<!DOCTYPE html>
<html>
<head>
  <title>Explore program</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    
    .iframe-container {
      position: relative;
      overflow: hidden;
      padding-top: 56.25%;
    }
    
    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
    
    .col-md-8{
      border: 1px solid black;
    }
    
 
  </style>
</head>
<body>
<div id="carouselExampleControls" class="carousel slide image_slider_explore-program5487" data-ride="carousel">
    <br>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="images/pexels-jeshootscom-714698.jpg" alt="First slide" height="220" width="900">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="images/pexels-mikhail-nilov-8923529.jpg" alt="Second slide" height="220" width="900">
    </div>
  </div>
 <br>
</div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card765">
          <div class="card-body">
            <h5 class="card-title">Physics & Chemistry</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link color_white213" href="#" onclick="loadHomePHY8()">Class-8 physics</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomeCHEM8()">Class-8 Chemistry</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomePHY9()">Class-9 physics</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomeCHEM9()">Class-9 Chemistry</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomePHY10()">Class-10 physics</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomeCHEM10()">Class-10 Chemistry</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomePHY11()">Class-11 physics</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomeCHEM11()">Class-11 Chemistry</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomePHY12()">Class-12 physics</a>
                <a class="nav-link color_white213" href="#" onclick="loadHomeCHEM12()">Class-12 Chemistry</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="iframe-container" id="homeContainer">
          <iframe id="homeIframe" src="" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <br>

  <script>
    function loadHomePHY8() {
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_8physics.php";
    }
    
    function loadHomeCHEM8(){
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_8chem.php";
    }
    function loadHomePHY9() {
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_9physics.php";
    }
    
    function loadHomeCHEM9(){
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_9chem.php";
    }
    function loadHomePHY10() {
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_10physics.php";
    }
    
    function loadHomeCHEM10(){
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_10chem.php";
    }
    function loadHomePHY11() {
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_11physics.php";
    }
    
    function loadHomeCHEM11(){
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_11chem.php";
    }
    function loadHomePHY12() {
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_12physics.php";
    }
    
    function loadHomeCHEM12(){
      var homeIframe = document.getElementById("homeIframe");
      homeIframe.src = "class/class_12chem.php";
    }
    
    $(document).ready(function() {
      $('.carousel').carousel({
        interval: 3000 
      });
    });
  </script>
  
</body>
</html>
