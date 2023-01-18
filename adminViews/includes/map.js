var mapData;

fetch("adminViews/includes/map.json")
  .then(response => response.json())
  .then(data => {
    mapData = data;
    var mapDiv = document.getElementById("map");
    mapDiv.innerHTML = JSON.stringify(mapData);
  });
