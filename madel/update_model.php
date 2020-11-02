<?php
   require_once("routes.php");
   class Update{
      private $title;
      private $url;
      private $text;
      private $routes;
      private $mysqli;
      function __construct(){
        
        $this->routes = new Routes();
        $this->mysqli = $this->routes->getConnectDB();
       
      }

      function update($arr){
        $name = $arr['name'];
        $id = $arr['name'];
        $title = $arr["title"];
        $url = $arr["url_1"];
        $text = $arr["text"];
        switch($arr["type"]){
          case 'galery':

              if ($this->mysqli->query("UPDATE `galery` SET `title` = '$title', `url`='$url',`text`='$text' WHERE id=$name") === TRUE) {
                header("location: galery");
              } else {
                echo "Error updating record: " . $this->mysqli->error . "<a href='galery'>вернуться</a>";
              }

              $this->mysqli->close();
              break;
             
          case 'news':

            $sql = "UPDATE `news` SET `title`= $title,`url`=$url,`text`=$text  WHERE id=$id";

            if ($this->mysqli->query($sql) === TRUE) {
              header("location: news");
            } else {
              echo "Error updating record: " . $this->mysqli->error . "<a href='news'>вернуться</a>";
            }

            $this->mysqli->close();
            break;

          case 'parents':

            $sql = "UPDATE `for_` SET `title`= $title,`url`=$url,`text`=$text  WHERE id=$id";

            if ($this->mysqli->query($sql) === TRUE) {
              header("location: parents");            
            } 
            else {
              echo "Error updating record: " . $this->mysqli->error . "<a href='parents'>вернуться</a>";
            }

            $this->mysqli->close();
            break;
          case 'aboutus':

            $sql = "UPDATE `about_us` SET `title`= $title,`url`=$url,`text`=$text  WHERE id=$id";

            if ($this->mysqli->query($sql) === TRUE) {
              echo "Record updated successfully" . "<a href='aboutus'>вернуться</a>";
            } else {
              header("location: aboutus");            }

            $this->mysqli->close();
            break;
          default:
          echo "Error: "  . $sql . "<br>" .$this->mysqli->error . "<br>" . "<a href='aboutus'>вернуться</a>";
          break;
      }

    }

   }