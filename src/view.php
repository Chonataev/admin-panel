<?php
   include "libs/routes.php";

   class View{
      private $head;
      private $main;
      private $aboutUs;
      private $news;
      private $gallery;
      private $diary;
      private $users;
      private $classes;
      private $journal;
      private $forStudents;
     
      function __construct(){
         $this->head = new Head;
         $this->main = new Main();
         $this->aboutUs = new AboutUs();
         $this->news = new News();
         $this->gallery = new Gallery();
         $this->forStudents = new ForStudents();
         $this->diary = new Diary();
         $this->users = new Users();
         $this->classes = new Classes();
         $this->journal = new Journal();
         $this->error = new Errors();
         

      }

      function getMain(){
         $this->main->setHtmlBlocks($this->head);
         $this->main->getContext();
      }

      function getAboutUs(){
         $this->aboutUs->getContext();
      }

      function getNews(){ 
         $this->news->setHtmlBlocks($this->head);
         $this->news->getContext();
      }

      function getGallery(){
         $this->gallery->setHtmlBlocks($this->head);
         $this->gallery->getContext();
      }

      function getForStudents(){
         $this->forStudents->setHtmlBlocks($this->head);
         $this->forStudents->getContext();
      }
      function getDiary(){
         $this->diary->setHtmlBlocks($this->head);
         $this->diary->getContext();
      }

      function getUsers(){
         $this->users->setHtmlBlocks($this->head);
         $this->users->getContext();
      }

      function getGroups(){
         $this->classes->setHtmlBlocks($this->head);
         $this->classes->getContext();
      }
      function getJournal(){
         $this->journal->setHtmlBlocks($this->head);
         $this->journal->getContext();
      }
      
      function getError(){
         $this->error->setHtmlBlocks($this->head);
         $this->error->getContext();
      }
     
      
   }