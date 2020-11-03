<?php

   class Classes{
      private $head;

      function __construct(){
      }

      function setHtmlBlocks($head){
         $this->head = $head;
      }

      function getContext(){
         ?>
         <?$this->head->getContext();?>
         <div class="container">
            <div class="media d-flex mt-5">
               <a href="main" class="d-flex">
                  <img class="align-self-center mr-2 " style="width:2.4em" src="public/image/left-arrow.webp" alt="" >
                  <h4 class="mt-2">ВЕРНУТЬСЯ</h4>
               </a>
            </div>
            <h3 class="mt-3">Править таблицу "Классы"</h3>
               <div class="">
                  <h5 class="mb-3 mt-2">Редактировать данные</h5>
                  <form class="needs-validation" novalidate="">
                     <div class=" mb-3">
                        <label for="firstName">Класс</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Введите класс" value="" required="">
                     </div>
                     <button class="btn btn-primary mb-2">Создать</button>
                  </form>
               </div>
               <div class="my-4 p-3  bg-white rounded shadow-sm">
               <h4 class="border-bottom border-gray pb-2 mb-4">Классы</h4>
               <a href="9A" class="btn btn-outline-primary col-sm-6  btn-block">9A</a>
               <a href="9B" class="btn btn-outline-primary col-sm-6  btn-block">9B</a>
               <a href="10A" class="btn btn-outline-primary col-sm-6  btn-block">10A</a>
               <a href="10B" class="btn btn-outline-primary col-sm-6  btn-block">10B</a>
               <a href="10C" class="btn btn-outline-primary col-sm-6  btn-block">10C</a>
               <a href="10D" class="btn btn-outline-primary col-sm-6  btn-block">10D</a>
               <a href="11A" class="btn btn-outline-primary col-sm-6  btn-block">11A</a>
               <a href="11B" class="btn btn-outline-primary col-sm-6  btn-block">11B</a>
               <a href="11C" class="btn btn-outline-primary col-sm-6  btn-block">11C</a>
               <a href="11D" class="btn btn-outline-primary col-sm-6  btn-block">11D</a>
            </div>
            </div>
         <div>
      <?
      }
   }


