<html>
  <head>
    <style>
      #comment-section {
        border: 10px solid #000000;
        background-color: #666666;
        padding: 5px;
        width: 400px;
      }
      
      .comment{
        padding: 5px;
        background-color: #333333;
        color: #ccffcc;
        margin: 5px
      }
      
      #comment-section h3 {
        color: #ffffff;
        border-bottom: 2px dotted #ffffff;
        margin: 0 5px;
      }
      
      .comment-username {
        color: #ccccff;
      }
    </style>
  </head>
  <body>
    <?php
    
    //echo $_SERVER['REMOTE_ADDR'];

    include 'credentials.php';
    
    if (array_key_exists('user', $_POST) and array_key_exists('pwd', $_POST)) {
      /* check if attempt made */
      
      $query = "SELECT password FROM accounts WHERE user='" . $_POST['user'] . "';";
      
      $link = mysql_connect($server, $login, $adminpassword) or die("Connect failed");
      
      $result = mysql_db_query($database, $query) or die("query failed");
      

      
      if (mysql_num_rows($result) > 0) {
        /* check if the user exists */
        $row = mysql_fetch_assoc($result);
        
        $hashed_password = crypt($_POST['pwd'], $row['password']);
        
        if ($row['password'] == $hashed_password) {
          /* check the input vs user's password */
          echo '<p>"In London one time I saw a drive-in couch." -Roy Maybe????</p>';
          /* correct user/password pair */
        } else {
          /* incorrect password */
          echo "<p>ACCESS DENIED</p><p>frown emoji</p>";
        }
      } else {
          /* incorrect user */
          echo "<p>User not found.</p>";
      } 
    } else {
      /* no attempts */
      echo "Nothing to see here&hellip;";
    }    
    ?>
    
    <form method='post' action='index.php'>
      <label>User: <input type='text' name='user' /></label>
      <br /><label>Password: <input type='password' name='pwd' /></label>
      <br /><input type='submit' />
    </form>
    <?php include 'comments.php'; ?>
  </body>
</html>