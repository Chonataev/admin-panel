<?php
   include_once("view.php");

   class Controller{
      private $view;
      function __construct(){
         $this->view = new View();
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
         default:
               $this->view->getError();
               break;
         }
      }
   }
?>