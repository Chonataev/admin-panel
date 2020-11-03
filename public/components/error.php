<?php

   class Errors{
      private $head;

      function __construct(){
      }

      function setHtmlBlocks($head){
         $this->head = $head;
      }

      function getContext(){
         ?>
          <?$this->head->getContext();?>

         <div class="container justify-content-center col-md-6  pt-5 mt-5">
            <h1 class="display-1 text-center text-danger mt-3">404</h1>
            <h2 class="display-4 text-center mt-4">Страница не найдена.</h2>
            <a href="main" class="d-block text-center  mb-5 pb-5">
               <h4 class="mt-3 mb-5 pb-5">ВЕРНУТЬСЯ НА ГЛАВНОЕ МЕНЮ</h4>
            </a>
         </div>
      <?
      }
   }
?>