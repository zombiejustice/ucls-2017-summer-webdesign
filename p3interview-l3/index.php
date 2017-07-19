<?php
  if ($TODAY == 'p3inteview-l3') {
    include "nav.php";
  }
?>

    <!-- p3interview-l2 begin -->
    
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