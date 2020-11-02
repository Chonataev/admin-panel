<?php 
require_once("routes.php");

class Delete{
  private $title;
  private $url;
  private $text;
  private $routes;
  private $mysqli;
  function __construct(){
     $this->routes = new Routes();
     $this->mysqli = $this->routes->getConnectDB();
  }
     
    function delete($arr){
          $id = $arr['name'];
          switch ($arr['type']) {
            case 'galery':
              $sql = "DELETE FROM galery WHERE id=$id";
              if ($this->mysqli->query($sql) === TRUE) {
                echo "Record deleted successfully" . "<a href='galery'>вернуться</a>";
              } else {
                echo "Error deleting record: " . $this->mysqli->error . "<a href='galery'>вернуться</a>";
              }
                $this->mysqli->close();
                break;

              case 'news':
              $sql = "DELETE FROM news WHERE id=$id";
              if ($this->mysqli->query($sql) === TRUE) {
                echo "Record deleted successfully" . "<a href='news'>вернуться</a>";
              } else {
                echo "Error deleting record: " . $this->mysqli->error . "<a href='news'>вернуться</a>";
              }
                $this->mysqli->close();
                break;

            case 'aboutus':
              $sql = "DELETE FROM about_us WHERE id=$id";
              if ($this->mysqli->query($sql) === TRUE) {
                echo "Record deleted successfully" . "<a href='aboutus'>вернуться</a>";
              } else {
                echo "Error deleting record: " . $this->mysqli->error . "<a href='aboutus'>вернуться</a>";
              }
                $this->mysqli->close();
                break;

            case 'parents':
              $sql = "DELETE FROM for_ WHERE id=$id";
              if ($this->mysqli->query($sql) === TRUE) {
                echo "Record deleted successfully" . "<a href='parents'>вернуться</a>";
              } else {
                echo "Error deleting record: " . $this->mysqli->error . "<a href='parents'>вернуться</a>";
              }
                $this->mysqli->close();
                break; 

            default:
            echo "Error deleting record: " . $this->mysqli->error . "<a href='galery'>вернуться</a>";
              break;
          }
        }
    
}
?>