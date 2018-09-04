        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

        <!-- Title -->
        <title>Bootlegged</title>

        </head>
        <head>


        <body class="">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top animated faded-In">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src={{ asset('images/logo_gold.png') }} width="80" height="auto" class="d-inline-block align-top float-left" alt=""> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <a class="btn navbar-btn ml-2 btn-primary text-dark">
                        <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</a>
                </div>
            </div>
        </nav>
        <div class="py-5 text-center" style="background: url(/images/background.jpg);background-size:cover;background-repeat:no-repeat;">
            <div class="container py-5 mr-auto">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="mb-4 text-light text-left display-4">Welcome to</h1>
                        <h1 class="mb-4 text-light text-left display-3">Bootlegged</h1>
                        <p class="lead mb-5 text-light text-left">Bootlegged is a peer to peer marketplace where buyers and sellers of alcoholic</p>
                        <p>
                            <a class="btn btn-primary btn-lg float-left role="button">Discover &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
        </div>

        <div class="container-fluid">
            <h1 class="text-center mb-3">Bootlegged Sample Products</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto">
                    <div class="carousel-item col-md-3 active">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 1</h4>
                                <p class="card-text">This is Wine Bottle 1 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 2</h4>
                                <p class="card-text">This is Wine Bottle 2 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 3</h4>
                                <p class="card-text">This is Wine Bottle 3 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 4</h4>
                                <p class="card-text">This is Wine Bottle 4 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 5/h4>
                                <p class="card-text">This is Wine Bottle 5 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 6</h4>
                                <p class="card-text">This is Wine Bottle 6 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="/images/bottle_sample.png" alt="Bottle_Sample1">
                            <div class="card-body">
                                <h4 class="card-title">Bottle 7</h4>
                                <p class="card-text">This is Wine Bottle 7 description.</p>
                                <a href="#" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img class="img-fluid d-block" src="/images/content_1.jpg"> </div>
                    <div class="col-md-5">
                        <h1 class="">
                            <b>
                                <br>
                                <br>
                                <br>
                                <br>Interested?</b>
                        </h1>
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3 class="text-left">
                            <br>Bootlegged
                        </h3>
                        <p>is a peer to peer marketplace where buyers and sellers of alcoholic</p>
                        <a class="btn btn-lg btn-primary" href="#">Discover </a>
                    </div>
                    <div class="col-md-7">
                        <p><img class="img-fluid d-block" src="/images/content_2.jpg"> </div></p>

                </div>
            </div>
        </div>
        <div class="py-5 text-center bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-4 text-white">Our products</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-6 p-1">
                        <a href="#">
                            <img class="d-block img-fluid" src="/images/bottle_sample.png"> </a>
                    </div>
                    <div class="col-md-3 col-6 p-1">
                        <a href="#">
                            <img class="d-block img-fluid" src="/images/bottle_sample.png"> </a>
                    </div>
                    <div class="col-md-3 col-6 p-1">
                        <a href="#">
                            <img class="d-block img-fluid" src="/images/bottle_sample.png"> </a>
                    </div>
                    <div class="col-md-3 col-6 p-1">
                        <a href="#">
                            <img class="d-block img-fluid" src="/images/bottle_sample.png"> </a>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <div class="bg-dark text-white">
            <div class="container">
                <div class="row">

                        <img class="p-4 col-md-4 img-responsive" height = 280px src="/images/logo1.png" >

                    <div class="p-4 col-md-4"></div>
                    <div class="p-4 col-md-4">
                        <h2 class="mb-3">Contact</h2>
                        <p>
                            <a href="tel:+03 - 123 456 7890" class="text-white">
                                <i class="fa d-inline mr-3 text-secondary fa-phone"></i>+03 - 123 456 7</a>890</p>
                        <p>
                            <a href="mailto:info@bootlegged.com" class="text-white">
                                <i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@bootlegged.com</a>
                        </p>
                        <p>
                            <a href="https://goo.gl/maps/9qj7873okQs" class="text-white" target="_blank">
                                <i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>123 FLinders Street, M</a>elbourne</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <p class="text-center text-white">© Copyright 2018 NostraData - All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>

        <script type="text/javascript">
            $(document).scroll(function(){
                var height = $(".navbar").height();
                if( $(this).scrollTop() > 450){
                    $(".navbar").css("background-color","black");
                }else{
                    $(".navbar").css("background-color","transparent");
                }
            });

            $(document).ready(function() {
                $("#myCarousel").on("slide.bs.carousel", function(e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 4;
                    var totalItems = $(".carousel-item").length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $(".carousel-item")
                                    .eq(i)
                                    .appendTo(".carousel-inner");
                            } else {
                                $(".carousel-item")
                                    .eq(0)
                                    .appendTo($(this).find(".carousel-inner"));
                            }
                        }
                    }
                });
            });


        </script>
</html>
