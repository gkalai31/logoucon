<?php
include 'init.php';
session_start();

$path="ex_screenshot/img2.png";
$therapist_id=$_SESSION["therapist_id"];  
$exercise_id=$_POST['exer_id'];
$patient=$_POST['patient'];
$exer_guide=$_POST['exer_guide'];

$today = date("Y-m-d H:i:s");

$insert_exercise = "INSERT INTO patient_exercises (exercise_id,patient_id,listing_date, guide, exercise_path) VALUES ('$exercise_id','$patient','$today', '$exer_guide','$path')";
$insert_ex = mysqli_query($conn, $insert_exercise);
   
if(! $insert_ex ) {

	echo "<script>";
	echo " alert('Please check again your insert.');      
	window.location.href='". $_SERVER['HTTP_REFERER']."';
	</script>";
}else{
 	echo "<script>";
	echo " alert('Insert done!');      
	window.location.href='". $_SERVER['HTTP_REFERER']."';
	</script>";
   }
?>