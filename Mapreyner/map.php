<html>
	<head>
		<title>Map Track</title>
		<link rel="icon" href="./src/favicon.png">
		<link rel="manifest" href="manifest.json" />
		<meta charset="UTF-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;800&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="nameOverlay" class="menuFont nameOverlay">
			<p id="nameInner">LOADING MAP...</p>
		</div>
		<div id="menuOverlay" class="overlay">
			<p id="menuTab" class="menuTitle menuFont2 noselect">☰☰☰</p>
			<div id="subMenu" class="menuFont">
				<input id="search" name="search" type="search" class="search menuFont3" placeholder="search" 
					autocomplete="off"></input>
				<dl id="menu" class="menu">
			</div>
		</div>

		<div class="holder">
			<iframe  class="mapFrame" id="svgMap" src="process.html" type="image/svg+xml"
				seamless="seamless" scrolling="yes" frameborder="0"></iframe>
		</div>
		
	</body>
	
	<script src="data.js"></script>
	<script src="index.js"></script>

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

</html>