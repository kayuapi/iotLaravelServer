@extends('layouts.admin')

@section('content')
<div id="content">
	<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
		<div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
			<form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

			</form>
			<ul class="nav navbar-nav flex-nowrap ml-auto">

				<li class="nav-item dropdown no-arrow" role="presentation">
					<li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">{{Auth::user()->name}}</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
						<div
							class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
							<a
								class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
								<div class="dropdown-divider"></div>
										 <a class="dropdown-item" role="presentation" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
										 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							&nbsp;{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						</div>
		</li>
		</li>
		</ul>
	</div>
	</nav>
	@yield('dashboardContent')
</div>

@endsection
