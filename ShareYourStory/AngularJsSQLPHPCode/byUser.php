<div>

<h2>Search for a Username</h2>
 <div ng-init="displayData()" ng-controller="byUserController">
<input type= "text" ng-model="searchbox" />
<table class="table table-bordered" >  
                          <tr>  
                               <th>Name</th>  
                               <th>Description</th>  
                          </tr>  
                          <tr ng-repeat="x in names | filter:searchbox">  
                               <td><a href="#!user_profile/{{x.user_id}}">{{x.username}}</a></td>  
                              <td>{{x.Description}}</td>  
                          </tr>  
                     </table>


</div>

</div>