<?php 


   class Menu{
      function __construct(){
         $this->menu = $menu;
      }


      function getContext(){
         ?>
               <header class="menu">
                  <div class="container">
                     <div class="first_block">
                        <a href="" class="name">adminpanel</a>
                        <form action="" class="search">
                           <input type="text" class="search_input">
                           <button class="get_search">поиск</button>
                        </form>
                     </div>
                     <div class="second_block">
                        <a href="" class="logout">выйти</a>
                     </div>
                  </div>


               </header>
         <?php
      }

   }
   #function getCreatModal(){
   #   "<div class='modal'>
    #     <button class='btn' id='btn'>Добавить</button>
     #    <div class='modal_info'>
      #      <div class='close_modal'>
       #        <h1 style='color:#fff'>Добавить Информацию</h1>
        #       <button class='close'>x</button>
         #   </div>
          #  <form action='create' class='gallery_form' method='POST'>
           #    <input type='hidden' name='type' value='galery'>
            #   <input class='gallery_input' type='text' name='title' placeholder='Введите заголовок'>
            #   <input class='gallery_input' type='text' name='url_1' placeholder='Введите ссылку картинки'>
            #   <p><textarea class='gallery_input glllery_area'  name='text'></textarea></p>
            #   <input class='отправить' name='heraks' type='submit'>
          #  </form>
        #   </div>
      #   </div>";
   #}
