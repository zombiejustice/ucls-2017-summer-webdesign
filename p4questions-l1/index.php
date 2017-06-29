    <!-- p4questions-l1 begin -->
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
    <article class='elite-cadre'>
      <h3>
        Project: Password - Lesson 2: Hiding the Password
      </h3>
      <p>
        OK, Elites. We're using php <em>and</em> forms now to have our secret password that unlocks hidden content. <span style='text-decoration: line-through;'>Because the form always submits a value for each key, we don't need to use array_key_exists this time.</span> Whoops, that only works if the file is .php and I'm not sure why. Corrected code is below:
      </p>
      <pre>
&lt;!-- this is HTML --&gt;

&lt;form method='post' action='index.php'&gt;
&lt;!-- the action should be a webpage --&gt;
  &lt;input type='password' name='pwd' /&gt;
  &lt;input type='submit' /&gt;
&lt;/form&gt;
      </pre>
      
      <pre>
&lt;?php /* this is php, obviously */
  
  if (array_key_exists('pwd', $_POST)) {
  /* check that there was an attempt */
    if ($_POST['pwd'] == 'bananas') {
    /* check password */
      /* right answer */
    } else {
      /* wrong answer */
    }    
  } else {
    /* no password attempts */
    /* if you want, you can put the form here */
    /***** using echo or include */
  }
  
?&gt;

      </pre>
    </article>
    <article>
      <h3>
        Project: Questions
      </h3>
      <p>
        Today we will starting a new project today where we ask questions with hidden answers. You'll find a 'project-questions' folder your server directory with skeleton .html and .css files. We'll start by revealing the answer with :hover then add transitions to make the whole thing look wicked cool.
      </p>
      <pre>
&lt;!-- this is HTML --&gt;

&lt;p class='hidden'&gt;
  Orange you glad I didn't say banana.
&lt;/p&gt;</pre>
      <pre>
/* this is CSS */      
      
.hidden {
  background-color: white;
  color: white;
  /* can't see it if they're both white */
  transition: 2s color;
  /* color changes over two seconds */
}

.hidden:hover {
  color: black;
  /* now we can see it */
}
</pre>
    
    </article>
    <!-- p4questions-l1 end -->
<?php include "p3interview-l3/index.php" ?>