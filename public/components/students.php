<?php

class Students{
private $head;


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
            <h3 class="mt-3">Править таблицу "Группы"</h3>
            <div class="">
                <h5 class="mb-3 mt-2">Редактировать данные</h5>
                <form class="needs-validation" novalidate="">
                    <div class=" mb-3">
                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Введите имя" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Введите фамилия" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="firstName">login</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Введите login" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="lastName">password</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Введите password" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label for="firstName">Класс</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Введите класс" value="" required="">
                    </div>
                    <button class="btn btn-primary mb-2">Создать</button>
                </form>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">login</th>
                    <th scope="col">password</th>
                    <th scope="col">класс</th>
                    <th scope="col">Изменить</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Асан</td>
                    <td>Исхаков</td>
                    <td>123</td>
                    <td>123</td>
                    <td>@11A</td>
                    <td><button type="button" class="btn btn-success">Изменить</button></td>
                    <td><button type="button" class="btn btn-danger">Удалить</button></td>
                </tr>
                </tbody>
            </table>
        <?
    }
}

