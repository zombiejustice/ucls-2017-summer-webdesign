<?php
  if ($TODAY == 'p3inteview-l3') {
    include "nav.php";
  }
?>

    <!-- p3interview-l2 begin -->
    <article class='elite-cadre' id='e3password-l1'>
      <h3>
        Project: Passwords - Lesson 1: Unlocking Content
      </h3>
      <p>
        Over the next week, we'll be learning about having passwords on your site that can unlock new functionality and content. We'll start with a simple codeword that adds more to a page, then move on to having a public password, then a password that stays hidden. After that we'll be moving on to passwords that are tied to a user account, and ways to make that account resistant to cyberattacks. From that point we will add functionality to the account system, eg. a comment section that you can put on any page you like.
      </p>
      <p>
        Look at the address bar above this page. Do you see how the last part of the URL says "?elite" or maybe "?elite=true" ? That part of the URL is the GET array, as far as php is concerned. We can access it with the special variable $_GET and use 'if' statements and functions like 'array_key_exists' to determine whether or not to 'echo' or 'include' additional content on the page.
      </p>
      <pre>
&lt;?php
  if (array_key_exists('password', $_GET)) {
    if ($_GET['password'] == 'bananas') {
      /* correct password */
      include 'membersonly.php';
    } else {
      /* wrong password */
      echo "ACCESS DENIED frown emoji";
    }
  } else {
    /* no password attempted */
    echo "Nothing to see here...";
  }
?&gt;
      </pre>
    </article>
    <article id='interview'>
      <h3>
        Project: Inteview - Lesson 3: More Image Styling
      </h3>
      <p>
        Today we will style some images on our interview pages.
      </p>
      <pre>
/* this is CSS */      
      
img {
  width: 200px;
  border: 20px solid #666666;
  margin-top: 5px;
  margin-bottom: 5px;
}

#img1 {
  float: right;
  margin-left: 10px;
}

#img2 {
  clear: right;
  float: left;
  margin-right: 10px;
}

</pre>
    
    </article>
    <!-- p3interview-l2 end -->
<?php include "p3interview-l2/index.php" ?>