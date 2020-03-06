@include('layouts.headerlog')
<body>
	<div class="container" style="width:80%; margin:0; padding:0;">
		<div class="row" >
		
			</div>
    	<div class="row">
    		<div class="col-md-12">
    			<br>
    			<div class="row">
    				  @include('platformui')
	  			</div>
			  </div>
		  </div>
	  </div>
</body>
				  <!-- Modal -->
				  <div class="modal" id="myModal">
				      <!-- Modal content-->
				      <div class="modal-content">
				      	<div class="modal-header">
				      		<h5 class="modal-title">Add Platform</h5>
				      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
				      	</div>
				        <div class="modal-body">
				           <div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s6">
						          <input id="platformname" type="text" class="validate">
						          <label for="platformname">Platform Name * </label>
						        </div>
						          <div class="input-field col s6">
								    <select class="form-control" id="platformtype">
								      <option selected value="" disabled>Platform Type *</option>
								      <option>IM</option>
								      <option>SMS</option>
								      <option>EMAIL</option>
								      <option>MOD</option>
								    </select>
								  </div>
						      </div>
						      <div class="row">
						        <div class="input-field col s4">
						          <input id="platformcode" type="text" class="validate">
						          <label for="platformcode">Platform Code * </label>
						        </div>
						        <div class="input-field col s4">
						          <select class="form-control" id="platformtype">
								      <option selected value="" disabled>Timezone</option>
								      <option>UTC -12:00</option>
								      <option>UTC -11:00</option>
								      <option>UTC -10:00</option>
								      <option>UTC -09:30</option>
								      <option>UTC -09:00</option>
								      <option>UTC -08:00</option>
								      <option>UTC -07:00</option>
								      <option>UTC -06:00</option>
								      <option>UTC -05:00</option>
								      <option>UTC -04:00</option>
								      <option>UTC -03:30</option>
								      <option>UTC -03:00</option>
								      <option>UTC -02:00</option>
								      <option>UTC  00:00</option>
								      <option>UTC +01:00</option>
								      <option>UTC +02:00</option>
								      <option>UTC +03:00</option>
								      <option>UTC +03:30</option>
								      <option>UTC +04:00</option>
								      <option>UTC +04:30</option>
								      <option>UTC +05:00</option>
								      <option>UTC +05:30</option>
								      <option>UTC +05:45</option>
								      <option>UTC +06:00</option>
								      <option>UTC +06:30</option>
								      <option>UTC +07:00</option>
								      <option>UTC +08:00</option>
								      <option>UTC +08:45</option>
								      <option>UTC +09:00</option>
								      <option>UTC +09:30</option>
								      <option>UTC +10:00</option>
								      <option>UTC +10:30</option>
								      <option>UTC +11:00</option>
								      <option>UTC +12:00</option>
								      <option>UTC +12:45</option>
								      <option>UTC +13:00</option>
								      <option>UTC +14:00</option>
								    </select>
						        </div>
						        <div class="input-field col s4">
						          <input id="rate" type="text" class="validate">
						          <label for="rate">Rate </label>
						        </div>
						      </div>
						      <div class="row">
						        <div class="input-field col s12">
						          <textarea id="textarea1" class="materialize-textarea"></textarea>
						          <label for="textarea1">Description</label>
						        </div>
						      </div>
						     
						    </form>
						  </div>
				        </div>
				        <div class="modal-footer">
				        	<button type="button" class="waves-effect waves-light btn"> ADD </button>	
				          <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
				        </div>
				      </div>
	  				</div>

<style>
	.card{
		height:650px;
	}
	.scrollable{
		overflow-y: auto;
  		height: 650px;
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