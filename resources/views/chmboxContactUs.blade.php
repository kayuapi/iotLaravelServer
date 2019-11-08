<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - chmbox</title>
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
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/contact-us') }}">Request demo</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/demo') }}">Demo</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Request Demo</h2>
                <p>The team is currently working on the prototype to illustrate the proof of concept. If you are interested, let us know by filling in the form below or email us at demo@chmbox.tech !</p>
            </div><form enctype="text/plain" method="get" action="mailto:demo@chmbox.tech">
                <div class="form-group"><label>Name</label><input type="text" class="form-control" /></div>
                <div class="form-group"><label>Subject</label><input type="text" class="form-control" /></div>
                <div class="form-group"><label>Email</label><input type="email" class="form-control" /></div>
                <div class="form-group"><label>Message</label><textarea class="form-control"></textarea></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
            </form></div>
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
