<!-- EDIT PROFILE ROUTE-->
<?php 
session_start();
?>

<div ng-controller="editctrl">
<?php
 $connect = mysqli_connect("localhost", "root", "DA1ako0die!#!#!", "storytime");
 $user = $_SESSION['username'];
 $get = "select * from users where username = '$user'";
 $run = mysqli_query($connect,$get);
 if($run){
 }else{
	 echo mysqli_error($connect);
 }
 $row = mysqli_fetch_array($run);
 
 $cur_email = $row['email'];
 $cur_username = $row['username'];
 $cur_description = $row['Description'];
?>
<h3 style="align:center"> EDIT</h3>
<form action="profile_main.php" action="POST">
					 <label> Change Email</label>  
                     <input type="text" name="email" ng-model="email" class="form-control" value= "<?php echo $cur_email; ?>"/>  
                     <br />  
                     <label>Change Username</label>  
                     <input type="text" name="username" ng-model="username" class="form-control" value= "<?php echo $cur_username; ?>" />  
                     <br />  
					 <label>Change Description</label>  
                     <input type="text" name="description" ng-model="description" class="form-control" value= "<?php echo $cur_description; ?>"/>  
                     <br />  
					  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Update"/> 

</form>
</div>