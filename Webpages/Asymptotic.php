<html>
	<head>
		<title> Asymptotic Analysis </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
			margin: 10px;
			background-color: orange;
			height: 45%;
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
		<h3 align="center" style="padding: 0;"> Asymptotic Analysis </h3><br>
		<div class="row">
		<div class="col-sm-2">
			<div class="ad">Ad to the left #1</div>
		</div>
		<div class="col-sm-8">
		<div class="card">
		<div class="text">
			<p><h4>Why performance analysis?</h4>
				There are many important things that should be taken care of, like user friendliness, modularity, security, maintainability, etc. Why to worry about performance? 
				The answer to this is simple, we can have all the above things only if we have performance. So performance is like currency through which we can buy all the above things. Another reason for studying performance is – speed is fun!<br><br>


				<h4>Given two algorithms for a task, how do we find out which one is better?</h4><br>
				One naive way of doing this is – implement both the algorithms and run the two programs on your computer for different inputs and see which one takes less time. There are many problems with this approach for analysis of algorithms.<br>
				1) It might be possible that for some inputs, first algorithm performs better than the second. And for some inputs second performs better.<br>
				2) It might also be possible that for some inputs, first algorithm perform better on one machine and the second works better on other machine for some other inputs.<br>

				Asymptotic Analysis is the big idea that handles above issues in analyzing algorithms. In Asymptotic Analysis, we evaluate the performance of an algorithm in terms of input size (we don’t measure the actual running time). We calculate, how does the time (or space) taken by an algorithm increases with the input size.<br>
				For example, let us consider the search problem (searching a given item) in a sorted array. One way to search is Linear Search (order of growth is linear) and other way is Binary Search (order of growth is logarithmic). To understand how Asymptotic Analysis solves the above mentioned problems in analyzing algorithms, let us say we run the Linear Search on a fast computer and Binary Search on a slow computer. For small values of input array size n, the fast computer may take less time. But, after certain value of input array size, the Binary Search will definitely start taking less time compared to the Linear Search even though the Binary Search is being run on a slow machine. The reason is the order of growth of Binary Search with respect to input size logarithmic while the order of growth of Linear Search is linear. So the machine dependent constants can always be ignored after certain values of input size.<br><br>

				<h4>Does Asymptotic Analysis always work?</h4><br>
				Asymptotic Analysis is not perfect, but that’s the best way available for analyzing algorithms. For example, say there are two sorting algorithms that take 1000nLogn and 2nLogn time respectively on a machine. Both of these algorithms are asymptotically same (order of growth is nLogn). So, With Asymptotic Analysis, we can’t judge which one is better as we ignore constants in Asymptotic Analysis.
				Also, in Asymptotic analysis, we always talk about input sizes larger than a constant value. It might be possible that those large inputs are never given to your software and an algorithm which is asymptotically slower, always performs better for your particular situation. So, you may end up choosing an algorithm that is Asymptotically slower but faster for your software.<br></p>
		</div>
		</div>
		</div>
		<div class="col-sm-2">
			<div class="ad">Ad to the right #1</div>
		</div>
		</div>
		<br><hr>

		<footer>
			<h3 align="center">&copy; 2018 Geekademy. All rights reserved.</h3>
			<a href="#top"><button style="position: absolute; left: 45%"> Go to Top </button></a>
		</footer>
	</body>
</html>