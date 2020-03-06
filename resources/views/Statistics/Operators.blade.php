@include('layouts.headerlog')
@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<body>
	<div class="container" style="width:80%; margin-right: 0px; margin-left: 0px">
    	<div class="row justify-content-center">
    		<div class="col-md-11">
    			<br> <br>
    			<!--search-->
    			<div class="input-group">

		        </div> 
		        			 @include('operatorstats')
			</div>
	  </div>
	</div>

	<script>
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });
        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });
    </script>
</body>

