<div ng-controller ="userpagectrl">
<!--user id = {{user_id}}-->
 <header style="padding:6em;background-color: black;clear: left;text-align: center; color:white;">
               <div ng-repeat="x in names" ng-if="x.user_id==user_id">{{x.username}}
			<p style="align:right; font-size=15px">{{x.Description}}</p> <!-- profile pic too-->
				</div>
			</header>
			 
			<h3> Stories</h3>
			<table class="table table-bordered">  
                          <tr>  
                               <th>Title</th> 
                               <th>Genre</th> 
							   <th>Rate</th>
                          </tr>  
						
                          <tr ng-repeat="x in names" ng-if="x.user_id==user_id">  
                               <td ><a href="#!teststorypage/{{x.Story_id}}">{{x.Title}}</a></td> 
                               <td>{{x.Genre}}</td> 
								<td>{{x.Stars}}</td>  							   
                          </tr>  
                     </table> 
			

</div>
