<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Contact</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body>
    <?php
      require("includes/header.php");
    ?>

    <!-- Top Banner -->
    <div id="carousel-top" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <!--<ol class="carousel-indicators">
        <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-top" data-slide-to="1"></li>
        <li data-target="#carousel-top" data-slide-to="2"></li>
      </ol>-->

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <div class="sidekick-banner" style="background: url(img/scoops-containers.jpg)"></div>
          <div class="carousel-caption">
            <h1>Contact</h1>
          </div>
        </div>
        
      </div>

      <!-- Controls -->
      <!--<a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->

    </div>
    <!-- END Top Banner -->


    <div class="section">

      <div class="container">

        <!--<div class="row">
          <div class="col-sm-12 text-center">
              <h1 class="page-header no-top no-bottom">
                  Contact Us
              </h1>
              <hr class="page-header-underline">
          </div> 
        </div>-->

        <!-- Intro -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="lead">
                Drop us a line. We'd love to hear from you! <br> Or check us out on social media. Feel free to connect and get in touch.
              </p>
            </div>
        </div>
        <!-- END Intro -->

        <hr>

        <!-- Form -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
              
            <form class="contact-club" id="contact" method="post" action="includes/process_email.php">
              <div class="form-group">
                <label for="name" class="sr-only">Your Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
              </div>

              <div class="form-group">
                <label for="email" class="sr-only">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>

              <div class="form-group">
                <label for="subject" class="sr-only">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="6" name="message" id="message" placeholder="Message" required></textarea>
              </div>

              <button type="submit" class="btn btn-default btn-block btn-lg">Send</button>
            </form>

          </div> 
        </div>
        <!-- END Form -->

      </div>

    </div>

    
    <!-- Image nav boxes -->
    <div class="container-fluid">

      <div class="row no-gutter">

        <div class="col-md-6 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/cone-holding.jpg);">

            <a href="scoop-club.php">

              <div class="box-caption-still overlay-primary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header box-caption-subheader box-caption-subheader-condensed primary text-uppercase show-together">Scoop Club <br> <span>Join the club to receive special offers and a <strong>FREE</strong> treat!</span> </h3>

                </div>
              </div>

            </a>

          </div>


        </div>

        <!-- Google map -->
        <div class="col-md-6 text-center no-overflow">

          <div class="box-outer">

            <div class="box-caption-still">
              <div class="box-caption-content-still content-full">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1751.4642286683204!2d-81.20163384202901!3d28.601922995607474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e768670c95f7a5%3A0x20156e0c8bd8cb0d!2s12715+Pegasus+Dr%2C+Orlando%2C+FL+32816!5e0!3m2!1sen!2sus!4v1485621458731" height="400" style="border:0" allowfullscreen></iframe>

              </div>
            </div>

          </div>

        </div>
        <!-- END Google map -->

      </div>

    </div>
    <!-- END Image nav boxes -->


    <?php
      require("includes/footer.php");

      require("includes/javascript.php");
    ?>
  </body>
</html>