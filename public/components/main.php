<?php

   class Main{
      private $head;

       function __construct(){
           $this->conn = new DB();
           $this->mysqli = $this->conn->getConnectDB();
           $this->array = array();
       }

      function setHtmlBlocks($head){
         $this->head = $head;
      }
      function getContext(){
           $this->head->getContext()?>
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
               <h2 class="my-0 mr-md-auto font-weight-normal"><a href="main">ADMIN PANEL</a></h2>
               <a class="btn btn-outline-primary" href="#">ВЫЙТИ</a>
            </div>
         <main role="main" class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
               <div class="lh-100">
                  <h6 class="mb-0 text-white lh-100">Лицуй при КГТУ им. И. Раззакова</h6>
                  <small>Since 2020</small>
               </div>
            </div>

            <div class="my-4 p-3  bg-white rounded shadow-sm">
            
            <h4 class="border-bottom border-gray pb-2 mb-4">АВТОРИЗАЦИЯ И РЕГИСТРАЦИЯ</h4>
                <a href="students" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Учеников</a>
               <a href="users" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Пользователи</a>
               <a href="teachers" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Учителей</a>
               <a href="performance" class="btn btn-outline-primary col-sm-6  btn-block">Успеваемость ученика</a>
               <a href="classes" class="btn btn-outline-primary col-sm-6  btn-block mb-5">Редактировать таблицу Классов</a>

            <h4 class="border-bottom border-gray pb-2 mb-4">КАТАЛОГИ</h4>
               <a href="aboutUs" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу О нас</a>
               <a href="news" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Новости</a>
               <a href="gallery" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Галерея</a>
               <a href="diary" class="btn btn-outline-primary col-sm-6  btn-block">Редактировать таблицу Дневник</a>
            </div>
         </main>
      <?
      }
   }
?>