<?php  
 session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $data = json_decode(file_get_contents("php://input")); 

 if(count($data) > 0)  
 {  
     // $title = mysqli_real_escape_string($connect, $data->title);       
     
	   $user = $_SESSION['username'];
	  $user_id = "select * from users where username = '$user'"; 
	   $result = mysqli_query($connect, $user_id); 
      $story_id = mysqli_real_escape_string($connect, $data->Story_id);
	  while($x = mysqli_fetch_array($result)){
		  $u_id = $x['user_id'];
	  }
	 
      $query = "DELETE FROM liked_stories where u_id = '$u_id' and s_id = '$story_id'";  //keep in mind you can't unlike something if you leave the page 
      if(mysqli_query($connect, $query))  { 
	   $query2 = "Update stories SET Stars = Stars - 1 WHERE Story_id = '$story_id'";
	  if(mysqli_query($connect, $query2)){
		  echo "post liked";
	  }  else  {  
	  echo mysqli_error($connect);  
	  }
	  }   else  {  echo mysqli_error($connect);  } 
        
 }  
 ?>  