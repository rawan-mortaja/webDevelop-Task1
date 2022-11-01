<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'project';
    // $con = mysqli_connect($host , $user , $pass , $db);
   

    try{
        $con = new PDO("mysql:host=$host;dbname=$db;user=$user;pass=$pass" , $user , $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connection succecssful";
        // $sql = "SELECT * FROM users";
        // $users = $con->query($sql);
        // foreach($users AS $user){
        //   echo "<li>".$user["name"]."</li>";
        // }
      

    }catch(PDOException $error){
        echo $error->getCode();
    }

?>
