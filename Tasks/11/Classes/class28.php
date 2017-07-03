<?php
 class bag {
     private $bagname;
     private $weight;

     /**
      * @return mixed
      */
     public function getBagname()
     {
         return $this->bagname;
     }

     /**
      * @param mixed $bagname
      */
     public function setBagname($bagname)
     {
         $this->bagname = $bagname;
     }

     /**
      * @return mixed
      */
     public function getWeight()
     {
         return $this->weight;
     }

     /**
      * @param mixed $weight
      */
     public function setWeight($weight)
     {
         $this->weight = $weight;
     }



     function bagname ($bagname){
         return $bagname;
     }

     function weightbag ($weight){
         if ($weight > 24){
             echo "Сумка порвется";
         }

         else {
             echo "Вы донесете домой";
         }
     }
 }