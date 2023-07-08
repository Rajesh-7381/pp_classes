<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            color: black;
        }
        .card{
            top: 20%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>About Us!</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="about-section col-lg-8">
                <h1>About Us</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque repellendus quae inventore nihil,
                    dolore praesentium beatae corrupti sequi! Sint atque deserunt neque sit sequi excepturi magnam, nisi
                    hic et quam.
                    <a data-bs-toggle="collapse" href="#knowMoreContent" role="button" aria-expanded="false"
                        aria-controls="knowMoreContent">Know more</a>
                </p>
                <div class="collapse" id="knowMoreContent">
                    <p>
                        Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque repellendus quae inventore
                        nihil,
                        dolore praesentium beatae corrupti sequi! Sint atque deserunt neque sit sequi excepturi magnam, nisi
                        hic et quam.
                        ipsum dolor sit amet consectetur adipisicing elit. Doloremque repellendus quae inventore nihil,
                        dolore praesentium beatae corrupti sequi! Sint atque deserunt neque sit sequi excepturi magnam, nisi
                        hic et quam.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="./pexels-andrea-piacquadio-3771074.jpg" alt="Jane" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
