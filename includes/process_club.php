<?php

    require("db_connect.php");


    /*$fname = $mysqli->real_escape_string($_POST['fname']);*/

    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    /*$lname = $mysqli->real_escape_string($_POST['lname']);*/

    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    /*$email = $mysqli->real_escape_string($_POST['email']);*/

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $month = $mysqli->real_escape_string($_POST['month']);

    $day = $mysqli->real_escape_string($_POST['day']);

    /* To account for leap year birthdays */
    $year = 0004;


    $birth = $year."-".$month."-".$day;


    $query = "INSERT INTO scoop_club(id, first_name, last_name, email, birth) 
              VALUES (NULL, '".$fname."', '".$lname."', '".$email."', '".$birth."')";    



    /* Success Message */
    $success = "<div class='alert alert-success' role='alert'>
                    <p class='no-bottom'><strong>Joined!</strong> You are now a member of the Scoop Club.</p>
                </div>";

    /* Failure Message */
    $error = "<div class='alert alert-danger' role='alert'>
                    <p class='no-bottom'><strong>Sorry!</strong> There was an error submitting the form. Please try again...</p>
                </div>";

    $email_error = "<div class='alert alert-danger' role='alert'>
                    <p class='no-bottom'><strong>Error.</strong> Please enter a valid email address</p>
                </div>";



    if ( filter_var($email, FILTER_VALIDATE_EMAIL ) === false) {
        echo "$email_error";
    }
    else if ( $mysqli->query($query) === TRUE ) {
        echo "$success";
    }
    else {
        echo "$error";
    }

    $mysqli->close();
?>