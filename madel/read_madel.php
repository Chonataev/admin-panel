<?php
   require_once("madel/routes.php");

   class Read{
      private $arr;
      private $routes;
      private $mysqli;
      function __construct(){
        
         $this->routes = new Routes();
         $this->mysqli = $this->routes->getConnectDB();
         $this->arr = array();

      }
      
      function getAboutUs(){
         $res = $this->mysqli->query("SELECT * FROM about_us");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
      }

      function getNews(){
         $res = $this->mysqli->query("SELECT * FROM news");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
      }

      function getGalery(){
         $res = $this->mysqli->query("SELECT * FROM galery WHERE id>1");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
         $this->mysqli->close();
      }
      
      function getMetods(){
         $res = $this->mysqli->query("SELECT * FROM methods");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
         $this->mysqli->close();
      }

      function getTeachers(){
         $res = $this->mysqli->query("SELECT * FROM teachers");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
         $this->mysqli->close();
      }

      function getForParents(){
         $res = $this->mysqli->query("SELECT * FROM for_");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
         $this->mysqli->close();
      }

    }
   
?>