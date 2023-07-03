<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .col {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 324px;
            gap: 50px;
        }

        .col a {
            font-size: 36px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <div class="col social-icons">
            <a id="facebook-link" href="#"><i class="fab fa-facebook-f"></i></a>
            <a id="twitter-link" href="#"><i class="fab fa-twitter"></i></a>
            <a id="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
            <a id="linkedin-link" href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <input type="text" id="facebook-link-input" name="facebook_link">
        <input type="text" id="twitter-link-input" name="twitter_link">
        <input type="text" id="instagram-link-input" name="instagram_link">
        <input type="text" id="linkedin-link-input" name="linkedin_link">

        <input type="submit" value="Update Links" name="submit">
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $facebookLink = $_POST['facebook_link'];
    $twitterLink = $_POST['twitter_link'];
    $instagramLink = $_POST['instagram_link'];
    $linkedinLink = $_POST['linkedin_link'];

    $sql = "INSERT INTO social_links (facebook_link, twitter_link, instagram_link, linkedin_link) VALUES ('$facebookLink', '$twitterLink', '$instagramLink', '$linkedinLink')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Links are inserted into the database.');</script>";
    } else {
        echo "<script>alert('Links are not inserted into the database.');</script>";
        
    }
}
?>
