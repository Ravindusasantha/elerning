<?php

session_start();

	
	
	include_once("connection.php");

$grade='10';
$subject="science";
$ppr="2017";
$num_correct=0;

echo "You have selected :".$_POST['r1'];
echo "You have selected :".$_POST['r2'];
echo "You have selected :".$_POST['r3'];
echo "You have selected :".$_POST['r4'];
echo "You have selected :".$_POST['r5'];
echo "You have selected :".$_POST['r6'];
echo "You have selected :".$_POST['r7'];
echo "You have selected :".$_POST['r8'];
echo "You have selected :".$_POST['r9'];
  //  Displaying Selected Value


$check="SELECT * FROM answer";

$result=mysqli_query($conn,$check);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){


	$answer=$row['ans'];

	
	$ans=$row['qtion'].$answer;
var_dump($ans);
	if($ans==$_POST['r1']){

		$num_correct=$num_correct+1;
	}

}

var_dump($num_correct);
echo $num_correct;




?>