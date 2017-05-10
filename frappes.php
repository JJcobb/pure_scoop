<?php

  require("includes/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Frappés - Pure Scoop</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body>

    <!-- Product Modals -->
    <?php

      $query = "SELECT id, name, description, category, sub_category, image_url
                FROM scoop_products WHERE sub_category LIKE '%Frappes%' ORDER BY name";

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
          <div class="sidekick-banner" style="background: url(img/frappe-close.jpg)"></div>
          <div class="carousel-caption">
            <h1>Frappés</h1>
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


    <!-- Intro -->
    <div class="section">

      <div class="container">

        <!--<div class="row">
          <div class="col-sm-12 text-center">
              <h1 class="page-header no-top no-bottom">
                  Ice Cream
              </h1>
              <hr class="page-header-underline">
          </div> 
        </div>-->

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="lead no-bottom">
                What do you get when you put the delicious flavor of pure icecream and coffee together? The greatest afternoon break of all time! Try one of our three delicious frappés for your next pick-me-up and kiss the break room goodbye!
              </p>
            </div>
        </div>

      </div>

    </div>
    <!-- END Intro -->


    <!-- Products -->
    <section class="bg-gray">

      <div class="container">

        <div class="row">
          <div class="col-sm-12 text-center">
              <h2 class="no-top header-block">
                  Flavors
              </h2>
          </div> 
        </div>

        <div class="row">

          <?php

          $query = "SELECT id, name, description, category, sub_category, image_url
                      FROM scoop_products WHERE sub_category LIKE '%Frappes%' ORDER BY name";

            $result = $mysqli->query($query);

            while( $row = $result->fetch_object() ){

              $description = str_replace("'", "’", $row->description);

              echo "\n";
              echo "<div class='col-sm-4 text-center'>\n";
              echo "\t<div class='thumbnail product' data-toggle='modal' data-target='#flavor".$row->id."' data-content='".$description."'>\n";

              echo "\t\t<div class='product-img' style='background-image:url(".$row->image_url.");'></div>\n";

              echo "\t\t<div class='caption'>\n";
              echo "\t\t\t<h4 class='no-top no-bottom h3'>".$row->name."</h4>\n";
              echo "\t\t</div>\n";

              echo "\t</div>\n";
              echo "</div>\n";
            }

          ?>

         
        </div>
       
      </div>

    </section>
    <!-- END Products -->


    <!-- Image nav boxes -->
    <div class="container-fluid">

      <div class="row no-gutter">

        <div class="col-md-6 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/oreo-shake.jpg);">

            <a href="shakes.php">

              <div class="box-caption-still overlay-primary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header primary text-uppercase show-together">shakes</h3>

                </div>
              </div>

            </a>

          </div>

        </div>


        <div class="col-md-6 text-center no-overflow">

          <div class="box-outer box-outer-zoom" style="background-image: url(img/smoothie-close.jpg);">

            <a href="smoothies.php">

              <div class="box-caption-still overlay-secondary">
                <div class="box-caption-content-still">

                  <h3 class="box-caption-header secondary text-uppercase show-together">smoothies</h3>

                </div>
              </div>

            </a>

          </div>

        </div>

      </div>

    </div>
    <!-- END Image nav boxes -->


    <?php
      require("includes/footer.php");

      require("includes/javascript.php");
    ?>
  </body>

  <?php
    $mysqli->close();
  ?>
  
</html>