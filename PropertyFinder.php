
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
  @media (max-width: 700px) {
    .mapside {
    display: block!important;
    flex-direction: column;
    z-index: 999999;

  }
  .map-zoom {
    box-sizing: border-box;
    overflow: hidden;
    width: auto!important;
    height: auto!important;
  }
  #my-svg-pf {
    margin-left: 0%;
}
.control-map{
  display: flex;
  justify-content: end;
  right: 0;
}
.control-map button{
 width: 50px;
  height: 50px;
  margin-right: 10px;
}
.map-pfinder {
  position: relative;
  width: 90vw;
  height: auto!important;
}
.property-map-map {
    height: max-content!important;
    max-width: 100vw;
    max-height: max-content!important;
    overflow: auto!important;
  }

  }
  .map-pfinder {
    overflow: hidden;
    
  }

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
    margin-right: 20px;
  }

  .mapside {
    display: flex;
  }

  .property-panel #finder-panel {
    position: relative;
    padding: 20px;
    width: 100%;
    margin-top: 10px;
    margin-right: 40px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
  }

  .property-panel #finder-panel h3 {
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
    color: var(--darkgreen);
    text-align: center;
  }

  .property-panel #finder-panel span,
  .property-panel #finder-panel input {
    color: var(--darkgreen);
    font-weight: 700;
    font-family: 'Raleway', sans-serif;
    margin-bottom: 10px;
    background-color: white;

  }

  .control-map button {
    margin-bottom: 10px;
  }

  .property-panel a {
    font-size: 15px;
    font-weight: 700;
    color: white;
    text-decoration: none;
  }

  @media only screen and (max-width: 767px) {
    .property-panel {
      grid-template-columns: 1fr;
    }
  }
</style>

<script>
  function getData(id) {
    // Use fetch API for HTTP requests

    fetch(`adminViews/includes/property-finder-panel.php?id=${id}`)
      .then(response => response.json())
      .then(data => {
        // Update the values of the elements with the corresponding ids
        //document.getElementById("input-field-id").value = myId;
        document.getElementById("finder-block").value = data.Block;
        document.getElementById("finder-lot").value = data.Lot;
        document.getElementById("finder-street").value = data.Street;
        document.getElementById("finder-status").value = data.Status;
        document.getElementById("finder-area-per-sqm").value = data.Area;

        // Append the ownership table to the appropriate element
        //document.getElementById("ownership-table").innerHTML = data.ownership_info;//
      })
      .catch(error => {
        console.log(`Error: ${error}`);
      });
  }

  var paths = document.querySelectorAll('.mapping');
  paths.forEach(function(path) {
    path.addEventListener('mouseover', function() {
      this.style.stroke = "black";
      this.style.strokeWidth = "3px";
    });
    path.addEventListener('mouseout', function() {
      this.style.stroke = "grey";
      this.style.strokeWidth = "1px";
    });
  });


  /*var zoomInCounter = 0;
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
  });*/
  var svg = document.getElementById("my-svg-pf"); // get the SVG element
  var currentScale = svg.getAttribute("transform") || "scale(1)"; // get the current scale

  // add event listeners to zoom in and out buttons
  document.getElementById("zoom-in-btn").addEventListener("click", function() {
    var newScale = "scale(" + (parseFloat(currentScale.slice(6)) + 0.1) + ")";
    svg.setAttribute("transform", newScale);
    currentScale = newScale;
  });
  document.getElementById("zoom-out-btn").addEventListener("click", function() {
    var newScale = parseFloat(currentScale.slice(6)) - 0.1;
    if (newScale >= 0.7) {
      svg.setAttribute("transform", "scale(" + newScale + ")");
      currentScale = "scale(" + newScale + ")";
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

  (function() {
  let buttonSelected = "trigger-prop";

  function getData(id, callback) {
    fetch('adminViews/includes/property-finder-panel.php?id=' + id)
      .then(response => response.json())
      .then(data => {
        callback(data);
      })
      .catch(error => {
        console.log('Error:' + error);
      });
  }

  function colorData(data, id) {
    if (buttonSelected === "trigger-prop") {
      if (data.Status === 'available') {
        document.getElementById(id).style.fill = '#1FCE6D';
        document.getElementById(id).disabled = false; // make sure the element is not disabled if it's available
      } else {
        document.getElementById(id).style.fill = 'grey';
        document.getElementById(id).disabled = true; // disable the element if it's not available
        document.getElementById(id).style.pointerEvents = 'none'; // make sure the element is not clickable if it's disabled
      }
    }
  }

  const select = document.querySelector('.trigger');
  const path = document.querySelectorAll('path');

  select.addEventListener("click", function() {
    if (select.value === "trigger-prop") {
      buttonSelected = "trigger-prop";
      path.forEach(path => {
        getData(path.id, data => {
          colorData(data, path.id);
        });
      });
    }
  });

  // Function to handle PropertyFindernav click event
  function PropertyFindernav(page) {
    buttonSelected = "trigger-prop";
    path.forEach(path => {
      getData(path.id, data => {
        colorData(data, path.id);
      });
    });
  }

  // Show color onload
  document.addEventListener("DOMContentLoaded", function() {
    path.forEach(path => {
      getData(path.id, data => {
        colorData(data, path.id);
      });
    });
  });

  // Trigger PropertyFindernav onload
  PropertyFindernav('property-finder-page');
})();



</script>

<!-- SCRIPTS -->
<script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script  src="script.js"></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
