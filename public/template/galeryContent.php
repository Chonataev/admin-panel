<?php 
   class GaleryContent{
      private $menu;
      private $subMenu;
      private $arr = [];
      private $temp='';
      
      function __construct(){
      }

      function setHtmlBlocks($menu, $subMenu){
         $this->menu = $menu;
         $this->subMenu = $subMenu;
      }

      function getArr($arr){
         $this->arr = $arr;
      }
      function getContext(){
         ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
               <link rel="stylesheet" href="public/css/menu.css">
               <link rel="stylesheet" href="public/css/modal_update.css">
               <title>Licey</title>
            </head>
            <body>
            <div class="aboutMainBlock">   
                     <div class="aboutMenu"><?php $this->menu->getContext(); ?></div>
                     <div class="aboutContentBlock">
                        <div class="aboutSabMenuBloack">
                           <div class="aboutMenu"><?php $this->subMenu->getContext(); ?></div>
                           <div class="main">
                              <div class="content">
                                 <div class="modal">
                                    <button class="btn" id="btn">Добавить</button>
                                    <div class="modal_info">
                                       <div class='close_modal'>
                                          <h1 class="modal_h1">Добавить Информацию</h1>
                                          <button class='close'>x</button>
                                       </div>
                                       <form action="create" class="gallery_form" method="POST">
                                          <input type="hidden" name="type" value="galery">
                                          <p class="modal_p">Введите заголовок</p>
                                          <input class="gallery_input" type="text" name="title" placeholder="Введите заголовок">
                                          <p class="modal_p">Введите ссылку картинки</p>
                                          <input class="gallery_input" type="text" name="url_1" placeholder="Введите ссылку картинки">
                                          <p class="modal_p">Введите текст</p>
                                          <p><textarea class="gallery_input"  name="text"></textarea></p>
                                          <input class="update_btn" name="heraks" type="submit">
                                       </form>
                                    </div>
                                 </div>
                                 
                                 <table>
                                    <tr>
                                       <td class="t1">check</td>
                                       <td class="t2">title</td>
                                       <td class="t3">url</td>
                                       <td class="t5">изменить</td>
                                       <td class="t5">удалить</td>
                                    </tr>
                                    <?php foreach($this->arr as $el):?>
                                    <tr>
                                       <td bg><input type='checkbox'></td>
                                       <td class='t2'><?=$el['title'];?></td>
                                       <td class='t3'><?=$el['url']?></td>
                                       <td class="t5">

                                          <button class="btn_closse" value="<?=$el['id']?>"> изменить</button>
                  
                                       </td>
                                       <td class="t5">
                                          <form action='delete' class="delete" method="POST">
                                             <input type="hidden" name="type" value="galery">
                                             <input type="hidden" name="name" value=<?=$el['id']?>>
                                             <button type="sumbit">Удалить</button>
                                          </form> 
                                       </td>
                                    </tr>
                                    <?endforeach?> 
                                 </table>
                                 <div class="model">
                                             <div class="update_modal">
                                                <div class="close_update">
                                                   <h1 class="modal_h1">Изменить данные</h1>
                                                   <button class="close_btn">x</button>
                                                </div>
                                                <form action="update" class="update" method="POST">
                                                   <?=$this->temp?>
                                                   <input type="hidden" name="type" value="galery">
                                                   <input type="hidden" class="v" name="name">
                                                   <p class="modal_p">Введите заголовок</p>
                                                   <input class="update_input" type="text" name="title" placeholder="Введите заголовок">
                                                   <p class="modal_p">Введите ссылку картинки</p>
                                                   <input class="update_input" type="text" name="url_1" placeholder="Введите ссылку картинки">
                                                   <p class="modal_p">Введите текст</p>
                                                   <p ><textarea class="gallery_input update_area"  name="text"></textarea></p>
                                                   <input class="update_btn" name="heraks" type="submit">
                                                </form>
                                             </div>
                                          </div>
                              </div>
                           </div>
                        </div>
                     <script src="public/scripts/header.js"></script>
                     <script src="public/scripts/menu.js"></script>
                  </div> 
                  <?php
      }
   }

        
    
