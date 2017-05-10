<?php

  require("db_connect.php");


  //$name = $_POST['productName'];

  $name = filter_var($_POST['productName'], FILTER_SANITIZE_STRING);


  //$category = $_POST['category'];

  $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);


  //$subCategory = $_POST['subCategory'];

  $subCategory = filter_var($_POST['subCategory'], FILTER_SANITIZE_STRING);


  //$image = $_POST['image'];

  $image = filter_var($_POST['image'], FILTER_SANITIZE_URL);


  //$description = $_POST['description'];

  $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);


  //$inventory = $_POST['inventory'];

  $inventory = filter_var($_POST['inventory'], FILTER_SANITIZE_NUMBER_INT);



  $add_query = "INSERT INTO scoop_products (id, name, description, category, sub_category, image_url, inventory) 
                VALUES(NULL, '$name', '$description', '$category', '$subCategory', '$image', $inventory)";


  if( $inventory < 0 ) {
    echo "<div class='alert alert-danger' id='add-result' role='alert'><strong>Error.</strong> Inventory cannot be a negative number.</div>";
  }
  else if( $mysqli->query($add_query) ) {
    echo "<div class='alert alert-success' id='add-result' role='alert'><strong>$name</strong> has been added to the products.</div>";
  }
  else if( filter_var($inventory, FILTER_VALIDATE_INT) === false ) {
    echo "<div class='alert alert-danger' id='add-result' role='alert'><strong>Error.</strong> Inventory must be a number.</div>";
  }
  else {
    echo "<div class='alert alert-danger' id='add-result' role='alert'><strong>Error.</strong> There was an issue creating this product. Please try again.</div>";
  }



?>