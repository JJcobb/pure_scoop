<?php

	require("db_connect.php");

	$query = "SELECT inventory
              FROM scoop_products";


  	$highest = 0;
            

    $result = $mysqli->query($query);

    while( $row = $result->fetch_object() ){

		if( $row->inventory > $highest ){

			$highest = $row->inventory;
		}      

    }


    echo $highest;


?>