<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - chmbox</title>
    <meta name="description" content="An entertainment-unit-filled box for everyone!">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap2.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('assets/fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/smoothproducts.css') }}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">chmbox</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/contact-us') }}">Request demo</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/demo') }}">Demo</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page landing-page">
    <section class="clean-block clean-hero" style="color: rgba(9,162,255,0);filter: blur(0px);background-color: #ffffff;">
        <div class="row"><div class="col-md-8"><img src="{{ asset('assets/img/cabinetEdited.png') }}" class="img-responsive" /></div><div class="col-md-4 d-flex align-items-center">
                <div>
                    <h1 style="color: #000000;">chmbox™</h1>
                    <p style="color: #000000;">A smart cabinet filled with entertainment units, untuk semua!</p>
                </div>
            </div></div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">How chmbox™&nbsp;works?</h2>
                <p>chmbox™&nbsp;is a smart locker which contains many entertainment units such as xbox, oculus rift, board games, etc for the residents to borrow and share.</p>
            </div><h3 class="text-info">User guide for the residents</h3><div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card guide">
                        <div class="card-body" style="  height: 100%;
">
                            <div style="  text-align: center;
  padding: 30px;
"><img src="assets/img/icon/laptop.png" /></div>
                            <p class="card-text">Login to the website and select the entertainment unit which you like to borrow. You&#39;ll receive a passcode via email.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card guide">
                        <div class="card-body" style="  height: 100%;
">
                            <div style="  text-align: center;
  padding: 30px;
"><img src="assets/img/icon/locker.png" /></div>
                            <p class="card-text">Locate chmbox at your residential unit and enter the passcode to retrieve the entertainment unit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card guide">
                        <div class="card-body" style="  height: 100%;
">
                            <div style="  text-align: center;
  padding: 30px;
"><img src="assets/img/icon/playground.png" /></div>
                            <p class="card-text">For return purpose, a new passcode will be emailed to you once you retrieved the entertainment unit. Enjoy!</p>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Why us?</h2>
                <p>We pioneer the project and bring values to our customers.&nbsp;</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                    <h4>Adds unique selling points to the property</h4>
                    <p>We provide another entertainment facility to the property just like the swimming pool and the gym.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                    <h4>Provides values to the residents</h4>
                    <p>We like the residents to enjoy their homes as much as everyone does.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                    <h4>Integrates software and hardware solution</h4>
                    <p>We provide the hardware and software solutions needed to make the product work. Periodic maintenance services are provided too.</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                    <h4>A step towards the new sharing economy</h4>
                    <p>We move forwards to the direction of new sharing economy and the digitalization of everyday life .<br></p>
                </div>
            </div>
        </div>
    </section>
</main><footer class="page-footer">
    <div class="footer-copyright">
        <p>© 2019 CHMBOX</p>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/theme2.js') }}"></script>

</body>

</html>
