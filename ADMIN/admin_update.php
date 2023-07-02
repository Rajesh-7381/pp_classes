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
    <style>
        .form-inline {
            padding: 22px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body>
    <div class="container">
        <form action="#" method="POST" class="form-inline">
            <div class="title form-group ">
                <h2 class="cd">Update Form</h2>
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-user"> &nbsp;Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <input type="text" class="input" name="fname" value="<?php echo $result['fullname']; ?>">
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-user"> &nbsp;Father Name &nbsp;</i></label>
                <input type="text" class="input" name="ffname" value="<?php echo $result['fathername']; ?>">
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-user"> &nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <input type="text" class="input" name="email" value="<?php echo $result['email']; ?>">
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-user"> &nbsp;Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <input type="text" class="input" name="phone" value="<?php echo $result['phone']; ?>">
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-map-marker-alt"> &nbsp;Address &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <textarea name="address" id="" cols="23" rows="2" class="textarea"><?php echo $result['address']; ?></textarea>
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-book"> &nbsp;Board &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <select name="board" id="">
                    <option value='ICSE' <?= $result['Board'] == 'ICSE' ? 'selected' : '' ?>>ICSE</option>
                    <option value='CBSE' <?= $result['Board'] == 'CBSE' ? 'selected' : '' ?>>CBSE</option>
                </select>
            </div>
            <div class="input_field">
                <label for=""> <i class="fas fa-school">&nbsp;School&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <input type="text" class="input" name="school" value="<?php echo $result['schoolname']; ?>">
            </div>
            <div class="input_field">
                <label for=""><i class="fas fa-chalkboard">&nbsp;Standard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <select name="standard" id="">
                    <option value='8th' <?= $result['standard'] == '8th' ? 'selected' : '' ?>>8th</option>
                    <option value='9th' <?= $result['standard'] == '9th' ? 'selected' : '' ?>>9th</option>
                    <option value='10th' <?= $result['standard'] == '10th' ? 'selected' : '' ?>>10th</option>
                    <option value='11th' <?= $result['standard'] == '11th' ? 'selected' : '' ?>>11th</option>
                    <option value='12th' <?= $result['standard'] == '12th' ? 'selected' : '' ?>>12th</option>
                </select>
            </div>  

            <div class="input_field">
                <label for=""> <i class="fas fa-venus-mars">&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
                <select name="gender" id="">
                    <option value='male' <?= $result['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                    <option value='female' <?= $result['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
                    <option value='other' <?= $result['gender'] == 'other' ? 'selected' : '' ?>>other</option>
                </select>
            </div>
            <div class="input_field btn btn-primary">
                <input type="submit" value="Update" class="btn" name="update">
            </div>
    </div>

    </form>
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
         header('location:home.php');
    } else {
        echo "Failed to update record";
    }
}
?>