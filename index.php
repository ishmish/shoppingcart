<!DOCTYPE html>
<?php session_start(); 
include("login.php");

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lush candie</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="csslush.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="lushjs.js"></script>

</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fixed col-sm-12 col-xs-12 col-md-12 navbar-fixed-top ">
<div class="row">
<div  class="jumbotron1">
    <div class="container-fluid  hidden-xs">
       <a href="index.php"> <h1 class="lush2"><strong>L</strong>ush<strong>C</strong>andie</h1></a>
    </div>
</div>


<nav id="myNavbar" class="navbar-default navbar" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-left navbar-left" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="hidden-sm hidden-md hidden-lg hidden-xl"><a class="navbar-brand" href="#section0"><h1 class="lush">LC</h1></a></div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav" id="menulist">
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section1" >Sale</a></li>
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section2" >Bracelets</a></li>
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section3" >Contact</a></li>
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section4" >Earrings</a></li>
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section5" >Rings</a></li>
				<li class="col-xs-6 col-sm-2 col-md-2"><a href="#section6" >Sets</a></li>

				
            </ul>
        </div>
    </div>
</nav>
</div>
</div><div id="section0" class="clear">
<div class="container-fluid"  >
<!-- carousel -->
<section class="main-slider"  >
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">


    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <!-- Carousel items -->
    <div class="carousel-inner">

      <!-- Slide 1 : Active -->
      <div class="item active">
        <img src="http://cl.ly/image/3J45082V2c1L/banner_04.jpg" alt="" class="img-responsive">
        <div class="carousel-caption">
          <h3>Slide 1</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide1 -->

      <!-- Slide 2 -->
      <div class="item ">
        <img src="http://cl.ly/image/3J45082V2c1L/banner_01.jpg" alt="" class="img-responsive">
        <div class="carousel-caption">
          <h3>Slide 2</h3>
          <p>Etiam porta sem malesuada magna mollis euismod.</p>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide2 -->

      <!-- Slide 3 -->
      <div class="item ">
        <img src="http://cl.ly/image/3J45082V2c1L/banner_02.jpg" alt="" class="img-responsive">
        <div class="carousel-caption">
          <h3>Slide 3</h3>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide3 -->

      <!-- Slide 4 -->
      <div class="item ">
        <img src="http://cl.ly/image/3J45082V2c1L/banner_03.jpg" alt="" class="img-responsive">
        <div class="carousel-caption">
          <h3>Slide 4</h3>
          <p>Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide4 -->

    </div><!-- /.carousel-inner -->


    <!-- Controls -->
    <div class="control-box">
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.control-box -->


  </div><!-- /#myCarousel -->
</section><!-- /.main-slider -->


<!-- top right icons -->
<div class="topright1">
<span class="icon glyphicon glyphicon-envelope"> </span>
<a href="<? if(!$_SESSION['id']) echo "sign.php"; else echo "account.php"; ?>"><span class="icon glyphicon glyphicon-user"> </span></a>  <? if($_SESSION['id']) echo '<a id="reload" href="index.php?logout=1"><span class="icon glyphicon glyphicon-log-out"> </span></a>';
?>


<a href="payment.php" ><span class="icon glyphicon glyphicon-shopping-cart"> </span></a>

</div>
<!-- top right icons finished -->

<div id="section1" class="container-fluid scrollpad">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 " >
            
			
			
			
			
		<img src="img/pic1.jpg" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 " >
           <img src="img/pic2.jpg" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 " >
		<img src="img/pic3.jpg" class="img-responsive">
 </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                
            </footer>
        </div>
    </div>

	<div id="section1" class="container-fluid scrollpad">
	<div class="test">this is some text1</div>	
	</div>
		<div id="section2" class="container-fluid scrollpad">
	<div class="test">this is some text2</div>	
	</div>
		<div id="section3" class="container-fluid scrollpad">
	<div class="test">this is some text3</div>	
	</div>
		<div id="section4" class="container-fluid scrollpad">
	<div class="test">this is some text4</div>	
	</div>
		<div id="section5" class="container-fluid scrollpad">
	<div class="test">this is some text5</div>	
	
	</div>
			<div id="section6" class="container-fluid scrollpad">
	<div class="test">this is some text6</div>	
	</div>
</div>
</div>

 <footer class="footer navbar-fixed-bottom">
      <div class="container">
        <p class="text-muted">Designed by MMMW &#169;</p>
      </div>
    </footer>
</body>
</html>                                		