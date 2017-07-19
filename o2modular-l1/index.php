
    <article id='e2modular' class ='elite-cadre'>
      <h3>
        Mini-project: Modular Navigation
      </h3>
      <p>
        Using php, we can have our navigation menu located in one place, and 'include' it in multiple documents.
      </p>
      <pre>
&lt;html&gt;
  &lt;body&gt;
    &lt;?php /* entering php */
      include 'nav.php'; /* don't forget the quotes */
    ?&gt; &lt;!-- we have exited php... --&gt;
    &lt;!-- that's why this is an html comment instead --&gt;
      </pre>
    </article>
<?php include 'o1garden-l1/index.php'; ?>