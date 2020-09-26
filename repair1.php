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





<!--Location Geolocation api 1-->
<div class="jumbotron jumbotron-fluid">
		<!--BreadCrumb Start-->
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="services.php">Services</a></li>
			<li class="breadcrumb-item active" aria-current="page">Repair Services</li>
		</ol>
		</nav>
		<!--BreadCrumb End-->

  <div class=" text-center">
    <h1 class="display-4">Emgency Repair Service</h1>
    <p class="lead"><p>Emegency Repair Service contact are here to help you at any time.</output></p>
		<div  id="map"></div>
		<hr class="my-2">
		<p class="card-text"><small class="text-muted">&copy; leaflet. Done by nafizpervez</small></p>
        <hr class="my-5">
	</div>




    <script>
// create map object
		var map = L.map('map',{scrollWheelZoom:false}).setView([23.878932, 90.390686], 14);
		// add base map tiles from OpenStreetMap and attribution info to 'map' div
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
            var marker4 = L.marker([23.867576, 90.383792]).addTo(map);
			var marker5 = L.marker([23.878326, 90.400841]).addTo(map);
			var marker6 = L.marker([23.874539, 90.372989]).addTo(map);
			var marker7 = L.marker([23.874019, 90.374706]).addTo(map);
			var marker8 = L.marker([23.873146, 90.374824]).addTo(map);
		
			var circle = L.circle([23.878932, 90.390686],{
				color: '#FFD194',
				fillColor: '#FFD194',
				fillOpacity: 0.4,
				radius: 2000
			}).addTo(map);
			
			marker4.bindPopup("<b>S Auto</b>").openPopup();
			marker5.bindPopup("<b>AG Auto</b>").openPopup();
			marker6.bindPopup("<b>Vehicle Care</b>").openPopup();
			marker7.bindPopup("<b>H.A. Automobiles</b>").openPopup();
			marker8.bindPopup("<b>Speed Car Repair</b>").openPopup();
		

			
</script>
<!--Location Geolocation api 1 end-->


<!--List of content start-->
<div class="row">
  <div class="col-sm-12">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Vehicle Repair Services</h5>
        <p class="card-text">Here you have the contact number of all the Vehicle Repair available in our radar.</p>
        <div class="card" style="width: 100%;">
			<div class="card-header">
				Uttara Zone
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><strong>S Auto</strong> +880 1716 722069</li>
				<li class="list-group-item"><strong>AG Auto</strong> +880 1816 779615</li>
				<li class="list-group-item"><strong>Vehicle Care</strong> +880 1842 755957</li>
				<li class="list-group-item"><strong>H.A. Automobiles</strong> +880 1994 000094</li>
				<li class="list-group-item"><strong>Speed Car Repair</strong> +880 1994 000094</li>
			</ul>
		</div>
      </div>
    </div>
  </div>
  
  
</div>
<!-- List of content End-->



<!--BreadCrumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
    <li class="breadcrumb-item active" aria-current="page">Repair Services</li>
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