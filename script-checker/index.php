<!DOCTYPE html>
<html>
<head>
<title>Test your website</title>
<style type='text/css'>
body {
	background-color: #666666;
	margin: 0;
	padding: 0;	
}

#main{
	background-color: #333333;
	color: #cccccc;
	width: 580px;
	border: 10px solid #000000;
	padding: 0;
	margin: 20px auto;
	font-family: "Courier", monospace;
}

#student {
	width: 265px;
	padding: 10px;
	border-right: 10px solid #000000;
	float: left;
}
#assignment {
	width: 265px;
	padding: 10px;
	border-left: 10px solid #000000;
	margin-left: 285px;	
}

#submit {
	clear: left;
	display: block;
	padding: 10px;
	border: none;
	border-top: 10px solid #000000;
	width: 580px;
	background-color: #cccccc;
	color: #333333;
	margin: 0;
	font-family: "Courier", monospace;
	font-size: 1.25em;
	font-weight: bold;
}

h1 {
	border-bottom: 10px solid #000000;
	padding: 10px;
	margin: 0;
	text-align: center;
}

h2 {
	text-align: right;
	border-bottom: 10px solid #999999;
}
form {
	margin: 0;
	padding: 0;	
}
</style>
</head>
<body>
<div id='main'>
<h1><?php if (array_key_exists('elite', $_GET)) { echo "YES! "; } ?>Check your website by choosing your name and project below!</h1>

<form action='via.php' method='get'>
<div id='student'>
<h2>Students</h2>
<?php
	include "students.php";
	for ($i=0; $i<count($students); $i++) {
		if ($i==0) {
			echo "<label><input type='radio' name='student' checked='checked' value='$students[$i]'/>$students[$i]</label><br />";
		} else {
			echo "<label><input type='radio' name='student' value='$students[$i]'/>$students[$i]</label><br />";
		}
	}
?>
</div>
<div id='assignment'>
<h2>Assignments</h2>
<?php
	include "assignments.php";
	if (array_key_exists('elite', $_GET)) {
		$assignments = array_merge($assignments, $assignments_elite);
	}
	for ($i=0; $i<count($assignments); $i++) {
		if ($i==count($assignments)-1) {
			echo "<label><input type='radio' checked='checked' name='assignment' value='$assignments[$i]' />" . $assignments_desc["$assignments[$i]"] . "</label><br />";
		} else {
			echo "<label><input type='radio' name='assignment' value='$assignments[$i]' />" . $assignments_desc["$assignments[$i]"] . "</label><br />";
		}
	}

?>
</div>

<input id='submit' type='submit' value='Check that page!'/>
</form>
</div>
</body>
</html>