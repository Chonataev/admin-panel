<?php
   require_once("src/controller.php");
   $controller = new Controller();

   if(isset($_REQUEST)){
      $url =  $_REQUEST["url"];
   }

   $arr =[];
   if(isset($_POST)){
       $arr = $_POST;
   }

   $controller->printPage($url,$arr);
