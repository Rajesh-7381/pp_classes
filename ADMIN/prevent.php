<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Include the necessary CSS and JavaScript files -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* ... Sidebar and content styles ... */
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
            <!-- Display the "Login" or "Logout" link based on user authentication -->
            <?php if ($userLoggedIn) : ?>
              <a class="nav-link color_white213" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <?php else : ?>
              <a class="nav-link color_white213" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <!-- Display the "Register Details" link only if the user is authenticated -->
            <?php if ($userLoggedIn) : ?>
              <a class="nav-link color_white213" href="./admin_register.php"><i class="fas fa-clipboard"></i>Register Details</a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="./contact_us.php"><i class="fas fa-envelope"></i>Contact Us</a>
          </li>
          <!-- Add more links and apply the same logic based on user authentication -->
          <!-- ... -->
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
