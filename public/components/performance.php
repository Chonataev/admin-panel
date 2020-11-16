<?php


class Performance
{
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
            <h2 class="my-0 mr-md-auto font-weight-normal"><a href="main">Успеваемость ученика</a></h2>
            <a class="btn btn-outline-primary" href="main">Назад</a>
        </div>
        <main role="main" class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Лицуй при КГТУ им. И. Раззакова</h6>
                    <small>Since 2020</small>
                </div>
            </div>

            <div class="my-4 p-3  bg-white rounded shadow-sm">

                <h4 class="border-bottom border-gray pb-2 mb-4">Таблицы успеваемости</h4>
                <a href="zero" class="btn btn-outline-primary col-sm-6  btn-block">Нулевая аттестация</a>
                <a href="quarter_1" class="btn btn-outline-primary col-sm-6  btn-block">I четверть</a>
                <a href="ort_1" class="btn btn-outline-primary col-sm-6  btn-block">Результаты пробного ОРТ I</a>
                <a href="quarter_2" class="btn btn-outline-primary col-sm-6  btn-block">II четверть</a>
                <a href="srs" class="btn btn-outline-primary col-sm-6  btn-block">СРС</a>
                <a href="quarter_3" class="btn btn-outline-primary col-sm-6  btn-block">III четверть</a>
                <a href="ort_2" class="btn btn-outline-primary col-sm-6  btn-block">Результаты пробного ОРТ II</a>
                <a href="quarter_4" class="btn btn-outline-primary col-sm-6  btn-block">IV четверть</a>
                <a href="year" class="btn btn-outline-primary col-sm-6  btn-block">Годовые оценки</a>
                <a href="ort" class="btn btn-outline-primary col-sm-6  btn-block">Результаты ОРТ</a>
            </div>
        </main>
        <?
    }
}
?>
