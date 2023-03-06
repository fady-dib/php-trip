<?php
 
$str =$_POST['str'];
// $str = "banana";
 function ay_consonant($str){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $consonants = '';
    $i = 0;
    while ($i < strlen($str) && !in_array($str[$i], $vowels)){
        $consonants .= $str[$i];
        $i++;
    }
    if ($i == 0) {
        $result = $str . 'ay';
    } else {
        $result = substr($str, $i) . $consonants . 'ay';
    }
    return $result;
}
    
  echo json_encode(ay_consonant($str))
?>