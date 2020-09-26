<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>

<?php include 'includes/navbar.php';?>

<div class="card bg-dark text-white">
  <img src="img/signup/signup1.jpg" class="card-img img-fluid" alt="...">
  <div class="card-img-overlay">
  </div>
</div>
<div class="container-fluid " style="padding-top:2.25rem;">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1"><h1 class="display-4" style="position:relative;">Email address</h1></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"><p class="lead" style="position:relative;">The email which we will sent your password</p></small>
  </div>
  <a href="#" class="btn btn-outline-info  btn-responsive " role="button" aria-pressed="true">Reset my Password</a>
</form>
<hr class="my-5">
</div>
<!--Breadcrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="signin.php">Sign In</a></li>
    <li class="breadcrumb-item active" aria-current="page">Forgot Pass</li>
  </ol>
</nav>
<!--Breadcrumb end-->
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>


</body>
</html>