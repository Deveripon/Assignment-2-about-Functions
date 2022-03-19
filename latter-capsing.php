<?php


//Latter Capsing====================================================

function latter($txt,$caps){
  
  

    switch ($caps) {
  
      case 'uppercase':
        $output = "uppercase";
        break;
  
      case 'lowercase':
          $output = "lowercase";
          break;
      case 'capitalize':
          $output = "capitalize";
          break;
      
      default:
        $output = "Undefine";
        break;
    }
  
    return "<h1 style='text-transform: $output'>$txt</h1>";
  
  
  }
  
  
  