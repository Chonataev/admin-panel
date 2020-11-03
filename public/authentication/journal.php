<?php

   class Journal{
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
            <div class="my-4 p-3  bg-white rounded shadow-sm">
               <h4 class="border-bottom border-gray pb-2 mb-4">Уроки</h4>
               <a href="matem" class="btn btn-outline-primary col-sm-6  btn-block">Математика</a>
               <a href="rus_lg" class="btn btn-outline-primary col-sm-6  btn-block">Русский язык</a>
               <a href="rus_lit" class="btn btn-outline-primary col-sm-6  btn-block">Русская итература</a>
               <a href="kyr_lg" class="btn btn-outline-primary col-sm-6  btn-block">Кыргыз тили</a>
               <a href="kyr_lit" class="btn btn-outline-primary col-sm-6  btn-block">Кыргыз адабияты</a>
               <a href="physics" class="btn btn-outline-primary col-sm-6  btn-block">Физика</a>
               <a href="geometry" class="btn btn-outline-primary col-sm-6  btn-block">Геометрия</a>
               <a href="chemistry" class="btn btn-outline-primary col-sm-6  btn-block">Химия</a>
               <a href="biology" class="btn btn-outline-primary col-sm-6  btn-block">Биология</a>
               <a href="dpm" class="btn btn-outline-primary col-sm-6  btn-block">ДПМ</a>
               <a href="psychology" class="btn btn-outline-primary col-sm-6  btn-block">Психология</a>
            </div>
         </div>
      <?
      }
   }


