<?php
class ort_2
{
    private $head;
    private $arr = [];
    private $students_list = [];

    function setHtmlBlocks($head){
        $this->head = $head;
    }

    function getArr($arr){
        $this->arr = $arr;
    }

    function getContext($list){
        $this->head->getContext();
        $this->students_list = $list;


        if (isset($_POST["edit"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $class = $_POST['class'];
            $rating = $_POST['rating'];
            $update = false;

        } else {
            $id = '';
            $name = '';
            $class = '';
            $rating = '';
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
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <div class="container">
            <div class="media d-flex mt-5">
                <a href="performance" class="d-flex">
                    <img class="align-self-center mr-2 " style="width:2.4em" src="public/image/left-arrow.webp" alt="" >
                    <h4 class="mt-2">ВЕРНУТЬСЯ</h4>
                </a>
            </div>
            <h3 class="mt-3">Результаты пробного ОРТ</h3>

            <h5 class="mb-3 mt-2">Выберите класс</h5>
            <div class="con">
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-A</button>
                    <input type="hidden" name="select" value="9-А"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-Б</button>
                    <input type="hidden" name="select" value="9-Б"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-B</button>
                    <input type="hidden" name="select" value="9-В"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-Г</button>
                    <input type="hidden" name="select" value="9-Г"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-A</button>
                    <input type="hidden" name="select" value="10-А"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-Б</button>
                    <input type="hidden" name="select" value="10-Б"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-B</button>
                    <input type="hidden" name="select" value="10-В"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-Г</button>
                    <input type="hidden" name="select" value="10-Г"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-A</button>
                    <input type="hidden" name="select" value="11-А"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-Б</button>
                    <input type="hidden" name="select" value="11-Б"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-B</button>
                    <input type="hidden" name="select" value="11-В"></form>
                <form action="ort_2" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-Г</button>
                    <input type="hidden" name="select" value="11-Г"></form>
            </div>
            <form class="needs-validation" novalidate="" action="ort_2" method="POST">
                <label>Выбрать ученика</label>
                <select name = "name" class="custom-select custom-select-lg mb-3">
                    <?php
                    $s = array();
                    foreach ($this->students_list as $v){?>
                        <option><?=$v['name']?></option><?$s = $v['class'];}?>

                </select><input type="hidden" name="class" value="<?=$s?>">
                <label>Пробный ОРТ</label>
                <input type="text" class="form-control mb-5" name="rating" >
                <div class="container1">
                    <button class="btn btn-primary mb-2" type="submit">Создать</button>
                    <input type="hidden" name="create" value="ort_2"></form>

        </div><div class="container-fluid">
            <table class="table-fixed-head">
                <tbody>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Класс</th>
                    <th scope="col">Результаты пробного ОРТ</th>
                    <th scope="col">Изменить</th>
                    <th scope="col">Удалить</th>
                </tr>

                <?php foreach($this->arr as $el):?>
                    <tr>
                        <th scope="row"><?=$el['id']?></th>
                        <td class="name_table"><?=$el['name1']?></td>
                        <td><?=$el['class1']?></td>
                        <td><?=$el['rating']?></td>
                        <td>
                            <form action="ort_2" method="POST">
                                <input type="hidden" name="id" value=<?=$el['id']?>>
                                <input type="hidden" name="name" value=<?=$el['name1']?>>
                                <input type="hidden" name="class" value=<?=$el['class1']?>>
                                <button name="edit" class="btn btn-primary">edit</button>
                            </form></td>
                        <td><form action='ort_2' class="delete" method="POST">
                                <input type="hidden" name="delete" value="ort_2">
                                <input type="hidden" name="id" value=<?=$el['id']?>>
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?endforeach?>
                </tbody>
            </table>
        <? $this->students_list[] = "";
    }

}