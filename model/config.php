<?php
   require_once(__DIR__ . "/database.php");
   session_start();
   $path = "/Perryd-blog/";
   
   $host = "localhost";
   $username = "root";
   $password = "root";
   $database = "blog_db";
//   the connection and in let you have a password
   if(!isset($_SESSION["connection"])) {
   $connection = new Database($host, $username, $password, $database);
   $_SESSION["connection"] = $connection;
   }
   
