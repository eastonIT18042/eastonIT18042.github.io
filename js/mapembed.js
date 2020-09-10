// Leaflet Map
var mymap = L.map('mapid').setView([40.690998, -75.209127], 17);

$('.leaflet-control-attribution').hide();

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    subdomains: ['a','b','c']
}).addTo(mymap);

var NorthThirdStreetLot = L.marker([40.692710, -75.209809]).addTo(mymap);
NorthThirdStreetLot.bindPopup("<b>North 3rd Street Parking Lot</b><br>56 N. 3rd Street");

var NorthFourthStreetLot = L.marker([40.692188, -75.210709]).addTo(mymap);
NorthFourthStreetLot.bindPopup("<b>North 4th Street Parking Lot</b>");

var NorthamptonStreetLot = L.marker([40.690847, -75.207361]).addTo(mymap);
NorthamptonStreetLot.bindPopup("<b>Northampton Street Parking Lot</b><br>228 Northampton Street");

var SouthThirdStreetLot = L.marker([40.690140, -75.208756]).addTo(mymap);
SouthThirdStreetLot.bindPopup("<b>South 3rd Street Parking Lot</b>");

var PineStreetGarage = L.marker([40.690005, -75.209706]).addTo(mymap);
PineStreetGarage.bindPopup("<b>Pine Street Garage</b><br>S. 3rd Street");

var SouthThirdStreetGarage = L.marker([40.688841, -75.209536]).addTo(mymap);
SouthThirdStreetGarage.bindPopup("<b>South 3rd Street Garage</b><br>123 S. 3rd Street");

var redIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
var redIcon2 = L.marker([40.688813, -75.209135], {icon: redIcon}).addTo(mymap);
redIcon2.bindPopup("<b>You Are Here").openPopup();