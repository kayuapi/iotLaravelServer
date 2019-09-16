@extends('layouts.navigationbar')

@section('dashboardContent')
        <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
                <form role="form" action="" method="post">
                        @csrf
                        <button type="submit" name="entertainmentUnit" value="xbox" class="btn btn-sq-lg btn-primary">
                                <i class="fa fa-gamepad fa-5x"></i><br/>
                                Xbox <br> Available Unit: 2 
                        </button>
                        <button type="submit" name="entertainmentUnit" value="globe_model" class="btn btn-sq-lg btn-primary">
                                <i class="fa fa-globe fa-5x"></i><br/>
                                Globe Model <br> Available Unit: 5 
                        </button>
                        <button type="submit" name="entertainmentUnit" value="oculus_rift" class="btn btn-sq-lg btn-primary">
                                <i class="fa fa-gamepad fa-5x"></i><br/>
                                Oculus Rift <br> Available Unit: 1
                        </button>
                        <button type="submit" name="entertainmentUnit" value="laptop" class="btn btn-sq-lg btn-primary">
                                <i class="fa fa-laptop fa-5x"></i><br/>
                                Laptop with Minecraft <br> Available Unit: 3 
                        </button>
                        <button type="submit" name="entertainmentUnit" value="life_buoy" class="btn btn-sq-lg btn-primary">
                                <i class="fa fa-life-buoy fa-5x"></i><br/>
                                Lifebuoy for Kids <br> Available Unit: 3 
                        </button>
                </form>
        </div>
@endsection
