<?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "storytime");  
 $output = array();  
 $query = "SELECT * FROM stories, users where user = user_id order by rand()";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  