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
	<!--Bread Crumb Start-->
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="services.php">Services</a></li>
			<li class="breadcrumb-item active" aria-current="page">Ambulance Location</li>
		</ol>
		</nav>
	<!--Bread Crumb End-->

  <div class=" text-center">
    <h1 class="display-4">Emgergency Ambulance & Hospital</h1>
    <p class="lead"><p>Emegency hospital and Ambulance contact are here to help you at any time.</output></p>
		<div  id="map"></div>
		<hr class="my-2">
		<p class="card-text"><small class="text-muted">&copy; leaflet. Done by nafizpervez</small></p>
        <hr class="my-5">
	</div>




<script>
// create map object
		var map = L.map('map',{scrollWheelZoom:true}).setView([23.878932, 90.390686], 14);
		// add base map tiles from OpenStreetMap and attribution info to 'map' div
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
			var marker = L.marker([23.887429, 90.390660]).addTo(map);
			var marker1 = L.marker([23.878714, 90.393238]).addTo(map);
			var marker2 = L.marker([23.877094, 90.390701]).addTo(map);
			var marker3 = L.marker([23.873685, 90.390837]).addTo(map);
			var marker4 = L.marker([23.872410, 90.390655]).addTo(map);
			var marker5 = L.marker([23.870163, 90.390644]).addTo(map);
			var marker6 = L.marker([23.868731, 90.393970]).addTo(map);
			var marker7 = L.marker([23.869473, 90.383778]).addTo(map);
			var marker8 = L.marker([23.871671, 90.379926]).addTo(map);
			var circle = L.circle([23.874307, 90.387171],{
				color: 'red',
				fillColor: '#f03',
				fillOpacity: 0.2,
				radius: 2000
			}).addTo(map);
			
			marker1.bindPopup("<b>Monsur Ali Medical</b>").openPopup();
			marker.bindPopup("<b>Ahsania Mission Hospital Ambulance Service</b>").openPopup();
			marker2.bindPopup("<b>Shin Shin Japan Hospital</b>").openPopup();
			marker3.bindPopup("<b>Ibn Sina Hospital & Ambulance Service</b>").openPopup();
			marker4.bindPopup("<b>Labaid Hospital & Ambulance</b>").openPopup();
			marker5.bindPopup("<b>Lubana Hospital</b>").openPopup();
			marker6.bindPopup("<b>Hi Care & Ambulance Service</b>").openPopup();
			marker7.bindPopup("<b>Radical Hospital & Ambulance Service</b>").openPopup();
			marker8.bindPopup("<b>Uttara Hope Hospital </b>").openPopup();

			
</script>
<!--Location Geolocation api 1 end-->



<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Hospital & Medical Centers</h5>
        <p class="card-text">Here you have the contact number of all the medical service available in our radar.</p>
        <div class="card" style="width: 100%;">
			<div class="card-header">
				Uttara Zone
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><strong>Monsur Ali Medical</strong> +880 1716 722069</li>
				<li class="list-group-item"><strong>Lubana Hospital</strong> +880 1816 779615</li>
				<li class="list-group-item"><strong>Uttara Hope Hospital</strong> +880 1842 755957</li>
				<li class="list-group-item"><strong>Shin Shin Japan Hospital</strong> +880 1994 000094</li>
				<li class="list-group-item"><strong>Hi Care & Ambulance Service</strong> +880 1778 895849</li>
			</ul>
		</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Ambulance Service</h5>
        <p class="card-text">Here you have the contact number of all the ambulance service available in our radar.</p>
        <div class="card" style="width: 100%;">
			<div class="card-header">
				Uttara Zone
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><strong>Ahsania Mission Hospital Ambulance Service</strong> +880 1716 890194</li>
				<li class="list-group-item"><strong>Ibn Sina Hospital & Ambulance Service</strong> +880 1816 954 794</li>
				<li class="list-group-item"><strong>LabAid Hospital & Ambulance</strong> +880 1842 814194</li>
				<li class="list-group-item"><strong>Radical Hospital & Ambulance Service</strong> +880 1994 000094</li>
				<li class="list-group-item"><strong>LabAid Hospital</strong> +880 1786 878889</li>
			</ul>
		</div>
      </div>
    </div>
  </div>
</div>







<!--Bread Crumb Start-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ambulance Location</li>
  </ol>
</nav>
<!--Bread Crumb End-->






<!--Footer Start-->
<?php include 'includes/footer.php'; ?>
<!--Footer End-->
<!--Script Start-->
<?php include 'includes/scripts.php'; ?>
<!--Script End-->

</body>
</html>