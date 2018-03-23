<?php
session_start();
?>
<div ng-controller ="storypagectrl" style="width:500px;">
<!--Story id = {{Story_id}}-->
	<input type="text" ng-model="Story_id" value="{{Story_id}}" disabled="true"/>

	<div ng-repeat="x in names" ng-if="x.Story_id == Story_id">
		<h3><b>{{x.Title}}</b> </h3><h3>{{x.Genre}}</h3><h4> {{x.date_submitted}}</h4>
		<p> by<a href="#!user_profile/{{x.user_id}}"> {{x.username}}</a></p> <!-- link to the authors profile-->
		<p>{{x.Text}}</p>
	</div>
	<div style="align:right">
 <?php
   if(isset($_SESSION['username'])){
	  echo "<input type='submit' id='likebtn' name='btnInsert' class='btn btn-info' ng-click='likePost();' value='Like Story' style = 'bottom:0;right:0;position:fixed'/>";
	  echo "<input type='submit' id='savebtn' name='btnInsert' class='btn btn-info' ng-click='savePost();' value='Save Story' style = 'bottom:50px;right:0;position:fixed'/>";
	  //right now you can refresh page and keep liking/saving. Maybe make a disabled attribute and bind it to something?
  }else{
	  echo "<a href='login.php' class='w3-bar-item w3-button' style = 'bottom:50px;right:0;position:fixed'>Login To Like a story or Save a Story to your Collection </a>";
  }//Make sure to  make it so that this is not take up screen when screen is small
  
  ?>
  </div>
</div>
