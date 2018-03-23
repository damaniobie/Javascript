 <!DOCTYPE html>    
 <html>  <!-- if (isset($_SESSION['username'])){ load this page! else, load index.php}-->
      <head>  
           <title>Create a Story</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
		 
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Create A Story</h3>  
                <div ng-app="myapp" ng-controller="usercontroller">  
                     <label>Title</label>  
                     <input type="text" name="title" ng-model="title" class="form-control" />  
					 <label>Synopsis</label>  
                     <input type="text" name="desc" ng-model="desc" class="form-control" /> 
                       
					 <label>Genre</label>
					 <select name="genre" ng-model="genre" class="form-control">
					 <option>Action</option>
					 <option>Adventure</option>
					 <option>Horror</option>
					 <option>Fantasy</option>
					 <option>Comedy</option>
					 <option>Crime</option>
					 <option>Parody</option>
					 <option>Romance</option>
					 <option>Mystery</option>
					 <option>Non-Fiction</option>
					 <option>Drama</option> 
					 </select>					 
                     <textarea name = "storyText" ng-model="storyText" class="form-control" rows="20" cols="25" placeholder="Share your story..."></textarea>
                     <br />  
					
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Submit Story"/>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "insertStory.php",  
                {'title':$scope.title, 'genre':$scope.genre, 'storyText':$scope.storyText, 'desc':$scope.desc}  
           ).success(function(data){  
                alert(data);  
                $scope.title = null;  
                $scope.desc = null;  
                $scope.storyText = null;
           });  
      }  
 });  
 </script>  