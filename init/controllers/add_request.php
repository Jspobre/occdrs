<?php
  require_once "../model/class_model.php";

	if(ISSET($_POST)){
		$conn = new class_model();

		$control_no = trim($_POST['control_no']);
		$studentID_no = trim($_POST['studentID_no']);
		$document_name = trim($_POST['document_name']);
		$no_ofcopies = trim($_POST['no_ofcopies']);
		$purpose = trim($_POST['purpose']);
	    $date_request = trim($_POST['date_request']);
		$status = "Pending";
		$student_id = trim($_POST['student_id']);


		$request = $conn->add_request($control_no, $studentID_no, $document_name, $no_ofcopies,$purpose, $date_request, $status, $student_id);
		if($request == TRUE){
		    echo '<div class="alert alert-success">Add Request Successfully!</div><script> setTimeout(function() {  window.history.go(-1); }, 1000); </script>';

		  }else{
			echo '<div class="alert alert-danger">Add Request Failed!</div><script> setTimeout(function() {  window.history.go(-0); }, 1000); </script>';
		}
	}
?>

