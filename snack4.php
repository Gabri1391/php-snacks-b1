<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<?php
 
  function getArrayNumber($min, $max, $nItems){
    $numbers = [];
    while(count($numbers) < $nItems) {

          $number = rand(1,100);
  
          if(!in_array($number,$numbers)){
              $numbers[] = $number;
          }
      }
    
   return $numbers;
 }


 print_r(getArrayNumber(1,100,15))
 
 
?>
