<!DOCTYPE html>
<html lang="en">
<head>
<!--Header Start-->
	<?php include 'includes/head.php';?>
<!-- reference to Leaflet CSS -->
<link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""
    />

<!-- reference to Leaflet JavaScript -->
   <script
      src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
      integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
      crossorigin=""
    ></script>

<!-- set width and height styles for map -->
<style>
#map {
    
    height:600px;
   
    position: relative;
    top:0;bottom: 0;
    left: 0;
    right: 0;
}
</style>

<!--Header End-->
</head>
<body>
<!--Navigation start-->
<?php $page = '#'; include 'includes/navbar.php';?>
<!--Navigation End-->



<!--Content of the body starts from here-->


<!--Carousel Fade starts-->
<div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	  <img src="img/home/home0.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h1 class="display-3">Find Nearby Services</h1>
        <p>Getting ready to repair, refurnish, refueling or remodeling your car?</p>
        <a href="location.php" class="btn btn-outline-light btn-lg btn-responsive " role="button" aria-pressed="true">Learn More</a>
        <a href="signin.php" class="btn btn-outline-success btn-lg btn-responsive " role="button" aria-pressed="true">Get Started</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/home/home1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3" >Wash Your Car</h1>
          <p>Getting ready to repair, refurnish, refueling or remodeling your car?</p>
          <a href="services.php" class="btn btn-outline-light btn-lg btn-responsive " role="button" aria-pressed="true">Learn More</a>
          <a href="signin.php" class="btn btn-outline-success btn-lg btn-responsive " role="button" aria-pressed="true">Get Started</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/home/home2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3">Regular Inspect</h1>
          <p>We are right at your service at anytime, anywhere you want inside the Dhaka. Our services can reach you at any desired time you want.</p>
          <a href="services.php" class="btn btn-outline-light btn-lg btn-responsive " role="button" aria-pressed="true">Learn More</a>
          <a href="signin.php" class="btn btn-outline-success btn-lg btn-responsive " role="button" aria-pressed="true">Get Started</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Carousel Fade End-->

<!--Card part start -->
<div class="card text-center">
  <div class="card-header">
  &copy; All Right Reserved
  </div>
  <div class="card-body">
    <h1 class="card-title display-2">Solution Brisk</h1>
    <p class="card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maiores dignissimos sequi cumque beatae, amet at facere deleniti nostrum suscipit ullam, aperiam et quod assumenda tempore nam, quas dolore animi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur deleniti doloribus quibusdam error explicabo eos omnis aperiam, quas unde eum, ducimus pariatur dolore! Modi alias at nesciunt voluptatibus aliquid.</p>
  </div>
  
<div class="card-group">

    <div class="card bg-dark text-white">
      <img src="img/home/service0.jpg" class="card-img img-fluid" alt="...">
      <div  class="card-img-overlay text-center">
        <svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <h5 class="card-title">Become A Member</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Learn More</a>
      </div>
    </div>

    <div class="card bg-dark text-white">
      <img src="img/home/location.jpg" class="card-img img-fluid" alt="...">
      <div class="card-img-overlay">
        <svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-geo-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
        </svg>
        <h4 class="card-title ">Find Services</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="location.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Learn More</a>
      </div>
    </div>

    <div class="card bg-dark text-white">
      <img src="img/home/service1.jpg" class="card-img img img-fluid" alt="...">
      <div class="card-img-overlay">
        <svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-bookmark-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
          <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
        </svg>
        <h5 class="card-title">Authentic Services</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="authenticservices.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Learn More</a>    
      </div>
  </div>
</div>  
<!--Card Part End-->

<!--Jumbotron Start-->
<div class="jumbotron">
  <h1 class="display-4">We Care about service!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>In June 1950, the company produced only 300 trucks and was on the verge of going out of business. The management announced layoffs and wage reductions, and in response the union went on a strike that lasted two months. The strike was resolved by an agreement that included layoffs and pay reductions but also the resignation of the president at the time, Kiichiro Toyoda. Toyoda was succeeded by Taizo Ishida, who was the chief executive of the Toyoda Automatic Loom company.[4] The first few months of the Korean War resulted in an order of over 5,000 vehicles from the US military, and the company was revived. Ishida was credited for his focus on investment in equipment. One example was the construction of the Motomachi Plant in 1959, which gave Toyota a decisive lead over Nissan during the 1960s.[4]
    In 1950, a separate sales company, Toyota Motor Sales Co., was established (which lasted until July 1982). In April 1956, the Toyopet dealer chain was established. In 1957, the Crown became the first Japanese car to be exported to the United States and Toyota's American and Brazilian divisions, Toyota Motor Sales Inc. and Toyota do Brasil S.A., were also established.
    It uses utility classes for typography and spacing to space content out within the larger container Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, molestias? Ipsa ex a natus explicabo, neque sed ducimus vitae expedita! Ducimus cupiditate voluptatibus fugiat? Ab delectus obcaecati facere minima.</p>
  <a class="btn btn-outline-info btn-lg" href="services.php" role="button">Learn more</a>
</div>
<!--Jumbotron End-->

<!--Location Api Start-->
<h1 class="display-3">Want to know your Latitude & Longitude.</h1>
<a href="#" class="btn btn-outline-success  btn-responsive btn-lg " role="button"  onclick="getLocation()">Your Location</a>
<p id="demo"></p>
<?php include 'locationlanglatapi.php'; ?>
<div class="jumbotron">
  <p class="lead">You Can find the best service now in this area.</p>
  <div  id="map"></div>
  <hr class="my-2">
  <p class="card-text"><small class="text-muted">&copy; leaflet. Done by nafizpervez</small></p>
</div>
<?php include 'geolocationapi.php'; ?>
<!--Location Api End-->


<!--card Start-->  
  <div class="card-deck">
  <div class="card">
    <img src="img/home/cardpic1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="max-height:10px">Authentic</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/home/cardpic2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Accelerate</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/home/cardpic3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Acquisitive</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<!--Card End-->



<!--Jumbotron Start-->
<div class="jumbotron">
  <h1 class="display-4">Your Daily Companion!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>In June 1950, the company produced only 300 trucks and was on the verge of going out of business. The management announced layoffs and wage reductions, and in response the union went on a strike that lasted two months. The strike was resolved by an agreement that included layoffs and pay reductions but also the resignation of the president at the time, Kiichiro Toyoda. Toyoda was succeeded by Taizo Ishida, who was the chief executive of the Toyoda Automatic Loom company.[4] The first few months of the Korean War resulted in an order of over 5,000 vehicles from the US military, and the company was revived. Ishida was credited for his focus on investment in equipment. One example was the construction of the Motomachi Plant in 1959, which gave Toyota a decisive lead over Nissan during the 1960s.[4]
    In 1950, a separate sales company, Toyota Motor Sales Co., was established (which lasted until July 1982). In April 1956, the Toyopet dealer chain was established. In 1957, the Crown became the first Japanese car to be exported to the United States and Toyota's American and Brazilian divisions, Toyota Motor Sales Inc. and Toyota do Brasil S.A., were also established.
    It uses utility classes for typography and spacing to space content out within the larger container Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, molestias? Ipsa ex a natus explicabo, neque sed ducimus vitae expedita! Ducimus cupiditate voluptatibus fugiat? Ab delectus obcaecati facere minima.</p>
  <a class="btn btn-outline-info btn-lg" href="services.php" role="button">Learn more</a>
</div>
<!--Jumbotron End-->

<!--Two Column Responsive Section Start 1-->
<hr class="my-4">
<div class="container-fluid padding">
	<div class=" row padding">
		<div class="col-md-12 col-lg-6">
			<h2>In Emergency</h2>
			<p>We give priority to everyone and service is our main goal</p>
			<p>After World War II, Japan experienced extreme economic difficulty. Commercial passenger car production started in 1947 with the model SA. The company was on the brink of bankruptcy by the end of 1949, but the company eventually obtained a loan from a consortium of banks which stipulated an independent sales operation and elimination of "excess manpower".</p>
			<p>In June 1950, the company produced only 300 trucks and was on the verge of going out of business. The management announced layoffs and wage reductions, and in response the union went on a strike that lasted two months. The strike was resolved by an agreement that included layoffs and pay reductions but also the resignation of the president at the time, Kiichiro Toyoda. Toyoda was succeeded by Taizo Ishida, who was the chief executive of the Toyoda Automatic Loom company.[4] The first few months of the Korean War resulted in an order of over 5,000 vehicles from the US military, and the company was revived. Ishida was credited for his focus on investment in equipment. One example was the construction of the Motomachi Plant in 1959, which gave Toyota a decisive lead over Nissan during the 1960s</p>
			<br>
			<a href="location.php" class="btn btn-outline-success btn-lg">Learn More?</a>
      <br>
      <br>
		</div>
		<div class="col-lg-6">
      <img src="img/home/home0.jpg" class="img-fluid" alt="...">	
		</div>
	</div>
</div>
<hr class="my-4">
<br>
<!--Two Column Responsive Section End-->

<!--Two Column Responsive Section Start 2-->
<div class="container-fluid padding">
	<div class=" row padding">
		<div class="col-md-12 col-lg-6">
			<h2>Authentic Service</h2>
			<p>We give priority to everyone and service is our main goal</p>
			<p>After World War II, Japan experienced extreme economic difficulty. Commercial passenger car production started in 1947 with the model SA. The company was on the brink of bankruptcy by the end of 1949, but the company eventually obtained a loan from a consortium of banks which stipulated an independent sales operation and elimination of "excess manpower".</p>
			<p>In June 1950, the company produced only 300 trucks and was on the verge of going out of business. The management announced layoffs and wage reductions, and in response the union went on a strike that lasted two months. The strike was resolved by an agreement that included layoffs and pay reductions but also the resignation of the president at the time, Kiichiro Toyoda. Toyoda was succeeded by Taizo Ishida, who was the chief executive of the Toyoda Automatic Loom company.[4] The first few months of the Korean War resulted in an order of over 5,000 vehicles from the US military, and the company was revived. Ishida was credited for his focus on investment in equipment. One example was the construction of the Motomachi Plant in 1959, which gave Toyota a decisive lead over Nissan during the 1960s</p>
			<br>
			<a href="authenticservices.php" class="btn btn-outline-success btn-lg">Learn More?</a>
      <br>
      <br>
		</div>
		<div class="col-lg-6">
      <img src="img/home/home2.jpg" class="img-fluid" alt="...">	
		</div>
	</div>
</div>
<hr class="my-4">
<br>
<!--Two Column Responsive Section End-->



<!--Breadcrumb start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<!--BreadCrumb End-->
<!--Footer Start-->
<?php include 'includes/footer.php'; ?>
<!--Footer End-->
<!--Script Start-->
<?php include 'includes/scripts.php'; ?>
<!--Script End-->

</body>
</html>








