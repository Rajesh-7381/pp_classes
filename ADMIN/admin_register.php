<?php
require_once "./connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .color-9090 {
            color: black;
            text-align: center;
            font-weight: bolder;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="color-9090 text-center">Regisered Student</h2>
        <div class="table-responsive">

            <?php
            $query = "SELECT * FROM register";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                echo '<table class="table table-dark">
                    <thead>
                        <tr style="color: hotpink;">
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Standard</th>
                            <th>School Name</th>
                            <th>Board</th>
                            <th>Gender</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($result = mysqli_fetch_assoc($data)) {
                    echo '<tr style="color: orange;">
                        <td>' . $result["id"] . '</td>
                        <td>' . $result["fullname"] . '</td>
                        <td>' . $result["fathername"] . '</td>
                        <td>' . $result["email"] . '</td>
                        <td>' . $result["phone"] . '</td>
                        <td>' . $result["address"] . '</td>
                        <td>' . $result["standard"] . '</td>
                        <td>' . $result["schoolname"] . '</td>
                        <td>' . $result["Board"] . '</td>
                        <td>' . $result["gender"] . '</td>
                        <td>
                            <a href="admin_update.php?id=' . $result["id"] . '"><input type="submit" value="update" class="btn btn-success"></a>
                            <a href="delete.php?id=' . $result["id"] . '"><input type="submit" value="delete" class="btn btn-danger" onclick="return DEL()"></a>
                        </td>
                    </tr>';
                }

                echo '</tbody>
                    </table>';
            } else {
                echo "No data found.";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function DEL() {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
</body>

</html>
