<?php
   class Routes{
      private $url;
      private $name;
      private $password;
      private $bd_name;

      function __construct(){
         $this->url = "localhost";
         $this->name = "root";
         $this->password = "root";
         $this->bd_name = "licey";
      }

     function getConnectDB(){
      try {
         $this->mysqli = new mysqli($this->url, $this->name, $this->password, $this->bd_name);
         if ($this->mysqli->connect_errno){
           throw new Exception("Conaction failed.");
         }
      } catch (Exception $e) {
            echo $e->getMessage();
            die();
      }
      return $this->mysqli;
     }
      
   }
