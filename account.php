<?php session_start(); 
include("connection.php");
include("varphp.php");


?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Fluid Layout Example</title>
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
				<li class="col-md-12"><a href="index.php" >Return</a></li>


				
            </ul>
        </div>
    </div>
</nav>
</div>
</div><div id="section0" class="clear">
<div class="container" >
	  
<?php 



	include("login.php");


	?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Orders</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Order History</td>
      </tr>
      <tr>
        <td>Track Orders</td>
 		
      </tr>
	  
	   <tr>
        <td>Candie Favorites</td>
		
      </tr>
	  <tr>
        <td>Problem with an order?<a href="mailto:lushcandie@hotmail.co.uk"> Contact Us</a></td>
		
      </tr>
      <tr>
	  
      </tr>
    </tbody>
  </table>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Account Details</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>E-Mail</td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td>First Name</td>
        <td><?php echo $name ?></td></td>
		
      </tr>
	  
	   <tr>
        <td>Last Name</td>
        <td><?php echo $lastname ?></td></td>
		
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo $address ?></td></td>
      </tr>
    </tbody>
  </table>



</div>	  
</div>	  
	  
	  
	  
 <footer class="footer navbar-fixed-bottom">
      <div class="container">
        <p class="text-muted">Designed by MMMW &#169;</p>
      </div>
    </footer>

	
</body>
</html>      