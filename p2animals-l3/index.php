    <!-- p2animals-l3 begin -->
    <article>
      <h3>
        Project: Animals - Lesson 3: Hyperlinks
      </h3>
      <p>
        Friday we learned about making hyperlinks with the anchor element in HTML and hyperlink styling in CSS. Remember that there are four pseudoclasses of the anchor element: a:link, a:visited, a:hover, and a:active, and they should always appear in that order in your CSS document.
      </p>
      <pre>
&lt;!-- this is HTML --&gt;

&lt;a href='http://slabweb.tk'&gt;
  Summer Lab Web Class Page
&lt;/a&gt;</pre>
      <pre>
/* this is CSS */      
      
a:link {
  /* unclicked links */
  color: blue;
  text-decoration: underline;
}

a:visited {
  /* already visited */
  color: purple;
  text-decoration: underline;
}

a:hover {
  /* when the mouse is over it */
  text-decoration: none;
}

a:active {
  /* while it's being clicked on */
  color: red;

}
</pre>
    
    </article>
    <!-- p1animal-l3 end -->
<?php include "p2animals-l2/index.php" ?>