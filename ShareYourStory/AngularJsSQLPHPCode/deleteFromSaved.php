<?php  
 session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $data = json_decode(file_get_contents("php://input")); 

 if(count($data) > 0)  
 {  
     // $title = mysqli_real_escape_string($connect, $data->title);       
     
	   $user = $_SESSION['username'];
	  $user_id = "select * from users where username = '$user'"; //it's this mf that don't work
	   $result = mysqli_query($connect, $user_id); 
      $story_id = mysqli_real_escape_string($connect, $data->Story_id);
	  while($x = mysqli_fetch_array($result)){
		  $u_id = $x['user_id'];
	  }
	
	  
	 
      $query = "Delete from saved_stories where id_user = '$u_id' and id_story = '$story_id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Inserted to saved stories";  
      }  
      else  
      {  
           echo mysqli_error($connect);
      }  
 }  
 ?>  