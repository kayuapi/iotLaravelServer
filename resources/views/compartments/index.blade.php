@extends('layouts.navigationbar')

@section('dashboardContent')

        <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Entertainment Units</h3>
                </div>
				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h5>We offer various entertainment units for you to enjoy during your free time. Please help us to take good care of them.</h5>
				</div>
				@if(count($compartments) > 0)
				@foreach($compartments as $key=>$value)
				<button name="entertainmentUnit" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#myModal" data-item={{ $key }}>
						<i class="fa fa-{{ $key }} fa-5x"></i><br/>
						{{ $key }} <br> Available Unit: {{ $value }} 
				</button>
				@endforeach
				@else
				@endif						
						
			  
			  <!-- The Modal -->
			  <div class="modal" id="myModal">
				<div class="modal-dialog" id='1'>
				  <div class="modal-content">
				  
					<!-- Modal Header -->
					<div class="modal-header">
					  <h4 class="modal-title">Important!!! Borrowing the <span id="modal-label">item</span></h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<!-- Modal body -->
					<div class="modal-body">
					  This unit is highly in demand. <strong>Please ensure that you retrieve the item from the locker once you click 'Borrow'.</strong> Failure to do so might cause you to get banned from future usage. 
					</div>
					
					<!-- Modal footer -->
					<div class="modal-footer">
					{!! Form::open(
						['route' => 'compartments.borrow', 
						 'class' => 'form'
						]) !!}
					{!! Form::hidden('item', '', ['id' => 'compartment-item']) !!}
					{!!	Form::submit('Click Me!'); !!}	
					  <button type="submit" class="btn btn-primary" data-dismiss="modal">Borrow</button><button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>					
					{!! Form::close() !!}
					</div>

				  </div>
				</div>
			  </div>

				    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-charts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
		<script type="text/javascript"> 
		
			console.log('b');
			$('#myModal').on("show.bs.modal", function (e) {
				$("#modal-label").html($(e.relatedTarget).data('item'));
				$("#compartment-item").val($(e.relatedTarget).data('item'));
			});
			console.log('a');
		
		</script>			  
        </div>


@endsection

