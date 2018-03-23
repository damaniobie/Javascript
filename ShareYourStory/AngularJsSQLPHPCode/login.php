 <!DOCTYPE html>  <!-- soo umm. this says login successful even if its not... do something-->
 <!-- login.php !-->  
 <?php
 
 ?>
 <html>  
      <head>  
           <title>Login to Share Your Story</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Login to Share Your Story</h3>  
                <div ng-app="myapp" ng-controller="usercontroller">  <!-- Add a form for redirection-->
                     <label>Username</label>  
                     <input type="text" name="username" ng-model="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" ng-model="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Login"/>  
                </div> 
				<a href="register.php"	style="align:right">New? Register Here</a>			
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "check_login.php",  
                {'username':$scope.username, 'password':$scope.password}  
           ).success(function(data){  
                alert("login successful");  
                $scope.username = null;  
                $scope.password = null;  
           });  
      }  
 });  
 </script>  