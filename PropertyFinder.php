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
    margin-right: 20px;
  }

  .mapside {
    display: flex;
  }

  .finder-panel {
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
    color: var(--darkgreen);
    position: relative;
    padding: 20px;
    max-width: 100%;
    margin-top: 10px;
    margin-right: 40px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
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
        } else if (data.Status === 'none' || data.Status === null) {
          document.getElementById(id).style.fill = 'none';
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

    // Show color onload
    document.addEventListener("DOMContentLoaded", function() {
      path.forEach(path => {
        getData(path.id, data => {
          colorData(data, path.id);
        });
      });
    });
  })();
</script>


<?php require_once('footer.php'); ?>