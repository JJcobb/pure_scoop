<?php

  require("includes/db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Admin - Pure Scoop</title>

    <?php
      require("includes/stylesheets.php");
    ?>

  </head>
  <body class="admin">


    <?php
      require("includes/header.php");
    ?>

    <!-- Intro -->
    <div class="section admin-section">

      <div class="container-fluid">

        <div class="row">

            <div class="col-md-8 admin-title">

              <h1 class="no-bottom no-top">
                Products
              </h1>

              <button class="btn btn-default" id="add-new-btn">Add New</button>

            </div>

            <div class="col-md-4">

              <form id="searchProduct">
              
                <div class="form-group no-bottom">

                  <div class="input-group">

                    <label for="searchProduct" class="sr-only">Product Search</label>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>

                  </div>

                </div>

              </form>

            </div>

        </div>

        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">

            <form action="add_new_product.php" method="post" id="add-new-product">

              <div class="form-group">
                <label for="productName" class="sr-only">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" required>
              </div>

              <div class="form-group">
                <label for="category" class="sr-only">Category</label>

                <select name="category" id="category" class="form-control" required>
                  <optgroup label="Category">
                    <option selected disabled hidden value="default">Category</option>
                    <option value="Scoops">Scoops</option>
                    <option value="Sips">Sips</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label for="subCategory" class="sr-only">Sub Category</label>

                <select name="subCategory" id="sub-category" class="form-control" disabled required>
                  <option selected disabled hidden value="default">Sub Category</option>
                  <optgroup label="Scoops">
                    <option value="Ice Cream">Ice Cream</option>
                    <option value="Froyo">Froyo</option>
                    <option value="Sorbet">Sorbet</option>
                  </optgroup>
                  <optgroup label="Sips">
                    <option value="Shakes">Shakes</option>
                    <option value="Smoothies">Smoothies</option>
                    <option value="Frappes">Frappes</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label for="image-url" class="sr-only">Image URL</label>
                <input type="url" class="form-control" id="image-url" name="image" placeholder="Image URL" required>
              </div>

              <div class="form-group">
                <label for="product-description" class="sr-only">Description</label>
                <textarea class="form-control" id="product-description" name="description" placeholder="Description" rows="3" required></textarea>
              </div>

              <div class="form-group">
                <label for="inventory" class="sr-only">Inventory</label>
                <input type="num" min="0" max="100" class="form-control" id="inventory" name="inventory" placeholder="Inventory" required>
              </div>

              <div id="form-buttons">
                <button type="button" class="btn btn-secondary-hollow" id="form-cancel">Cancel</button>
                <button type="submit" class="btn btn-default">Add</button>
              </div>


            </form>

          </div>
        </div>

      </div>

    </div>
    <!-- END Intro -->



    <div class="section no-top">

      <div class="container-fluid">

        <div class="row">

            <div class="col-md-3 filters">



              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Scoops</h3>
                </div>
                <div class="panel-body">
                  
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="icecream" value="Ice Cream"> Ice Cream
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="froyo" value="Froyo"> Froyo
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="sorbet" value="Sorbet"> Sorbet
                    </label>
                  </div>

                </div>
              </div>


              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sips</h3>
                </div>
                <div class="panel-body">
                  
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="shakes" value="Shakes"> Shakes
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="smoothies" value="Smoothies"> Smoothies
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="filter-category" id="frappes" value="Frappes"> Frappés
                    </label>
                  </div>

                </div>
              </div>


              <div class="form-group">

                <label>Inventory</label>
                <p>
                  <span id="inventory-lower"></span> - <span id="inventory-upper"></span>
                </p>

                <div id="inventory-slider"></div>

              </div>


              <!--<div class="form-group">

                <label>Price</label>
                <p>
                  <span id="price-lower"></span> - <span id="price-upper"></span>
                </p>

                <div id="price-slider"></div>

              </div>-->



            </div>
            <!-- End Left Col -->


            <!-- Right Col -->
            <div class="col-md-9">

              <div class="row filtered-content">


                <div class="col-md-12 bottom-spacing-small" id="filter-chips">
                  
                  <div class="chip-filled">Categories</div>

                  <div id="filter-chips-inner"></div>

                </div>


                <div class="col-md-6 bottom-spacing-small" id="inventory-chips-area">
                  
                  <div class="chip-filled">Inventory</div>

                  <div class="chip" id="inventory-chip"></div>

                </div>


                <div class="col-md-6 bottom-spacing-small">

                  <div class="chip-filled">Sorting</div>

                  <select class="chip-select" id="product-sorting">
                    <option value="alpha-a-z">
                      Alphabetically, A-Z
                    </option>
                    <option value="alpha-z-a">
                      Alphabetically, Z-A
                    </option>
                    <option value="inventory-high-low">
                      Inventory, High-Low
                    </option>
                    <option value="inventory-low-high">
                      Inventory, Low-High
                    </option>
                  </select>

                </div>

              </div>


              <div class="row top-spacing-med" id="product-area">


              </div>


            </div>
            <!-- END Right Col -->

        </div>

      </div>

    </div>



    <?php
      require("includes/footer.php");

      echo "<!-- No UI Slider -->
            <script src='js/nouislider.min.js'></script>";

      require("includes/javascript.php");
    ?>

  </body>

  <?php
    $mysqli->close();
  ?>

</html>