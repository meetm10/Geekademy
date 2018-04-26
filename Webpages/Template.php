<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<?php

include("config.php");
if($_GET['id'])
{	
	$id = $id=$_GET['id'];
	$id = mysql_escape_String($id);
	$result = mysqli_query($conn, "select * from subtopics where subtopic_id='$id'");
	$row = mysqli_fetch_array($result);
	$title = $row['title'];
	$content = $row['content'];
}

?>

	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<style>

		body {
			font-family: 'Open Sans';
		}
		
		.jumbotron {
			margin: 0;
			padding: 30; 
		}

		.nav {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		.ad {
			padding: 10px;
			margin: 10px;
			
			border-style: solid;

		}

		.active {
			background-color: green;
		}

		.nav_item {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover {
			color: white;
		}

		.card {
			margin-left: 10px;	
			background-color: #e3e5e3;
		}

		.text {
			padding: 10px;	
		}

		#list {
			text-align: left;
			color: black;
			padding: 0;	
		}

	</style>

	<body>
		<h1 align="center" class="jumbotron text-center"> Algorithms </h1>
		
		<ul class="nav">
			<li class="nav_item"><a href="Index.php"> Home </a></li>
			<li class="nav_item"><a href="Algorithms.php"  class="active"> Algorithms </a></li>
			<li class="nav_item"><a href="Data_Structure.html"> Data Structures </a></li>
			<li class="nav_item"><a href="Languages.html"> Programming Languages</a></li>
			<li class="nav_item"><a href="Subjects.html"> Computer Science Subjects </a></li>
			<li class="nav_item"><a href=""> Interview </a></li>
			<li class="nav_item"><a href="Login.html"> Login </a></li>

		</ul><br>
		<h2 align="center">Analysis of Algorithms</h2>
		<h3 align="center" style="padding: 0;"><?php echo $title; ?></h3><br>
		<div class="row">
		<div class="col-sm-2">
			<!-- <div class="ad">Ad to the left #1</div> -->
			<div class="ad" style="background-color: white">
			<?php 
				include("stackapi.php");
			?>
			</div>
		</div>
		<div class="col-sm-8">
		<div class="card">
		<div class="text">
			<p><?php echo $content; ?></p>
		</div>
		</div>
		</div>
		<div class="col-sm-2">
			<!-- <div class="ad"> Ad to the right #1</div> -->
			<div class="ad" style="background-color: white">

				<?php
					include("getrss.php");
				?>

			</div>
		</div>
		</div>
		<br><hr>
	</body>
</html>