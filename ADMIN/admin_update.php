<?php
include("connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM register WHERE id='$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
    border: 13px solid #ccc;
    padding: 47px;
    border-radius: 25px;
    margin-top: 290px;
}
    </style>
</head>

<body>
    <div>
        <a href="./admin_.php">BACK</a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center mb-4">Update Form</h2>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="fullname" class="form-label"><b>Full Name: </b></label>
                            <input type="text" class="form-control" id="fullname" name="fname" value="<?php echo $result['fullname']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="fathername" class="form-label"><b>Father Name:</b></label>
                            <input type="text" class="form-control" id="fathername" name="ffname" value="<?php echo $result['fathername']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><b>Email:</b></label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"><b>Phone:</b></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $result['phone']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"><b>Address:</b></label>
                            <textarea class="form-control" id="address" name="address" rows="2" required><?php echo $result['address']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="board" class="form-label"><b>Board:</b></label>
                            <select class="form-select" id="board" name="board" required>
                                <option value="ICSE" <?php if ($result['Board'] == 'ICSE') echo 'selected'; ?>>ICSE</option>
                                <option value="CBSE" <?php if ($result['Board'] == 'CBSE') echo 'selected'; ?>>CBSE</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label"><b>School:</b></label>
                            <input type="text" class="form-control" id="school" name="school" value="<?php echo $result['schoolname']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="standard" class="form-label"><b>Standard:</b></label>
                            <select class="form-select" id="standard" name="standard" required>
                                <option value="8th" <?php if ($result['standard'] == '8th') echo 'selected'; ?>>8th</option>
                                <option value="9th" <?php if ($result['standard'] == '9th') echo 'selected'; ?>>9th</option>
                                <option value="10th" <?php if ($result['standard'] == '10th') echo 'selected'; ?>>10th</option>
                                <option value="11th" <?php if ($result['standard'] == '11th') echo 'selected'; ?>>11th</option>
                                <option value="12th" <?php if ($result['standard'] == '12th') echo 'selected'; ?>>12th</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label"><b>Gender:</b></label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="male" <?php if ($result['gender'] == 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if ($result['gender'] == 'female') echo 'selected'; ?>>Female</option>
                                <option value="other" <?php if ($result['gender'] == 'other') echo 'selected'; ?>>Other</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $fathername = $_POST['ffname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $standard = $_POST['standard'];
    $school = $_POST['school'];
    $board = $_POST['board'];
    $gender = $_POST['gender'];

    $query = "UPDATE register SET fullname='$fname', fathername='$fathername', email='$email', phone='$phone', address='$address', standard='$standard', schoolname='$school', Board='$board', gender='$gender' WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Record updated";
        ?>
        <script>
            window.location.href='admin_register.php';
        </script>
        <?php
    } else {
        echo "Failed to update record";
    }
}
?>
