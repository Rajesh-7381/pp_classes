<?php
include("connection.php");
$id = $_GET['id'];
echo $id;
$query = "SELECT * FROM social_links where id='$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

    $sql = "UPDATE social_links SET 
                facebook_link = '$facebookLink',
                twitter_link = '$twitterLink',
                instagram_link = '$instagramLink',
                linkedin_link = '$linkedinLink'
            WHERE id = 1";

    if (mysqli_query($conn, $sql)) {
        echo "Links updated successfully";
        // header(("location:contact_us.php")); 
    } else {
        echo "Error updating links: " . mysqli_error($conn);
    }
    mysqli_close($conn);
// }
?>
