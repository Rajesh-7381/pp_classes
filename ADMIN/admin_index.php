<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .sidebar {
      background-color: #333;
      color: #fff;
      padding: 20px;
      height: 100vh; 
      position: fixed; 
      top: 0; 
      left: 0; 
    }

    .content {
      padding: 20px;
      margin-left: 250px;
    }

    .sidebar .nav-link:hover {
      background-color: white;
      color: #333;
    }

    .sidebar .nav-link i {
      margin-right: 10px;
    }

    .color_white213 {
      color: white;
      font-weight: bolder;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      
      $('.content').load('home.html');

      $('.nav-link').click(function(e) {
        e.preventDefault();

        var page = $(this).attr('href');
        $('.content').load(page); 
      });
    });
  </script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link color_white213" href="home.html"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#"><i class="fas fa-home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="admin_login.php"><i class="fas fa-user"></i>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./admin_register.php"><i class="fas fa-clipboard"></i>Register Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./contact_us.php"><i class="fas fa-envelope"></i>Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#"><i class="fas fa-book"></i>Explore Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#"><i class="fas fa-users"></i>Alumni Speaks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#"><i class="fas fa-folder-open"></i>Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./admin_testimonial.php"><i class="fas fa-comments"></i>Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./admin_gallery.php"><i class="fas fa-images"></i>Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./up.php"><i class="fab fa-twitter"></i>Follow Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./aboutus.php"><i class="fas fa-info-circle"></i>About Us</a>
          </li>
        </ul>
      </div>
      <div class="col-md-9 col-lg-10 content">
        <h1>Main Content</h1>
        <p>This is the main content area.</p>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
