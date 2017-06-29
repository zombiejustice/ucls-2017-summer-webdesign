<?php

$interviews = array('jordan.html', 'notch.html', 'rowling.html', 'sohn.html', 'wright.html', 'newell.html');
$dest = $interviews[rand(0, count($interviews)-1)];

?>
<!DOCTYPE html>
<html>
<head>
<title>redirecting</title>
<meta http-equiv="Refresh" content="0;url=<?php
    echo $dest;
    echo '?';
    if (array_key_exists('nav', $_GET)) {
      echo 'nav=true&';
    }
    if (array_key_exists('alt', $_GET)) {
      echo 'alt=1&';
    }
                                    
    echo 'n=';
    if (array_key_exists('n', $_GET)) {
      echo $_GET['n'];
    }
?>" />
</head>

<body>
<p>working...</p>
</body>
</html>

