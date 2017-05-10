<?php

  require("includes/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Scoops - Pure Scoop</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body>

    <!-- Product Modals -->
    <?php

      $query = "SELECT id, name, description, category, sub_category, image_url
                FROM scoop_products WHERE category LIKE '%Scoops%' ORDER BY name";

      $result = $mysqli->query($query);

      while( $row = $result->fetch_object() ){

        echo "\n";
        echo "<div class='modal fade' id='flavor".$row->id."' tabindex='-1' role='dialog' aria-labelledby='flavor-title".$row->id."'>\n";
        echo "\t<div class='modal-dialog modal-lg' role='document'>";
        echo "\t\t<div class='modal-content'>\n";

        echo "\t\t\t<div class='modal-header'>\n";
        echo "\t\t\t\t<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\n";
        echo "\t\t\t\t<h4 class='modal-title' id='flavor-title".$row->id."'>".$row->name."</h4>\n";
        echo "\t\t\t</div>\n";

        echo "\t\t\t<div class='modal-image' style='background: url(".$row->image_url.");'></div>\n";

        echo "\t\t\t<div class='modal-body'>\n";
        echo "\t\t\t\t<p class='modal-description'>".$row->description."</p>\n";
        echo "\t\t\t</div>\n";

        echo "\t\t</div>\n";
        echo "\t</div>\n";
        echo "</div>\n";

      }

    ?>
    <!-- END Product Modals -->


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
          <div class="sidekick-banner" style="background: url(img/cone-holding.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Scoops</h1>

          </div>-->
        </div>

        <div class="item">
          <div class="sidekick-banner" style="background: url(img/froyo-display.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Scoops</h1>

          </div>-->
        </div>

        <div class="item">
          <div class="sidekick-banner" style="background: url(img/sorbet-display.jpg)"></div>
          <!--<div class="carousel-caption">
            <h1>Scoops</h1>

          </div>-->
        </div>
        
      </div>

      <!-- Caption covering all -->
      <div class="carousel-caption">
        <h1>Scoops</h1>

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
                  Scoops
              </h1>
              <hr class="page-header-underline">
          </div> 
        </div>-->

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="lead no-bottom">
                We build our scoops from the ground up with grass-grazed milk from a family of small farms. From that exquisite base, we create flavors using vanilla, cocoa, and bean-to-bar chocolate, and herbs, wildflower honey, whole fruits, and vegetables from local farms and farms throughout the world. Our signature flavors anchor a menu that also includes limited-edition flavors inspired by the seasons, pop culture, culinary history, and world trends.
              </p>
            </div>
        </div>

      </div>

    </div>
    <!-- END Intro -->


    <!-- Image nav boxes -->
    <div class="container-fluid">

      <div class="row no-gutter">

        <div class="col-md-4 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/cone-holding.jpg);">

            <a href="ice-cream.php">

              <div class="box-caption-still overlay-primary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header primary text-uppercase show-together">ice cream</h3>

                </div>
              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/froyo-display.jpg);">

            <a href="frozen-yogurt.php">

              <div class="box-caption-still overlay-secondary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header secondary text-uppercase show-together">froyo</h3>

                </div>
              </div>

            </a>

          </div>

        </div>

        <div class="col-md-4 text-center no-overflow zoom-image">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/sorbet-display.jpg);">

            <a href="sorbet.php">

              <div class="box-caption-still overlay-primary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header primary text-uppercase show-together">sorbet</h3>

                </div>
              </div>

            </a>

          </div>

        </div>

      </div>

    </div>
    <!-- END Image nav boxes -->


    <!-- Products -->
    <section class="bg-gray">

      <div class="container mix-wrapper">

        <div class="row">
          <div class="col-sm-12 text-center">
              <h2 class="no-top header-block">
                  Flavors
              </h2>
          </div> 
        </div>

        <!-- Sorting Controls -->
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="mix-controls btn-group btn-group-justified">
              <div class="btn-group">
                <button type="button" class="filter-btn btn btn-default active" data-filter=".scoop">All</button>
              </div>
              <div class="btn-group">
                <button type="button" class="filter-btn btn btn-default" data-filter=".ice-cream">Ice Cream</button>
              </div>
              <div class="btn-group">
                <button type="button" class="filter-btn btn btn-default" data-filter=".froyo">Froyo</button>
              </div>
              <div class="btn-group">
                <button type="button" class="filter-btn btn btn-default" data-filter=".sorbet">Sorbet</button>
              </div>
            </div>
          </div>
        </div>
        <!-- END Sorting Controls -->

        <div class="row">

          <?php

            $query = "SELECT id, name, description, category, sub_category, image_url
                      FROM scoop_products WHERE category LIKE '%Scoops%' ORDER BY name";

            $result = $mysqli->query($query);

            while( $row = $result->fetch_object() ){

              if($row->sub_category == "Ice Cream"){

                $category_class = "ice-cream";
              }
              else {

                $category_class = strtolower($row->sub_category);
              }

              $description = str_replace("'", "’", $row->description);

              echo "\n";
              echo "<div class='col-sm-4 text-center mix scoop ".$category_class."'>\n";
              echo "\t<div class='thumbnail product' data-toggle='modal' data-target='#flavor".$row->id."' data-content='".$description."'>\n";

              echo "\t\t<h4>\n";
              echo "\t\t\t<span class='label label-default'>".$row->sub_category."</span>\n";
              echo "\t\t</h4>\n";

              echo "\t\t<div class='product-img' style='background-image:url(".$row->image_url.");'></div>\n";

              echo "\t\t<div class='caption'>\n";
              echo "\t\t\t<h4 class='no-top no-bottom h3'>".$row->name."</h4>\n";
              echo "\t\t</div>\n";

              echo "\t</div>\n";
              echo "</div>\n";
            }

          ?>


          <!-- MixItUp interfering with Bootstrap Modals fix -->

          <div class='col-sm-4 text-center mix other' style="display: none;">
            <div class='thumbnail product' data-toggle='modal' data-target='flavor'>

              <h4>
                <span class='label label-default'>Other</span>
              </h4>

              <div class='product-img'></div>

              <div class='caption'>
                <h4 class='no-top no-bottom h3'>Other</h4>
              </div>

            </div>
          </div>

          <!-- END MixItUp / Modals fix -->


        </div>


      </div>

    </section>
    <!-- END Products -->


    <?php
      require("includes/footer.php");

      echo "<!-- MixItUp -->
            <script src='js/mixitup.min.js'></script>";

      require("includes/javascript.php");
    ?>

    <script>
      /* MixItUp Product sorter */

      var mixer = mixitup('.mix-wrapper');

      $('.mix-controls .btn').on('click', function(){

        $('.mix-controls .btn').each(function(){

          $(this).removeClass('active');
        });

        $(this).addClass('active');

      });
    </script>

  </body>

  <?php
    $mysqli->close();
  ?>

</html>