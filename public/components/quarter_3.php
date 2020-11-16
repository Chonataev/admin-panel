<?php
class quarter_3
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
            <h3 class="mt-3">Нулевая Аттестация</h3>

            <h5 class="mb-3 mt-2">Выберите класс</h5>
            <div class="con">
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-A</button>
                    <input type="hidden" name="select" value="9-А"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-Б</button>
                    <input type="hidden" name="select" value="9-Б"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-B</button>
                    <input type="hidden" name="select" value="9-В"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">9-Г</button>
                    <input type="hidden" name="select" value="9-Г"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-A</button>
                    <input type="hidden" name="select" value="10-А"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-Б</button>
                    <input type="hidden" name="select" value="10-Б"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-B</button>
                    <input type="hidden" name="select" value="10-В"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">10-Г</button>
                    <input type="hidden" name="select" value="10-Г"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-A</button>
                    <input type="hidden" name="select" value="11-А"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-Б</button>
                    <input type="hidden" name="select" value="11-Б"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-B</button>
                    <input type="hidden" name="select" value="11-В"></form>
                <form action="quarter_3" method="post">
                    <button class="btn btn-primary mb-2 width" type="submit">11-Г</button>
                    <input type="hidden" name="select" value="11-Г"></form>
            </div>
            <form class="needs-validation" novalidate="" action="quarter_3 " method="POST">
                <select name = "name" class="custom-select custom-select-lg mb-3">
                    <?php
                    $s = array();
                    foreach ($this->students_list as $v){
                        ?>
                        <option><?=$v['name']?></option><?$s = $v['class'];}?>

                </select><input type="hidden" name="class" value="<?=$s?>">

                <div class="container1">
                    <div class="wrapper">Кыргыз тил
                        <div class="form-check">
                            <input class="input" type="radio" name="kyrgyz_lan" id="kyrgyz_lan" value="2">
                            <label for="kyrgyz_lan">2</label>
                            <input class="input" type="radio" name="kyrgyz_lan" id="kyrgyz_lan" value="3">
                            <label for="kyrgyz_lan">3</label>
                            <input class="input" type="radio" name="kyrgyz_lan" id="kyrgyz_lan" value="4">
                            <label for="kyrgyz_lan">4</label>
                            <input class="input" type="radio" name="kyrgyz_lan" id="kyrgyz_lan" value="5">
                            <label for="kyrgyz_lan">5</label>
                            <input class="input" type="radio" name="kyrgyz_lan" id="kyrgyz_lan" value="-" checked>
                            <label for="kyrgyz_lan">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Кыргыз Адабияты
                        <div class="form-check">
                            <input class="input" type="radio" name="kyrgyz_lit" id="kyrgyz_lit" value="2">
                            <label for="kyrgyz_lit">2</label>
                            <input class="input" type="radio" name="kyrgyz_lit" id="kyrgyz_lit" value="3">
                            <label for="kyrgyz_lit">3</label>
                            <input class="input" type="radio" name="kyrgyz_lit" id="kyrgyz_lit" value="4">
                            <label for="kyrgyz_lit">4</label>
                            <input class="input" type="radio" name="kyrgyz_lit" id="kyrgyz_lit" value="5">
                            <label for="kyrgyz_lit">5</label>
                            <input class="input" type="radio" name="kyrgyz_lit" id="kyrgyz_lit" value="-" checked>
                            <label for="kyrgyz_lit">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Русский язык
                        <div class="form-check">
                            <input class="input" type="radio" name="russian_lan" id="russian_lan" value="2">
                            <label for="russian_lan">2</label>
                            <input class="input" type="radio" name="russian_lan" id="russian_lan" value="3">
                            <label for="russian_lan">3</label>
                            <input class="input" type="radio" name="russian_lan" id="russian_lan" value="4">
                            <label for="russian_lan">4</label>
                            <input class="input" type="radio" name="russian_lan" id="russian_lan" value="5">
                            <label for="exampleRadios1">5</label>
                            <input class="input" type="radio" name="russian_lan" id="russian_lan" value="-" checked>
                            <label for="exampleRadios1">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Русская литература
                        <div class="form-check">
                            <input class="input" type="radio" name="russian_lit" id="russian_lit" value="2">
                            <label for="russian_lit">2</label>
                            <input class="input" type="radio" name="russian_lit" id="russian_lit" value="3">
                            <label for="russian_lit">3</label>
                            <input class="input" type="radio" name="russian_lit" id="russian_lit" value="4">
                            <label for="russian_lit">4</label>
                            <input class="input" type="radio" name="russian_lit" id="russian_lit" value="5">
                            <label for="russian_lit">5</label>
                            <input class="input" type="radio" name="russian_lit" id="russian_lit" value="-" checked>
                            <label for="russian_lit">-</label>
                        </div></div>
                    <div class="wrapper">Химия
                        <div class="form-check">
                            <input class="input" type="radio" name="chemistry" id="chemistry" value="2">
                            <label for="chemistry">2</label>
                            <input class="input" type="radio" name="chemistry" id="chemistry" value="3">
                            <label for="chemistry">3</label>
                            <input class="input" type="radio" name="chemistry" id="chemistry" value="4">
                            <label for="chemistry">4</label>
                            <input class="input" type="radio" name="chemistry" id="chemistry" value="5">
                            <label for="chemistry">5</label>
                            <input class="input" type="radio" name="chemistry" id="chemistry" value="-" checked>
                            <label for="chemistry">-</label>
                        </div> </div>
                    <div class="wrapper">Физика
                        <div class="form-check">
                            <input class="input" type="radio" name="physics" id="physics" value="2">
                            <label for="physics">2</label>
                            <input class="input" type="radio" name="physics" id="physics" value="3">
                            <label for="physics">3  </label>
                            <input class="input" type="radio" name="physics" id="physics" value="4">
                            <label for="physics">4</label>
                            <input class="input" type="radio" name="physics" id="physics" value="5">
                            <label for="physics">5</label>
                            <input class="input" type="radio" name="physics" id="physics" value="-" checked>
                            <label for="physics">-</label>
                        </div> </div>
                    <div class="wrapper">История
                        <div class="form-check">
                            <input class="input" type="radio" name="history" id="history" value="2">
                            <label for="history">2</label>
                            <input class="input" type="radio" name="history" id="history" value="3">
                            <label for="history">3</label>
                            <input class="input" type="radio" name="history" id="history" value="4">
                            <label for="history">4</label>
                            <input class="input" type="radio" name="history" id="history" value="5">
                            <label for="history">5</label>
                            <input class="input" type="radio" name="history" id="history" value="-" checked>
                            <label for="history">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Английский
                        <div class="form-check">
                            <input class="input" type="radio" name="english" id="english" value="2">
                            <label for="english">2</label>
                            <input class="input" type="radio" name="english" id="english" value="3">
                            <label for="english">3</label>
                            <input class="input" type="radio" name="english" id="english" value="4">
                            <label for="english">4</label>
                            <input class="input" type="radio" name="english" id="english" value="5">
                            <label for="english">5</label>
                            <input class="input" type="radio" name="english" id="english" value="-" checked>
                            <label for="english">-</label>
                        </div>
                    </div>
                    <div class="wrapper">ОИВТ
                        <div class="form-check">
                            <input class="input" type="radio" name="computer-science" id="computer-science" value="2">
                            <label for="computer_science">2</label>
                            <input class="input" type="radio" name="computer_science" id="computer_science" value="3">
                            <label for="computer_science">3</label>
                            <input class="input" type="radio" name="computer_science" id="computer_science" value="4">
                            <label for="computer_science">4</label>
                            <input class="input" type="radio" name="computer_science" id="computer_science" value="5">
                            <label for="computer-science">5</label>
                            <input class="input" type="radio" name="computer_science" id="computer_science" value="-" checked>
                            <label for="computer-science">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Геометрия
                        <div class="form-check">
                            <input class="input" type="radio" name="geometry" id="geometry" value="2">
                            <label for="geometry">2</label>
                            <input class="input" type="radio" name="geometry" id="geometry" value="3">
                            <label for="geometry">3</label>
                            <input class="input" type="radio" name="geometry" id="geometry" value="4">
                            <label for="geometry">4</label>
                            <input class="input" type="radio" name="geometry" id="geometry" value="5">
                            <label for="geometry">5</label>
                            <input class="input" type="radio" name="geometry" id="geometry" value="-" checked>
                            <label for="geometry">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Алгебра
                        <div class="form-check">
                            <input class="input" type="radio" name="algebra" id="algebra" value="2">
                            <label for="algebra">2</label>
                            <input class="input" type="radio" name="algebra" id="algebra" value="3">
                            <label for="algebra">3</label>
                            <input class="input" type="radio" name="algebra" id="algebra" value="4">
                            <label for="algebra">4</label>
                            <input class="input" type="radio" name="algebra" id="algebra" value="5">
                            <label for="algebra">5</label>
                            <input class="input" type="radio" name="algebra" id="algebra" value="-" checked>
                            <label for="algebra">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Допризывная подготовка
                        <div class="form-check">
                            <input class="input" type="radio" name="dpm" id="dpm" value="2">
                            <label for="dpm">2</label>
                            <input class="input" type="radio" name="dpm" id="dpm" value="3">
                            <label for="dpm">3</label>
                            <input class="input" type="radio" name="dpm" id="dpm" value="4">
                            <label for="dpm">4</label>
                            <input class="input" type="radio" name="dpm" id="dpm" value="5">
                            <label for="dpm">5</label>
                            <input class="input" type="radio" name="dpm" id="dpm" value="-" checked>
                            <label for="dpm">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Черчение
                        <div class="form-check">
                            <input class="input" type="radio" name="drawing" id="drawing" value="2">
                            <label for="drawing">2</label>
                            <input class="input" type="radio" name="drawing" id="drawing" value="3">
                            <label for="drawing">3</label>
                            <input class="input" type="radio" name="drawing" id="drawing" value="4">
                            <label for="drawing">4</label>
                            <input class="input" type="radio" name="drawing" id="drawing" value="5">
                            <label for="drawing">5</label>
                            <input class="input" type="radio" name="drawing" id="drawing" value="-" checked>
                            <label for="drawing">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Человек и общество
                        <div class="form-check">
                            <input class="input" type="radio" name="human_society" id="human_society" value="2">
                            <label for="human_society">2</label>
                            <input class="input" type="radio" name="human_society" id="human_society" value="3">
                            <label for="human_society">3</label>
                            <input class="input" type="radio" name="human_society" id="human_society" value="4">
                            <label for="human_society">4</label>
                            <input class="input" type="radio" name="human_society" id="human_society" value="5">
                            <label for="human_society">5</label>
                            <input class="input" type="radio" name="human_society" id="human_society" value="-" checked>
                            <label for="human_society">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Экономика
                        <div class="form-check">
                            <input class="input" type="radio" name="economy" id="economy" value="2">
                            <label for="economy">2</label>
                            <input class="input" type="radio" name="economy" id="economy" value="3">
                            <label for="economy">3</label>
                            <input class="input" type="radio" name="economy" id="economy" value="4">
                            <label for="economy">4</label>
                            <input class="input" type="radio" name="economy" id="economy" value="5">
                            <label for="economy">5</label>
                            <input class="input" type="radio" name="economy" id="economy" value="-" checked>
                            <label for="economy">-</label>
                        </div>
                    </div>
                    <div class="wrapper">География
                        <div class="form-check">
                            <input class="input" type="radio" name="geography" id="geography" value="2">
                            <label for="geography">2</label>
                            <input class="input" type="radio" name="geography" id="geography" value="3">
                            <label for="geography">3</label>
                            <input class="input" type="radio" name="geography" id="geography" value="4">
                            <label for="geography">4</label>
                            <input class="input" type="radio" name="geography" id="geography" value="5">
                            <label for="geography">5</label>
                            <input class="input" type="radio" name="geography" id="geography" value="-" checked>
                            <label for="geography">-</label>
                        </div>
                    </div>
                    <div class="wrapper">Астрономия
                        <div class="form-check">
                            <input class="input" type="radio" name="astronomy" id="astronomy" value="2">
                            <label for="astronomy">2</label>
                            <input class="input" type="radio" name="astronomy" id="astronomy" value="3">
                            <label for="astronomy">3</label>
                            <input class="input" type="radio" name="astronomy" id="astronomy" value="4">
                            <label for="astronomy">4</label>
                            <input class="input" type="radio" name="astronomy" id="astronomy" value="5">
                            <label for="astronomy">5</label>
                            <input class="input" type="radio" name="astronomy" id="astronomy" value="-" checked>
                            <label for="astronomy">-</label>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary mb-2" type="submit">Создать</button>
                <input type="hidden" name="create" value="quarter_3">

            </form>
        </div><div class="container-fluid">
            <table class="table-fixed-head">
                <tbody>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Класс</th>
                    <th scope="col"><div class="table_head">Кыргыз тил</div></th>
                    <th scope="col"><div class="table_head">Кыргыз адабияты</div></th>
                    <th scope="col"><div class="table_head">Русский язык</div></th>
                    <th scope="col"><div class="table_head">Русская литература</div></th>
                    <th scope="col"><div class="table_head">Английский</div></th>
                    <th scope="col"><div class="table_head">Химия</div></th>
                    <th scope="col"><div class="table_head">Физика</div></th>
                    <th scope="col"><div class="table_head">История</div></th>
                    <th scope="col"><div class="table_head">ОИВТ</div></th>
                    <th scope="col"><div class="table_head">Геометрия</div></th>
                    <th scope="col"><div class="table_head">Алгебра</div></th>
                    <th scope="col"><div class="table_head">ДПМ</div></th>
                    <th scope="col"><div class="table_head">Черчение</div></th>
                    <th scope="col"><div class="table_head">ЧиО</div></th>
                    <th scope="col"><div class="table_head">Экономика</div></th>
                    <th scope="col"><div class="table_head">География</div></th>
                    <th scope="col"><div class="table_head">Астрономия</div></th>
                    <th scope="col">Удалить</th>
                </tr>

                <?php foreach($this->arr as $el):?>
                    <tr>
                        <th scope="row"><?=$el['id']?></th>
                        <td class="name_table"><?=$el['name1']?></td>
                        <td><?=$el['class1']?></td>
                        <td><?=$el['kyrgyz_lan']?></td>
                        <td><?=$el['kyrgyz_lit']?></td>
                        <td><?=$el['russian_lan']?></td>
                        <td><?=$el['russian_lit']?></td>
                        <td><?=$el['english']?></td>
                        <td><?=$el['chemistry']?></td>
                        <td><?=$el['physics']?></td>
                        <td><?=$el['history']?></td>
                        <td><?=$el['computer_science']?></td>
                        <td><?=$el['geometry']?></td>
                        <td><?=$el['algebra']?></td>
                        <td><?=$el['dpm']?></td>
                        <td><?=$el['drawing']?></td>
                        <td><?=$el['human_society']?></td>
                        <td><?=$el['economy']?></td>
                        <td><?=$el['geography']?></td>
                        <td><?=$el['astronomy']?></td>

                        <td>
                            <form action='quarter_3' class="delete" method="POST">
                                <input type="hidden" name="delete" value="quarter_3">
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