<article class='elite-cadre'>
      <h3>
        Project: Password - Lesson 4: The Database
      </h3>
      <p>
        
      </p>
      <pre>
&lt?php

  include 'credentials.php'; /* credentials are stored in a separate file as variables */ 
    
  if (array_key_exists('user', $_POST) and array_key_exists('pwd', $_POST)) {
  /* check if attempt made */

    $query = "SELECT password FROM accounts WHERE user='" . $_POST['user'] . "';";
    /* composing our database query - not sending it yet! */
    /* note that SQL keywords are in all caps */

    $link = mysql_connect($server, $login, $adminpassword) or die("Connect failed");
    /* connect to our database using the stored credentials */

    $result = mysql_db_query($database, $query) or die("query failed");
    /* this line sends the query and stores the results, but */
    /* the results are not yet in a form we can read easily  */

    if (mysql_num_rows($result) > 0) {
    /* check to make sure we got at least one hit for the username */
    
      $row = mysql_fetch_assoc($result);
      /* turn it into an array we can read easily */
      
      if ($row['password'] == $_POST['pwd']) {
      /* check the input vs user's password */
      
        
        /* correct user/password pair */
      } else {
        /* incorrect password */
        
      }
    } else {
        /* incorrect user */
        
    } 
  } else {
    /* no attempts */
   
  }    
?&gt;
    </pre>
    </article>
<?php include "o3password-l3/index.php"; ?>