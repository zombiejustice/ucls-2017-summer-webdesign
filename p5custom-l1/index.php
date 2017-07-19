    <!-- p5custom-l1 begin -->
    
    <article id='p5custom'>
      <h3>
        Project: Custom Page
      </h3>
      <p>
        Using new types of input elements, we'll change the style of a page!
      </p>
      <pre>
&lt;!-- this is HTML --&gt;
&lt;h1&gt;CHANGE THIS PAGE&lt;/h1&gt;
&lt;input id='fgcolor' type='color' value='#999999' /&gt;
      </pre>
      
      
      <pre>
&lt;script type='text/javascript'&gt;

  function update() {
    var fgcolor = document.getElementById('fgcolor').value
    document.getElementsByTagName("h1")[0].style.color = fgcolor;
  }
  
&lt;/script&gt;</pre>
      <p>
        Bonus: use setCookie and getCookie to remember user preferences!
      </p>
    </article>
    
    <!-- p5custom-l1 end -->
<?php include "p4questions-l2/index.php" ?>