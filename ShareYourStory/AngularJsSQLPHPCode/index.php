<!DOCTYPE html>
<html lang="en" ng-app="my-app">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="onsen/css/onsenui.css"/>
  <link rel="stylesheet" href="onsen/css/onsen-css-components.css"/>
  <script src="onsen/js/angular.min.js"></script>
  <script src="onsen/js/onsenui.min.js"></script>
  <script src="onsen/js/angular-onsenui.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>-->
</head>

<body>
  <ons-page ng-controller="PageController">
    <ons-toolbar>
      <div class="center">Title</div>
	  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>
  </div>
	
    </ons-toolbar>
	
	


  </ons-page>
  
 <script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

  <script>
    var module = angular.module('my-app', ['onsen']);
    module.controller('PageController', function($scope) {
      $scope.alert = function(message) {
        ons.notification.alert(message);
      };
    });
  </script>
</body>
</html>