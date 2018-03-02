<?php

include("config.php");
$ip=$_SERVER['REMOTE_ADDR']; 
if($_POST['id'])
{
	$id=$_POST['id'];
	$id = mysql_escape_String($id);
	$ip_sql=mysql_query("select ip_add from voting_ip where article_id_fk='$id' and ip_add='$ip'");
	$count=mysql_num_rows($ip_sql);

	if($count==0)
	{
		$sql = "update voting set upvote=upvote+1  where article_id='$id'";
		mysql_query( $sql);

		// ***** Removing this provides a user to Like a Single Post Multiple Times *****
		// $sql_in = "insert into voting_ip (article_id_fk,ip_add) values ('$id','$ip')";
		// mysql_query( $sql_in);
		// **********
	}

	else
	{

	}

	$result=mysql_query("select upvote from voting where article_id='$id'");
	$row=mysql_fetch_array($result);
	$up_value=$row['upvote'];
	echo $up_value; echo'&nbsp;&and;';
}

?>

