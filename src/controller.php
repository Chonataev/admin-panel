<?php
   include_once("view.php");
   require_once("madel/read_madel.php");
   require_once("madel/create_model.php");
   require_once("madel/delete_model.php");
   require_once("madel/update_model.php");

   class Controller{
      private $view;
      private $madel;
      private $create;
      private $delete;
      private $update;
      function __construct(){
         $this->view = new View();
         $this->madel = new Read();
         $this->create = new Create();
         $this->delete = new Delete();
         $this->update = new Update();
      }

      function printPage($url,$arr){
         switch ($url) {
            case 'aboutus':
               $this->view->getAboutUsContent();
               break;
            case 'news':
               $this->view->getNewsContent();
               break;
            case 'parents':
               $this->view->getForParentsContent();
               break;
            case 'galery':
               $this->view->getGaleryContent();
               break;
            case 'create':
               $this->create->create($arr);
               break;
            case 'update':
               $this->update->update($arr);
               break;
            case 'delete':
               $this->delete->delete($arr);
               break;
            default:
            echo 'NOT';
               break;
         }
      }
     
      
   };
