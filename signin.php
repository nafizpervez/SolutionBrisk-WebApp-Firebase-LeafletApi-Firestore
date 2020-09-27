<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Solution Brisk Login</title>
</head>
<body class="grey lighten-3">

  <!-- NAVBAR -->
  <nav class="z-depth-0 grey lighten-4">
    <div class="nav-wrapper container">
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="logged-in" style="display">
            <a href="#" class="grey-text modal-trigger" data-target="modal-account">Account</a>
          </li>
          <li class="logged-in">
            <a href="#" class="grey-text" id="logout">Logout</a>
          </li>
          
          <li class="logged-out">
            <a href="#" class="grey-text modal-trigger" data-target="modal-login">Login</a>
          </li>
          <li class="logged-out">
            <a href="#" class="grey-text modal-trigger" data-target="modal-signup">Sign up</a>
          </li>
        </span>
      </ul>
    </div>
  </nav>


  
  <!-- SIGN UP MODAL -->
  <div id="modal-signup" class="modal">
    <div class="modal-content">
      <h4>Sign up</h4><br />
      <form id="signup-form">
        <div class="input-field">
          <input type="email" id="signup-email" required />
          <label for="signup-email">Email address</label>
        </div>
        <div class="input-field">
          <input type="password" id="signup-password" required />
          <label for="signup-password">Choose password</label>
        </div>
        <button class="btn yellow darken-2 z-depth-0">Sign up</button>
      </form>
    </div>
  </div>

<!-- LOGIN MODAL -->
<div id="modal-login" class="modal">
    <div class="modal-content">
    <h4>Login</h4><br />
    <form id="login-form">
        <div class="input-field">
        <input type="email" id="login-email" required />
        <label for="login-email">Email address</label>
        </div>
        <div class="input-field">
        <input type="password" id="login-password" required />
        <label for="login-password">Your password</label>
        </div>
        <button class="btn yellow darken-2 z-depth-0">Login</button>
    </form>
    </div>
</div>

<!-- ACCOUNT MODAL -->
<div id="modal-account" class="modal">
<div class="modal-content center-align">
    <h4>Account details</h4><br />
    <div class="account-details"></div>
    <div class="account-extras"></div>
</div>
</div>



 <!-- GUIDE LIST -->
<div class="container" style="margin-top: 40px;">
    <ul class="collapsible z-depth-0 guides" style="border: none;">
        

    </ul>
  </div>
<!--Lower Card column Section EnD-->
<!--Breadcrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Go Back Home</a></li>
    
  </ol>
</nav>
<!--Breadcrumb end-->

<!--Firebase-->
                    <!-- The core Firebase JS SDK is always required and must be listed first -->
                <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
                <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-auth.js"></script>
                <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-firestore.js"></script>

                    <!-- TODO: Add SDKs for Firebase products that you want to use
                        https://firebase.google.com/docs/web/setup#available-libraries -->
                <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-analytics.js"></script>

                <script>
                    // Your web app's Firebase configuration
                    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
                    var firebaseConfig = {
                        apiKey: "AIzaSyBTr8wFs_gCLeLboRLd3JjoP_Z9PeWrOUo",
                        authDomain: "solutionbrisk.firebaseapp.com",
                        databaseURL: "https://solutionbrisk.firebaseio.com",
                        projectId: "solutionbrisk",
                        storageBucket: "solutionbrisk.appspot.com",
                        messagingSenderId: "45430578389",
                        appId: "1:45430578389:web:d8678d4b16b04d0c93d65c",
                        measurementId: "G-9V8TTTJ2CB"
                    };
                    // Initialize Firebase
                    if (!firebase.apps.length){
                    firebase.initializeApp(firebaseConfig);
                    firebase.analytics();
                    }

                    //make auth and firestore references
                    const auth = firebase.auth();
                    const db = firebase.firestore();

                    

                </script>



  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/auth.js"></script>
  <script src="scripts/index.js"></script>

</body>
</html>

