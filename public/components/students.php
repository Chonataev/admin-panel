<?php

class Students{
private $head;
    private $arr = [];
    private $array;
    function setHtmlBlocks($head){
        $this->head = $head;
    }
    function getArr($arr){
        $this->arr = $arr;
    }

    function getContext(){
        ?>
        <?$this->head->getContext();


        if (isset($_POST["edit"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $class = $_POST['class'];
            $update = false;
        } else {
            $id = '';
            $name = '';
            $class = '';
            $update = true;
        }
        if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
            <?php

            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?></div><?php
        endif;
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
                <form class="needs-validation" novalidate="" action="students" method="post">
                    <div class=" mb-3">
                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" name="name" id="firstName" placeholder="Введите Ф.И.О." value="<?=$name?>" required="">
                    </div>
                    <div class="mb-3">
                        <label for="lastName">Класс</label>
                        <input type="text" class="form-control" name="class" id="lastName" placeholder="Введите класс ученика" value="<?=$class?>" required="">
                    </div>
                    <?php
                    if($update === false):?>
                        <button class="btn btn-info mb-2" type="submit">Изменить</button>
                        <input type="hidden" name="update" value="students">
                        <input type="hidden" name="id" value=<?=$id?>>
                    <?php else:?>
                        <button class="btn btn-primary mb-2" type="submit">Создать</button>
                        <input type="hidden" name="create" value="students">
                    <?endif?>
                </form>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Kласс</th>
                    <th scope="col">Изменить</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($this->arr as $el):?>
                    <tr>
                        <th scope="row"><?=$el['id']?></th>
                        <td><?=$el['name']?></td>
                        <td><?=$el['class']?></td>
                        <td><form action="students" method="POST">
                                <input type="hidden" name="id" value=<?=$el['id']?>>
                                <input type="hidden" name="name" value=<?=$el['name']?>>
                                <input type="hidden" name="class" value=<?=$el['class']?>>
                                <button name="edit" class="btn btn-primary">edit</button>
                            </form></td>
                        <td>
                            <form action='students' class="delete" method="POST">
                                <input type="hidden" name="delete" value="students">
                                <input type="hidden" name="id" value=<?=$el['id']?>>
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?endforeach?>
                </tbody>
            </table>
        <?
    }
}

