<?php 


   class SubMenu{
      function __construct(){
         $this->subMenu = $subMenu;
      }

      function getContext(){
         ?>
               <div class="side_bar">
                  <div class="margin">
                  <a class='links' href="aboutus"><i class="fa fa-home"></i> О нас</a>
                  <a class='links' href="news"><i class="fa fa-user"></i> Новости</a>
                  <a class='links' href="galery"><i class="fa fa-cloud"></i> Галлерея</a>
                  <a class='links' href="methods"><i class="fa fa-book"></i> Методика</a>
                  <a class='links' href="parents"><i class="fa fa-laptop"></i> Информация</a>
                  </div>
               </div>
         <?php  
      }
      
   }
