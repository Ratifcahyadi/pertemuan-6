<!DOCTYPE html>
	<html>
	<head>
		<title>Dosen | PWEB2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		body {
			margin: 0;
			font-family: "Lato", sans-serif;
		}

		.sidebar {
			margin: 0;
			padding: 0;
			width: 200px;
			background-color: #f1f1f1;
			position: fixed;
			height: 100%;
			overflow: auto;
		}

		.sidebar a {
			display: block;
			color: black;
			padding: 16px;
			text-decoration: none;
		}

		.sidebar a.active {
			background-color: #2c3e50;;
			color: white;
		}

		.sidebar a:hover:not(.active) {
			background-color: #555;
			color: white;
		}

		div.content {
			margin-left: 200px;
			padding: 1px 16px;
			height: 1000px;
		}

		@media screen and (max-width: 700px) {
			.sidebar {
				width: 100%;
				height: auto;
				position: relative;
			}
			.sidebar a {float: left;}
			div.content {margin-left: 0;}
		}

		@media screen and (max-width: 400px) {
			.sidebar a {
				text-align: center;
				float: none;
			}
		}

  	input, textarea{
  		width: 95%;
  	}
  	.btn{
  		margin: 2px;
  		background-color: #2c3e50;
  		color: white;
  	}
  
	</style>
</head>
<body>

	<div class="sidebar">
		<a  href="../view/home.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a class="active" href="#"><i class="fa fa-address-book-o"></i> Users</a>
	</div>