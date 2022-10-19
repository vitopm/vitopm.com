<?php

session_start();
$_SESSION["isError"] = false;

//sumber: https://www.geeksforgeeks.org/how-to-select-and-upload-multiple-files-with-html-and-php-using-http-post/

// Check if form was submitted
if(isset($_POST['submit'])) {
	// Configure upload directory and allowed file types
	$upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
	$allowed_types = array('docx', 'pdf');
	
	// Define maxsize for files
	$maxsize = 5 * 1024 * 1024;

	// Checks if user sent an empty form
	if(!empty(array_filter($_FILES['files']['name']))) {

		// Loop through each file in files[] array
		foreach ($_FILES['files']['tmp_name'] as $key => $value) {
			$file_tmpname = $_FILES['files']['tmp_name'][$key];
			$file_name = $_FILES['files']['name'][$key];
			$file_size = $_FILES['files']['size'][$key];
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
			// Set upload file path
			$filepath = $upload_dir.$file_name;

			// Check file type is allowed or not
			if(in_array(strtolower($file_ext), $allowed_types)) {

				// Verify file size
				if ($file_size > $maxsize)		
					$reason = "Error: File size is larger than the allowed limit.";
					$_SESSION["error"] = $reason;
					$_SESSION["isError"] = true;
					header("Location:{$_SESSION["source"]}");
				// If file with name already exist then append time in
				// front of name of the file to avoid overwriting of file
				if(file_exists($filepath)) {
					$filepath = $upload_dir.time().$file_name;
					
					if( move_uploaded_file($file_tmpname, $filepath)) {
						$_SESSION["isError"] = false;
						if($_SESSION["source"] == "business.php"){
							header("Location: criteria.php");
						}else{
							header("Location: personal-result.php");
						}
					}
					else {					
						$reason = "Error uploading {$file_name} <br />";
						$_SESSION["error"] = $reason;
						$_SESSION["isError"] = true;
						header("Location:{$_SESSION["source"]}");
					}
				}
				else {
					if( move_uploaded_file($file_tmpname, $filepath)) {
						$_SESSION["isError"] = false;
						if($_SESSION["source"] == "business.php"){
							header("Location: criteria.php");
						}else{
							header("Location: personal-result.php");
						}
					}
					else {					
						$reason = "Error uploading {$file_name} <br />";
						$_SESSION["error"] = $reason;
						$_SESSION["isError"] = true;
						header("Location:{$_SESSION["source"]}");
					}
				}
			}
			else {
				
				// If file extension not valid
				$reason = "Error uploading {$file_name} <br>{$file_ext} file type is not allowed)<br / >";
				$_SESSION["error"] = $reason;
				$_SESSION["isError"] = true;
				header("Location:{$_SESSION["source"]}");
				
			}
		}
	}
	else {
		
		// If no files selected
		$reason = "No files selected";
		$_SESSION["error"] = $reason;
		$_SESSION["isError"] = true;
		header("Location:{$_SESSION["source"]}");
	}
}
?>