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
    <div class="col social-icons">
        <a id="facebook-link" href="#"><i class="fab fa-facebook-f"></i></a>
        <a id="twitter-link" href="#"><i class="fab fa-twitter"></i></a>
        <a id="instagram-link" href="#"><i class="fab fa-instagram"></i></a>
        <a id="linkedin-link" href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <button onclick="updateLinks()">Update Links</button>

    <script>
        function updateLinks() {
            // Get the values from user input or any other source
            var facebookLink = "https://www.facebook.com/new-link";
            var twitterLink = "https://www.twitter.com/new-link";
            var instagramLink = "https://www.instagram.com/new-link";
            var linkedinLink = "https://www.linkedin.com/new-link";

            // Update the href attribute of the anchor tags
            document.getElementById("facebook-link").href = facebookLink;
            document.getElementById("twitter-link").href = twitterLink;
            document.getElementById("instagram-link").href = instagramLink;
            document.getElementById("linkedin-link").href = linkedinLink;
        }
    </script>
</body>
</html>
        