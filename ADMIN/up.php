<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .col512 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 324px;
            gap: 50px;
        }

        .col512 a {
            font-size: 36px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update follow us page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>

<body>
    <?php
    include("connection.php");

    if (isset($_POST['submit'])) {
        $facebookLink = $_POST['facebook_link'];
        $twitterLink = $_POST['twitter_link'];
        $instagramLink = $_POST['instagram_link'];
        $linkedinLink = $_POST['linkedin_link'];

        $checkQuery = "SELECT * FROM social_links LIMIT 1";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            $updateQuery = "UPDATE social_links SET 
                facebook_link = '$facebookLink',
                twitter_link = '$twitterLink',
                instagram_link = '$instagramLink',
                linkedin_link = '$linkedinLink'";

            if (mysqli_query($conn, $updateQuery)) {
                echo "<script>alert('Links are updated in the database.');</script>";
            } else {
                echo "<script>alert('Links are not updated in the database.');</script>";
            }
        } else {
            echo "<script>alert('No data exists in the database to update.');</script>";
        }
    }

    $query = "SELECT * FROM social_links";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<form action="" method="POST">';
        while ($row = mysqli_fetch_assoc($result)) {
            $facebookLink = $row['facebook_link'];
            $twitterLink = $row['twitter_link'];
            $instagramLink = $row['instagram_link'];
            $linkedinLink = $row['linkedin_link'];

            echo '<input type="text" name="facebook_link" value="' . $facebookLink . '"><br>';
            echo '<input type="text" name="twitter_link" value="' . $twitterLink . '"><br>';
            echo '<input type="text" name="instagram_link" value="' . $instagramLink . '"><br>';
            echo '<input type="text" name="linkedin_link" value="' . $linkedinLink . '"><br>';
        }
        echo '<input type="submit" value="Update Links" name="submit">';
        echo '</form>';
    } else {
        echo "No social links found in the database.";
    }

    mysqli_close($conn);
    ?>

    <div class="col512 social-icons">
        facebook:
        <a id="facebook-link" href="<?php echo $facebookLink; ?>"><i class="fab fa-facebook-f"></i></a>
        twitter:
        <a id="twitter-link" href="<?php echo $twitterLink; ?>"><i class="fab fa-twitter"></i></a>
        instagram:
        <a id="instagram-link" href="<?php echo $instagramLink; ?>"><i class="fab fa-instagram"></i></a>
        linkedin:
        <a id="linkedin-link" href="<?php echo $linkedinLink; ?>"><i class="fab fa-linkedin-in"></i></a>
    </div>

    
</body>

</html>
