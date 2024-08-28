<?php

$servername = "127.0.0.1";
$suser= "root";
$password="";

$con = new mysqli($servername,$suser,$password);

if($con->connect_error){
    die("Connectio failed:" . $con->connection_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS wsforms";
    if ($con->query($sql) === TRUE) {
  
}
$sql1 = "CREATE TABLE IF NOT EXISTS `wsforms`.`users` (
        `id` INT NOT NULL AUTO_INCREMENT , 
        `fname` TEXT NOT NULL,
        `lname` TEXT NOT NULL,
        `email` TEXT NOT NULL,
        `password` TEXT NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE (`email`)
        ) ENGINE = InnoDB;";
    if ($con->query($sql1) === TRUE) {
    }

$sql2 = "CREATE DATABASE IF NOT EXISTS contactforms";
    if ($con->query($sql2) === TRUE) {
    }
    
    
$sql3="CREATE TABLE IF NOT EXISTS `contactforms`.`usermsg` (
        `id` INT NOT NULL AUTO_INCREMENT , 
        `ufname` TEXT NOT NULL, 
        `ulname` TEXT NOT NULL , 
        `uemail` TEXT NOT NULL ,
        `msg` TEXT NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE = InnoDB;";
    if ($con->query($sql3) === TRUE) {
    }
?>