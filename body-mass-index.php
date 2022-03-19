<?php


//BODY MASS INDEX==========================================

function body_index( $height=null, $weight=null){

    $bmi = $weight/($height*$height);
  
  
    if($bmi<=20 ){
        
      $result = "You are Under Weight";
    }elseif($bmi>=21){
      $result = "You weight is average";
    }
  
  
  
    return "Your BMI is {$bmi} and {$result}";
  
  
  
  }
  
  //BODY MASS INDEX==========================================
  