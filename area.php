<?php
// ================================== Rectenguler ,Square and Pie//============================================
// ==================================================================================================================




function area( string $type = null, int $height , int $width ) {


    switch ($type) {
      case 'rectenguler':
         $result=  ($height*$width);
         $area_type = 'rectenguler';
        break;
  
  
     case 'square':
         $result=  ($width*$width);
         $area_type = 'square';
        break;
  
  
    case 'pie':
         $result=  3.14*($height*$width);
         $area_type = 'Pie';
        break;
        
      
      default:
      $result=  "undefined";
        break;
    }
    return "Area of this {$area_type} is {$result} ";
  }
  // ======================Function end Rectenguler ,Square and Pie//============================================
  // ==================================================================================================================
  