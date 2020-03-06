@include('layouts.headerlog')
@section('content')
<body>
	<div class="container" style="width:80%; margin-right: 0px; margin-left: 0px">
    	<div class="row justify-content-center">
    		<div class="col-md-11">
    			<br> <br>
    			<!--search-->
    			<div class="input-group mb-4">
		            <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon3" class="form-control bg-none border-0">
		            <div class="input-group-append border-0">
		              <button id="button-addon3" type="button" class="btn btn-link text-gray"><i class="fa fa-search"> </i></button>
		            </div>
		        </div>
		         <button type="button" class="waves-effect waves-light btn" data-toggle="modal" data-target="#myModal">Add</button>
				<br> <br>
				<table class="table highlight">
			        <thead class="thead-dark">
			          <tr>
			           	<th>Alias </th>
			            <th>Platform</th>
			          </tr>
			        </thead>
			     </table>
			     <div class="modal" id="myModal"> <br><br>
				    <div class="modal-content">
				      <!-- Modal content-->
				      <div class="modal-content" id="myModal">
				        <div class="modal-body">
				           <div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s6">
						          <input placeholder="First name" id="first_name" type="text" class="validate">
						          <label for="first_name">First Name</label>
						        </div>
						        <div class="input-field col s6">
						          <input placeholder="Last Name" id="last_name" type="text" class="validate">
						          <label for="last_name">Last Name</label>
						        </div>
						      </div>
						      <div class="row">
						      <div class="input-field col s6">
						          <input placeholder="Operator Code"id="operator_code" type="text" class="validate">
						          <!--label for="operator_code">Operator Code</label-->
							  <select class="browser-default">
							    <option value="" disabled selected>Choose operator code</option>
							    <option value="1"> option 1 </option>
							    <option value="2"> option 2 </option>
							    <option value="3"> option2 </option>
							</select> 
							</div> 
						      <div class="input-field col s6">
						          <input placeholder="Operator Code"id="operator_code" type="text" class="validate">
						          <!--label for="operator_code">Team</label-->
							  <select class="browser-default">
							    <option value="" disabled selected>Choose team</option>
							    <option value="1"> team 1  </option>
							    <option value="2"> team 2 </option>
							    <option value="3"> team 3 </option>
							</select> 
						</div> 
					</div> 
							<div class="row">
								 <div class="input-field col s12">
						          <input placeholder="Email" id="email" type="email" class="validate">
						          <label for="email">Email</label>
						        </div>
						    </div>
						      <div class="row">
						      	<div class="input-field col s6">
						          <input placeholder="Contact Number" id="contact_num" type="Number" class="validate">
						          <label for="contact_num">Contact Number</label>
						        </div>
						        
								 <div class="input-field col s6">
						          <input placeholder="Specific Address" id="address" type="text" class="validate">
						          <label for="address">Address</label>
						        </div>
						    </div>
						      <div class="row">
								 <div class="input-field col s6">
						          <input placeholder="City" id="city" type="text" class="validate">
						          <label for="city">City</label>
						        </div>
								 <div class="input-field col s6">
						          <input placeholder="Region" id="region" type="text" class="validate">
						          <label for="region">Region</label>
						        </div>
						    </div>
						    </form>
						  </div>
				        </div>
				        <div class="modal-footer">
				        	<button type="button" class="waves-effect waves-light btn"> ADD </button> &nbsp; &nbsp;
				        	<button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
					</div>
	 			</div>
			</div>
		</body>

	