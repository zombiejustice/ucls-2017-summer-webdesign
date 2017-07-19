<section id='comment-section'>
  <h3>
    Comments on this page: 
  </h3>
<?php

  include 'credentials.php';
  $link = mysql_connect($server, $login, $adminpassword) or die("Connect failed");
  //echo $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
  
  $query = "SELECT u_id, c_text FROM comments WHERE c_url='" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "';";
      
  $result = mysql_db_query($database, $query) or die("comment query failed");
      
  $numrows = mysql_num_rows($result);
  //echo $numrows;
  for ($i=0;$i<$numrows;$i++) {
    //this only runs if there's at least one row
    $row = mysql_fetch_assoc($result);
    $query = "SELECT user FROM accounts WHERE id='" . $row['u_id'] . "';";
    $user_results = mysql_db_query($database, $query) or die ("username query failed");
    $user_row = mysql_fetch_assoc($user_results);
    
    echo "<p class='comment'><span class='comment-username'>" . $user_row['user'] . ":</span> " . $row['c_text'] . "</p>";
  }
        
  
?>  
</section>