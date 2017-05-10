<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
      require("includes/config.php");
    ?>

    <title>Scoop Club</title>

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
            <h1>Scoop Club</h1>
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


    <section>

      <div class="container">

        <!--<div class="row">
          <div class="col-sm-12 text-center">
              <h1 class="page-header no-top no-bottom">
                  Scoop Club
              </h1>
              <hr class="page-header-underline">
          </div> 
        </div>-->


        <!-- Intro -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <p class="lead bottom-spacing-small">
                This isn't some lame email list. This is a club made to offer value to you! Receive sweet deals and discounts, check out our happenings and see what new flavors may be coming around soon, and lock up a free treat every year on your birthday.
              </p>
            </div>
        </div>


        <div class="row">

          <div class="col-sm-4 text-center show-sequence">
            <span class="fa fa-users big-icon primary" aria-hidden="true"></span>
            <h3 class="primary">Members-Only Offers</h3>
            <p class="side-padding">
              Deals and discounts not offered to anyone else.
            </p>
          </div>

          <div class="col-sm-4 text-center show-sequence">
            <i class="fa fa-search big-icon primary" aria-hidden="true"></i>
            <h3 class="primary">Sneak Peeks</h3>
              <p class="side-padding">
                New special edition and seasonal flavors are always around the corner.
              </p>
          </div>

          <div class="col-sm-4 text-center show-sequence">
            <i class="fa fa-birthday-cake big-icon primary" aria-hidden="true"></i>
            <h3 class="primary">Free Treat</h3>
            <p class="side-padding">
              Once when you sign up and every year on your birthday.
            </p>
          </div>

        </div>
        <!-- END Intro -->

        <hr>

        <!-- Form -->
        <div class="row">

          <!--<div class="col-sm-12 text-center">
              <h1 class="page-header no-top no-bottom">
                  Join Now
              </h1>
              <hr class="page-header-underline">
          </div>-->

          <div class="col-md-8 col-md-offset-2 text-center">
              
              <form class="contact-club" method="post" action="includes/process_club.php">

                <div class="form-inline form-group">

                  <div class="form-group">
                    <label for="fname" class="sr-only">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                  </div>

                  <div class="form-group">
                    <label for="lname" class="sr-only">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                  </div>

                </div>

                <div class="form-group">
                  <label for="email" class="sr-only">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>

                <div class="form-inline form-group form-group-extra-spacing">

                  <!--<label style="display:block;">Birthday<br> <span style="font-weight:400">(for your free birthday treat)</span></label>-->

                  <label style="display:block;">Birthday (for your free birthday treat)</label>

                  <div class="form-group">
                    <select class="form-control" name="month" id="month" required>
                      <option value="" selected disabled hidden>Month</option>
                      <option value='01'>January</option>
                      <option value='02'>February</option>
                      <option value='03'>March</option>
                      <option value='04'>April</option>
                      <option value='05'>May</option>
                      <option value='06'>June</option>
                      <option value='07'>July</option>
                      <option value='08'>August</option>
                      <option value='09'>September</option>
                      <option value='10'>October</option>
                      <option value='11'>November</option>
                      <option value='12'>December</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="day" id="day" required>
                      <option value="" selected disabled hidden>Day</option>
                      <option value="01">1</option>
                      <option value="02">2</option>
                      <option value="03">3</option>
                      <option value="04">4</option>
                      <option value="05">5</option>
                      <option value="06">6</option>
                      <option value="07">7</option>
                      <option value="08">8</option>
                      <option value="09">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>

                </div>

                <!--<div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" id="accept" value="accept"> I have read and accept the <a href="#">TERMS AND CONDITIONS</a>
                  </label>
                </div>-->

                <button type="submit" class="btn btn-default btn-block btn-lg">Join the Club</button>
              </form>

          </div> 
        </div>
        <!-- END Form -->

      </div>

    </section>


    <?php
      require("includes/footer.php");

      require("includes/javascript.php");
    ?>
  </body>
</html>