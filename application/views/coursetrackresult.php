<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8">
	<title>Result</title>
</head>
<style>

	#container{
		background:#FFFFE0;
		width:920px;
		margin:0 auto;
		padding:20px;
		color:black;
    	opacity: 0.8;
    	border-radius: 20px;
    	text-align: center;
	}
</style>
	<header>
		<section>
			<div id="container">
				<strong>
					<?php
						$name = filter_input(INPUT_POST, "form-name");
						$email = filter_input(INPUT_POST, "form-email");
						$company = filter_input(INPUT_POST, "form-company");
						$trackdesc = filter_input(INPUT_POST, "form-trackdesc");
						$coursesug = filter_input(INPUT_POST, "form-coursesug");
        				echo "<div style ='font-size:30px;color:black; font-weight:bold'> Thank you ".$name." for your participation!</div>";
						$output = "Your submitted course tracks will be evaluated.<br><br>";
						$output .= "SUBMITTED INFO <br><br>";
						$output .= "Email: ".$email;
						$output .= "<br><br>Company: ".$company;
						$output .= "<br><br>Track Description: ".$trackdesc;
						$output .= "<br><br>Course Suggestions:".$coursesug;
						echo $output;
					?>
			</div>
		</section>
	</header>
</html>
