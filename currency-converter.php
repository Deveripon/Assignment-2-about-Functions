<?php



//CORRENCY CONVEERTR==============================================



function currency($amount=null, $type=null){

    switch ($type) {
  
      case 'USD':
        $converted_amount= $amount * 85;
        break;
      case 'CAD':
        $converted_amount= $amount * 64.44;
        break;
      case 'POUND':
        $converted_amount= $amount * 113.71;
        break;
      case 'EURO':
        $converted_amount= $amount * 95.38;
        break;
      case 'WON':
        $converted_amount= $amount * 0.0713;
        break;
      
      default:
      $converted_amount= "undefined";
        break;
    }
  
  
    return "{$type} $amount = $converted_amount BDT";
  
  
  
  }
  
  //CORRENCY CONVEERTR==============================================
  
  