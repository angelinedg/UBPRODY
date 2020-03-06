@include('layouts.headerlog')
<body>
	<div class="container" style="width:80%; margin:0; padding:0;">
		<div class="row" >
			<nav class="navbar navbar-dark bg-dark" >
			  <span class="navbar-brand mb-0 h1">Permissions</span>
			  <button type="button" align="right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i></button>
			</nav>
		</div>
    	<div class="row justify-content-center">
    		<div class="col-md-12">
    			<br>
    			<div class="row justify-content-center equal">


				  	<div class="col-md-4">
				  		<div class="card text-white bg-dark">
							<div class="card-header">
							    <b>ADMIN</b>
							    <br />
							    <input class="form-control" type="text" placeholder="Search">
							</div>
							<div class="scrollable" >
							<fieldset disabled="disabled">
							<div class="card-body">
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Dashboard</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch1">
										    <label class="custom-control-label" for="switch1"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	View Logs
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch2">
										    <label class="custom-control-label" for="switch2"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Remark
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch3">
										    <label class="custom-control-label" for="switch3"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Masterlist</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch4">
										    <label class="custom-control-label" for="switch4"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Operator
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch5">
										    <label class="custom-control-label" for="switch5"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download Operator CSV
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch6">
										    <label class="custom-control-label" for="switch6"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Bulk Delete
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch7">
										    <label class="custom-control-label" for="switch7"></label>
										</div>
									</div>
							    </div>	
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Operator
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch8">
										    <label class="custom-control-label" for="switch8"></label>
										</div>
									</div>
							    </div>	
							    <div class="row">
							    	<div class="col-md-8">
							    	Delete Operator
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch9">
										    <label class="custom-control-label" for="switch9"></label>
										</div>
									</div>
							    </div>	
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Alias
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch10">
										    <label class="custom-control-label" for="switch10"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Data Management</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch11">
										    <label class="custom-control-label" for="switch11"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Upload Report
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch12">
										    <label class="custom-control-label" for="switch12"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Upload Masterlist
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch13">
										    <label class="custom-control-label" for="switch13"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Upload Operator Alias
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch14">
										    <label class="custom-control-label" for="switch14"></label>
										</div>
									</div>
							    </div>	
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Statistics</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch15">
										    <label class="custom-control-label" for="switch15"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Platforms</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch16">
										    <label class="custom-control-label" for="switch16"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Platform
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch17">
										    <label class="custom-control-label" for="switch17"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Platform
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch18">
										    <label class="custom-control-label" for="switch18"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Delete Platform
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch19">
										    <label class="custom-control-label" for="switch19"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Custom Reports</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch20">
										    <label class="custom-control-label" for="switch20"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download Attendance Report
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch21">
										    <label class="custom-control-label" for="switch21"></label>
										</div>
									</div>
							    </div>
							     <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Teams</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch22">
										    <label class="custom-control-label" for="switch22"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Team
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch23">
										    <label class="custom-control-label" for="switch23"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Team
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch24">
										    <label class="custom-control-label" for="switch24"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Delete Team
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch25">
										    <label class="custom-control-label" for="switch25"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Member
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch26">
										    <label class="custom-control-label" for="switch26"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Transfer Member
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch27">
										    <label class="custom-control-label" for="switch27"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Remove Member
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch28">
										    <label class="custom-control-label" for="switch28"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Clients</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch29">
										    <label class="custom-control-label" for="switch29"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Client
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch30">
										    <label class="custom-control-label" for="switch30"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download Client List
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch31">
										    <label class="custom-control-label" for="switch31"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Bulk Delete
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch32">
										    <label class="custom-control-label" for="switch32"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Client
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch33">
										    <label class="custom-control-label" for="switch33"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Groups</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch34">
										    <label class="custom-control-label" for="switch34"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Group
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch35">
										    <label class="custom-control-label" for="switch35"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download Group List
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch36">
										    <label class="custom-control-label" for="switch36"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Bulk Delete
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch37">
										    <label class="custom-control-label" for="switch37"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Group
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch38">
										    <label class="custom-control-label" for="switch38"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Users</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch39">
										    <label class="custom-control-label" for="switch39"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add User
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch40">
										    <label class="custom-control-label" for="switch40"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download User List
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch41">
										    <label class="custom-control-label" for="switch41"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Bulk Delete
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch42">
										    <label class="custom-control-label" for="switch42"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update User
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch43">
										    <label class="custom-control-label" for="switch43"></label>
										</div>
									</div>
							    </div>
							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Services</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch44">
										    <label class="custom-control-label" for="switch44"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Add Services
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch45">
										    <label class="custom-control-label" for="switch45"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Download Services List
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch46">
										    <label class="custom-control-label" for="switch46"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Delete Services
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch47">
										    <label class="custom-control-label" for="switch47"></label>
										</div>
									</div>
							    </div>
							    <div class="row">
							    	<div class="col-md-8">
							    	Update Services
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch48">
										    <label class="custom-control-label" for="switch48"></label>
										</div>
									</div>
							    </div>

							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Dump</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch49">
										    <label class="custom-control-label" for="switch49"></label>
										</div>
									</div>
							    </div>

							    <br/>
							    <br/>
							    <div class="row">
							    	<div class="col-md-8">
							    	<strong><b>Permissions</b></strong>
							    	</div>
							    	<div class="col-md-4">
								    	<div class="custom-control custom-switch">
										    <input type="checkbox" class="custom-control-input" id="switch50">
										    <label class="custom-control-label" for="switch50"></label>
										</div>
									</div>
							    </div>


							    							    
							</div>
							</fieldset>
						</div>
							<div class="card-footer" style="margin: auto">
							  	<button name="edit" type="button" class="btn" onclick="editButton()"><i class="fa fa-pencil"></i></button>
							  	<button name="cancel" type="button" class="btn" onclick="cancelButton()" style="display:none"><i class="fa fa-close"></i></button>
							  	<button name="save" type="button" class="btn" onclick="saveButton()" style="display:none" ><i class="fa fa-check-square-o"></i></button>
							</div>
						</div>
				  	</div>



				  	
				  	
	  			</div>
			  </div>
		  </div>
	  </div>



</body>


<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<style>
	.card{
		height:400px;
	}
	.scrollable{
		overflow-y: auto;
  		height: 400px;
	}
</style>

<script >

	function editButton() {
		$("fieldset").removeAttr("disabled");
		$(".card-body").attr("style", "background-color: #424242");
		$('button[name="edit"]').hide();
		$('button[name="cancel"]').show();
		$('button[name="save"]').show();
	}

	function cancelButton() {
		$("fieldset").attr("disabled", "disabled");
		$(".card-body").removeAttr("style");
		$('button[name="edit"]').show();
		$('button[name="cancel"]').hide();
		$('button[name="save"]').hide();
	}

	function saveButton() {
		$("fieldset").attr("disabled", "disabled");
		$(".card-body").removeAttr("style");
		$('button[name="edit"]').show();
		$('button[name="cancel"]').hide();
		$('button[name="save"]').hide();
	}

	
   
</script>