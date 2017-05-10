<?php

  require("includes/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Sorbet - Pure Scoop</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body>

    <!-- Product Modals -->
    <?php

      $query = "SELECT id, name, description, category, sub_category, image_url
                FROM scoop_products WHERE sub_category LIKE '%Sorbet%' ORDER BY name";

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

    <!-- Top banner -->
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
          <div class="sidekick-banner" style="background: url(img/sorbet-display.jpg)"></div>
          <div class="carousel-caption">
            <h1>Sorbet</h1>
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
    <!-- END Top banner -->


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
                Our tart, sour, and just-sweet-enough sorbets are full-flavored, very fragrant, and completely refreshing tributes to the fruits that bring them to life. We make each supple one of them with as much pulverized fruit as possible. These never-icy, dairy-free sorbets are as creamy and as balanced as our ice creams and frozen yogurts.
              </p>
            </div>
        </div>

      </div>

    </div>
    <!-- END Intro -->


    <!-- Products -->
    <section class="bg-gray">

      <div class="container bottom-spacing">

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
                      FROM scoop_products WHERE sub_category LIKE '%Sorbet%' ORDER BY name";

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


      <div class="container">

        <div class="row">
          <div class="col-sm-12 text-center">
              <h3 class="header-block-secondary">
                  Toppings
              </h3>
          </div> 
        </div>

        <div id="carousel-toppings" class="carousel toppings slide visible-md-block visible-lg-block hidden-xs hidden-sm" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-toppings" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-toppings" data-slide-to="1"></li>
            <li data-target="#carousel-toppings" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/bananas.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Bananas</h4>

                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/blueberries.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Blueberries</h4>
                    
                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/strawberries.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Strawberries</h4>                    

                  </div>
                </div>

              </div>


            </div>

            <div class="item">
              

              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/brownies.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Brownies</h4>                  

                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/choc-chips.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Chocolate Chips</h4>            

                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/oreo.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Oreo&reg;</h4>      

                  </div>
                </div>

              </div>


            </div>

            <div class="item">
              

              <div class="col-sm-4 text-center">

                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/gummybears.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Gummy Bears</h4>

                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/mnms.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">M&amp;M's&reg;</h4>   

                  </div>
                </div>

              </div>
              <div class="col-sm-4 text-center">
          
                <div class="thumbnail">
                  <div class="product-img product-img-small" style="background-image:url(img/sprinkles.jpg);"></div>
                  <div class="caption">

                    <h4 class="no-top no-bottom h3">Rainbow Sprinkles</h4>

                  </div>
                </div>

              </div>


            </div>
            
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-toppings" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-toppings" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>


        <!-- *************** Carousel Substitute for Mobile *************************** -->

        <div class="toppings row visible-xs-block visible-sm-block hidden-md hidden-lg">

          <div class="col-sm-4 text-center">
          
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/bananas.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Bananas</h4>

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/blueberries.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Blueberries</h4>
                
              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/strawberries.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Strawberries</h4>                    

              </div>
            </div>

          </div>

          <div class="col-sm-4 text-center">
          
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/brownies.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Brownies</h4>                  

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/choc-chips.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Chocolate Chips</h4>            

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/oreo.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Oreo&reg;</h4>      

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">

            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/gummybears.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Gummy Bears</h4>

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/mnms.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">M&amp;M's&reg;</h4>   

              </div>
            </div>

          </div>
          <div class="col-sm-4 text-center">
      
            <div class="thumbnail">
              <div class="product-img product-img-small" style="background-image:url(img/sprinkles.jpg);"></div>
              <div class="caption">

                <h4 class="no-top no-bottom h3">Rainbow Sprinkles</h4>

              </div>
            </div>

          </div>

        </div>

        <!-- *************** END Carousel Substitute for Mobile *************************** -->


      </div>

    </section>
    <!-- Products -->


    <!-- Image nav boxes -->
    <div class="container-fluid">

      <div class="row no-gutter">

        <div class="col-md-6 text-center no-overflow">

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


        <div class="col-md-6 text-center no-overflow">

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