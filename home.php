<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Pure Scoop</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body>
    <?php
      require("includes/header.php");
    ?>


    <!-- Top Banners -->
    <div id="carousel-top" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-top" data-slide-to="1"></li>
        <li data-target="#carousel-top" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <div class="hero-banner" style="background: url(img/scoops-containers.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Pure Scoop</h1>

          </div>-->
        </div>

        <div class="item">
          <div class="hero-banner" style="background: url(img/toppings-display.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Pure Scoop</h1>

          </div>-->
        </div>

        <div class="item">
          <div class="hero-banner" style="background: url(img/ice-cream-display.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Pure Scoop</h1>

          </div>-->
        </div>
        
      </div>

      <!-- Caption Covering all -->
      <div class="carousel-caption logo-caption">
        <!--<h1>Pure Scoop</h1>-->
        <img src="img/logo-full-more-hollow-text.png" alt="Pure Scoop" width="300">
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-top" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-top" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    <!-- END Top Banners -->


    <!-- Intro -->
    <div class="section">

      <div class="container">

        <!--<div class="row">
          <div class="col-sm-12 text-center">
              <h1 class="page-header no-top no-bottom">
                  Pure Scoop Creamery
              </h1>
              <hr class="page-header-underline">
          </div> 
        </div>-->

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="lead no-bottom">
                We are absolutely devoted to making better desserts and bringing people together. We believe that you can grow a business as a community of people, with artful attention to detail and the customer experience, and get continuously better at the same time. That REALLY great food served perfectly in a sparkling and beautiful space, with attentive and in-the-moment service brings people together and helps them connect. <br> We like to make people feel good.
              </p>
            </div>
        </div>

      </div>

    </div>
    <!-- END Intro -->


    <!-- Image nav boxes -->
    <div class="container-fluid">

      <div class="row no-gutter">

        <div class="col-md-6 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/choc-cones.jpg);">

            <a href="scoops.php">

              <div class="box-caption-still overlay-primary">
                <div class="box-caption-content-still">

                  <h2 class="box-caption-header box-caption-subheader primary text-uppercase show-together">scoops <br> <span>Ice Cream &bullet; Froyo &bullet; Sorbet</span> </h2>

                </div>
              </div>

            </a>

          </div>

        </div>

        <div class="col-md-6 text-center no-overflow zoom-image">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/shakes-close.jpg);">

            <a href="sips.php">

              <div class="box-caption-still overlay-secondary">
                <div class="box-caption-content-still">

                  <h2 class="box-caption-header box-caption-subheader secondary text-uppercase show-together">sips <br> <span>Shakes &bullet; Smoothies &bullet; Frappés</span> </h2>

                </div>
              </div>

            </a>

          </div>

        </div> 

      </div>

    </div>
    <!-- END Image nav boxes -->


    <!-- Club signup -->
    <aside class="bg-primary">

      <div class="container-fluid">

          <div class="row">

            <div class="col-md-10 col-md-offset-1 text-center">
                
              <h3 class="no-top header-block-light">Scoop Club</h3>

              <p class="lead">
                Special offers, insider sneak peeks at new flavors, and a FREE treat are coming your way!
              </p>

              <!--<a class="btn btn-primary btn-lg" href="scoop-club.php" role="button">JOIN NOW</a>-->

            </div>

          </div>

          <div class="row">
            <div class="col-sm-4 col-sm-offset-4 text-center">
                <a class="btn btn-primary btn-lg btn-block" href="scoop-club.php" role="button">JOIN NOW</a>
            </div>
          </div>

      </div>

    </aside>
    <!-- END Club signup -->


    <?php
      require("includes/footer.php");

      require("includes/javascript.php");
    ?>
  </body>
</html>