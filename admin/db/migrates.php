<?php

include("../../functions/function.php");

global $conn;

$sql = '';

//Cities Table.
//$sql .= "CREATE TABLE IF NOT EXISTS cities (
//         `id` INT AUTO_INCREMENT PRIMARY KEY,
//         `name` VARCHAR (255) DEFAULT IS NOT NULL,
//          );";

//$sql .= "CREATE TABLE IF NOT EXISTS category (
//         `id` INT AUTO_INCREMENT PRIMARY KEY,
//         `name` VARCHAR (255) NOT NULL,
//         `name_he` VARCHAR (255) NOT NULL
//          );";

$sql .= "CREATE TABLE IF NOT EXISTS moving_resources (
         `id` INT AUTO_INCREMENT PRIMARY KEY,
         `name` VARCHAR (255) NOT NULL,
         `email` VARCHAR (255) DEFAULT NULL,
         `content` TEXT DEFAULT NULL,
         `image` VARCHAR (255) NOT NULL,
         `category` VARCHAR (10) DEFAULT NULL,
         `city` VARCHAR (10) DEFAULT NULL
          );";
try{
    $query = mysqli_query($conn, $sql);
    if($query){
        echo 'Finished';
    }else{
        echo 'Error';
    }

}catch (Error $exception){
    echo $exception->getMessage();
}
