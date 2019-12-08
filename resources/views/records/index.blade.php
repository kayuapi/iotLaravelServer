@extends('layouts.navigationbar')

@section('dashboardContent')

        <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Records</h3>
                </div>
				<div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h5>Here you can check the borrowing and returning history of your chmbox usage.</h5>
				</div>
				<div class="container">
					<table class="table">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Records</th>
						</tr>
					  </thead>
					  <tbody>
						@foreach($records as $key=>$record)
						<tr>
						  <th scope="row">{{$key+1}}</th>
                            @if ($record->status === 'toreturn')
                                <td>Your return passcode is {{$record->passcode}}. Please return {{$record->compartment['item']['name']}} within an hour.</td>
						    @elseif ($record->status === 'returned')
                                <td>Your returned {{$record->compartment['item']['name']}} at {{$record->created_at}}.</td>
                            @else
                                <td>Your borrowed passcode is {{$record->passcode}}. You borrowed {{$record->compartment['item']['name']}} at {{$record->created_at}}.</td>
                            @endif
                        </tr>
						@endforeach
					  </tbody>
					</table>
				</div>
                                {{$records->links()}};



        </div>


@endsection

