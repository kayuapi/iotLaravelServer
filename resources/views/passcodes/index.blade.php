@extends('layouts.navigationbar')

@section('dashboardContent')

        <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Passcodes</h3>
                </div>
				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h5>Your item retrieval passcode and return passcode are listed as below:</h5>
				</div>

				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h6>Retrieval Passcode:
                                        {{$borrowCode}}
                                        </h6>					
				</div>
				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h6>Return Passcode:
                                        {{$returnCode}}
                                        </h6>
                                        
				</div>						
        </div>


@endsection

