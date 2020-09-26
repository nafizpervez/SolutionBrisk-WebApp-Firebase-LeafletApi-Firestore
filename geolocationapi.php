<script>
// create map object
  var map = L.map('map',{scrollWheelZoom:true}).setView([23.878932, 90.390686], 15);
  // add base map tiles from OpenStreetMap and attribution info to 'map' div
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
    var marker = L.marker([23.883241, 90.388409]).addTo(map);
    var circle = L.circle([23.878932, 90.390686],{
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.2,
        radius: 800
      }).addTo(map);
    marker.bindPopup("<b>Solution Brisk</b>").openPopup();
</script>