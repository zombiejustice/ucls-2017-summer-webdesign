<article class='elite-cadre'>
      <h3>
        Project: Password - Lesson 3: Username / Password Pairs
      </h3>
      <p>
        We added in some usernames, and now we need array_key_exists again, to make sure the user exists in our password list. We use the 'user' input as a key into the password array, and then we check if that user's password matches with what the user typed in.
      </p>
            <pre>
&lt;!-- this is HTML --&gt;

&lt;form method='post' action='index.php'&gt;
&lt;!-- the action should be a webpage --&gt;
  &lt;input type='text' name='user' /&gt;
  &lt;input type='password' name='pwd' /&gt;
  &lt;input type='submit' /&gt;
&lt;/form&gt;
      </pre>
      
      <pre>
&lt;?php /* this is php, obviously */
  $passwords = array( 'steve'=>'bananas', 'panda'=>'fjord' );
    /* this array holds pairs of usernames and passwords */
    /* we can use the username as a key to find the password */
    
  if (array_key_exists('user', $_POST) and array_key_exists('pwd', $_POST)) {
  /* check if they filled out the form */
  
    if (array_key_exists($_POST['user'], $passwords)) {
    /* check if the user exists in password list */
      
      $user = $_POST['user'];
      if ($passwords[$user] == $_POST['pwd']) {
      /* check the user's recorded password vs input */
        
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
<?php include 'o3password-l2/index.php'; ?>