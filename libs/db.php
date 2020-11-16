<?php
session_start();
   class DB{
      private $url;
      private $name;
      private $password;
      private $db_name;

      function __construct(){
         $this->url = "localhost";
         $this->name = "root";
         $this->password = "root";
         $this->db_name = "admin_base";
      }

     function getConnectDB(){
      try {
         $this->mysqli = new mysqli($this->url, $this->name, $this->password, $this->db_name);
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