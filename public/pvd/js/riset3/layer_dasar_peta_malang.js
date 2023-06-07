function getColor(d) {
  if (d == "Pujon" || d == "Poncokusumo" || d == "Bantur") {
    return "#B35C74";
  } else {
    return "#506396";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.kecamatan),
    weight: 1,
    opacity: 1,
    color: "white",
    fillOpacity: 0.8,
  };
}

var geojson;
var info = L.control();
var legend = L.control({ position: "bottomright" });


function highlightFeature(e) {
  var layer = e.target;
  
  layer.setStyle({
    weight: 3,
    color: "#4b395f",
    fillOpacity: 0.9,
  });
  
  layer.bringToFront();
  info.update(layer.feature.properties);
}

function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info.update();
}

var peta_malang_isw = L.map("chart_isw").setView(
  [-8.1, 112.65],
  10.2
);
  
L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_malang_isw);
  
function onEachFeature(feature, layer) {
    layer.on({
      mouseover: highlightFeature,
      mouseout: resetHighlight,
    });
}

geojson = L.geoJSON(peta_malang, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(peta_malang_isw);

info.onAdd = function (peta_malang_isw) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function() {
  this._div.innerHTML =
  "<h4>ISW</h4>" +"Kabupaten Malang<br/> <h3>60.34</h3>";
  };
  
info.addTo(peta_malang_isw);

legend.onAdd = function (peta_malang_isw) {
  var div = L.DomUtil.create("div", "info legend"),
  grades = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
  // labels = [];
  
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

legend.addTo(peta_malang_isw);