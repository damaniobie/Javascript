
<h2>Search for the Title of a Story</h2>
<div ng-init="displayData1()">
<input type= "text" ng-model="searchbox.Title"/>
<table class="table table-bordered" >  
                          <tr>  
                               <th>Title</th>  
							   <th>Author</th>
                               <th>Genre</th>  
							   <th>Rate</th> 
                          </tr>  
                          <tr ng-repeat="x in names | filter:searchbox">  
                               <td ><a href="#!teststorypage/{{x.Story_id}}">{{x.Title}}</a></td> 
                              <!-- <td><a href="#">{{x.Title}}</a></td>  <!-- When you hold down a story, the description pops up-->
							   <td><a href="#!user_profile/{{x.user_id}}">{{x.username}}</a></td>
                               <td>{{x.Genre}}</td>  
                               <td>{{x.Stars}}</td> 
                          </tr>  
                     </table>



</div>