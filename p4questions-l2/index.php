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
    
    
    <!-- p4questions-l2 end -->
<?php include "p4questions-l1/index.php" ?>