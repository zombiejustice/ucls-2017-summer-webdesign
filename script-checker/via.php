<!DOCTYPE html>
<html>
<head>
<title>redirecting</title>
<meta http-equiv="Refresh" content="0;url=<?php
    include "assignments.php";
    include "students.php";                                
    $student = $_GET['student'];
    $assignment = $_GET['assignment'];                                    
    if ($assignment == 'garden') {
      echo 'http://slabweb.tk/garden/index.php?student=';
    } elseif (array_key_exists($assignment, $assignments_url_pre)) {
      echo $assignments_url_pre[$assignment];
    } elseif ($student == 'dualitypanda') {
      echo 'http://pandathernation.x10host.com';
    } elseif ($student == 'mrh') {
      echo 'http://slabweb.tk/';
    } elseif (in_array($student, $alternates)) {
      echo 'http://slabweb17.phpwebhosting.com/';
    } else {
      echo 'http://slabweb.phpwebhosting.com/';
    }
    
    if ($student != 'dualitypanda') { 
      echo $student;
    } elseif ($assignment == 'garden') {
      echo $student;
    }
    
    if (in_array($student, $alternates) && (($assignment == 'garden') || ($assignment == 'interview'))) {
      echo '&alt=1';
    }
                                    
    echo $assignments_url_post[$assignment];
?>" />
</head>

<body>
<p>working...</p>
</body>
</html>