 
 <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
					
					
					<table class="table table-bordered">  
                          <tr>  
                               <th>Title</th>  
							   <th>Author</th>
                               <th>Genre</th> 
                               <th>Rate</th> 
                          </tr>  
						 <!-- <a ng-click="showme=false" href="#!teststorypage.php/{{names[1]['Story_id']}}">{{names[1]["Title"]}}</a>-->
                          <tr ng-repeat="x in names">  
                               <td ><a href="#!teststorypage/{{x.Story_id}}">{{x.Title}}</a></td> 
                              <!-- <td><a href="#">{{x.Title}}</a></td>  <!-- When you hold down a story, the description pops up-->
							   <td><a href="#!user_profile/{{x.user_id}}">{{x.username}}</a></td>
                               <td>{{x.Genre}}</td>  
                               <td>{{x.Stars}}</td>  
                          </tr>  
                     </table>  
					
				
				</div>