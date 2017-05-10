<?php

  require("db_connect.php");


  $query = "SELECT id, name, category, sub_category, image_url, inventory
            FROM scoop_products ORDER BY name";
            

    $result = $mysqli->query($query);

    while( $row = $result->fetch_object() ){

      require("print_products.php");

    }

?>