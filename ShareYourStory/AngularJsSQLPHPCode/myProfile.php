 <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
				
					<table class="table table-bordered">  
                          <tr>  
                               <th>Title</th>  
                               <th>Genre</th>  
							   <th>Rate</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td><a href="#!teststorypage/{{x.Story_id}}">{{x.Title}}</a></td>  <!-- make edit and delete button-->
                               <td>{{x.Genre}}</td> 
								<td>{{x.Stars}}</td>							   
                          </tr>  
                     </table>  
				
				</div>