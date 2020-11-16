<?php
   include_once("view.php");
   include_once("model/actions.php");
   include_once("model/read.php");

   class Controller{
      private $view;
      private $actions;
      private $read;
      private $zero;


       function __construct(){
           $this->actions = new Actions();
       }

      function printPage($url,$arr){
         switch ($url) {
            case 'main':
                $this->view = new View();
               $this->view->getMain();
               break;
            case 'aboutUs':
                $this->view = new View();
                $this->aboutUs = new Actions();
                $this->aboutUs->getActions($arr);
               $this->view->getAboutUs();
               break;
            case 'news':
                $this->view = new View();
               $this->view->getNews();
               break;
            case 'gallery':
                $this->view = new View();
                $this->gallery = new Actions();
                $this->gallery->getActions($arr);
                $this->view->getGallery();
            break;
            case 'students':
                $this->view = new View();
                $this->students = new Actions();
                $this->students->getActions($arr);
                $this->view->getStudents($this->actions->getStudentsList($arr['select']));
            break;
            case 'diary':
                $this->view = new View();
                $this->view->getDiary();
            break;
            case 'users':
                $this->view = new View();
                $this->view->getUsers();
               break;
            case 'classes':
                $this->view = new View();
                $this->view->getClasses();
               break;
             case 'journal':
                $this->view = new View();
                $this->view->getJournal();
               break;
            case 'actions':
               break;
            case 'zero':
                $this->actions = new Actions();
                $this->view = new View();
                $this->actions->getActions($arr);
                $this->view->getZero($this->actions->getStudentsList($arr['select']));
            break;
            case 'performance':
                $this->view = new View();
                $this->view->getPerformance();
            break;
            case 'quarter_1':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getQuarter($this->actions->getStudentsList($arr['select']));
                 break;
            case 'quarter_2':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getQuarter_2($this->actions->getStudentsList($arr['select']));
                 break;
            case 'quarter_3':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getQuarter_3($this->actions->getStudentsList($arr['select']));
                 break;
            case 'quarter_4':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getQuarter_4($this->actions->getStudentsList($arr['select']));
                 break;
            case 'srs':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getSrs($this->actions->getStudentsList($arr['select']));
                 break;
            case 'ort_1':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getOrt_1($this->actions->getStudentsList($arr['select']));
                 break;
             case 'ort_2':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getOrt_2($this->actions->getStudentsList($arr['select']));
                 break;
             case 'ort':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getOrt($this->actions->getStudentsList($arr['select']));
                 break;
             case 'year':
                 $this->actions = new Actions();
                 $this->view = new View();
                 $this->actions->getActions($arr);
                 $this->view->getYear($this->actions->getStudentsList($arr['select']));
                 break;
            case 'read':
                 $this->view = new View();
                 $this->view->getRead($this->actions->getStudentsList());
                 break;
         default:
             $this->view = new View();
               $this->view->getError();
               break;
         }
      }
   }
?>