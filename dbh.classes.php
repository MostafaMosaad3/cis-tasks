<?php
class Dbh {

    protected function connect(){
        
            $servername = "localhost"; 
            $username = "root"; 
            $password = "";
            
            $database = "ooplogin";
            
             // Create a connection 
            $conn = mysqli_connect($servername, 
                $username, $password, $database);

                if($conn) {
                    echo "success"; 
                } 
                else {
                    die("Error". mysqli_connect_error()); 
                } 
        } 

}