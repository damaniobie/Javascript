 <!DOCTYPE html>    
 <html>  
      <head>  
           <title>Register for Share Your Story</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Create an Account to Share Your Story with the world!</h3>  
                <div ng-app="myapp" ng-controller="usercontroller"> <!-- It wont redirect. Add a form maybe--> 
                     <label>Email</label>  
                     <input type="text" name="email" ng-model="email" class="form-control" />  
                     <br />  
                     <label>Username</label>  
                     <input type="text" name="username" ng-model="username" class="form-control" />  
                     <br />  
					 <label>Password</label>  
					 <input type="password" name="password" ng-model="password" class="form-control" />  
                     <br />  
					 <label>Confirm Password</label>  
					 <input type="password" name="password2" ng-model="password2" class="form-control" />  
                     <br />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Register"/>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "insertUser.php",  
                {'email':$scope.email, 'username':$scope.username, 'password':$scope.password}  
           ).success(function(data){  
                alert(data);  
                $scope.email = null;  
                $scope.username = null;
                $scope.password = null;
                $scope.password2 = null;
				
				
           });  
      }  
 });  
 </script>  