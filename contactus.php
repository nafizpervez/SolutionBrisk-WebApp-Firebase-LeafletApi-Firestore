<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php';?>
    <img src="img/signup/signup.jpg" alt="Norway" style="width:100%;">
</head>
<body>
<?php include 'includes/navbar.php';?>

<div class="container" style="position:relative;">
<hr class="my-4">
  <form action="action_page.php">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Area</label>
    <select id="country" name="country">
      <option value="uttara">Uttara</option>
      <option value="banani">Banani</option>
      <option value="bashundhara">Bashundhara</option>
      <option value="mohakhali">Mohakhali</option>
      <option value="norda">Norda</option>
      <option value="nikunja">Nikunja</option>
      
    </select>

    <label for="subject">Query</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
<hr class="my-5">
</div>

<!--Breadcrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
<!--Breadcrumb end-->

<!--Footer Start-->
<?php include 'includes/footer.php'; ?>
<!--Footer End-->
<!--Script Start-->
<?php include 'includes/scripts.php'; ?>
<!--Script End-->

</body>
</html>