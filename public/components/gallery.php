<?php
include_once "libs/db.php"; 
   class Gallery{
      private $arr = [];
      function __construct(){
         $this->conn = new DB();
         $this->mysqli = $this->conn->getConnectDB();
         $this->array = array();
      }

      function setHtmlBlocks($head){
         $this->head = $head;
      }

      function getArr($arr){
         $this->arr = $arr;
      }
      
      function getContext(){
         ?>
         <?$this->head->getContext();?>
         <div class="container">
         <?php 
            if(isset($_POST["edit"])){
               $id=$_POST['id'];
               $type=$_POST['type'];
               $update = false;
            }
            else{
               $id='';
               $type='Тематика';
               $update = true;
            }
         ?>
         <?php if(isset($_SESSION['message'])):?>
               <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                  <?php

                  echo $_SESSION['message'];
                  unset($_SESSION['message']);

                  ?>
               </div>
            <?php  endif ?>
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
            <h3 class="mt-3">Править таблицу "Галерея"</h3>
               <div class="">
                  <form class="needs-validation" novalidate="" action="gallery" method="POST" enctype="multipart/form-data">
                     <div class=" mb-3">
                        <h4 class="font-weight-normal pt-1 pb-1" for="firstName">Заголовок</h4>
                        <select class="custom-select col-4" value="<?=$type?>" name="type_in">>
                           <option><?=$type?></option>
                           <option>1-сентября</option>
                           <option>День учителя</option>
                           <option>Новый год</option>
                           <option>23-феврфля</option>
                           <option>8-марта</option>
                           <option>21-марта</option>
                           <option>9-мая</option>
                           <option>Последний звонок</option>
                        </select>
                     </div>
                     <h4 class="font-weight-normal pt-1 pb-2" for="firstName">Загрузить изображение</h4>
                        <input type="file" name="image">
                     <?php 
                     if($update === false):?>
                        <button class="btn btn-info mb-2" type="submit">Изменить</button>
                        <input type="hidden" name="update" value="gallery">
                        <input type="hidden" name="id" value=<?=$id?>>
                     <?php else:?>
                        <div><button class="btn btn-primary mb-2 mt-4" type="submit">Создать</button>
                        <input type="hidden" name="create" value="gallery"></div>
                     <?endif?>
                  </form>
               </div>

               
               <table class="table mt-5">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Image</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                     </tr>
                  </thead>
                  <tbody>     
                     <?php foreach($this->arr as $el):
                     $s =  base64_encode($el['image']); ?>
                     <tr class="align-middle  align-items-center">
                        <th  scope="row"><?=$el['id'];?></th>
                        <td><?=$el['type'];?></td>
                        <td><img style="width:70px; height:60px" src="data:image/jpeg;base64, <?=$s?>"></td> 
                        <td><form action="gallery" method="POST">
                                 <input type="hidden" name="id" value=<?=$el['id']?>>
                                 <input type="hidden" name="type" value=<?=$el['type']?>>
                              <button name="edit" class="btn btn-primary">edit</button>
                        </form></td>
                        <td>
                           <form action='gallery' class="delete" method="POST">
                              <input type="hidden" name="delete" value="gallery">
                              <input type="hidden" name="id" value=<?=$el['id']?>>
                              <button type="sumbit" class="btn btn-danger">Удалить</button>
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