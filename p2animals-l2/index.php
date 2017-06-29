    <!-- p2animals-l2 begin -->
    <article class='elite-cadre' id='e1garden'>
      <h3>
        Elite Cadre: Prove yourself
      </h3>
      <p>
        So you want more from web design? You want to be in the <strong>ELITE CADRE</strong>? Well prove your worth by facing the challeng of the <a href='/garden/index.php'>CSS Garden</a>! The HTML you cannot change, but if you put a 'garden.css' in your base folder, the Garden will seek it out and judge you. Will you survive?
      </p>
    </article>
    <article>
      <h3>
        Project: Animals - Lesson 1: Articles and Divs
      </h3>
      <p>
        Yesterday we began our animals page and learned about articles, which are another element for adding structure to the page. We also learned about IDs, which is an attribute that lets you single out just one of something, for example if you want to style it differently. Later on, we learned some CSS to center text with text-align, and also to center images or even the body using margins.
      </p>
      <pre>
&lt;!-- this is HTML --&gt;

&lt;article id='id0'&gt;
  &lt;h2&gt;Article Headline&lt;/h2&gt;
  &lt;img src='articleimage.jpg' /&gt;
  &lt;p&gt;Doot de doot blah blah blah text&lt;/p&gt;
&lt;/article&gt;</pre>
      <pre>
/* this is CSS */      
      
article {
  width: 600px;
  /* have to have a width to use auto margins */
  margin: 10px auto;
  /* 10px verticle, maximum horizontal */
}

#id0 {
  /* the same id as above,
  prefaced with a pound sign */
  background-color: fuchsia;
  /* please do not use fuchsia */
}

h1 {
  text-align: center;
  /* please don't use this on paragraphs */
}

img {
  width: 400px;
  display: block;
  /* has to be a block to use auto margins */
  margin: auto;
}</pre>
     
    </article>
    <!-- p2animals-l2 end -->
<?php include "p2animals-l1/index.php" ?>