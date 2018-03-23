<h2>Select a Genre</h2>
<div ng-init="displayData0()">
			<label>Genre</label>
					 <select name="genre" ng-model="genre.Genre">
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

<table class="table table-bordered" >  
                          <tr>  
                               <th>Title</th>  
							   <th>Author</th>
                               <th>Genre</th> 
                               <th>Rate</th>  
                          </tr>  
                          <tr ng-repeat="x in names | filter:genre">  
                               <td ><a href="#!teststorypage/{{x.Story_id}}">{{x.Title}}</a></td> 
                              <!-- <td><a href="#">{{x.Title}}</a></td>  <!-- When you hold down a story, the description pops up-->
							   <td><a href="#!user_profile/{{x.user_id}}">{{x.username}}</a></td>
                               <td>{{x.Genre}}</td>  
                               <td>{{x.Stars}}</td>   
                          </tr>  
                     </table>
					 </div>
		
		