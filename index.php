<?
//Config
$apikey='your api key @ sharkwifi.com';
$secret='your api secret @ sharkwifi.com';
$hardwareid='your hardware id';

include 'function.php';
//End Config
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="mt.png">

    <title>Login WIfi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <style>
	body{   
	background-image: url("art.jpeg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}
  </style>
  </head>

  <body>

    

    <main role="main">

        <div class="container"> <div class="text-center mt-3">
  <img src="mt.png" class="mb-1">
  </div>
		<div class="row">
  <div class="col-md-8 offset-md-2 mt-5 bg-light p-3 rounded">
  <div>
 
  <div class="row">
		<div class="col-md-6">
		<?=generatebutton($apikey,$secret,$hardwareid,'3')?>
		</div><div class="col-md-6"><h5>User Login </h5>
		<? if(@$_POST['login']!=""){
			$login=generateform($apikey,$secret,$_POST['username'],$_POST['password']);
			//echo $login;
			if($login==1){
				header("Location: http://login.sharkwifi.com/rest-api.php?dari=sukselogin");
die();
			}
			else{
				echo '<div class="alert alert-danger">Maaf login tidak di temukan</div>';
			}
			
		}?>
	<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="<?=@$_POST['username']?>" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="<?=@$_POST['password']?>"  required>
  </div>
 
  <button type="submit" name="login" class="btn btn-primary" value="login">Login</button>
</form>
		</div>
	</div>
  
  </div>
  </div>
</div>
		
		</div>

    </main>

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
