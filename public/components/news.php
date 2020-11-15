<?php
require_once ("libs/db.php");
   class News{
      private $head;
       private $arr = [];
       private $array;
       function __construct(){
           $this->conn = new DB();
               $this->mysqli = $this->conn->getConnectDB();
           $this->array = array();
       }

       function getArr($arr){
           $this->arr = $arr;
       }

      function setHtmlBlocks($head){
         $this->head = $head;
      }


       function getContext(){
           ?>
           <?$this->head->getContext();


           if (isset($_POST["edit"])) {
               $id = $_POST['id'];
               $title = $_POST['title'];
               $url = $_POST['link'];
               $text = $_POST['text'];
               $update = false;
           } else {
               $id = '';
               $title = '';
               $url = '';
               $update = true;
           }
          ?>
          <?php

          if(isset($_SESSION['message'])):?>
          <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
              <?php

              echo $_SESSION['message'];
              unset($_SESSION['message']);?>
    </div><?php
             endif;  ?>
         <div class="container">
            <div class="media d-flex mt-5">
               <a href="main" class="d-flex">
                  <img class="align-self-center mr-2 " style="width:2.4em" src="public/image/left-arrow.webp" alt="" >
                  <h4 class="mt-2">ВЕРНУТЬСЯ</h4>
               </a>
            </div>
             <script>
                 if ( window.history.replaceState ) {
                     window.history.replaceState( null, null, window.location.href );
                 }
             </script>
            <h3 class="mt-3">Править таблицу новостей</h3>
               <div class="">
                  <h5 class="mb-3 mt-2">Редактировать данные</h5>
                  <form class="needs-validation" novalidate="" action="actions" method="POST">
                      <div class=" mb-3">
                          <label for="firstName">Заголовок</label>
                          <input type="text" class="form-control" name="title" id="firstName" placeholder="Введите заголовок" value="<?=$title?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="lastName">Url</label>
                          <input type="text" class="form-control" name="link" id="lastName" placeholder="Введите ссылку" value="<?=$url?>" required>
                      </div>
                      <div class="mb-3">
                          <label for="firstName">Текст</label><input size="10000" type="text" class="form-control" name="text" id="text" placeholder="Введите ссылку" value="<?=$text?>" required>
                      </div>
                      <?php
                      if($update === false):?>
                          <button class="btn btn-info mb-2" type="submit">Изменить</button>
                          <input type="hidden" name="update" value="news">
                          <input type="hidden" name="id" value=<?=$id?>>
                      <?php else:?>
                          <button class="btn btn-primary mb-2" type="submit">Создать</button>
                          <input type="hidden" name="create" value="news">
                      <?endif?>
                  </form>
               </div>

               
               <table class="table mt-5">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Url</th>
                        <th scope="col">Text</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php foreach($this->arr as $el):?>
                      <tr>
                          <th scope="row"><?=$el['id']?></th>
                          <td><?=$el['title']?></td>
                          <td><?=$el['url']?></td>
                          <td><?=$el['text']?></td>
                          <td><form action="news" method="POST">
                                  <input type="hidden" name="id" value=<?=$el['id']?>>
                                  <input type="hidden" name="title" value=<?=$el['title']?>>
                                  <input type="hidden" name="link" value=<?=$el['url']?>>
                                  <input type="hidden" name="text" value=<?=$el['text']?>>
                                  <button name="edit" class="btn btn-primary">edit</button>
                              </form></td>
                          <td>
                              <form action='actions' class="delete" method="POST">
                                  <input type="hidden" name="delete" value="news">
                                  <input type="hidden" name="id" value=<?=$el['id']?>>
                                  <button type="submit" class="btn btn-danger">Удалить</button>
                              </form>
                          </td>
                      </tr>
                  <?endforeach?>
                  </tbody>
               </table>
               
            </div>
         <div>
      <?
      }
   }
?>