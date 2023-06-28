<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    .container {
      max-width: 400px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
    .container button[type="submit"] {
      width: 100%;
    }
  </style>
  <title>Signup Form</title>
</head>
<body>
  <div class="container">
    <h3>Testimonials</h3>
    <form>
      <div class="form-group">
        <label for="name"><i class="fas fa-user"></i> Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="phone"><i class="fas fa-phone"></i> Phone:</label>
        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
      </div>
      <div class="form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="school"><i class="fas fa-school"></i> School Name:</label>
        <input type="text" class="form-control" id="school" placeholder="Enter your school name">
      </div>
      <div class="form-group">
        <label for="address"><i class="fas fa-map-marker-alt"></i> Address:</label>
        <input type="text" class="form-control" id="address" placeholder="Enter your address">
      </div>
      <div class="form-group">
        <label for="passing-year"><i class="fas fa-calendar-alt"></i> Passing Year:</label>
        <select class="form-control" id="passing-year">
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          
        </select>
      </div>
      <div>

      </div>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</input>
    </form>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
