<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Socialmedia Icon   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer {
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;

        }

        #foot {
            display: flex;
        }

        #foot li {
            position: relative;
            display: block;
            color: #666;
            font-size: 30px;
            height: 60px;
            width: 60px;
            background: #171515;
            line-height: 60px;
            border-radius: 50%;
            margin: 29px 22px 8px 8px;
            ;
            cursor: pointer;
            transition: .5s;
        }

        #foot li:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            background: #d35400;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            z-index: -1;
            transform: scale(0.9);
        }

        #foot li:hover::before {
            filter: blur(3px);
            transform: scale(1.2);
            box-shadow: 0 0 15px #d35400;
        }

        #foot li:hover {
            color: #ffa502;
            box-shadow: 0 0 15px #d35400;
            text-shadow: 0 0 15px #d35400;

        }
    </style>

    <title>Max &#x1F3AE; game</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="max.php">
            <img src="logo.png" width="100" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <h1 class="text-primary"> Max <span class="badge badge-secondary">New</span></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="max.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GAMES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="action.php">ACTION GAMES</a>
                        <a class="dropdown-item" href="#">RACES GAMES</a>
                        <a class="dropdown-item" href="#">SPORTS GAMES</a>
                        <a class="dropdown-item" href="#">PUZZELS GAMES</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">CATEGROY GAMES</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="p-3 mb-2 bg-dark text-white">

        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="1.jpg" height="400" width="600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1><a href="action.html" class="text-light bg-dark">Action Games</a></h1>
                            <h2><span class="badge badge-secondary">New</span></h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="2.jpg" height="400" width="600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1><a href="action.html" class="text-light bg-dark">Action Games</a></h1>
                            <h2><span class="badge badge-secondary">New</span></h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="3.jpg" height="400" width="600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1><a href="action.html" class="text-light bg-dark">Action Games</a></h1>
                            <h2><span class="badge badge-secondary">New</span></h2>

                        </div>
                    </div>
                </div>
                <br>
                <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="s1.jpg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Sports Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="s2.jpg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Sports Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="s3.jpeg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Sports Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>

                            </div>
                        </div>
                    </div>
                    <br>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="r1.jpg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Races Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="r2.jpg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Races Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="r3.jpg" height="400" width="600" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1><a href="#" class="text-light bg-dark">Races Games</a></h1>
                                <h2><span class="badge badge-secondary">New</span></h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <!-- Footer -->
        <footer class="footer">
            <div>
                <ul id="foot">
                    <li><a href="https://www.facebook.com/profile.php?id=100010939177189" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/paswan_abhijeet/" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/paswan-abhijeet-kumar-0074471a2/" target="_blank"><i
                                class="fa fa-linkedin"></i></a> </li>
                </ul>

                <p class="footer-copyright text-center py-3">
                    <a href="https://maxgamer.com"> Maxgamer.com</a>
                </p>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    </div>
</body>


</html>