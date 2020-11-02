<?php
   require_once("public/template/menu.php");
   require_once("public/template/newsContent.php");
   require_once("public/template/subMenu.php");
   require_once("public/template/aboutUsContent.php");
   require_once("public/template/forParentsAndStudents.php");
   require_once("public/template/galeryContent.php");

   class View{
      private $menu;
      private $subMenu;
      private $aboutUs;
      private $news;
      private $galery;
      private $forParrents;
      private $mainContent;
      private $model;

      function __construct(){
         $this->create = new Create;
         $this->read = new Read();
         $this->menu = new Menu();
         $this->subMenu = new SubMenu();
         $this->aboutUs = new AboutUs();
         $this->news = new News();
         $this->galery = new GaleryContent();
         $this->forParrents = new ForParentsAndStudents();

      }

      function getAboutUsContent(){
         $this->aboutUs->setHtmlBlocks($this->menu, $this->subMenu);
         $this->galery->getArr($this->read->getAboutUs());  
         $this->aboutUs->getContext();
      }

      function getNewsContent(){
         $this->news->setHtmlBlocks($this->menu, $this->subMenu);
         $this->news->getArr($this->read->getNews());  
         $this->news->getContext();
      }

      function getGaleryContent(){
         $this->galery->setHtmlBlocks($this->menu, $this->subMenu);
         $this->galery->getArr($this->read->getGalery());  
         $this->galery->getContext();
      }

      function getForParentsContent(){
         $this->forParrents->setHtmlBlocks($this->menu, $this->subMenu);
         $this->forParrents->getArr($this->read->getForParents());  
         $this->forParrents->getContext();
      }
     
      
   }
