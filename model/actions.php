<?php
   require_once("libs/db.php");
   
  class Actions{
      private $user_name;
      private $password;
      private $login;
      private $class;
      private $title;
      private $url;
      private $text;
      private $conn;
      private $mysqli;
      function __construct(){

        $this->conn = new DB();
        $this->mysqli = $this->conn->getConnectDB();
       
      }

        function getActions($arr)
        {
            $id = $arr["id"];
            $title = $arr["title"];
            $url = $arr["link"];
            $text = $arr["text"];
            $user_name = $arr["user_name"];
            $password = $arr["password"];
            $class = $arr["class"];
            switch ($arr["create"]) {
                case 'gallery':

                    if ($this->mysqli->query("INSERT INTO `gallery` (`title`, `url`)
                  VALUES ('$title', '$url')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                        header("location: gallery");
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        // header("location: gallery");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'aboutUs':
                    if ($this->mysqli->query("INSERT INTO `aboutus` (`title`, `url`, `text`)
                  VALUES ('$title', '$url', '$text')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                        header("location: aboutUs");
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: aboutUs");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'news':
                    if ($this->mysqli->query("INSERT INTO `news`(`title`, `url`, `text`) VALUES ('$title','$url','$text')") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: news");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: news");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
            }
            switch ($arr["update"]) {
                case 'gallery':
                    if ($this->mysqli->query("UPDATE `gallery` SET
                `title` = '$title', `url`='$url' WHERE `id`=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: gallery");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: gallery");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'aboutUs':
                    if ($this->mysqli->query("UPDATE `aboutus` SET `title`='$title',`url`='$url',`text`='$text' WHERE `id`=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: aboutUs");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: aboutUs");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'news':
                    if ($this->mysqli->query("UPDATE `news` SET `title`='$title',`url`='$url',`text`='$text' WHERE `id`=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: news");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: news");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;

            }
            switch ($arr['delete']) {
                case 'gallery':
                    if ($this->mysqli->query("DELETE FROM gallery WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: gallery");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: gallery");
                    }
                    $this->mysqli->close();
                    break;
                case 'aboutUs':
                    if ($this->mysqli->query("DELETE FROM aboutus WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: aboutUs");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: aboutUs");
                    }
                    $this->mysqli->close();
                    break;
                case 'news':
                    if ($this->mysqli->query("DELETE FROM news WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: news");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: news");
                    }
                    $this->mysqli->close();
                    break;

            }
        }
      }

            // case 'news':
            //     $sql = "INSERT INTO news (title, url, text)
            //     VALUES ('$title', '$url', '$text')";
                
            //     if ($this->mysqli->query($sql) === TRUE) {
            //       echo "New record created successfully" . "<br>" . "<a href='news'>вернуться</a>";
            //     } else {
            //       echo "Error: "  . $sql . "<br>" . $this->mysqli->error . "<br>" . "<a href='news'>вернуться</a>";
            //     }
            //     $this->mysqli->close();
            //     break;


            // case 'aboutus':
            //       $sql = "INSERT INTO about_us (title, url, text)
            //       VALUES ('$title', '$url', '$text')";
                  
            //       if ($this->mysqli->query($sql) === TRUE) {
            //         echo "New record created successfully" . "<br>" . "<a href='aboutus'>вернуться</a>";
            //       } else {
            //         echo "Error: "  . $sql . "<br>" . $this->mysqli->error . "<br>" . "<a href='aboutus'>вернуться</a>";
            //       }
            //       $this->mysqli->close();
            //      break;


            // case 'parents':
            //     $sql = "INSERT INTO for_ (title, url, text)
            //     VALUES ('$title', '$url', '$text')";
                
            //     if ($this->mysqli->query($sql) === TRUE) {
            //       echo "New record created successfully" . "<br>" . "<a href='parents'>вернуться</a>";
            //     } else {
            //       echo "Error: "  . $sql . "<br>" .$this->mysqli->error . "<br>" . "<a href='parents'>вернуться</a>";
            //     }
            //     $this->mysqli->close();
            //     break;
//             default:
//                 echo "Error: "  . $sql . "<br>" .$this->mysqli->error . "<br>" . "<a href='parents'>вернуться</a>";
//                 break;
//           }
//         }
//    }
   
// ?>