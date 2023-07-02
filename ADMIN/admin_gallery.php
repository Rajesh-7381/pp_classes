<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
    <style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
        }

        .image-container img {
            max-width: 50%; /* Adjust this value as needed */
            margin: 10px;
        }

        #color-blue9090 {
            color: white;
            background-color: blue;
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

    if (isset($_GET['delete'])) {
        $index = $_GET['delete'];
        if (isset($_SESSION['image_paths'][$index])) {
            $image_path = $_SESSION['image_paths'][$index];
            unset($_SESSION['image_paths'][$index]);
            if (file_exists($image_path)) {
                unlink($image_path);
                echo "File deleted successfully.<br>";
            }
        }
    }
    ?>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Upload Images</label>
                <input type="file" name="uploadfile[]" id="image" class="form-control" multiple>
            </div>
            <br><br>
            <input type="submit" value="Upload Images" id="color-blue9090" name="submit">
        </form>

        <div class="image-container">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($_SESSION['image_paths'] as $index => $image_path) {
                        echo "<div class='col-sm-8'>";
                        echo "<img src='$image_path' alt='Uploaded Image'><br>";
                        echo "<a href='?delete=$index'>Delete</a>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
