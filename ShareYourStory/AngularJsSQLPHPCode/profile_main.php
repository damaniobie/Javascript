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
      <body>  
	  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="index1.php" class="w3-bar-item w3-button">Home</a>
 <a href="search_main2.php" class="w3-bar-item w3-button">Search</a>
  <a href="saved.php" class="w3-bar-item w3-button">Saved Stories</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>
  </div>
  <header style="padding:6em;background-color: black;clear: left;text-align: center; color:white;">
                <h3 align="center"> Hello, <?php echo $_SESSION['username']; ?></h3>  
                <div style="display:inline-block;border:1px solid #fff;right:0;top:20px;position:absolute"> <?php 
				$connect = mysqli_connect("localhost", "root", "DA1ako0die!#!#!", "storytime");
				$user = $_SESSION['username'];
	$query = "select Description from users where username = '$user'"; 
	 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
          echo "<p style = 'align:right; font-size:15px;'>".$row['Description']."</p>";
      }  
     
 }else{
 echo mysqli_error($connect);
 } 
		 ?>
		 </div>  
				
			</header>
			<nav align="center">
				<ul style= "background-color:#333;overflow:hidden;padding:1em;">
				<li style="display:inline;margin-right:20px;"><a href="#!" style="color:white;">My Stories</a></li>
				<li style="display:inline;margin-left:20px;"><a href="#!/edit_profile" style="color:white;">Edit Profile</a></li>
				<!--<li style="display:inline;margin-left:20px;"><a href="#!/changePassword" style="color:white;">Change Password</a></li>-->
			</nav>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Profile</h3>  
	  
               <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
				
					<!--<table class="table table-bordered">  
                          <tr>  
                               <th>Title</th>  
                               <th>Genre</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td><a href="#">{{x.Title}}</a></td>  
                               <td>{{x.Genre}}</td>    
                          </tr>  
                     </table>  
				
				</div>                    <!-- if i put the end comment arrow right here, instead of by the </table>, it works fine! weird af...-->
					<div ng-view></div>
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
 var app = angular.module("myapp",["ngRoute"]);  
 app.controller("usercontroller", function($scope, $http){   
      $scope.displayData = function(){  
           $http.get("selectMyStory.php")  
           .then(function(response){  
                $scope.names = response.data;  
           }); 
      }  
 });  
 
 app.controller("editctrl", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "updateprofile.php",  
                {'email':$scope.email, 'username':$scope.username,'description':$scope.description}  
           ).success(function(data){  
                alert("update successful");  
                $scope.username = null;  
                $scope.email = null;  
                $scope.description = null;  
           });  
      }  
 });


 
 app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl:'myProfile.php'
	}).when('/edit_profile',{
		templateUrl:'edit_profile.php',
		controller: "editctrl"
	});
 });
 </script>  
