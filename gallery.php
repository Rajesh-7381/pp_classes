<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
        }
        .image-container img {
            max-width: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['image_paths'])) {
        $_SESSION['image_paths'] = [];
    }

    if (isset($_POST["submit"])) {
        $target_dir = "top/";
        $uploadedFiles = $_FILES["uploadfile"]["name"];
        $totalFiles = count($uploadedFiles);

        for ($i = 0; $i < $totalFiles; $i++) {
            $target_file = $target_dir . basename($uploadedFiles[$i]);
            $tempname = $_FILES["uploadfile"]["tmp_name"][$i];

            if (move_uploaded_file($tempname, $target_file)) {
                $_SESSION['image_paths'][] = $target_file;
                echo "File uploaded successfully.<br>";
            } else {
                echo "Error uploading file.";
            }
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile[]" id="image" multiple>
        <br><br>
        <input type="submit" name="submit" value="Upload Images">
    </form>

    <div class="image-container">
        <?php
        foreach ($_SESSION['image_paths'] as $image_path) {
            echo "<img src='$image_path' alt='Uploaded Image'><br><br>";
        }
        ?>
    </div>
</body>
</html>
