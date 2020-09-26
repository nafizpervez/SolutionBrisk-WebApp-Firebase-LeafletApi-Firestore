<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>

<?php include 'includes/navbar.php';?>

<div class="jumbotron jumbotron-fluid bg-info">
  <div class="container">
    <h1 class="display-3">Don't have an account?</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="card bg-dark text-white">
  <img src="img/signup/signup.jpg" class="card-img img-fluid" alt="...">
  <div class="card-img-overlay">
  </div>
</div>
</div>


<div class="container ">
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">District</label>
      <select class="custom-select" id="validationCustom04" required>
        <option value="dhaka">Dhaka</option>
        <option value="chittagong">Chittagong</option>
        <option value="sylhet">Sylhet</option>
        <option value="khulna">Khulna</option>
        <option value="rajshahi">Rajshahi</option>
        
        
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reapeated Password</label>
    <input type="repeatpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <form action="/action_page.php">
    <input type="file" id="myFile" name="filename">
  </form>
  <hr class="my-4>">

  <a href="signup.php" class="btn btn-success btn-lg btn-responsive " role="button" aria-pressed="true">Sign Up</a>
  <hr class="my-5>">
</form>
</div>



<!--Breadcrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="signin.php">Sign In</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
  </ol>
</nav>
<!--Breadcrumb end-->
<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>