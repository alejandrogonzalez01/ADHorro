<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="styles.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


		<title>ADAhorros</title>
	</head>
	

	<body>
	
	
		<!-- Start of Navbar -->
		<nav class="nav navbar navbar-expand-lg main-nav">

			<!--Brand-->
			<a class="navbar-brand" href="index.php">ADAhorros</a>

			<!--Left stuff-->
			<ul class="nav navbar-nav flex-grow">
				<li class="nav-item dropdown">
					<a style="color: #28a74;" class="nav-link dropdown-toggle" id="ahorroDisplayed" href="#" id="nombresAhorrosDropdown" data-toggle="dropdown">
					Seleccione un Ahorro
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Navidad</a>
						<a class="dropdown-item" href="#">Vacaciones</a>
						<a class="dropdown-item" href="#">Carro</a>
					</div>

				</li>
			</ul>
			
			<!--Right Stuff-->
			<ul class="nav navbar-nav flex-grow justify-content-end">
				<li class="nav-item">
					<button class="btn btn-outline-success" type="button" id="nuevoAhorroButton">Nuevo Ahorro</button>
				</li>
			</ul>
		</nav> 
		<!--End of Navbar-->
		
		<!--Start of dashboard-->
		<div class="container mainDash">
		  <h1 id="test">Welcome!</h1>
		</div>
	</body>
	<script src="index.js" type="text/javascript"></script>
</html>