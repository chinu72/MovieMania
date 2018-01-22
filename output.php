  <?php
		session_start();
		
		class Media
		{
			
			public $json;
			public $Title; 
			public function inputTitle($T)
			{
				$this->Title=$T;
			}
			public function getData()
			{
				$url = file_get_contents("http://www.omdbapi.com/?apikey=9c4ef0c6&t=$this->Title");
				$this->json = json_decode($url, true);
			}
            public function getTitle()
            {
                $ttl=$this->json["Title"];
                echo $ttl;    
            }
            public function getDirector()
            {
                $ttl=$this->json["Director"];
                echo $ttl;    
            }
            public function getWriter()
            {
                $ttl=$this->json["Writer"];
                echo $ttl;    
            }
            public function getActors()
            {
                $ttl=$this->json["Actors"];
                echo $ttl;    
            }
             public function getAwards()
            {
                $ttl=$this->json["Awards"];
                echo $ttl;    
            }
             public function getType()
            {
                $ttl=$this->json["Type"];
                echo $ttl;    
            }
             public function getTime()
            {
                $ttl=$this->json["Runtime"];
                echo $ttl;    
            }
             public function getYear()
            {
                $yr=$this->json["Year"];
                echo $yr;    
            }
             public function getGenre()
            {
                $gen=$this->json["Genre"];
                echo $gen;    
            }
            public function getRate()
            {
                $ttl=$this->json["imdbRating"];
                echo $ttl;    
            }
            public function getVotes()
            {
                $ttl=$this->json["imdbVotes"];
                echo $ttl;    
            }
            public function getlang()
            {
                $ttl=$this->json["Language"];
                echo $ttl;    
            }
            public function getPoster()
            {
                $post=$this->json["Poster"];
                echo $post;
            }
            public function getPlot()
            {
                $plot=$this->json["Plot"];
                echo $plot;
            }
		}
		if(isset($_SESSION["ttl"]))
		{
		$movie = new Media();
		$val=$_SESSION["ttl"];
		$movie->inputTitle($val);
	    $movie->getData();    
        }
?> 
<html>
<head>
<title>MovieMania | Latest Movie Information</title>

<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<link rel="stylesheet" type="text/css" href="style2.css">

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
        <li><a href="index.php" class="one">Home</a></li> 
      </ul>
    </div>
  </div>
</nav>    
</header>
<section id="post">
<div class="container" style="margin-top:100px">
    <div class="post-area">
    <div class="col-md-offset-1 col-md-3">
        <div class="poster">
        <img src="<?php $movie->getPoster();?>" class="img-responsive">
        </div>
    </div>
    <div class="col-md-offset-1 col-md-5 col-xs-12">
        <div class="plot-header"><h2><?php $movie->getTitle();?></h2>
        <h3><?php $movie->getYear();?></h3>
        <h3><i><?php $movie->getGenre();?></i></h3>
          <div class="line"></div>    
        </div>
      
        <div class="plot-icons">    
        <a><img src="images/icons8-imdb-50%20(1).png"><?php $movie->getRate();?></a>
        <br>
        <a><img src="images/icons8-love-50.png"><?php $movie->getVotes();?></a>
        <br>    
        <a><img src="images/icons8-time-50.png"><?php $movie->getTime();?></a>
            <br>
        <a><img src="images/icons8-clapperboard-50.png"><?php $movie->getType();?></a>
        <br>    
        <a><img src="images/icons8-trophy-50.png"><?php $movie->getAwards();?></a>    
        </div>
</div>        
</div>        
</div>
</section>
<section id="cast">
    <div class="container">
        <div class="cast-area">
        <div class="col-md-offset-1 col-md-5 col-xs-12"><div class="plot-info">
            <label>Synopsis:</label>
            <p>Language:<?php $movie->getlang();?></p>
            <div class="line"></div>
            <p><?php $movie->getPlot();?></p>
            </div>
            </div>
        <div class="col-md-offset col-md-5 col-xs-12">
            <div class="cast-info">
            <label>Director :</label>
            <p><?php $movie->getDirector();?></p>
            <div class="line"></div>    
            <label>Writer :</label>
            <p><?php $movie->getWriter();?></p>
            <div class="line"></div>    
            <label>Actors:</label>
            <p><?php $movie->getActors();?></p>
            </div>
            </div>
        </div>    
    </div>
</section>  
    
<footer id="">
    <div class="container">   
        <div class="row">
        <div class="col-md-12">
            <div class="footer-text text-center">
                <p>Copyright &copy; 2017  MovieMania - by <a href="">ChinmayShimpi</a></p>
            </div>
        </div>
        </div>    
    </div>
</footer>    
</body>    
</html>