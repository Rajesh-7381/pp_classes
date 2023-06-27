<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sidebar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .sidebar {
      background-color: #333;
      color: #fff;
      padding: 20px;
      height: 100vh; /* Set sidebar height to full viewport height */
    }

    .content {
      padding: 20px;
    }

    .sidebar .nav-link:hover {
      background-color: white;
      color: #333;
    }

    .color_white213 {
      color: white;
      font-weight: bolder;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 sidebar">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Register Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Register Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Explore Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Almuni Speaks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">Follow Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color_white213" href="#">About Us</a>
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
