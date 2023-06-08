function getColor(d) {
  if (d == "Batu") {
    return "#F5A300";
  } else if (d == "Junrejo") {
    return "#4F6396";
  } else if (d == "Bumiaji") {
    return "#4C395F";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.Kecamatan),
    weight: 2,
    opacity: 1,
    color: "white",
    // dashArray: "3",
    fillOpacity: 0.7,
  };
}

var geojson;
var info = L.control();
var legend = L.control({ position: "bottomright" });

function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 5,
    color: "#666",
    fillOpacity: 0.7,
  });

  layer.bringToFront();
  info.update(layer.feature.properties);
}

function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info.update();
}

var peta_batu_hasil_2 = L.map("chart-1").setView(
  [-7.8328, 112.5342],
  11
);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_batu_hasil_2);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

function onMapClick(e) {
  // console.log(e.latlng.lat);
  // alert("lat=" + e.latlng.lat + "\nlon=" + e.latlng.lng);
  var lat = e.latlng.lat;
  var lng = e.latlng.lng;
  
  if(lat <= -7.769227726380139 && lat >= -7.843642306098855 && lng <= 112.55798713333508 && lng >= 112.49653236038586){
    // alert("2");
    const element = document.getElementById("go-to-chart-2");
    element.scrollIntoView();
  }else if(lat <= -7.873880050433476 && lat >= -7.9061538592421865 && lng <= 112.5274314082374 && lng >= 112.49309913284678){
    // alert("3");
    const element = document.getElementById("go-to-chart-3");
    element.scrollIntoView();
  }else if(lat <= -7.890187131876999 && lat >= -7.9105700790527305 && lng <= 112.5768698847999 && lng >= 112.54734412796397){
    // alert("4");
    const element = document.getElementById("go-to-chart-4");
    element.scrollIntoView();
  }else{
    // alert("1");
    const element = document.getElementById("go-to-chart-1");
    element.scrollIntoView();
  }
}

peta_batu_hasil_2.on('click', onMapClick);

geojson = L.geoJSON(peta_batu_ikuptik, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(peta_batu_hasil_2);

info.onAdd = function (peta_batu_hasil_2) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function (props) {
  this._div.innerHTML =
    "<h4>IKUPTIK</h4>" +
    (props
      ? "<b>Kec. " +
        props.Kecamatan +
        "</b><br />" +
        props.IKUPTIK +
        " (" +
        "<strong>" +
        props.status +
        "</strong>)"
        // " people / mi<sup>2</sup>"
      : "<strong>Kota Batu</strong> </b><br /> 46.98 (<strong>Cukup Siap</strong>)");
};

info.addTo(peta_batu_hasil_2);

legend.onAdd = function (peta_batu_hasil_2) {
  var div = L.DomUtil.create("div", "info legend"),
    grades = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

  // loop through our density intervals and generate a label with a colored square for each interval
  for (var i = 0; i < grades.length; i++) {
    div.innerHTML +=
      '<i style="background:' +
      getColor(grades[i] + 1) +
      '"></i> ' +
      grades[i] +
      "<br>";
  }

  return div;
};

legend.addTo(peta_batu_hasil_2);

