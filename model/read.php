<?php

require_once("libs/db.php");

   class Read{
      private $arr;
      private $conn;
      private $mysqli;

      function getGallery(){
          $this->conn = new DB();
          $this->mysqli = $this->conn->getConnectDB();
          $this->arr = array();
         $res = $this->mysqli->query("SELECT * FROM gallery");
         while($row = $res->fetch_assoc()){
            array_push($this->arr, $row);
         }$this->mysqli->close();
         return $this->arr;

      }
       function getAboutUs(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM aboutus");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getNews(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM news");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
   }