<div class="mapHome">
    <div class="mapHome-title">
        <h1>LAGUNA HILLS MAP</h1>
    </div>

    <div class="owner-map-side" style="display: flex;">
        <div class="control-map">
            <button id="zoom-in-btn" class="btn btn-success"><i class="fa-sharp fa-solid fa-plus"></i></button>
            <button id="zoom-out-btn" class="btn btn-success"><i class="fa-sharp fa-solid fa-minus"></i></button>
        </div>

        <div class="homeMap">



<?php
include 'map-homeowner.php';
?>


        </div>

        <div class="property-owner-panel">
            <div class="owner-finder" id="finder-panel">
                <h3>OWNER INFORMATION</h3>
                <div class="input-group">
                    <span class="input-group-text">Block</span>
                    <input type="text" id="finder-block" class="form-control" disabled>
                    <span class="input-group-text">Lot</span>
                    <input type="text" id="finder-lot" class="form-control" disabled>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Street</span>
                    <input type="text" id="finder-street" class="form-control" disabled>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Status</span>
                    <input type="text" id="finder-status" class="form-control" disabled>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Area per Sqm</span>
                    <input type="text" id="finder-area-per-sqm" class="form-control" disabled>
                </div>
                <button class="trigger-home" id="trigger-home" value="trigger-home">onload</button>

            </div>
        </div>
    </div>

</div>

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
			this.style.fill = "#085D40";
		});
		path.addEventListener('mouseout', function() {
			this.style.fill = "grey";
		});
	});

	var svg = document.getElementById("my-svg-pf"); // get the SVG element
	var currentScale = svg.getAttribute("transform") || "scale(1)"; // get the current scale

	// add event listeners to zoom in and out buttons
	document.getElementById("zoom-in-btn-home").addEventListener("click", function() {
		var newScale = "scale(" + (parseFloat(currentScale.slice(6)) + 0.1) + ")";
		svg.setAttribute("transform", newScale);
		currentScale = newScale;
	});
	document.getElementById("zoom-out-btn-home").addEventListener("click", function() {
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
		let buttonSelected = "trigger-home";

		function getData(id, callback) {
			fetch('adminViews/includes/property-finder-panel.php?id=' + id)
				.then(response => response.json())
				.then(data => {
					callback(data);
				})
				.catch(error => {
					console.error('Error:' + error);
				});
		}

		function colorData(data, id) {
			if (buttonSelected === "trigger-home") {
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

		const select = document.querySelector('.trigger-home');
		const path = document.querySelectorAll('path');

		select.addEventListener("click", function() {
			if (select.value === "trigger-home") {
				buttonSelected = "trigger-home";
				path.forEach(path => {
					getData(path.id, data => {
						colorData(data, path.id);
					});
				});
			}
		});

		// Show color onload
		window.onload = function() {
			path.forEach(path => {
				getData(path.id, data => {
					colorData(data, path.id);
				});
			});
		};
	})();
</script>