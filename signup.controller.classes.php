<?php

class signupcontr extends signup{

    private $user_id ;
    private $password ;
    private $password_repeat ;
    private $email ;


    public function __construct($user_id ,$password ,$password_repeat , $email){
        $this ->user_id = $user_id ;
        $this ->password = $password ;
        $this ->password_repeat = $password_repeat ;
        $this ->email = $email ;

    }


    public function signupuser(){
        if ($this -> emptyinput == false){
            header("location :../index.php?error= emptyinput") ;
            exit() ;
        }

        if ($this -> invalid_username_id == false){
            header("location :../index.php?error= invalid_username_id") ;
            exit() ;
        }

        if ($this -> invalid_email == false){
            header("location :../index.php?error= invalid email") ;
            exit() ;
        }

        if ($this -> pwd_match == false){
            header("location :../index.php?error= pwd match") ;
            exit() ;
        }

        if ($this -> uidtakencheck == false){
            header("location :../index.php?error= uidtakencheck") ;
            exit() ;
        }
    }

    $this ->setuser($this ->user_id ,$this ->password , $this ->email ){
        
    }


    private function emptyinput(){
        $result ;
        if(empty($this ->user_id) || empty($this ->password) || 
        empty($this ->password_repeat) ||empty($this ->email) ){

            $result = false ;
        }
        else{
            $result = true ;
        }
        return $result ;
    }


    private function invalid_username_id(){
        $result ;
        if(!preg_match("/^[a-zA-z0-9]*$" , $this->user_id)){

            $result = false ;
        }
        else{
            $result = true ;
        }
        return $result ;
        }
    }


    private function invalid_email(){
        $result ;
        if(!filter_var($this ->email ,FILTER_VALIDATE_EMAIL)){

            $result = false ;
        }
        else{
            $result = true ;
        }
        return $result ;
    }


    private function pwd_match(){
        $result ;
        if($this ->password !== $this ->password_repeat){

            $result = false ;
        }
        else{
            $result = true ;
        }
        return $result ;
    }


    private function uidtakencheck(){
        $result ;
        if(!$this ->checkup($this ->user_id ,$this ->email)){

            $result = false ;
        }
        else{
            $result = true ;
        }
        return $result ;
    }


