
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
<?php include 'o3password-l1/index.php'; ?>