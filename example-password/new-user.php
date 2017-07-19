<html>
  <body>
  <?php
  
    include 'credentials.php';
    
    if (array_key_exists('user', $_GET) and array_key_exists('pwd', $_GET)) {
      /* check if attempt made */
      $user = $_GET['user'];
      $pwd = crypt($_GET['pwd']);
      
      $query = "INSERT INTO accounts VALUES ( DEFAULT, '$user', '$pwd' )";
      
      $link = mysql_connect($server, $login, $adminpassword) or die("Connect failed");
      
      $result = mysql_db_query($database, $query) or die("query failed");
      
      if ($result) {
        echo "New user created.";
      } else {
        echo "Unknown error occurred. frown emoji?";
      }
      
    }
  
  ?>
  

    <form method='get' action='new-user.php'>
      <label>Username: <input type='text' name='user' /></label>
      <label>Password: <input type='password' name='pwd' /></label>
      <input type='submit' value='Create New User' />
    </form>
  </body>
</html>