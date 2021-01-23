<?php
   interface sepeda{
     public function roda();
     public function setir();
     }
     
     class komponen implements sepeda{
       public function roda(){
         return "roda...";
         }
        
        public function setir(){
           return "setir...";
           }
          }
          $komponen_baru = new komponen();
          echo $komponen_baru->roda();
          // Roda...
 ?>
