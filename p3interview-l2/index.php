<?php
  if ($TODAY == 'p3inteview-l2') {
    include "nav.php";
  }
?>

    <!-- p3interview-l2 begin -->
    <article>
      <h3>
        Project: Inteview - Lesson 2: Navigation Menu
      </h3>
      <p>
        Today we will add a menu to our interview project and style it using positioning. Remember to style the links as well!
      </p>
      <pre>
&lt;!-- this is HTML --&gt;
&lt;nav&gt;
  &lt;a href='script-checker'&gt;Project Checker&lt;/a&gt;
  &lt;a href='setup-ftp'&gt;Set-Up CodeAnywhere&lt;/a&gt;
  &lt;a href='#interview'&gt;Project: Interview&lt;/a&gt;
  &lt;a href='#animals'&gt;Project: Animals&lt;/a&gt;
  &lt;a href='#firstpage'&gt;Project: First Page&lt;/a&gt;
&lt;/nav&gt;</pre>
      <pre>
/* this is CSS */      
      
nav {
  width: 230px;
  position: fixed;
  top: 10;
  left: 10;
  height: 100%;
  background-color: #666666;
}

nav a {
  display: block;
  margin: 0;
  font-weight: bold;
  padding: 15px;
  background-color: #333333;
  text-decoration: none;
  font-family: "Monaco", sans-serif;
}

nav a:link, nav a:visited {
  color: #ffffff;
}

nav a:hover {
  border: none;
  padding: 5px;
  border: 10px solid #999999;
}
</pre>
    
    </article>
    <!-- p3interview-l2 end -->
<?php include "p3interview-l1/index.php" ?>