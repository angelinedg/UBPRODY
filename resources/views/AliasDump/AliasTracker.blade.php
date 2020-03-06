@include('layouts.headerlog')
@section('content')
<style> 

	.modal {
	position: fixed;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	width:auto;
  	height:auto;
	}
	</style>
<body>
	<div class="container" style="width:80%; margin-right: 0px; margin-left: 0px">
    	<div class="row justify-content-center">
    		<div class="col-md-11">
    			<br><br>
    			<!--search-->
    			<div class="input-group mb-4">
		            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon3" class="form-control bg-none border-0">
		            <div class="input-group-append border-0">
		              <button id="button-addon3" type="button" class="btn btn-link text-gray"><i class="fa fa-search"></i></button>
		            </div>
		        </div> <br> 
 					   <div class="col s12 m7">
  					    <div class="card blue-grey darken-1">
     					   <div class="card-content white-text">
        					<table class="responsive-table highlight">
			    			 <thead class="thead-dark">
			         			 <tr>
			          			<th>Register Alias</th>
			           			<th>Prod Admin</th>
			            		<th>Date </th> 
			            		<th>Time</th>
			          			</tr>
			       			</thead>
       						 </div>
       						</table>
					    <button class="btn waves-effect waves-light" type="submit" name="action"> Submit 
						    <i class="material-icons right">send</i>
    					  </div>
  					  </div> <br> <br>
  					  <div class="col">
  					    <div class="card blue-grey darken-1">
     					   <div class="card-content white-text">
        					<table class="responsive-table highlight">
			    			 <thead class="thead-dark">
			         			 <tr>
			          			<th>Register Alias</th>
			           			<th>Prod Admin</th>
			            		<th>Date </th> 
			            		<th>Time</th>
			          			</tr>
			       			</thead>
       						 </div>
       						</table>
						  	<button class="btn waves-effect waves-light" type="submit" name="action"> Submit
						    <i class="material-icons right">send</i>
						  </button>
    					  </div>
  					  </div>
 					 </div>
			</div>
	  </div>
	</div>
</body>

	