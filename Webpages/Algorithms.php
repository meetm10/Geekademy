<html>
	<head>
		<title> Algorithms </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
		$(".subtopics").click(function() 
		{
		var id = $(this).attr("id");
		window.open('Template.php?id='+id);
			});
		});
		</script>
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

		.ad {
			padding: 10px;
			margin: 10px;
			
			border-style: solid;

		}

		li a:hover {
			color: white;
		}

		.card {
			margin-right: 10px;
			margin-left: 10px;	
			background-color: #e3e5e3;
		}

		.text {
			margin-left: 10px;
			padding: 10px;	
		}

		#list1 {
			text-align: left;
			color: black;
			padding: 0;	
		}

		.subtopics {
			text-align: left;
			color: black;
			padding: 0;		
		}

	</style>

	<body>
		<h1 align="center" name="top" class="jumbotron text-center"> Algorithms </h1>	

		<ul class="nav">
			<li class="nav_item"><a href="Index.php"> Home </a></li>
			<li class="nav_item"><a href="Algorithms.php"  class="active"> Algorithms </a></li>
			<li class="nav_item"><a href="Data_Structure.html"> Data Structures </a></li>
			<li class="nav_item"><a href="Languages.html"> Programming Languages</a></li>
			<li class="nav_item"><a href="Subjects.html"> Computer Science Subjects </a></li>
			<li class="nav_item"><a href=""> Interview </a></li>
			<li class="nav_item"><a href="Login.html"> Login </a></li>

		</ul><br>
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
		<h3>Topics : </h3>

		<ul class="topics">
			<li><a id="list1" href="#one">Analysis of Algorithms</a></li>
			<li><a id="list1" href="#one">Searching & Sorting</a></li>
			<li><a id="list1" href="#one">Greedy Algorithms</a></li>
			<li><a id="list1" href="#one">Dynamic Programming</a></li>
			<li><a id="list1" href="#one">Pattern Matching</a></li>
			<li><a id="list1" href="#one">Backtracking</a></li>
			<li><a id="list1" href="#one">Divide and Conquer</a></li>
			<li><a id="list1" href="#one">Graph Algorithms</a></li>
			<li><a id="list1" href="#one">Mathematical Algorithms</a></li>
			<li><a id="list1" href="#one">Branch and Bound</a></li>
		</ul>
		</div>
		</div>

		<br>

		<div class="card">
		<div class="text">
		<h4 id="one"> Analysis of Algorithms: </h4>

		<ol>
			<li><a class="subtopics" id="1">Asymptotic Analysis</a></li>
			<li><a class="subtopics" id="2">Worst, Average and Best Cases</li>
			<li><a class="subtopics" id="3">Asymptotic Notations</li>
			<li><a class="subtopics" id="4">Little o and little omega notations</li>
			<li><a class="subtopics" id="5">Analysis of Loops</li>
			<li><a class="subtopics" id="6">Solving Recurrences</li>
			<li><a class="subtopics" id="7">Amortized Analysis</li>
			<li><a class="subtopics" id="8">What does ‘Space Complexity’ mean?</li>
			<li><a class="subtopics" id="9">Pseudo-polynomial Algorithms</li>
			<li><a class="subtopics" id="10">NP-Completeness Introduction</li>
			<li><a class="subtopics" id="11">Polynomial Time Approximation Scheme</li>
			<li><a class="subtopics" id="12">A Time Complexity Question</li>
		</ol></div></div></div>
		<div class="col-sm-2">
			<!-- <div class="ad"> Ad to the right #1</div> -->
			<div class="ad" style="background-color: white">

				<?php
					include("getrss.php");
				?>

			</div>
		</div>
		
		<hr>
	</body>
</html>