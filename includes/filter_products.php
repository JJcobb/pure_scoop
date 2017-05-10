<?php

  require("db_connect.php");

  $categories = $_GET['categories'];

  $inventory_lower = $_GET['inventory_lower'];
  $inventory_upper = $_GET['inventory_upper'];

  $search = filter_var($_GET['search'], FILTER_SANITIZE_STRING);


  if( $_GET['sorting'] == "alpha-a-z" ){

    $sorting = "name";
  }
  else if( $_GET['sorting'] == "alpha-z-a" ){

    $sorting = "name DESC";
  }
  else if( $_GET['sorting'] == "inventory-high-low" ){

    $sorting = "inventory DESC";
  }
  else if( $_GET['sorting'] == "inventory-low-high" ){

    $sorting = "inventory";
  }
  else {

    $sorting = "name";
  }


   // $query = "SELECT id, name, category, sub_category, image_url, inventory
   //         FROM scoop_products WHERE sub_category IN ($categories) AND inventory>=$inventory_lower AND inventory<=$inventory_upper ORDER BY $sorting";

  $query = "SELECT id, name, category, sub_category, image_url, inventory
           FROM scoop_products WHERE sub_category IN ($categories) AND (name LIKE '$search%' OR name LIKE '% $search%') AND inventory>=$inventory_lower AND inventory<=$inventory_upper ORDER BY $sorting";
    




    $result = $mysqli->query($query);

    while( $row = $result->fetch_object() ){

      require("print_products.php");

    }

?>