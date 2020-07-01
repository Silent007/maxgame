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

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
/* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); */
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 40px;
padding-top: 20px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -21px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>

    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="max.html">
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
                    <a class="nav-link" href="max.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GAMES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="action.html">ACTION GAMES</a>
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
    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `login` ( `name`, `username`, `email`, `password`, `DOJ`) VALUES ( '$name', '$username', '$email', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

        
        }

      }

    }
   
    ?>

    <div class="p-3 mb-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fa fa-facebook"></i></span>
                            <span><i class="fa fa-google-plus-square"></i></span>
                            <span><i class="fa fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                        <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user" id="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user" id="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="username">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-email" id="fa fa-email"></i></span>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="Email ID">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                           <div>
                               <input href="max.php"  type="submit" value="Login" class="btn float-right login_btn">
                            </div>
                        </form>
</div>
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