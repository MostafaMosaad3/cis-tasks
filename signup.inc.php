<?php

if(isset($_post["submit"]))
{

//grabbing the data
$user_id = $post_["user_id"] ;
$password = $post_["password"] ;
$password_repeat = $post_["password_repeat"] ;
$email = $post_["email"] ;

}

// instantiate signup controller class
include("../classes/dbh.classes.php") ;
include("../classes/signup.classes.php") ;
include("../classes/signup.controller.classes.php") ;

$signup = new signupcontr ($user_id ,$password ,$password_repeat , $email) ;


// signup error handlers and signup users
$signup ->signupuser() ;


// going back to front page
header("location :../index.php?error= none") ;
