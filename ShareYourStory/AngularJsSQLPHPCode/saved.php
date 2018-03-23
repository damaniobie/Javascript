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

      </head>  
      <body>  
	  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="index1.php" class="w3-bar-item w3-button">Home</a>
  <a href="profile_main.php" class="w3-bar-item w3-button">My Profile</a>
 <a href="search_main2.php" class="w3-bar-item w3-button">Search</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>
  </div>
  <header style="padding:6em;background-color: black;clear: left;text-align: center; color:white;">
                <h3 align="center"> Hello, <?php echo $_SESSION['username']; ?></h3>  
			</header>
		
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">List of Saved Stories</h3>  
	  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
				
					 <a href="#!">All</a>
	   <div ng-view></div> 
				
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
           $http.get("selectSavedStories.php")  
           .then(function(response){  
                $scope.names = response.data;  
           });  
      }  
 });  
 
  app.config(function($routeProvider) { 
    $routeProvider
	.when("/", {
        templateUrl : "saved_m.php"
    }).when("/teststorypage/:Story_id", {
		templateUrl: "teststorypage.php",
		controller: "storypagectrl"
	}).when("/user_profile/:user_id",{
		templateUrl: "user_profile.php",
		controller: "userpagectrl"
	});
});

 
  app.controller("storypagectrl", function($scope,$routeParams,$http){ 
  $scope.displayData = function(){  
           $http.get("selectAll.php")  
           .then(function(response){  
                $scope.names = response.data;  
           });
      }  
	 $scope.Story_id = $routeParams.Story_id; 
	 $scope.disabled = false;
	 $scope.likePost = function(){  
		if(!$scope.disabled){
           $http.post(  
                "addLike.php",  
                {'Story_id':$scope.Story_id}  
           ).then(function(data){  
                alert("post liked");
					$scope.disabled= true;
					document.getElementById("likebtn").value = "Liked"; //to prevent things from being liked twice, you might gotta create another table with user id and story id
           }); 
		}else{
			$http.post(  
                "minusLike.php",  
                {'Story_id':$scope.Story_id}  
           ).then(function(data){  
                alert("post unliked");
					$scope.disabled= false;
					document.getElementById("likebtn").value = "Like Story";
           }); 
		}		
      }
		 $scope.disabled2 = false;
		$scope.savePost = function(){
			if(!$scope.disabled2){
			$http.post("insertToSaved.php",  {'Story_id':$scope.Story_id})
			.then(function(data){  
                alert("inserted to your saved stories");
				$scope.disabled2 = true;
           });
			}else{
				$http.post("deleteFromSaved.php",  {'Story_id':$scope.Story_id})
			.then(function(data){  
                alert("removed from your saved stories");
				$scope.disabled2 = false;
           });
			}
		}
 });
  app.controller("userpagectrl", ['$scope','$routeParams',function($scope,$routeParams,$http){ 
  $scope.displayData = function(){  
           $http.get("selectAll.php")  
           .then(function(response){  
                $scope.names = response.data;  
           });
      }  
	 $scope.user_id = $routeParams.user_id; 
 }]);
 
 app.controller("byUserController", ['$scope','$routeParams','$http',function($scope,$routeParams,$http){ 
  $scope.displayData = function(){  
           $http.get("selectAll.php")  
           .then(function(response){  
                $scope.names = response.data;  
           });
      }  
	 $scope.user_id = $routeParams.user_id;  
 }]);
 </script>  
