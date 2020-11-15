<?php
   include_once("view.php");
   include_once("model/actions.php");
   include_once("model/read.php");

   class Controller{
      private $view;
      private $actions;
      private $read;
     /* function __construct(){
         $this->view = new View();
          $this->actions = new Actions();
         $this->read = new Read();

      }
*/
      function printPage($url,$arr){
         switch ($url) {
            case 'main':
                $this->view = new View();
               $this->view->getMain();
               break;
            case 'aboutUs':
                $this->view = new View();
               $this->view->getAboutUs();
               break;
            case 'news':
                $this->view = new View();
               $this->view->getNews();
               break;
            case 'gallery':
                $this->view = new View();
               $this->view->getGallery();
               break;
            case 'students':
                $this->view = new View();
               $this->view->getStudents();
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
                $this->actions = new Actions();
               $this->actions->getActions($arr);
               break;
         default:
             $this->view = new View();
               $this->view->getError();
               break;
         }
      }
   }
?>