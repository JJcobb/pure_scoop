<?php

  require("db_connect.php");


  $id = $_POST['id'];

  $name = "";


  $name_query = "SELECT name FROM scoop_products WHERE id=$id";

  $result = $mysqli->query($name_query);

  while( $row = $result->fetch_object() ){

      $name = $row->name;
  }



  $query = "DELETE FROM scoop_products WHERE id=$id";


  if( $mysqli->query($query) ){
    echo "<div class='alert alert-success alert-center' role='alert'><p><strong>$name</strong> has been deleted.</p></div>";
  }
  else {
    echo "<div class='alert alert-danger alert-center' role='alert'><p><strong>Error.</strong> The product could not be deleted. Please try again.</p></div>";
  }





?>