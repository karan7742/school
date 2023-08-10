<?php
$subject='';
$name='';
$class='';
$school='';

if (isset($_GET['subject'])) {
	$subject=$_GET['subject'];
}
if(isset($_GET['name'])){
       $name=$_GET['name'];
}
if(isset($_GET['class'])){
       $class=$_GET['class'];
}
if(isset($_GET['school'])){
       $school=$_GET['school'];
}


echo "Study " . $subject . " at " . $name .$class .$school;
?>