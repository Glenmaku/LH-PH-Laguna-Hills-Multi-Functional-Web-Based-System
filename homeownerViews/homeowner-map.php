<div class="mapHome">
	<div class="mapHome-title">
		<h1>LAGUNA HILLS MAP</h1>
	</div>

	<div class="owner-map-side" style="display: flex;">
		<div class="control-map">
			<button id="zoom-in-btn" class="btn btn-success"><i class="fa-sharp fa-solid fa-plus"></i></button>
			<button id="zoom-out-btn" class="btn btn-success"><i class="fa-sharp fa-solid fa-minus"></i></button>
			<button class="btn trigger-home" id="trigger-home" value="trigger-home" hidden><i class="fa-regular fa-user"></i></button>
		</div>
		<div class="homeMap">

			<div class="map-holder-owner">
			<?php
			include 'map-homeowner.php';
			?>
			</div>


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
				<div class="input-group">
					<select class="form-select" aria-label="Default select example">
						<option selected disabled>Monitor by:</option>
						<option value="available-home" id="avail-select">Available</option>
						<option value="house-home" id="house-select">With House</option>
						<option value="occu-home" id="occu-select">Occupied</option>
					</select>
				</div>
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

	function clearColor() {
		paths.forEach(path => {
			path.style.fill = '';
		});
	}

	function colorData(id) {
		fetch('adminViews/includes/mapsubmit.php?id=' + id)
			.then(response => response.json())
			.then(data => {
				if (buttonSelected === "avail-select") {
					if (data.Status === 'available') {
						document.getElementById(id).style.fill = '#1FCE6D';
					}
				} else if (buttonSelected === 'house-select') {
					if (data.Status === 'With House') {
						document.getElementById(id).style.fill = '#2C97DE';
					}
				} else if (buttonSelected === 'occu-select') {
					if (data.Status === 'occupied') {
						document.getElementById(id).style.fill = '#A70D2A';
					}
				}
			})
	}

	const select = document.querySelector('.form-select');
	const paths = document.querySelectorAll('.mapping');

	select.addEventListener("change", function() {
		clearColor();
		if (select.value === "available-home") {
			buttonSelected = "avail-select";
			paths.forEach(path => {
				getData(path.id);
				colorData(path.id);
			});
		} else if (select.value === "house-home") {
			buttonSelected = "house-select";
			paths.forEach(path => {
				getData(path.id);
				colorData(path.id);
			});
		} else if (select.value === "occu-home") {
			buttonSelected = "occu-select";
			paths.forEarh(path => {
				getData(path.id);
				colorData(path.id);
			});
		}
	});

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
</script>