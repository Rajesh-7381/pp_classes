<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        header {
            background-color: #48F;
            color: #fff;
            padding: 3px;
            position: fixed;
            top: 0;
            left: 286px;
            right: 39px;
            z-index: 999;
        }

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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h2 class="color-9090 text-center"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registered Student Details</i></h2>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" oninput="searchData(this.value)">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <br><br><br>

    <div class="container">
        <div class="table-responsive" id="tableData">
            <?php
            require_once "./connection.php";

            $query = "SELECT * FROM register";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                echo '<table class="table table-dark">
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
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($result = mysqli_fetch_assoc($data)) {
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
                        <td>
                            <a href="admin_update.php?id=' . $result["id"] . '"><input type="submit" value="Update" class="btn btn-success"></a>
                            <a href="delete.php?id=' . $result["id"] . '"><input type="submit" value="Delete" class="btn btn-danger" onclick="return DEL()"></a>
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

        function searchData(value) {
            const tableData = document.getElementById("tableData");
            const rows = tableData.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const name = rows[i].getElementsByTagName("td")[1].innerText;
                const standard = rows[i].getElementsByTagName("td")[7].innerText;
                const gender = rows[i].getElementsByTagName("td")[10].innerText;
                const board = rows[i].getElementsByTagName("td")[9].innerText;

                if (name.toLowerCase().includes(value.toLowerCase()) ||
                    standard.toLowerCase().includes(value.toLowerCase()) ||
                    gender.toLowerCase().includes(value.toLowerCase()) ||
                    board.toLowerCase().includes(value.toLowerCase())) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>
