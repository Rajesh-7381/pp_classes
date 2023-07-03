<?php
require_once "./connection.php"
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
    <div class="container ">
        <h2 class="color-9090 text-center">Enquiry Details</h2>
        <div class="table-responsive">
            
            <?php
            $query = "SELECT * FROM contact";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                echo '<table class="table table-dark" >
                    <thead>
                        <tr style="color: hotpink;">
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($result = mysqli_fetch_assoc($data)) {
                    echo '<tr style="color: orange;">
                        <td>' . $result["name"] . '</td>
                        <td>' . $result["email"] . '</td>
                        <td>' . $result["phone"] . '</td>
                        <td>' . $result["message"] . '</td>
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
</body>
</html>
