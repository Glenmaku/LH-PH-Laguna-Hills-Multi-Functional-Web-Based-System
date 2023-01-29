<?php require_once('header.php'); ?>
<?php require_once('includes/connection.php'); ?>

<!--UPPER BANNER-->
<div class=" Top TopFinder Topbanner container-fluid">
  <div class="text-center container-fluid">
    <h5>Laguna Hills</h5>
    <h1>Property Finder</h1>
    

  </div>
</div>
<!--END-UPPER BANNER-->

<section class="property-map-map">
  <?php
  include 'map-propertyfinder.php';
  ?>


</section>

<style>
  .map-zoom {
    box-sizing: border-box;
    overflow: hidden;
    width: 1300px;
    height: 1800px;
  }

  .property-map-map {
    max-height: 90vh;
    max-width: 100vw;
    overflow: hidden;
  }

  .map-zoom .btn {
    color: white;
  }
  .mapside{
    display: flex;
  }
</style>


<script>
  var paths = document.querySelectorAll('.mapping');
  paths.forEach(function(path) {
    path.addEventListener('mouseover', function() {
      this.style.fill = "#085D40";
    });
    path.addEventListener('mouseout', function() {
      this.style.fill = "grey";
    });
  });

  function availData(elementId) {
    const id = elementId;
    fetch(`adminViews/includes/mapsubmit.php?id=${id}&status=available`)
      .then(response => response.text())
      .then(data => {
        document.getElementById("map-pfinder").innerHTML = data;
      });
  }


  var zoomInCounter = 0;
  var zoomOutCounter = 0;
  var svg = document.getElementById("my-svg-pf"); // get the SVG element
  var currentScale = svg.getAttribute("transform") || "scale(1)"; // get the current scale

  // add event listeners to zoom in and out buttons
  document.getElementById("zoom-in-btn").addEventListener("click", function() {
    if (zoomInCounter < 7) {
      var newScale = "scale(" + (parseFloat(currentScale.slice(6)) + 0.1) + ")";
      svg.setAttribute("transform", newScale);
      currentScale = newScale;
      zoomInCounter++;
    }
  });
  document.getElementById("zoom-out-btn").addEventListener("click", function() {
    if (zoomOutCounter < 4) {
      var newScale = "scale(" + (parseFloat(currentScale.slice(6)) - 0.1) + ")";
      svg.setAttribute("transform", newScale);
      currentScale = newScale;
      zoomOutCounter++;
    }
  });

  //add event listener for drag
  var startX, startY, translateX = 0,
    translateY = 0;
  svg.addEventListener("mousedown", function(event) {
    startX = event.clientX;
    startY = event.clientY;
    svg.addEventListener("mousemove", drag);
  });
  svg.addEventListener("mouseup", function() {
    svg.removeEventListener("mousemove", drag);
  });

  function drag(event) {
    var deltaX = event.clientX - startX;
    var deltaY = event.clientY - startY;
    startX = event.clientX;
    startY = event.clientY;
    translateX += deltaX;
    translateY += deltaY;
    svg.setAttribute("transform", currentScale + "translate(" + translateX + "," + translateY + ")");
  }
</script>


<?php require_once('footer.php'); ?>