<?php
   require_once("src/controller.php");
   $controller = new Controller();

   if(isset($_REQUEST)){
      $url =  $_REQUEST["url"];
   }

   $controller->printPage($url,$_POST);

?>