<?php
class signup extends Dbh{

    protected function setuser($user_id ,$password, $email){
        $stat = $this ->connect ()->prepare('INSERT into users(users_uid , userrs_pwd ,users_email)
        values (?,?,?);')  ;

        $hashedpwd = password_hash($password , PASSWORD_DEFAULT) ;


        if(!$stat = execute(array($user_id ,$hashedpwd, $email))){
            $stat = null ;
            header("location :../index.php?error= statfailed") ;
            exit() ;
        }
        $stat = null ;
    }



    protected function checkup($user_id , $email){
        $stat = $this ->connect ()->prepare('SELECT users_id from users where users_id = ? or users_email = ?;') ;

        if(!$stat = execute(array($user_id , $email))){
            $stat = null ;
            header("location :../index.php?error= statfailed") ;
            exit() ;
        }

        $resultcheck ;
        if($stat ->count() >0){
            $resultcheck = false ;
        }
        else {
            $resultcheck = true ;
        }
        return $resultcheck ;
    }
}