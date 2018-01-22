<!DOCTYPE html>
<html>
<head>
<title>MovieMania | Latest Movie Information</title>

<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<link rel="stylesheet" type="text/css" href="style.css">

</head>    
<body>
<header id="home" class="header-area">    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MovieMania </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="one active">Home</a></li> 
        <li><a href="#about" class="one">Popular Movies</a></li>   
      </ul>
    </div>
  </div>
</nav>    
</header>
<section id="img-div"><div id="color-div"></div></section>    
<section id="search" class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="search-title">
            <h1>Latest Movie | Series Information <a>@MovieMania</a></h1>
            </div>
            <div class="line"></div>
            </div>    
        </div>
    <div class="row">
        <div class="col-md-offset-1 col-xs-offset-1 col-md-10 col-xs-10">
            <div class="search-content">
            <form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                <label>Search for Movie or Series<span class="error"> *</span></label>
                <input type="text" name="title" placeholder="Enter the Movie or Series Title">
                <center><input type="submit" name="submit" value="Search Media"></center>
            </form>
            </div>    
        </div>
    </div>
    </div>    
</section>    
<footer id="">
    <div class="container">
        <div class="row">
            <div class="follow">
                <div class="col-md-12">
                    <div class="section-header text-center">
                    <h2>Follow Us on</h2>
                    <div class="line"></div>    
                    <p>Meet our Social media group here</p>   
                    </div>
                </div>     
            </div>
        </div>    
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="followicons">
                    <a><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                      
              </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="footer-text text-center">
                <p>Copyright &copy; 2017  MovieMania - by <a href="">ChinmayShimpi</a></p>
            </div>
        </div>
        </div>    
    </div>
</footer>
  <?php
    
    session_start();
    if(isset($_GET["submit"]))
    {
    $Title=rawurlencode($_GET["title"]);
    $_SESSION["ttl"]=$Title;
    header("Location:output.php");    
    }
?>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
</body>
</html>    