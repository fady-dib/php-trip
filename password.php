<?php
 

 $email= $_POST["email"];
 $password=$_POST["password"] ;
 

  if (empty($email)) {
     $response["status"]=" email is required " ;
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $response["status"]='Invalid email format.';
  }

  else { 

  if (empty($password)) {
    $response["status"]=" password is required ";
  } else if (strlen($password) < 6){
      $response["status"]=" password should be >6 ";
  }
  else if (!preg_match('/[A-Z]/', $password)) {
       $response["status"]= "Password should contain at least one uppercase letter";}

       else if (!preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password)){
        $response["status"]= "Password should contain at least one special letter";
       }
  

  else { 
    $response["status"]="success" ; }


  }
 
 
echo json_encode($response);

?>
