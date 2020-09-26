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

<!-- Start typing your body code here -->
 

<!--card carousel start-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>


  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/location/locationcover.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h1>Maintanance Services</h1>
        <p class="lead">Car Trouble? Browse for more authentic services and fast services.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/location/locationcover1.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h1>Emergency Services</h1>
        <p class="lead">Emegency Service at you hand in your daily companion</p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--card carousel end-->

<!--Location Geolocation api 1-->
<div class="jumbotron jumbotron-fluid">
  <div class=" text-center">
    <h1 class="display-4">Authentic Services</h1>
    <p class="lead"><p>Authetic service center from where we can give you services.</output></p>
		<div  id="map"></div>
		<hr class="my-2">
		<p class="card-text"><small class="text-muted">&copy; leaflet. Done by nafizpervez</small></p>
	</div>




<script>
// create map object
		var map = L.map('map',{scrollWheelZoom:false}).setView([23.878932, 90.390686], 14);
		// add base map tiles from OpenStreetMap and attribution info to 'map' div
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
			var marker = L.marker([23.883241, 90.388409]).addTo(map);
			var marker1 = L.marker([23.878583, 90.389251]).addTo(map);
			var marker2 = L.marker([23.873767, 90.385694]).addTo(map);
			var marker3 = L.marker([23.870331, 90.382132]).addTo(map);
			var marker4 = L.marker([23.867576, 90.383792]).addTo(map);
			var marker5 = L.marker([23.878326, 90.400841]).addTo(map);
			var marker6 = L.marker([23.874539, 90.372989]).addTo(map);
			var marker7 = L.marker([23.874019, 90.374706]).addTo(map);
			var marker8 = L.marker([23.873146, 90.374824]).addTo(map);
			var circle = L.circle([23.878932, 90.390686],{
				color: 'red',
				fillColor: '#f03',
				fillOpacity: 0.2,
				radius: 2000
			}).addTo(map);
			
			marker1.bindPopup("<b>Sayem Automobiles</b>").openPopup();
			marker.bindPopup("<b>Solution Brisk</b>").openPopup();
			marker2.bindPopup("<b>Bismillah Auto</b>").openPopup();
			marker3.bindPopup("<b>Al-Madina Automobiles</b>").openPopup();
			marker4.bindPopup("<b>S Auto</b>").openPopup();
			marker5.bindPopup("<b>AG Auto</b>").openPopup();
			marker6.bindPopup("<b>Vehicle Care</b>").openPopup();
			marker7.bindPopup("<b>H.A. Automobiles</b>").openPopup();
			marker8.bindPopup("<b>Speed Car Wash</b>").openPopup();

			
</script>
<!--Location Geolocation api 1 end-->

<div class="jumbotron text-center">
  <h1 class="display-4">More Services we can offer</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <!-- Lower Card Section Start-->
	<div class="card-group">

	<div class="card bg-dark text-white">
	<img src="img/service/service3.jpg" class="card-img img-fluid" alt="...">
	<div class="card-img-overlay text-center" style="padding-top: 4.5rem;">
	<svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-bag-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
	</svg>
		<h4 class="card-title ">Ambulance</h4>
		<a href="ambulancelocation.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Details</a>
		</div>
	</div>

	<div class="card bg-dark text-white">
	<img src="img/service/service4.jpg" class="card-img img-fluid" alt="...">
	<div class="card-img-overlay text-center" style="padding-top: 4.5rem;">
	<svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-flag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
	</svg>
		<h4 class="card-title ">Fire Service</h4>
		<a href="fireservice.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Details</a>
	</div>
	</div>

	<div class="card bg-dark text-white">
	<img src="img/service/service1.jpg" class="card-img img-fluid" alt="...">
      <div class="card-img-overlay text-center" style="padding-top: 4.5rem;">
      <svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-droplet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
      <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg>
        <h4 class="card-title ">Car Wash & Polish</h4>
        <a href="carwash.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Details</a>
        </div>
	</div>

	<div class="card bg-dark text-white">
	<img src="img/service/service.jpg" class="card-img img-fluid" alt="...">
      <div class="card-img-overlay text-center" style="padding-top: 4.5rem;">
      <svg width="10em" height="35%" viewBox="0 0 16 16" class="bi bi-tools" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
      <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
      </svg>
        <h4 class="card-title ">Repair</h4>
        <a href="repair.php" class="btn btn-light  btn-responsive " role="button" aria-pressed="true">Details</a>
        </div>
	</div>
	</div> 
</div>
<!--Lowe Card Section End-->
<!--Bread Crumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Location</li>
  </ol>
</nav>
<!-- Bread Crumb End-->






<!--Footer Start-->
<?php include 'includes/footer.php'; ?>
<!--Footer End-->
<!--Script Start-->
<?php include 'includes/scripts.php'; ?>
<!--Script End-->

</body>
</html>
