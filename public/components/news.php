<?php

   class News{
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
            <h3 class="mt-3">Править таблицу новостей</h3>
               <div class="">
                  <h5 class="mb-3 mt-2">Редактировать данные</h5>
                  <form class="needs-validation" novalidate="">
                     <div class=" mb-3">
                        <label for="firstName">Заголовок</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Введите заголовок" value="" required="">
                     </div>
                     <div class="mb-3">
                        <label for="lastName">Url</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Введите ссылку" value="" required="">
                     </div>
                     <div class="mb-3">
                        <label for="firstName">Текст</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                     </div>
                     <button class="btn btn-primary mb-2">Создать</button>
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
                     <tr>
                        <th scope="row">1</th>
                        <td>21-сентября</td>
                        <td>https:
                           //mdn.moz
                           illademo
                           s.o
                           rg/files/
                           1397
                           5/admin_
                           home.png</td>
                        <td>Что то что то что то что то что то Что то что то что то что то 
                           что то Что то что то что то что то что то</td>
                        <td><button type="button" class="btn btn-primary">Update</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><button type="button" class="btn btn-primary">Update</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><button type="button" class="btn btn-primary">Update</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                     </tr>
                  </tbody>
               </table>
               
            </div>
         <div>
      <?
      }
   }
?>