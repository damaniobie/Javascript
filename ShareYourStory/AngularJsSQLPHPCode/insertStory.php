<?php  
 session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $data = json_decode(file_get_contents("php://input")); 

 if(count($data) > 0)  
 {  
      $title = mysqli_real_escape_string($connect, $data->title);       
      $genre = mysqli_real_escape_string($connect, $data->genre);  
      $storyText = mysqli_real_escape_string($connect, $data->storyText); 
      $desc = mysqli_real_escape_string($connect, $data->desc); 
	  $user = $_SESSION['username'];
      $user_id = "select * from users where username = '$user'"; 
	  $result = mysqli_query($connect, $user_id);
	  while($x = mysqli_fetch_array($result)){
		  $u_id = $x['user_id'];
	  }
	  
	  
      $query = "INSERT INTO stories(Title, Genre, Text,Story_desc,user,Stars) VALUES ('$title', '$genre','$storyText','$desc','$u_id','0')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Thank you for your submission!";  
      }  
      else  
      {  
           echo mysqli_error($connect);
      }  
 }  
 ?>  