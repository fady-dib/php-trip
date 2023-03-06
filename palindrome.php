<?php 
$string = $_GET['string'];
function Palindrome($string) {
    $i = 0;
    $j = strlen($string) - 1;
    $palindrome = 0;
  
    while($i < $j){
      if ($string[$j] != $string[$i]){
        $palindrome = 1;
        break;
      }
      $i++;
      $j--;
    }
  
    if ($palindrome == 0){
      $response["String"]="is Palindrome" ;
      echo json_encode($response);
    } else {
      $response["String"]="is not Palindrome" ;
      echo json_encode($response);
    }
  }
  
  Palindrome($string);

?>