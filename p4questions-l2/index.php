    <!-- p4questions-l2 begin -->
    <article id='p4questions'>
      <h3>
        Project: Questions - Lesson 2: Javascript
      </h3>
      <p>
        Adding on to our questions project, we'll start using some Javascript to change our page. We'll add functionality that makes the answer only appear when the user clicks on it. To do this, we need two things: an event listener in our HTML and a function in Javascript, which goes inside the script element contain in the head. Feel free to look at Mr. H's <a href='example-questions'>example page</a>.
      </p>
      <pre>
&lt;p class='a' onClick='reveal(0)'&gt;
  &lt;!-- We start with zero instead of one. It's just how we do. --&gt;
  A chair, because a vest doesn't have sleeves.
&lt;/p&gt;
      </pre>
      
      <p>
        In the javascript, the reveal() function takes the number as a parameter called 'answer' and inserts it back in later where the code says 'answer' again. 'document.getElementsByClassName()' takes a class name as its parameter and gives us a list of all the elements in that class. 'style.color' accesses the color of the selected element; for background color it would be 'style.backgroundColor' instead.
      </p>
      <pre>
&lt;script type='text/javascript'&gt;

  function reveal(answer) {
    document.getElementsByClassName("a")[answer].style.color = "white";
  }
  
&lt;/script&gt;</pre>
    </article>
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
    
    <!-- p4questions-l2 end -->
<?php include "p4questions-l1/index.php" ?>