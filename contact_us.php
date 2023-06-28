<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(234, 249, 251, 0.63)0.1%, rgba(239, 249, 251, 0.63)0.1%);
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</head>

<body>
  <div class="container">
    <section class="mb-4">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Us</h2>
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will get back to you within a matter of hours to help you.</p>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <form id="contactform">
            <div class="row">
              <div class="col-md-6">
                <div class="md-form mb-4">
                  <label for="name"><i class="fas fa-user"></i> Your Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="md-form mb-4">
                  <label for="email"><i class="fas fa-envelope"></i> Your Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-4">
                  <label for="subject"><i class="fas fa-edit"></i> Subject</label>
                  <input type="text" name="subject" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="message"><i class="fas fa-comments"></i> Message</label>
                  <textarea type="text" name="message" rows="3" class="form-control md-textarea"></textarea>
                </div>
              </div>
            </div>
            <br>
            <div class="text-center">
              <input type="submit" class="btn btn-primary" value="Send Now">
            </div>

          </form>
        </div>
        <div class="col-md-3 text-center text-primary">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt" title="location"></i>&nbsp;Location</li>
            <li class="text-dark">Bbsr, 754140, IND</li>

            <br>
            <li><i class='fas fa-phone' title="phone"></i>&nbsp;Phone</li>
            <li class="text-dark">+91 935 3434 5353</li>
            <br>

            <li><i class="fa fa-envelope" title="email"></i>&nbsp;Email</li>
            <li class="text-dark">example@gmail.com</li>
          </ul>
        </div>

      </div>
    </section>
  </div>
  <img src="" alt="Example SVG" style="display: block; width: 200px; margin: 0 auto;">
</body>

</html>
