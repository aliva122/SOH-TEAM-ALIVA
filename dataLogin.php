<?php
    // db connection
    include "db_conn.php";

    // session start!
    session_start();

    // declare variables!
    $email = "";
    $password = "";
    $encPassword = "";
    $dbPassword = "";
    $salt = "";

    // getting form data!
    if(isset($_POST['email'])){

        $email = $_POST['email'];
   
    }

    if(isset($_POST['password'])){
   
        $password = $_POST['password'];
   
    }

    if($email != "" && $password != "" ){
        // if user already exists!
        $checkUser = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkUserRes = mysqli_query($conn,$checkUser) or die(mysqli_error($conn));
        
        if(mysqli_num_rows($checkUserRes) > 0) {

            $checkUserRow = mysqli_fetch_assoc($checkUserRes);
            $dbPassword = $checkUserRow['password'];
            $salt = $checkUserRow['salt'];

            // password encrypted!
            $encPassword = md5(md5($password).md5($salt));

            if($encPassword == $dbPassword) {

                // user is logged in now!
                $_SESSION['email'] = $email; //saving session email
                header('Location: ./welcome.php');

            } else {

                header('Location: ../index.php?message=Password invalid!');

            }

        } else {

            // user does not exist!
            header("Location: ../index.php?message=User does not exist.");

        }
    } else {

        header('Location: ../index.php?message=Please fill all the details!');

    }
?>