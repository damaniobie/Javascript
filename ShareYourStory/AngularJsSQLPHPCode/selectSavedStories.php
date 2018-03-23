<?php  
 //savedstories.php  
 session_start();
 $user = $_SESSION['username'];
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $output = array();  

 $query = "SELECT * FROM saved_stories join stories on id_story=Story_id join users on id_user = user_id where username = '$user'";  //we'll see 
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }else{
 echo mysqli_error($connect);
 } 
 ?>  