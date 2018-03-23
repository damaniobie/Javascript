<!DOCTYPE html>  
<?php
session_start();
?>
 <html>  
      <head>  
           <title>Share Your Story</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
		   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
      </head>  
      <body ng-app="myapp">  
	  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <?php
  if(isset($_SESSION['username'])){
	  echo "<h3>Hello, ". $_SESSION['username']. "!</h3> ";
	  echo "<a href='profile_main.php' class='w3-bar-item w3-button'>My Profile</a>";
  }else{
	  echo "<a href='login.php' class='w3-bar-item w3-button'>Login</a>";
  }
  ?>
  <a href="index1.php" class="w3-bar-item w3-button">Home</a>
  <?php
   if(isset($_SESSION['username'])){
	   echo "<a href='saved.php' class='w3-bar-item w3-button'>Saved Stories</a>";
	  echo "<a href='logout.php' class='w3-bar-item w3-button'>Logout</a>";
  }
  
  ?>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>
  </div>
  <header style="padding:6em;background-color: black;clear: left;text-align: center; color:white;">
                <h3 align="center"> What would you like to search <?php if(isset($_SESSION['username'])){echo ", ". $_SESSION['username'];} ?>?</h3>  
			</header>
			<nav align="center">
				<ul style= "background-color:#333;overflow:hidden;padding:1em;">
				<li style="display:inline;margin-right:20px;"><a href="byGenre2.php" style="color:white;">Search By Genre</a></li>
				<li style="display:inline;"><a href="byTitle2.php" style="color:white;">Search by Title</a></li>
				<li style="display:inline;margin-left:20px;"><a href="byUser2.php" style="color:white;">Search Users</a></li>
			</nav>
           <br /><br />  
           <div class="container" style="width:500px;">   
	  
                <div ng-controller="usercontroller" ng-init="displayData()">  
				
				
				</div>
				
				</div>
				
				
				</body>
				
				</html>
				
				<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
	<script>  
var app = angular.module("myapp", ["ngRoute"]); 
 
 app.controller("usercontroller", function($scope, $http){   
      $scope.displayData = function(){  
           $http.get("selectAll.php")  
           .then(function(response){  
                $scope.names = response.data;  
           });  
      }  
 }); 
 
 
 </script>  
