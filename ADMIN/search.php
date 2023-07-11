<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .logo_image564 {
      margin-left: 0%;
      cursor: pointer;
      font-size: 40px;
    }
  </style>
  <script>
    function funINDEX() {
      window.location.href = "index.php";
    }
  </script>
   <script>
     $(document).ready(function() {
      setInterval(function() {
        $('.carousel').carousel('next');
      }, 4000);

    
    });
  </script>
  <script>
  $(document).ready(function() {
    
    $('#registerButton').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'register.php';
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#resources').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'resource.php'; 
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#contact231').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'contact.php'; 
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#testimonial1234').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'testimonial.php'; 
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#gallery1290').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'gallery.php'; 
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#about5454').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'aboutus.php'; 
    });
  });
</script>
  <script>
  $(document).ready(function() {
   
    $('#almuni7878').on('click', function(e) {
      e.preventDefault(); 
      window.location.href = 'almunispeak.php'; 
    });
  });
  
</script>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand logo_image564" onclick="funINDEX()" href="#">    <i class="fab fa-pied-piper-pp logo_image564" ></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Explore Program
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="./explore_program.php">Regular Course</a>
            <a class="dropdown-item" href="./explore_shortterm.php">Short Term Course</a>
            <a class="dropdown-item" href="./explore_crash.php">Crash Course</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="resources" href="#">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact231" href="#">Enquiry/Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="gallery1290" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimonial1234" href="#">Testimonials</a>
        </li>
      </ul>
    </div>
  </nav>
</body>

</html>
