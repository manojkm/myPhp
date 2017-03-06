<?php require_once ("includes/init.php");?>

<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 6/3/17
 * Time: 10:12 PM
 */


if ($session->is_signed_in()){

    redirect("index.php");

}

if (isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password  = trim($_POST['password']);

//Method to check database user

    $user_found = User::verify_user($username,$password);

    if ($user_found){

        $session->login($user_found);
        redirect("index.php");
    }

    else {

        $the_message = "Your passord or username are incorrect";
    }

}


else {
    $username ="";
    $password ="";
}



?>