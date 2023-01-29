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
  $(document).ready(function() {
    changeColor();
    getData();
    displayMapData();

  });

  function displayMapData() {

    var mapData = "true";
    $.ajax({
      url: 'adminViews/includes/mapData.php',
      type: 'post',
      data: {
        mapDataSend: mapData
      },
      success: function(data, status) {
        $('#finder-panel').html(data);

      }
    });
  }
  function getData(id) {
			// Use fetch API for HTTP requests
	
			fetch(`adminViews/includes/mapsubmit.php?id=${id}`)

				.then(response => response.json())
				.then(data => {
				
					// Update the values of the elements with the corresponding ids
					//document.getElementById("input-field-id").value = myId;
					document.getElementById('Lot_ID').value = data.Lot_ID;
					document.getElementById("block").value = data.Block;
					document.getElementById("lot").value = data.Lot;
					document.getElementById("street").value = data.Street;
					document.getElementById("status").value = data.Status;
					document.getElementById("area-per-sqm").value = data.Area;
					document.getElementById("price").value = data.Price;
					document.getElementById("remarkss").value = data.Remarks;
					document.getElementById("remarks").value = data.DueRemarks;
					document.getElementById("Monthly_Dues").value = data.Monthly_Dues;
					document.getElementById("Yearly_Dues").value = data.Yearly_Dues;
					document.getElementById("Dues_Status").value = data.Dues_Status;
					document.getElementById("lotedit-id").value = data.Lot_ID;
				})
				.catch(error => {
					alert(`Error: ${error}`);
				});
		}
    function colorData(id) {
			fetch('adminViews/includes/mapsubmit.php?id=' + id)
				.then(response => response.json())
				.then(data => {
					if (buttonSelected === "lot-select") {
						if (data.Status === 'available') {
							document.getElementById(id).style.fill = '#1FCE6D';
						} else if (data.Status === 'occupied') {
							document.getElementById(id).style.fill = '#E94B35';
						} else if (data.Status === 'Property Undisclosed') {
							document.getElementById(id).style.fill = '#F2C500';
						} else if (data.Status === 'Open Space') {
							document.getElementById(id).style.fill = '#33495F';
						} else if (data.Status === 'amenities') {
							document.getElementById(id).style.fill = '#9C56B8';
						} else if (data.Status === 'foreclosed') {
							document.getElementById(id).style.fill = '#E87E04';
						} else if (data.Status === 'With House') {
							document.getElementById(id).style.fill = '#2C97DE';
						}
					} else if (buttonSelected === "assoc-select") {

						if (data.Dues_Status === 'outdated') {
							document.getElementById(id).style.fill = '#E12323';
						} else if (data.Dues_Status === 'updated') {
							document.getElementById(id).style.fill = '#018E5A';
						} else if (data.Dues_Status === 'advanced') {
							document.getElementById(id).style.fill = '#FDC50C';
						} else if (data.Dues_Status === 'N/A') {
							document.getElementById(id).style.fill = '';
						}
					}
				})
				.catch(error => {
					console.log('Error:' + error);
				});
		}

		const select = document.querySelector('.form-select');
		const paths = document.querySelectorAll('path');

		select.addEventListener("change", function() {
			if (select.value === "lot-information") {
				buttonSelected = "lot-select";
				paths.forEach(path => {
					getData(path.id);
					colorData(path.id);
				});
			} else if (select.value === "association-dues") {
				buttonSelected = "assoc-select";
				paths.forEach(path => {
					getData(path.id);
					colorData(path.id);
				});
			}
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