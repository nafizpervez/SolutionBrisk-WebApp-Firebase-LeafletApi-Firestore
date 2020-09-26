<!DOCTYPE html>
<html lang="en">
<head>
  <title>Solution Brisk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<img class="img-fluid" src="img/signin/signin.jpg" alt="" style="width:100%">
<div class="container">


<div class="card-img-overlay">
  <h2 class="display-3" style="color:white;">Sign In</h2>
  <p class="lead" style="color:white;">*If you are already a member</p>
  <div class="jumbotron jumbotron">
  <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on all terms and conditions.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
      <a href="forgotpassword.php" class="btn btn-outline-info btn-responsive " role="button" aria-pressed="true">Forgot Password?</a>
    </div>
    <a href="#" class="btn btn-outline-success btn-lg btn-responsive " role="button" aria-pressed="true">Submit</a>
    <a href="signup.php" class="btn btn-success btn-lg btn-responsive " role="button" aria-pressed="true">Sign Up</a>
  </form>
</div>
<!--Breadcrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sign In</li>
  </ol>
</nav>
<!--Breadcrumb end-->
</div>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
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

</body>
</html>
