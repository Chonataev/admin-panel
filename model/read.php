<?php

require_once("libs/db.php");

   class Read{
      private $arr;
      private $conn;
      private $mysqli;
      function __construct(){
        
         $this->conn = new DB();
         $this->mysqli = $this->conn->getConnectDB();
         $this->arr = array();

      }
      function getGallery(){
         $res = $this->mysqli->query("SELECT * FROM gallery");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         } 
         return $this->arr;
         $this->mysqli->close();
      }
   }