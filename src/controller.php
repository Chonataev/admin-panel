<?php
   include_once("view.php");
   include_once("model/actions.php");
   include_once("model/read.php");

   class Controller{
      private $view;
      private $actions;
      private $read;
      function __construct(){
         $this->view = new View();
         $this->actions = new Actions();
         $this->read = new Read();
         
      }

      function printPage($url,$arr){
         switch ($url) {
            case 'main':
               $this->view->getMain();
               break;
            case 'aboutUs':
               $this->view->getAboutUs();
               break;
            case 'news':
               $this->view->getNews();
               break;
            case 'gallery':
               $this->view->getGallery();
               break;
            case 'forStudents':
               $this->view->getForStudents();
               break;
            case 'diary':
               $this->view->getDiary();
               break;
            case 'users':
               $this->view->getUsers();
               break;
            case 'classes':
               $this->view->getClasses();
               break;
            case 'journal':
               $this->view->getJournal();
               break;
            case 'actions':
               $this->actions->getActions($arr);
               break;
         default:
               $this->view->getError();
               break;
         }
      }
   }
?>