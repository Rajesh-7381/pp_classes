<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <a href="./admin_register.php">back</a>
    
</head>
<body>
    
</body>
</html>
<?php
require_once "./connection.php";

if (isset($_POST['submit2'])) {
  $search = $_POST['search'];
  $query2 = "SELECT * FROM register WHERE id='$search' OR fullname='$search' OR fathername='$search' OR phone='$search' 
  OR fathernumber='$search' OR email='$search'  OR Board='$search' OR gender='$search' ";
  echo gettype($query2);
  $data2 = mysqli_query($conn, $query2);
  $total2 = mysqli_num_rows($data2);
  if ($total2 > 0) {
    echo '<div class="table-responsive">
      <table class="table table-dark table-striped">
        <thead>
          <tr style="color: hotpink;">
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Father Name</th>
            <th>Father Phone no.</th>
            <th>Email</th>
            <th>Address</th>
            <th>Standard</th>
            <th>School Name</th>
            <th>Board</th>
            <th>Gender</th>
          </tr>
        </thead>
        <tbody>';

    while ($result = mysqli_fetch_assoc($data2)) {
      echo '<tr style="color: orange;">
            <td>' . $result["id"] . '</td>
            <td>' . $result["fullname"] . '</td>
            <td>' . $result["phone"] . '</td>
            <td>' . $result["fathername"] . '</td>
            <td>' . $result["fathernumber"] . '</td>
            <td>' . $result["email"] . '</td>
            <td>' . $result["address"] . '</td>
            <td>' . $result["standard"] . '</td>
            <td>' . $result["schoolname"] . '</td>
            <td>' . $result["Board"] . '</td>
            <td>' . $result["gender"] . '</td>
          </tr>';
    }

    echo '</tbody>
      </table>
    </div>';
  } else {
    echo "Data not found.";
  }
}
?>
