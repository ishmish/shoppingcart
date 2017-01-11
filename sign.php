<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>signup/Login</title>
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



      <center>
	  <div class="container-fluid" >
 <div class="row" >    
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
	  
	  <div class="textbody">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>save your favorite items for later and see and track orders. Rest assured your information will not be sold, traded, or given to anyone.</p>
        <p></p><br> Please contact <a mailto:href="lushcandie@gmail.com"></a>lushcandie@gmail.com</a> for any other inquiries.</p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="loginemail">Email:</label>
              <div class="controls">
                <input type="email"  class="form-control input-large" name="loginemail" id="loginemail" placeholder="Email..." required="" value="<?php echo addslashes($_POST['loginemail']) ?>"/>

              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="loginpassword">Password:</label>
              <div class="controls">
                	<input type="password" class="form-control input-large" id="loginpassword" name="loginpassword"  />
	
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="login"></label>
              <div class="controls">
           <input type="submit" name="login" value="Log in" class="btn-success">
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="name">First Name:</label>
              <div class="controls">
                <input type="text" class="form-control input-large" name="name" id="name" placeholder="First Name..." value="<?php echo addslashes($_POST['name']) ?>"/>

              </div>
			  
			  
            <div class="control-group">
              <label class="control-label" for="lastname">last Name:</label>
              <div class="controls">
                <input type="text" class="form-control input-large" name="lastname" id="lastname" placeholder="Last Name..." value="<?php echo addslashes($_POST['lastname']) ?>"/>

              </div>
			  
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input type="email" class="form-control input-large" name="email" id="email" placeholder="Email..." value="<?php echo addslashes($_POST['email']) ?>"/>

              </div>
            </div>
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>>8 Characters atlease one capital</em>
              </div>
            </div>
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="password2">Re-Enter Password:</label>
              <div class="controls">
                <input id="password2" name="password2" type="password" placeholder="********" class="input-large form-control" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="address">Address:</label>
              <div class="controls">
                <input id="address" name="address"  type="text" placeholder="Address.." class="form-control input-large" required="">
              </div>
            </div>
            
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <input id="signup" name="signup" class="btn btn-success" value="Sign up" type="submit">
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
	  
	      <div class="footer">
       
        </center>
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