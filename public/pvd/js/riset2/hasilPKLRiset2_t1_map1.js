function getColor(d) {
  if (d == "Blimbing") {
    return "#F5A300";
  } else if (d == "Kedungkandang") {
    return "#4F6396";
  } else if (d == "Lowokwaru") {
    return "#4C395F";
  } else if (d == "Sukun") {
    return "#F5A300";
  } else if (d == "Klojen") { 
    return "#B45C75";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.NAME_3),
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

var petatematik1 = L.map("riset2_t1_hasil2").setView([-7.9797, 112.6304], 12.4);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(petatematik1);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

geojson = L.geoJSON(kec_malang, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(petatematik1);

info.onAdd = function (petatematik1) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function (props) {
  this._div.innerHTML =
    "<h4>Sebaran Wisatawan</h4>" +
    (props
      ? "<b>" +
        props.NAME_3 +
        "</b><br />" +
        props.sebaran
        // " people / mi<sup>2</sup>"
      : "Kecamatan");
};

info.addTo(petatematik1);

legend.onAdd = function (petatematik1) {
  var div = L.DomUtil.create("div", "info legend"),
    grades = [60, 80, 100, 120, 140, 160, 180, 200, 220];
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

legend.addTo(petatematik1);

