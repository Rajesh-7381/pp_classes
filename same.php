<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ... Your existing code ... -->
  <script>
    $(document).ready(function() {
      $('.register-link').click(function(event) {
        event.preventDefault(); // Prevent the default behavior of the link
        
        var iframe = $('<iframe>', {
          src: 'register.php',
          frameborder: 0,
          scrolling: 'no',
          width: '100%',
          height: '100%'
        });
        
        $('.content').html(iframe); // Replace the content of .content with the iframe
      });

      $('.gallery-link').click(function(event) {
        event.preventDefault(); // Prevent the default behavior of the link
        
        var iframe = $('<iframe>', {
          src: 'gallery.php',
          frameborder: 0,
          scrolling: 'no',
          width: '100%',
          height: '100%'
        });
        
        $('.content').html(iframe); // Replace the content of .content with the iframe
      });

      $('.testimonial-link').click(function(event) {
        event.preventDefault(); // Prevent the default behavior of the link
        
        var iframe = $('<iframe>', {
          src: 'testimonial.php',
          frameborder: 0,
          scrolling: 'no',
          width: '100%',
          height: '100%'
        });
        
        $('.content').html(iframe); // Replace the content of .content with the iframe
      });

      $('.enquiry-link').click(function(event) {
        event.preventDefault(); // Prevent the default behavior of the link
        
        var iframe = $('<iframe>', {
          src: 'enquiry.php',
          frameborder: 0,
          scrolling: 'no',
          width: '100%',
          height: '100%'
        });
        
        $('.content').html(iframe); // Replace the content of .content with the iframe
      });
    });
  </script>
</head>

<body>
  <!-- ... Your existing code ... -->

  <main class="content">
    <div class="container">
      <h1 style="text-align: center;">Welcome to Our Tutorial</h1>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- ... Your existing carousel code ... -->
    </div>

    <!-- ... Your existing content ... -->

    <!-- Add links with corresponding classes to open the respective pages -->
    <a class="gallery-link" href="#">Gallery</a>
    <a class="testimonial-link" href="#">Testimonials</a>
    <a class="enquiry-link" href="#">Enquiry/Contact</a>
  </main>

  <!-- ... Your existing footer ... -->
</body>

</html>
