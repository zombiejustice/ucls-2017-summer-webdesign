    <!-- p4questions-l1 begin -->
    
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