function getColor(d) {
  if (d == "Blimbing") {
    return "#febb33";
  } else if (d == "Kedungkandang") {
    return "#ffab00";
  } else if (d == "Lowokwaru") {
    return "#E09600";
  } else if (d == "Sukun") {
    return "#ffeecb";
  } else if (d == "Klojen") {
    return "#ffdd98";
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
var info_2 = L.control();
var legend = L.control({ position: "bottomright" });

function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 5,
    color: "#666",
    fillOpacity: 0.7,
  });

  layer.bringToFront();
  info_2.update(layer.feature.properties);
}

function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info_2.update();
}

var petatematik2 = L.map("riset2_t1_hasil2").setView([-7.9797, 112.6304], 12.4);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  minZoom: 12,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(petatematik2);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

geojson = L.geoJSON(kec_malang, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(petatematik2);

info_2.onAdd = function (petatematik2) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info_2.update = function (props) {
  this._div.innerHTML =
    "<h4>Jumlah Perjalanan</h4>" +
    (props
      ? "<b>" + props.NAME_3 + "</b><br />" + props.perjalanan
      : // " people / mi<sup>2</sup>"
        "Kecamatan");
};

info_2.addTo(petatematik2);

// legend.onAdd = function (petatematik2) {
//   var div = L.DomUtil.create("div", "info legend"),
//     grades = [60, 80, 100, 120, 140, 160, 180, 200, 220];
//   // labels = [];

//   // loop through our density intervals and generate a label with a colored square for each interval
//   for (var i = 0; i < grades.length; i++) {
//     div.innerHTML +=
//       '<i style="background:' +
//       getColor(grades[i] + 1) +
//       '"></i> ' +
//       grades[i] +
//       "<br>";
//   }

//   return div;
// };

// legend.addTo(petatematik2);
