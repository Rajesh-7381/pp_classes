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
      height: 100vh; /* Set sidebar height to full viewport height */
      position: fixed; /* Set the sidebar position as fixed */
      top: 0; /* Position the sidebar at the top of the viewport */
      left: 0; /* Position the sidebar at the left of the viewport */
    }

    .content {
      padding: 20px;
      margin-left: 250px; /* Add margin to content to accommodate the fixed sidebar */
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
      // Load default content
      $('.content').load('home.html');

      // Handle sidebar link clicks
      $('.nav-link').click(function(e) {
        e.preventDefault(); // Prevent link from redirecting

        var page = $(this).attr('href');
        $('.content').load(page); // Load the page content into the content div
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
            <a class="nav-link color_white213" href="home.html"><i class="fas fa-home"></i>Home</a>
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
            <a class="nav-link color_white213" href="#"><i class="fas fa-info-circle"></i>About Us</a>
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
