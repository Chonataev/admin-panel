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
       function getStudents(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM students");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getZero(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM zeroattestationresults");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getQuarter_1(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM quarter_1");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getQuarter_2(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM quarter_2");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getQuarter_3(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM quarter_3");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getQuarter_4(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM quarter_4");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getSrs(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM srs");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getYear(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM `year`");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getOrt_2(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM ort_2");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getOrt(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM ort");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;

       }
       function getOrt_1(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->arr = array();
           $res = $this->mysqli->query("SELECT * FROM ort_1");
           while($row = $res->fetch_assoc()){
               array_push($this->arr, $row);
           }$this->mysqli->close();
           return $this->arr;
       }

   }