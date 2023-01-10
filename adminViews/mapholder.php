<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<div class="holder">
			<iframe  class="mapFrame" id="svgMap" src="map.php" type="image/svg+xml"
				seamless="seamless" scrolling="yes" frameborder="0"></iframe>
		</div>
    <!-- End Example Code -->

	<script src="data.js"></script>
	<script src="script.js"></script>

	<style>
		body{
			background-color: #005EB8;
			padding: 0px;
			margin: 0px;
			overflow: hidden;
		}
		.holder{
			background-color: #005EB8;
			overflow: hidden;
			padding: 0px;
			margin: 0px;
			width: 100vw;
			height: 100vh;
		}
		.subMenu{
			display: block;
		}
		.mapFrame{
			color: red;
			border: 0px;
			padding: 0px;
			margin: 0px;
			width: 100vw;
			height: 100vh;
			text-align: center
		}
		.nameOverlay{
			position:fixed;
			top: 70%;
			right: 1%;
			background: #003B85;
			margin: 1vh;
			padding-left: 1vh;
			padding-right: 1vh;
			font-size: 5vh;
			height: auto;
			border-radius: 5vh;
			opacity: 1;
			display: block;
		}
		.overlay{
			position:fixed;
			float: top;
			background: #003B85;
			padding-left: 5px;
			padding-right: 5px;
			margin: 1vh;
			border-radius: 1vh;
			/*opacity: 0.5;*/
			height: 96vh;
			overflow-y: auto;
		}
		.menu{
			font-size: 3vh;
		}
		.menuText{
			font-size: 3vh;
		}
		.menuTitle{
			font-size: 3vh;
		}
		.menuTitle:hover{
			cursor: pointer;
		}
		.menuTitleText:hover{
			cursor: pointer;
			font-weight: bold;
			color: red;
		}
		.menuImage{
			padding-left: 3vh;
			width: 5vh;
			height: 5vh;
		}
		.menuCheck{
			width: 3vh;
			height: 3vh;
		}
		.menuFont{
			color: white;
			font-family: 'Open Sans', sans-serif;
		}
		.menuFont2{
			color: white;
			font-family: 'Open Sans', sans-serif;
		}
		.menuFont3{
			color: black;
			font-family: 'Open Sans', sans-serif;
		}
		.menuFont:hover{
			cursor: default;
		}
		.search{
			width: 100%;
			font-size: 3vh;
		}
		.noselect {
		  -webkit-touch-callout: none; /* iOS Safari */
			-webkit-user-select: none; /* Safari */
			 -khtml-user-select: none; /* Konqueror HTML */
			   -moz-user-select: none; /* Old versions of Firefox */
				-ms-user-select: none; /* Internet Explorer/Edge */
					user-select: none; /* Non-prefixed version, currently
										  supported by Chrome, Edge, Opera and Firefox */
		}
		
		/* width */
::-webkit-scrollbar {
  width: 2vw;
  height: 2vh;
}

/* Track */
::-webkit-scrollbar-track {
	background-color: #002a7c;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: transparent;
  border: 2px solid white;
  border-radius: 2vh;
}


::-webkit-scrollbar-corner{
  background: #005EB8;
}
		
	</style>
