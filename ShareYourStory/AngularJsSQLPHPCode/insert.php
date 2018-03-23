<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $email = mysqli_real_escape_string($connect, $data->email);       
      $username = mysqli_real_escape_string($connect, $data->username);  
      $password = mysqli_real_escape_string($connect, $data->password);  
      $query = "INSERT INTO users(email, username, password) VALUES ('$email', '$username','$password')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Thank you for registering!";  
		    $_SESSION['username'] = $username;
		   header("Location: index1.php");
      }  
      else  
      {  
           echo mysqli_error($connect);;  
      }  
 }  
 ?>  