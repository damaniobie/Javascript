<!DOCTYPE html>  
<?php
session_start();
?>
 <html>  
      <head>  
           <title>Your Saved Stories</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>  
		   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
		   <script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>


      </head>  
      <body>  
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
  <a href="search_main.php" class="w3-bar-item w3-button">Search</a>
  <a href="saved.php" class="w3-bar-item w3-button">Saved Stories</a>
  <a class="w3-bar-item w3-button" href="https://twitter.com/intent/tweet?text=Amazing%20story%20I%20Found%20On%20The%20ShareYourStory%20App!"> Tweet This Story</a>
  <!--Put the link in the tweet! Add a twitter image -->
  <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" class = "w3-bar-item w3-button" target="_blank">Share on Facebook </a>
  <a class="tumblr-share-button" href="https://www.tumblr.com/share"></a> <!--Um this says that it is banned, figure it out fam -->

  <?php
   if(isset($_SESSION['username'])){
	  echo "<input type='submit' id='likebtn' name='btnInsert' class='btn btn-info' ng-click='likePost();' value='Like Story' style = 'bottom:0;position:absolute'/>";
	  echo "<input type='submit' id='savebtn' name='btnInsert' class='btn btn-info' ng-click='savePost();' value='Save Story' style = 'bottom:50px;position:absolute'/>";
	  echo "<a href='logout.php' class='w3-bar-item w3-button'>Logout</a>";
  }else{
	  echo "<a href='login.php' class='w3-bar-item w3-button' style = 'bottom:50px;position:absolute'>Login To Like a story or Save a Story to your Collection </a>";
  }
  
  ?>
</div>



<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>
  </div>
  
		
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center"></h3>  
	  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()"> 
				{{Story_id}}
				<!--{{names[1]["Title"]}}
					
				<!--<h3><b>{{names[1][1]}}</b></h3></br><br>
				<h3>by <a href="#">user {{names[1][4]}}</a></h3></br><br>
				<h3>{{names[1][2]}}</h3></br><br>
				<!--<p>{{names[1][2]}}</p>-->
				<!--{{names[1][3}}-->
		
	
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
 var app = angular.module("myapp",["ngRoute"]);  
 app.controller("usercontroller", function($scope, $http){   
      $scope.displayData = function(){  
           $http.get("selectAll.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }
		var disabled=false;
		$scope.likePost = function(){  
		if(!disabled){
           $http.post(  
                "addLike.php",  
                {'story_id':$scope.story_id}  
           ).success(function(data){  
                alert("post liked");
					disabled= true;
					document.getElementById("likebtn").value = "Liked";
           }); 
		}else{
			$http.post(  
                "minusLike.php",  
                {'story_id':$scope.story_id}  
           ).success(function(data){  
                alert("post unliked");
					disabled= false;
					document.getElementById("likebtn").value = "Like Story";
           }); 
		}		
      }
		$scope.savePost = function(){
			$http.post(  
                "insertToSaved.php",  
                {'story_id':$scope.story_id}  
           ).success(function(data){  
                alert("inserted to your saved stories");
           });
		}
 });  
 /*app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl:'profile_main.php',
	}).when('/edit',{
		templateUrl:'edit.php'
	});
 });*/
 </script>  
