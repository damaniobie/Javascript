<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
		$user = $_SESSION['username'];
      $email = mysqli_real_escape_string($connect, $data->email);       
      $username = mysqli_real_escape_string($connect, $data->username);    
      $description = mysqli_real_escape_string($connect, $data->description); 

	  
      $query = "UPDATE users set email = '$email', username = '$username', Description = '$description' where username='$user'" ;  
      if(mysqli_query($connect, $query))  
      {  
           echo "Information updated!";  
		  
      }  
      else  
      {  
           echo mysqli_error($connect); 
      }  
 }  
 ?>  