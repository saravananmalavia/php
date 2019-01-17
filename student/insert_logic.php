<?php

// to establish the connection the database server 

require_once 'connection.php';


//to read the values from the prvious form create.php

$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$mark3=$_POST['mark3'];

// find the total and result (business logic)

$total=$mark1+$mark2+$mark3;
$result="PASS";

if(($mark1<50) || ($mark2<50) || ($mark3<50))
{
$result="FAIL";
}

// generate sql query to insert the details

$sql="insert into student values($studentid,'$studentname',
$mark1,$mark2,$mark3,$total,'$result')";


if($connect->query($sql) === TRUE) {

//on success of query execution redirect to the landing page index.php

header('Location: index.php');

}
else
{

// on Error taken to the error page

	header('Location: error.php');
}


?>