<?php
   require_once ("libs/routes.php");

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
      private $students;


      function getMain(){
          $this->head=new Head();
         $this->main = new Main();
         $this->main->setHtmlBlocks($this->head);
         $this->main->getContext();
      }

      function getAboutUs(){
          $this->head = new Head();
          $this->aboutUs = new AboutUs();
          $this->read = new Read();
         $this->aboutUs->setHtmlBlocks($this->head);
          $this->aboutUs->getArr($this->read->getAboutUs());
         $this->aboutUs->getContext();
      }

      function getNews(){
          $this->head = new Head();
          $this->news = new News();
          $this->read = new Read();
         $this->news->setHtmlBlocks($this->head);
          $this->news->getArr($this->read->getNews());
         $this->news->getContext();
      }

      function getGallery(){
          $this->head = new Head();
          $this->gallery = new Gallery();
          $this->read = new Read();
         $this->gallery->setHtmlBlocks($this->head);
         $this->gallery->getArr($this->read->getGallery());
         $this->gallery->getContext();
      }

      function getDiary(){
          $this->diary = new Diary();
          $this->head = new Head();
         $this->diary->setHtmlBlocks($this->head);
         $this->diary->getContext();
      }
       function getStudents(){
           $this->head = new Head();
           $this->students = new Students();
           $this->students->setHtmlBlocks($this->head);
           $this->students->getContext();
       }

      function getUsers(){
          $this->head = new Head();
          $this->users = new Users();
         $this->users->setHtmlBlocks($this->head);
         $this->users->getContext();
      }

      function getClasses(){
          $this->head = new Head();
          $this->classes = new Classes();
         $this->classes->setHtmlBlocks($this->head);
         $this->classes->getContext();
      }
      function getJournal(){
          $this->head = new Head();
          $this->journal = new Journal();
         $this->journal->setHtmlBlocks($this->head);
         $this->journal->getContext();
      }

      function getError(){
          $this->head = new Head();
          $this->error = new Errors();
         $this->error->setHtmlBlocks($this->head);
         $this->error->getContext();
      }
     
      
   }