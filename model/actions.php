<?php
   require_once("libs/db.php");
   
  class Actions{
      private $class;
      private $type;
      private $image;
      private $text;
      private $conn;
      private $name;
      private $mysqli;

      function getStudentsList($sel){
          if($sel){
            $this->conn = new DB();
            $this->mysqli = $this->conn->getConnectDB();
              $arr = [];
              $sql = "SELECT * FROM `students` WHERE  class = '$sel'";
              $result = $this->mysqli->query($sql);

              if ($result->num_rows > 0) {
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
            function getGalleryCreate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();

                    if ($this->mysqli->query("INSERT INTO `$temp` (`type`, `image`)
                  VALUES ('$this->type', '$this->image')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                        header("location: gallery");
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                            
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
            }

            function getTypeCreate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();

                if ($this->mysqli->query("INSERT INTO `$temp`(`title`, `image`, `text`)
                     VALUES ('$this->title','$this->image','$this->text')") === TRUE) {
                        $_SESSION['message'] = "Запись успешно создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось изменить запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
            }

            function getLessonCreate($temp){

                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("INSERT INTO `$temp`(`name1`,`class1`,`kyrgyz_lan`,`kyrgyz_lit`,`russian_lan`,`russian_lit`,`english`,`chemistry`,`physics`,`history`,`computer_science`,`geometry`,`algebra`,`dpm`,`drawing`,`human_society`,`economy`,`geography`,`astronomy`)VALUES 
                ('$this->name','$this->class','$this->kyrgyz_lan','$this->kyrgyz_lit','$this->russian_lan','$this->russian_lit','$this->english','$this->chemistry','$this->physics','$this->history','$this->computer_science','$this->geometry','$this->algebra','$this->dpm','$this->drawing','$this->human_society','$this->economy','$this->geography','$this->astronomy')") === TRUE) {
                    $_SESSION['message'] = "Запись была создана!";
                    $_SESSION['msg_type'] = "success";

                } else {
                    $_SESSION['message'] = "Не удалось создать запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                }
                $this->mysqli->close();
            }


            function getOrtCreate($temp){

                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("INSERT INTO `$temp` (`name1`, `class1`, `rating`)VALUES ('$this->name', '$this->class', '$this->rating')") === TRUE) {
                    $_SESSION['message'] = "Запись успешно изменена!";
                    $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось изменить запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                }
                $this->mysqli->close();
            }

            function getStudentsCreate($temp){
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("INSERT INTO `$temp` (`name`, `class`)
                  VALUES ('$this->name', '$this->class')") === TRUE) {
                        $_SESSION['message'] = "Запись была создана!";
                        $_SESSION['msg_type'] = "success";
                    } else {
                        $_SESSION['message'] = "Не удалось создать запись!";
                        $_SESSION['msg_type'] = "warning";
                        echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
            }

            //ИЗМЕНЕИЕ ЭЛЕМЕНТА

            function getGalleryUpdate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("UPDATE `$temp` SET
                `type` = '$this->type', `image`='$this->image' WHERE `id`=$this->id") === TRUE) {
                        $_SESSION['message'] = "Запись успешно изменена!";
                        $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось изменить запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                    }
                    $this->mysqli->close();
            }

            function getTypeUpdate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("UPDATE `$temp` SET
                `title`='$this->title',`image`='$this->image',`text`='$this->text' WHERE `id`=$this->id") === TRUE) {
                    $_SESSION['message'] = "Запись успешно изменена!";
                    $_SESSION['msg_type'] = "success";
               } else {
                   $_SESSION['message'] = "Не удалось изменить запись!";
                   $_SESSION['msg_type'] = "warning";
                   echo $this->mysqli->error;
               }
               $this->mysqli->close();
            }
            function getLessonUpdate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("UPDATE `$temp` SET `name1`='$this->name',`class1`='$this->class',`kyrgyz_lan`='$this->kyrgyz_lan',`kyrgyz_lit`='$this->kyrgyz_lit',`russian_lan`='$this->russian_lan,`russian_lit`='$this->russian_lit',
                `english`='$this->english',`chemistry`='$this->chemistry',`physics`='$this->physics',`history`='$this->history',`computer_science`='$this->computer_science',`geometry`='$this->geometry',
                `algebra`='$this->algebra',`dpm`='$this->dpm',`drawing`='$this->drawing',`human_society`='$this->human_society',`economy`='$this->economy',`geography`='$this->geography',`astronomy`='$this->astronomy'") === TRUE) {
                    $_SESSION['message'] = "Запись была создана!";
                    $_SESSION['msg_type'] = "success";

                } else {
                    $_SESSION['message'] = "Не удалось создать запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                }
                $this->mysqli->close();
            }

            function getStudentsUpdate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("UPDATE `$temp` SET
                `name` = '$this->name', `class`='$this->class' WHERE `id`=$this->id") === TRUE) {
                    $_SESSION['message'] = "Запись успешно изменена!";
                    $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось изменить запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                }
                $this->mysqli->close();
            }

            function getOrtUpdate($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("UPDATE `$temp` SET `name`='$this->name',`class`='$this->class',`rating`='$$this->rating' WHERE `id`=$this->id") === TRUE) {
                    $_SESSION['message'] = "Запись успешно изменена!";
                    $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось изменить запись!";
                    $_SESSION['msg_type'] = "warning";
                    echo $this->mysqli->error;
                }
                $this->mysqli->close();
            }

            //УДАЛЕНИЕ ЭЛЕМЕНТА

            function getTypeDelete($temp)
            {
                $this->conn = new DB();
                $this->mysqli = $this->conn->getConnectDB();
                if ($this->mysqli->query("DELETE FROM $temp WHERE id=$this->id") === TRUE) {
                    $_SESSION['message'] = "Запись успешно удалена!";
                    $_SESSION['msg_type'] = "success";
                } else {
                    $_SESSION['message'] = "Не удалось удалить запись!";
                    $_SESSION['msg_type'] = "warning";
                }
                $this->mysqli->close();
            }

        function getActions($arr)
        {

                var_dump($arr);
                $this->id = $arr['id'];
                $this->title = $arr['title'];
                $this->text = $arr['text'];
                $this->url = $arr["link"];
                $this->type = $arr["type_in"];
                $this->class = $arr["class"];
                $this->name = $arr['name'];
                $this->kyrgyz_lan = $arr['kyrgyz_lan'];
                $this->kyrgyz_lit = $arr['kyrgyz_lit'];
                $this->russian_lan = $arr['russian_lan'];
                $this->russian_lit = $arr['russian_lit'];
                $this->english = $arr['english'];
                $this->chemistry = $arr['chemistry'];
                $this->physics = $arr['physics'];
                $this->history = $arr['history'];
                $this->computer_science = $arr['computer_science'];
                $this->geometry = $arr['geometry'];
                $this->algebra = $arr['algebra'];
                $this->dpm = $arr['dpm'];
                $this->drawing = $arr['drawing'];
                $this->human_society = $arr['human_society'];
                $this->economy = $arr['economy'];
                $this->geography = $arr['geography'];
                $this->astronomy = $arr['astronomy'];
                $this->rating = $arr['rating'];
                if(!empty($_FILES['image']['tmp_name']))
                    $this->image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

            switch ($arr["create"]) {
                case 'gallery': 
                    $this->getGalleryCreate('gallery');
                    break;
                
                case 'aboutUs':
                    $this->getTypeCreate('aboutus');
                break;
                case 'news':
                    $this->getTypeCreate('news');
                break;
                case 'zero':
                    $this->getLessonCreate("zero");
                    break;
                case 'year':
                    $this->getLessonCreate("year");
                    break;
                case 'srs':
                    $this->getLessonCreate("srs");
                    break;
                case 'quarter_1':
                    $this->getLessonCreate("quarter_1");
                    break;
                case 'quarter_2':
                    $this->getLessonCreate("quarter_2");
                    break;
                case 'ort':
                    $this->getOrtCreate('ort');
                    break;
                case 'ort_1':
                    $this->getOrtCreate('ort_1');
                    break;
                case 'ort_2':
                    $this->getOrtCreate('ort_2');
                    break;
                case 'students':
                    $this->getStudentsCreate('students');
                    break;
            }
            switch ($arr["update"]) {
                case 'gallery':
                    $this->getGalleryUpdate("gallery");
                break;

                case 'aboutus':
                    $this->getTypeUpdate("aboutus");
                break;
                case 'news':
                    $this->getTypeUpdate("news");
                break;
                case 'ort':
                    $this->getOrtUpdate('ort');
                    break;
                case 'ort_1':
                    $this->getOrtUpdate('ort_1');
                    break;
                case 'ort_2':
                    $this->getOrtUpdate('ort_2');
                break;
                case 'students':
                    $this->getStudentsUpdate('students');
                    break;

            }
            switch ($arr['delete']) {
                case 'gallery':
                    $this->getTypeDelete("gallery");
                    break;
                case 'zero':
                    $this->getTypeDelete("zero");
                    break;
                case 'quarter_1':
                    $this->getTypeDelete("quarter_1");
                    break;
                case 'quarter_2':
                    $this->getTypeDelete("quarter_2");
                    break;
                case 'quarter_3':
                    $this->getTypeDelete("quarter_3");
                    break;
                    $this->getTypeDelete("quarter_3");
                break;
                case 'year':
                    $this->getTypeDelete("year");
                    break;
                case 'srs':
                    $this->getTypeDelete("srs");
                    break;
                case 'ort_1':
                    $this->getTypeDelete("ort_1");
                    break;
                case 'ort_2':
                    $this->getTypeDelete("ort_2");
                case 'ort':
                    $this->getTypeDelete("ort");
                    break;
                case 'aboutUs':
                    $this->getTypeDelete("aboutus");
                    break;
                case 'news':
                    $this->getTypeDelete("news");
                    break;
                case 'students':
                    $this->getTypeDelete("students");
                    break;
            }
            switch ($arr['select']) {
                case '9-a':
                    if ($this->mysqli->query("SELECT * FROM `zeroattestationresults` where ") === TRUE) {
                    } else {
                    }
                    $this->mysqli->close();
                    break;
            }
        }
  }

          