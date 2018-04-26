<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<?php

include("config.php");
if($_GET['id'])
{	
	$id = $id=$_GET['id'];
	$id = mysql_escape_String($id);
	$result = mysql_query("select * from subtopics where subtopic_id='$id'");
	$row = mysql_fetch_array($result);
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
		<h2 align="center">Analysis of Algorithms</h2>
		<h3 align="center" style="padding: 0;"><?php echo $title; ?></h3><br>
		<div class="row">
		<div class="col-sm-2">
			<div class="ad">Ad to the left #1</div>
		</div>
		<div class="col-sm-8">
		<div class="card">
		<div class="text">
			<p>
			<p>In the <a href="https://www.geeksforgeeks.org/archives/11064">previous post</a>, we discussed how Asymptotic analysis overcomes the problems of naive way of analyzing algorithms<span id="more-17020"></span>. In this post, we will take an example of Linear Search and analyze it using Asymptotic analysis.</p>
<p>We can have three cases to analyze an algorithm:<br /> 1) Worst Case<br /> 2) Average Case<br /> 3) Best Case</p>
<p>Let us consider the following implementation of Linear Search.</p>
<div>
<div id="highlighter_295506" class="syntaxhighlighter nogutter  c">
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="code">
<div class="container">
<div class="line number1 index0 alt2"><code class="c preprocessor">#include &lt;stdio.h&gt;</code></div>
<div class="line number2 index1 alt1">&nbsp;</div>
<div class="line number3 index2 alt2"><code class="c comments">// Linearly search x in arr[].&nbsp; If x is present then return the index,</code></div>
<div class="line number4 index3 alt1"><code class="c comments">// otherwise return -1</code></div>
<div class="line number5 index4 alt2"><code class="c color1 bold">int</code> <code class="c plain">search(</code><code class="c color1 bold">int</code> <code class="c plain">arr[], </code><code class="c color1 bold">int</code> <code class="c plain">n, </code><code class="c color1 bold">int</code> <code class="c plain">x)</code></div>
<div class="line number6 index5 alt1"><code class="c plain">{</code></div>
<div class="line number7 index6 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">i;</code></div>
<div class="line number8 index7 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">for</code> <code class="c plain">(i=0; i&lt;n; i++)</code></div>
<div class="line number9 index8 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c plain">{</code></div>
<div class="line number10 index9 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">if</code> <code class="c plain">(arr[i] == x)</code></div>
<div class="line number11 index10 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">i;</code></div>
<div class="line number12 index11 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c plain">}</code></div>
<div class="line number13 index12 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">-1;</code></div>
<div class="line number14 index13 alt1"><code class="c plain">}</code></div>
<div class="line number15 index14 alt2">&nbsp;</div>
<div class="line number16 index15 alt1"><code class="c comments">/* Driver program to test above functions*/</code></div>
<div class="line number17 index16 alt2"><code class="c color1 bold">int</code> <code class="c plain">main()</code></div>
<div class="line number18 index17 alt1"><code class="c plain">{</code></div>
<div class="line number19 index18 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">arr[] = {1, 10, 30, 15};</code></div>
<div class="line number20 index19 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">x = 30;</code></div>
<div class="line number21 index20 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">n = </code><code class="c keyword bold">sizeof</code><code class="c plain">(arr)/</code><code class="c keyword bold">sizeof</code><code class="c plain">(arr[0]);</code></div>
<div class="line number22 index21 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c functions bold">printf</code><code class="c plain">(</code><code class="c string">"%d is present at index %d"</code><code class="c plain">, x, search(arr, n, x));</code></div>
<div class="line number23 index22 alt2">&nbsp;</div>
<div class="line number24 index23 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c functions bold">getchar</code><code class="c plain">();</code></div>
<div class="line number25 index24 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">0;</code></div>
<div class="line number26 index25 alt1"><code class="c plain">}</code></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p><strong>Worst Case Analysis (Usually Done)</strong><br /> In the worst case analysis, we calculate upper bound on running time of an algorithm. We must know the case that causes maximum number of operations to be executed. For Linear Search, the worst case happens when the element to be searched (x in the above code) is not present in the array. When x is not present, the search() functions compares it with all the elements of arr[] one by one. Therefore, the worst case time complexity of linear search would be &Theta;(n).</p>
<p><strong>Average Case Analysis (Sometimes done) </strong><br /> In average case analysis, we take all possible inputs and calculate computing time for all of the inputs. Sum all the calculated values and divide the sum by total number of inputs. We must know (or predict) distribution of cases. For the linear search problem, let us assume that all cases are <a href="http://en.wikipedia.org/wiki/Uniform_distribution_%28discrete%29">uniformly distributed</a> (including the case of x not being present in array). So we sum all the cases and divide the sum by (n+1). Following is the value of average case time complexity.</p>
<pre>Average Case Time = <a href="https://www.geeksforgeeks.org/wp-content/uploads/analysis1.png"><img class="alignnone size-full wp-image-134804" src="https://www.geeksforgeeks.org/wp-content/uploads/analysis1.png" alt="analysis1" width="63" height="31" /></a>

                  = <a href="https://www.geeksforgeeks.org/wp-content/uploads/analysis2.png"><img class="alignnone size-full wp-image-134805" src="https://www.geeksforgeeks.org/wp-content/uploads/analysis2.png" alt="analysis2" width="112" height="29" /></a> 

                  = &Theta;(n) 
</pre>
<p><strong>Best Case Analysis (Bogus) </strong><br /> In the best case analysis, we calculate lower bound on running time of an algorithm. We must know the case that causes minimum number of operations to be executed. In the linear search problem, the best case occurs when x is present at the first location. The number of operations in the best case is constant (not dependent on n). So time complexity in the best case would be &Theta;(1)<br /> Most of the times, we do worst case analysis to analyze algorithms. In the worst analysis, we guarantee an upper bound on the running time of an algorithm which is good information.<br /> The average case analysis is not easy to do in most of the practical cases and it is rarely done. In the average case analysis, we must know (or predict) the mathematical distribution of all possible inputs.<br /> The Best Case analysis is bogus. Guaranteeing a lower bound on an algorithm doesn&rsquo;t provide any information as in the worst case, an algorithm may take years to run.</p>
<p>For some algorithms, all the cases are asymptotically same, i.e., there are no worst and best cases. For example,<a href="http://en.wikipedia.org/wiki/Merge_sort"> Merge Sort</a>. Merge Sort does &Theta;(nLogn) operations in all cases. Most of the other sorting algorithms have worst and best cases. For example, in the typical implementation of Quick Sort (where pivot is chosen as a corner element), the worst occurs when the input array is already sorted and the best occur when the pivot elements always divide array in two halves. For insertion sort, the worst case occurs when the array is reverse sorted and the best case occurs when the array is sorted in the same order as output.</p><br>
			</p>
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