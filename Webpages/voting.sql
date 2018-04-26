-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 10:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `subtopics`
--

CREATE TABLE `subtopics` (
  `subtopic_id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtopics`
--

INSERT INTO `subtopics` (`subtopic_id`, `title`, `content`) VALUES
(1, 'Asymptotic Analysis', '<strong><em>Why performance analysis?</em></strong><br /> There are many important things that should be taken care of, like user friendliness, modularity, security, maintainability, etc. Why to worry about performance? <span id="more-11064"></span><br /> The answer to this is simple, we can have all the above things only if we have performance. So performance is like currency through which we can buy all the above things. Another reason for studying performance is &ndash; speed is fun!</p>\n<p><strong><br /> <em>Given two algorithms for a task, how do we find out which one is better?</em></strong><br /> One naive way of doing this is &ndash; implement both the algorithms and run the two programs on your computer for different inputs and see which one takes less time. There are many problems with this approach for analysis of algorithms.<br /> 1) It might be possible that for some inputs, first algorithm performs better than the second. And for some inputs second performs better.<br /> 2) It might also be possible that for some inputs, first algorithm perform better on one machine and the second works better on other machine for some other inputs.</p>\n<p><a href="http://en.wikipedia.org/wiki/Asymptotic_analysis">Asymptotic Analysis</a> is the big idea that handles above issues in analyzing algorithms. In Asymptotic Analysis, we evaluate the performance of an algorithm in terms of input size (we don&rsquo;t measure the actual running time). We calculate, how does the time (or space) taken by an algorithm increases with the input size.<br /> For example, let us consider the search problem (searching a given item) in a sorted array. One way to search is Linear Search (order of growth is linear) and other way is Binary Search (order of growth is logarithmic). To understand how Asymptotic Analysis solves the above mentioned problems in analyzing algorithms, let us say we run the Linear Search on a fast computer and Binary Search on a slow computer. For small values of input array size n, the fast computer may take less time. But, after certain value of input array size, the Binary Search will definitely start taking less time compared to the Linear Search even though the Binary Search is being run on a slow machine. The reason is the order of growth of Binary Search with respect to input size logarithmic while the order of growth of Linear Search is linear. So the machine dependent constants can always be ignored after certain values of input size.</p>\n<p><em><strong>Does Asymptotic Analysis always work?</strong></em><br /> Asymptotic Analysis is not perfect, but that&rsquo;s the best way available for analyzing algorithms. For example, say there are two sorting algorithms that take 1000nLogn and 2nLogn time respectively on a machine. Both of these algorithms are asymptotically same (order of growth is nLogn). So, With Asymptotic Analysis, we can&rsquo;t judge which one is better as we ignore constants in Asymptotic Analysis.<br /> Also, in Asymptotic analysis, we always talk about input sizes larger than a constant value. It might be possible that those large inputs are never given to your software and an algorithm which is asymptotically slower, always performs better for your particular situation. So, you may end up choosing an algorithm that is Asymptotically slower but faster for your software.'),
(2, 'Worst, Average and Best Cases', 'In the <a href="https://www.geeksforgeeks.org/archives/11064">previous post</a>, we discussed how Asymptotic analysis overcomes the problems of naive way of analyzing algorithms<span id="more-17020"></span>. In this post, we will take an example of Linear Search and analyze it using Asymptotic analysis.</p>\r\n<p>We can have three cases to analyze an algorithm:<br /> 1) Worst Case<br /> 2) Average Case<br /> 3) Best Case</p>\r\n<p>Let us consider the following implementation of Linear Search.</p>\r\n<div>\r\n<div id="highlighter_295506" class="syntaxhighlighter nogutter  c">\r\n<table border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="code">\r\n<div class="container">\r\n<div class="line number1 index0 alt2"><code class="c preprocessor">#include &lt;stdio.h&gt;</code></div>\r\n<div class="line number2 index1 alt1">&nbsp;</div>\r\n<div class="line number3 index2 alt2"><code class="c comments">// Linearly search x in arr[].&nbsp; If x is present then return the index,</code></div>\r\n<div class="line number4 index3 alt1"><code class="c comments">// otherwise return -1</code></div>\r\n<div class="line number5 index4 alt2"><code class="c color1 bold">int</code> <code class="c plain">search(</code><code class="c color1 bold">int</code> <code class="c plain">arr[], </code><code class="c color1 bold">int</code> <code class="c plain">n, </code><code class="c color1 bold">int</code> <code class="c plain">x)</code></div>\r\n<div class="line number6 index5 alt1"><code class="c plain">{</code></div>\r\n<div class="line number7 index6 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">i;</code></div>\r\n<div class="line number8 index7 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">for</code> <code class="c plain">(i=0; i&lt;n; i++)</code></div>\r\n<div class="line number9 index8 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c plain">{</code></div>\r\n<div class="line number10 index9 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">if</code> <code class="c plain">(arr[i] == x)</code></div>\r\n<div class="line number11 index10 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">i;</code></div>\r\n<div class="line number12 index11 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c plain">}</code></div>\r\n<div class="line number13 index12 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">-1;</code></div>\r\n<div class="line number14 index13 alt1"><code class="c plain">}</code></div>\r\n<div class="line number15 index14 alt2">&nbsp;</div>\r\n<div class="line number16 index15 alt1"><code class="c comments">/* Driver program to test above functions*/</code></div>\r\n<div class="line number17 index16 alt2"><code class="c color1 bold">int</code> <code class="c plain">main()</code></div>\r\n<div class="line number18 index17 alt1"><code class="c plain">{</code></div>\r\n<div class="line number19 index18 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">arr[] = {1, 10, 30, 15};</code></div>\r\n<div class="line number20 index19 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">x = 30;</code></div>\r\n<div class="line number21 index20 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c color1 bold">int</code> <code class="c plain">n = </code><code class="c keyword bold">sizeof</code><code class="c plain">(arr)/</code><code class="c keyword bold">sizeof</code><code class="c plain">(arr[0]);</code></div>\r\n<div class="line number22 index21 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c functions bold">printf</code><code class="c plain">(</code><code class="c string">"%d is present at index %d"</code><code class="c plain">, x, search(arr, n, x));</code></div>\r\n<div class="line number23 index22 alt2">&nbsp;</div>\r\n<div class="line number24 index23 alt1"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c functions bold">getchar</code><code class="c plain">();</code></div>\r\n<div class="line number25 index24 alt2"><code class="c spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="c keyword bold">return</code> <code class="c plain">0;</code></div>\r\n<div class="line number26 index25 alt1"><code class="c plain">}</code></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n<p><strong>Worst Case Analysis (Usually Done)</strong><br /> In the worst case analysis, we calculate upper bound on running time of an algorithm. We must know the case that causes maximum number of operations to be executed. For Linear Search, the worst case happens when the element to be searched (x in the above code) is not present in the array. When x is not present, the search() functions compares it with all the elements of arr[] one by one. Therefore, the worst case time complexity of linear search would be &Theta;(n).</p>\r\n<p><strong>Average Case Analysis (Sometimes done) </strong><br /> In average case analysis, we take all possible inputs and calculate computing time for all of the inputs. Sum all the calculated values and divide the sum by total number of inputs. We must know (or predict) distribution of cases. For the linear search problem, let us assume that all cases are <a href="http://en.wikipedia.org/wiki/Uniform_distribution_%28discrete%29">uniformly distributed</a> (including the case of x not being present in array). So we sum all the cases and divide the sum by (n+1). Following is the value of average case time complexity.</p>\r\n<pre>Average Case Time = <a href="https://www.geeksforgeeks.org/wp-content/uploads/analysis1.png"><img class="alignnone size-full wp-image-134804" src="https://www.geeksforgeeks.org/wp-content/uploads/analysis1.png" alt="analysis1" width="63" height="31" /></a>\r\n\r\n                  = <a href="https://www.geeksforgeeks.org/wp-content/uploads/analysis2.png"><img class="alignnone size-full wp-image-134805" src="https://www.geeksforgeeks.org/wp-content/uploads/analysis2.png" alt="analysis2" width="112" height="29" /></a> \r\n\r\n                  = &Theta;(n) \r\n</pre>\r\n<p><strong>Best Case Analysis (Bogus) </strong><br /> In the best case analysis, we calculate lower bound on running time of an algorithm. We must know the case that causes minimum number of operations to be executed. In the linear search problem, the best case occurs when x is present at the first location. The number of operations in the best case is constant (not dependent on n). So time complexity in the best case would be &Theta;(1)<br /> Most of the times, we do worst case analysis to analyze algorithms. In the worst analysis, we guarantee an upper bound on the running time of an algorithm which is good information.<br /> The average case analysis is not easy to do in most of the practical cases and it is rarely done. In the average case analysis, we must know (or predict) the mathematical distribution of all possible inputs.<br /> The Best Case analysis is bogus. Guaranteeing a lower bound on an algorithm doesn&rsquo;t provide any information as in the worst case, an algorithm may take years to run.</p>\r\n<p>For some algorithms, all the cases are asymptotically same, i.e., there are no worst and best cases. For example,<a href="http://en.wikipedia.org/wiki/Merge_sort"> Merge Sort</a>. Merge Sort does &Theta;(nLogn) operations in all cases. Most of the other sorting algorithms have worst and best cases. For example, in the typical implementation of Quick Sort (where pivot is chosen as a corner element), the worst occurs when the input array is already sorted and the best occur when the pivot elements always divide array in two halves. For insertion sort, the worst case occurs when the array is reverse sorted and the best case occurs when the array is sorted in the same order as output.');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `article_id` int(10) NOT NULL,
  `heading` text NOT NULL,
  `text` text NOT NULL,
  `upvote` int(10) NOT NULL,
  `downvote` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`article_id`, `heading`, `text`, `upvote`, `downvote`) VALUES
(1, 'Print numbers having first and last bits as the only set bits', 'Given a positive integer n. The problem is to print numbers in the range 1 to n having first and last bits as the only set bits. <br><br>  			Examples: <br><br>  			Input : n = 10 <br> 			Output : 1 3 5 9 <br><br> 			(1)<sub>10</sub> = (1)<sub>2</sub><br> 			(3)<sub>10</sub> = (11)<sub>2</sub><br> 			(5)<sub>10</sub> = (101)<sub>2</sub><br> 			(9)<sub>10</sub> = (1001)<sub>2</sub>', 3, 2),
(2, 'Find maximum power of a number that divides a factorial', 'Given two numbers, fact and n, find the largest power of n that divides fact! (Factorial of fact). <br> <br>  			Examples: <br> <br>  			Input : fact = 5, n = 2 <br> 			Output : 3 <br> <br> 			Value of 5! is 120. <br> 			The largest power of 2 that divides 120 is 8 (or 23) <br>  			Input : fact = 146, n = 15 			Output : 35', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `voting_ip`
--

CREATE TABLE `voting_ip` (
  `ip_id` int(10) NOT NULL,
  `article_id_fk` int(10) NOT NULL,
  `ip_add` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subtopics`
--
ALTER TABLE `subtopics`
  ADD PRIMARY KEY (`subtopic_id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `voting_ip`
--
ALTER TABLE `voting_ip`
  ADD PRIMARY KEY (`ip_id`),
  ADD KEY `article_id_fk` (`article_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subtopics`
--
ALTER TABLE `subtopics`
  MODIFY `subtopic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `voting_ip`
--
ALTER TABLE `voting_ip`
  MODIFY `ip_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `voting_ip`
--
ALTER TABLE `voting_ip`
  ADD CONSTRAINT `voting_ip_ibfk_1` FOREIGN KEY (`article_id_fk`) REFERENCES `voting` (`article_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
