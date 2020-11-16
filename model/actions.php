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
      private $name;
      private $mysqli;
      function __construct(){

        $this->conn = new DB();
        $this->mysqli = $this->conn->getConnectDB();
       
      }

      function getStudentsList($sel){
          if($sel){
              $arr = [];
              $sql = "SELECT * FROM `students` WHERE  class = '$sel'";
              $result = $this->mysqli->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      array_push($arr, $row);
                  }
              } else {
                  echo "0 results";
              }
              $this->mysqli->close();
              return $arr;
          }else{
              return [];
          }
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
            $name = $arr['name'];
            $kyrgyz_lan = $arr['kyrgyz_lan'];
            $kyrgyz_lit = $arr['kyrgyz_lit'];
            $russian_lan = $arr['russian_lan'];
            $russian_lit = $arr['russian_lit'];
            $english = $arr['english'];
            $chemistry = $arr['chemistry'];
            $physics = $arr['physics'];
            $history = $arr['history'];
            $computer_science = $arr['computer_science'];
            $geometry = $arr['geometry'];
            $algebra = $arr['algebra'];
            $dpm = $arr['dpm'];
            $drawing = $arr['drawing'];
            $human_society = $arr['human_society'];
            $economy = $arr['economy'];
            $geography = $arr['geography'];
            $astronomy = $arr['astronomy'];
            $rating = $arr['rating'];


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
                        header("location: gallery");
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'zero':
                    if ($this->mysqli->query("INSERT INTO `zeroattestationresults`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES ('$name','$class','$kyrgyz_lan','$kyrgyz_lit','$russian_lan','$russian_lit','$english','$chemistry','$physics','$history','$computer_science','$geometry','$algebra','$dpm','$drawing','$human_society','$economy','$geography','$astronomy')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";

                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'year':
                    if ($this->mysqli->query("INSERT INTO `year`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES ('$name','$class','$kyrgyz_lan','$kyrgyz_lit','$russian_lan','$russian_lit','$english','$chemistry','$physics','$history','$computer_science','$geometry','$algebra','$dpm','$drawing','$human_society','$economy','$geography','$astronomy')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'srs':
                    if ($this->mysqli->query("INSERT INTO `srs`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES ('$name','$class','$kyrgyz_lan','$kyrgyz_lit','$russian_lan','$russian_lit','$english','$chemistry','$physics','$history','$computer_science','$geometry','$algebra','$dpm','$drawing','$human_society','$economy','$geography','$astronomy')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";

                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_1':
                    if ($this->mysqli->query("INSERT INTO `quarter_1`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES ('$name','$class','$kyrgyz_lan','$kyrgyz_lit','$russian_lan','$russian_lit','$english','$chemistry','$physics','$history','$computer_science','$geometry','$algebra','$dpm','$drawing','$human_society','$economy','$geography','$astronomy')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;

                case 'ort_1':
                    if ($this->mysqli->query("INSERT INTO `ort_1` (`name1`, `class1`, `rating`)VALUES ('$name', '$class', '$rating')") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'ort_2':
                    if ($this->mysqli->query("INSERT INTO `ort_2` (`name1`, `class1`, `rating`)VALUES ('$name', '$class', '$rating')") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'ort':
                    if ($this->mysqli->query("INSERT INTO `ort` (`name1`, `class1`, `rating`)VALUES ('$name', '$class', '$rating')") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_2':
                    if ($this->mysqli->query("INSERT INTO `quarter_2`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES ('$name','$class','$kyrgyz_lan','$kyrgyz_lit','$russian_lan','$russian_lit','$english','$chemistry','$physics','$history','$computer_science','$geometry','$algebra','$dpm','$drawing','$human_society','$economy','$geography','$astronomy')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
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

                case 'students':
                    if ($this->mysqli->query("INSERT INTO `students` (`name`, `class`)
                  VALUES ('$name', '$class')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
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
                case 'ort_1':
                    if ($this->mysqli->query("UPDATE `ort_1` SET `name`='$name',`class`='$class',`rating`='$rating' WHERE `id`=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: ort_1");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: ort_1");
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
                case 'students':
                    if ($this->mysqli->query("UPDATE `students` SET
                `name` = '$name', `class`='$class' WHERE `id`=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: students");
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: students");
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
                case 'zero':
                    if ($this->mysqli->query("DELETE FROM zeroattestationresults WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: zero");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: zero");
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_1':
                    if ($this->mysqli->query("DELETE FROM quarter_1 WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: quarter_1");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: quarter_1");
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_2':
                    if ($this->mysqli->query("DELETE FROM quarter_2 WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_3':
                    if ($this->mysqli->query("DELETE FROM quarter_3 WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                    }
                    $this->mysqli->close();
                    break;
                case 'quarter_4':
                if ($this->mysqli->query("DELETE FROM quarter_4 WHERE id=$id") === TRUE) {
                    $_SESSION['message'] = "Запись успешно удалена!";
                    $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось удалить запись!";
                    $_SESSION['msg_type'] = "warning";
                }
                $this->mysqli->close();
                break;
                case 'year':
                    if ($this->mysqli->query("DELETE FROM `year` WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                    }
                    $this->mysqli->close();
                    break;
                case 'srs':
                    if ($this->mysqli->query("DELETE FROM srs WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                    }
                    $this->mysqli->close();
                    break;
                case 'ort_1':
                    if ($this->mysqli->query("DELETE FROM ort_1 WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: ort_1");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: ort_1");
                    }
                    $this->mysqli->close();
                    break;
                case 'ort_2':
                    if ($this->mysqli->query("DELETE FROM ort_2 WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: ort_1");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: ort_1");
                    }
                    $this->mysqli->close();
                    break;
                case 'ort':
                    if ($this->mysqli->query("DELETE FROM ort WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: ort_1");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                        header("location: ort_1");
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
                case 'students':
                    if ($this->mysqli->query("DELETE FROM students WHERE id=$id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно удалена!";
                        $_SESSION['msg_type'] = "success";
                        header("location: students");
                    } else {
                        $_SESSION['message'] = "Не удалось удалить запись!";
                        $_SESSION['msg_type'] = "warning";
                    }
                    $this->mysqli->close();
                    break;
            }
            switch ($arr['select']) {
                case '9-a':
                    if ($this->mysqli->query("SELECT * FROM `zeroattestationresults` where ") === TRUE) {
                        header("location: zero");
                    } else {
                        header("location: zero");
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
   
//