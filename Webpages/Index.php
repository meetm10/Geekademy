<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
	<script>
	function httpGet(theUrl)
	{
    	var xmlHttp = new XMLHttpRequest();
    	xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    	xmlHttp.send( null );
    	return xmlHttp.responseText;
	}

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(function() {
		$(".vote").click(function() 
		{
		var id = $(this).attr("id");
		var name = $(this).attr("name");
		var dataString = 'id='+ id ;
		var parent = $(this);
		if(name=='up')
		{
		$.ajax({
		   type: "POST",
		   url: "up_vote.php",
		   data: dataString,
		   cache: false,

		   success: function(html)
		   {
		    parent.html(html);
		  
		  }  });
		}
		else
		{
		$.ajax({
		   type: "POST",
		   url: "down_vote.php",
		   data: dataString,
		   cache: false,

		   success: function(html)
		   {
		       parent.html(html);
		  }  
		 });
		}
		return false;
			});

		});
		</script>

	<header>
		<title> Unity Learn | Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</header>
	<style>

		body {
			font-family: 'Open Sans';
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		.active {
			background-color: green;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		li a:hover:not(.active) {
		    background-color: #111;
		}

		li a:hover {
			color: white;
		}

		.card {
			background-color: #e3e5e3;
			
		}

		.text {
			padding: 10px;	
		}

		.jumbotron {
			margin: 0;
			padding: 30; 
		}

		.ad {
			margin: 10px;
			background-color: orange;
			height: 45%;
		}

		.up{height:36px; width:56px; font-size:18px; text-align:center; background:#00AF09; margin-bottom:2px; margin:10px auto}
		.up a{color:#fff;text-decoration:none; line-height:1.8em}

		.down{height:36px; width:56px; font-size:18px; text-align:center; background:#EC383B; margin-bottom:2px; margin:10px auto; margin-top:20px}
		.down a{color:#FFFFFF;text-decoration:none; line-height:1.8em}

		.box1{float:left; height:40px; width:100px; color:#000}

		.box2{float:left; width:700px; text-align:left;margin-left:30px;height:350px;margin-top:10px;font-size:16px; color:#000; }

	</style>

	<body onload="httpGet('http://api.stackexchange.com/2.1/questions/34417209?site=stackoverflow')">
		<h1 align="center" name = "top" class="jumbotron text-center"> Geekademy </h1>

		<ul class="nav">
			<li><a href="Index.html" class="active"> Home </a></li>
			<li><a href="Algorithms.html"> Algorithms </a></li>
			<li><a href="Data_Structure.html"> Data Structures </a></li>
			<li><a href="Subjects.html"> Computer Science Subjects </a></li>
			<li><a href=""> Interview </a></li>
			<li><a href="Login.html"> Login </a></li>

		</ul><br>
		<div class="row">
		<div class="col-sm-2">
			<div class="ad">Ad to the left #1</div>
			<div>
			<?php 
				$response = file_get_contents("http://api.stackexchange.com/2.1/questions/34417209?site=stackoverflow");
				$file = 'ads.json';
				file_put_contents($file, $response);

				$str = file_get_contents('ads.json');
				$json = json_decode($str, true);
				echo $json
				/*echo json_decode($response);
				$res = json_decode($response);
				echo gettype($res);
				*/
			?>
	
			</div>
		</div>

		<div class="col-sm-8 card">

		<?php
		include('config.php');
		$sql=mysql_query("SELECT * FROM voting ");
		while($row=mysql_fetch_array($sql)) // For every row in table i.e. for every text/article show article alongwith upvote/downvote system
		{
		$article_id=$row['article_id'];
		$heading=$row['heading'];
		$text=$row['text'];
		$up=$row['upvote'];
		$down=$row['downvote'];
		?>
		<h3>Featured Article</h3>
		<div class="box1"> 
		<div class='up'><a href="" class="vote" id="<?php echo $article_id; ?>" name="up"><?php echo $up; ?> &and;</a></div>
	    <p style="color:#777; margin-left:20px; margin-top:0px">Like(s)</p>
	    
		<div class='down'><a href="" class="vote" id="<?php echo $article_id; ?>" name="down"><?php echo $down; ?> &or;</a></div>
	    <p style="color:#777; margin-left:20px; margin-top:0px">Dislike(s)</p>
		</div>

		<div class='box2' ><p style="color:#777">
		<?php 
		echo "<h4>".$heading."</h4>"; 
		echo "<p>".$text."</p><br>"; 
		?>
		
		<br></div></p>

		<?php
		}
		?>

		</div>
		<div class="col-sm-2">
			<div class="ad"> Ad to the right #1</div>
		</div>
		</div>
		<hr>

		<footer>
			<h3 align="center">&copy; 2018 Unity Learn. All rights reserved.</h3>
			<a href="#top"><button align="middle"> Go to Top </button></a>

			<br><br>

		</footer>
	</body>
</html>