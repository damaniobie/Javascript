<?php  
ob_start();
?>
<?php
 session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "storytime"); 
$data = json_decode(file_get_contents("php://input")); 
$username = mysqli_real_escape_string($connect, $data->username);  
$password = mysqli_real_escape_string($connect, $data->password);    
 $query = "SELECT * FROM users where username = '$username' and password = '$password'";   
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $_SESSION['username'] = $username;
	  header("Location:index1.php");
 }  else{
	 echo"Username or password is incorrect";
 }
 ob_end_clean();
 ?>  