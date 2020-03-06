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
    			<br> <br> <br>
    			<!--search-->
    			<div class="input-group mb-4">
		            <input type="search" type="date" placeholder="What're you searching for?" aria-describedby="button-addon3" class="form-control bg-none border-0">
		            <div class="input-group-append border-0">
		              <button id="button-addon3" type="button" class="btn btn-link text-gray"><i class="fa fa-search"></i></button>
		            </div>
		        </div> <br>
		        <!-- ADD MODAL --> 
		         <button type="button" class="waves-effect waves-light btn" data-toggle="modal" data-target="#myModal">Add</button> <br> <br>

				<table class="table highlight">
			        <thead class="thead-dark">
			          <tr>
			           	<th>Platform</th>
			            <th> 0:00 - 0:59 </th>
			            <th> 1:00 - 1:59 </th> 
			            <th> 2:00 - 2:59 </th>
			            <th> 3:00 - 3:59 </th> 
			            <th> 4:00 - 4:59 </th>
			            <th> 5:00 - 5:59 </th>
			            <th> 6:00 - 6:59 </th>
			            <th> 7:00 - 7:59 </th>
			            <th> 8:00 - 8:59 </th> 
			            <th> 9:00 - 9:59 </th>
			            <th> 10:00 - 10:59 </th> 
			            <th> 11:00 - 11:59 </th>
			            <th> 12:00 - 00:59 </th>
			          </tr>
			        	</thead>
			    	</table>
			    	<br> <br>
			    	 <div class="modal" id="myModal" > <br><br>
				    <div class="modal-content">
        					<label>Select Time</label>
							  <select class="browser-default">
							    <option value="" disabled selected>Choose your option</option>
							    <option value="1"> 0:00 - 0: 59 </option>
							    <option value="2"> 1:00 - 1:59 </option>
							    <option value="3"> 2:00 - 2:59 </option>
							    <option value="3"> 3:00 - 3:59 </option>
							    <option value="3"> 4:00 - 4:59 </option>
							    <option value="3"> 5:00 - 5:59 </option>
							    <option value="3"> 6:00 - 6:59 </option>
							    <option value="3"> 7:00 - 7:59 </option>
							    <option value="3"> 8:00 - 8:59 </option>
							    <option value="3"> 9:00 - 9:59 </option>
							    <option value="3"> 10:00 - 10:59 </option>
							    <option value="3"> 11:00 - 11:59 </option>
							    <option value="3"> 12:00 - 00:59 </option>
							  </select>
						  </div>
				    	    <div class="modal-footer">
				        	<button type="button" class="waves-effect waves-light btn"> ADD </button>	
				          <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
				        </div>

				</div>
			</div>
		 </div>
	</div>
</body>
