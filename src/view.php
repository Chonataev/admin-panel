<?php
   require_once ("libs/routes.php");

   class View{
      private $head;
      private $read;


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
       function getStudents($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->students = new Students();
           $this->read = new Read();
           $this->students->getArr($this->read->getStudents());
           $this->students->setHtmlBlocks($this->head);
           $this->students->getContext($arr);
       }
       function getZero($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->zero = new Zero();
           $this->read = new Read();
           $this->zero->getArr($this->read->getZero());
           $this->zero->setHtmlBlocks($this->head);
           $this->zero->getContext($arr);
       }
       function getSrs($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->srs = new Srs();
           $this->read = new Read();
           $this->srs->getArr($this->read->getSrs());
           $this->srs->setHtmlBlocks($this->head);
           $this->srs->getContext($arr);
       }
       function getYear($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->year = new Year();
           $this->read = new Read();
           $this->year->getArr($this->read->getYear());
           $this->year->setHtmlBlocks($this->head);
           $this->year->getContext($arr);
       }
       function getPerformance(){
       $this->head = new Head();
       $this->performance = new Performance();
       $this->performance->setHtmlBlocks($this->head);
       $this->performance->getContext();
   }
       function getQuarter($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->quarter_1 = new Quarter_1();
           $this->read = new Read();
           $this->quarter_1->getArr($this->read->getQuarter_1());
           $this->quarter_1->setHtmlBlocks($this->head);
           $this->quarter_1->getContext($arr);
       }
       function getQuarter_2($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->quarter_2 = new Quarter_2();
           $this->read = new Read();
           $this->quarter_2->getArr($this->read->getQuarter_2());
           $this->quarter_2->setHtmlBlocks($this->head);
           $this->quarter_2->getContext($arr);
       }
       function getQuarter_3($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->quarter_3 = new Quarter_2();
           $this->read = new Read();
           $this->quarter_3->getArr($this->read->getQuarter_3());
           $this->quarter_3->setHtmlBlocks($this->head);
           $this->quarter_3->getContext($arr);
       }
       function getQuarter_4($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->quarter_4 = new Quarter_2();
           $this->read = new Read();
           $this->quarter_4->getArr($this->read->getQuarter_4());
           $this->quarter_4->setHtmlBlocks($this->head);
           $this->quarter_4->getContext($arr);
       }

       function getOrt_1($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->ort_1 = new Ort_1();
           $this->read = new Read();
           $this->ort_1->getArr($this->read->getOrt_1());
           $this->ort_1->setHtmlBlocks($this->head);
           $this->ort_1->getContext($arr);
       }
       function getOrt_2($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->ort_2 = new Ort_2();
           $this->read = new Read();
           $this->ort_2->getArr($this->read->getOrt_2());
           $this->ort_2->setHtmlBlocks($this->head);
           $this->ort_2->getContext($arr);
       }
       function getOrt($arr=['name'=>'Maksat']){
           $this->head = new Head();
           $this->ort = new Ort();
           $this->read = new Read();
           $this->ort->getArr($this->read->getOrt());
           $this->ort->setHtmlBlocks($this->head);
           $this->ort->getContext($arr);
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