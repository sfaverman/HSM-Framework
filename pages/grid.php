<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
	<style>
		.cssCode{
			font-size: 1.2em;
		}
        main{
            display: flex;
        }
        @media screen and (min-width: 960px){
            main{
                display: block;
            }
        }
    </style>


    <div class=" documentation">
        <h1 class="title"> Grid </h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2">HSM Grid</h2>
           <p>
           	HSM follows 12 Column Grid sysytem as shown below. <br>
           - It is responsive by default;
           </p>

        	<p><img src="../images/layouts.jpg" alt="layout" class="img-responsive"></p>

        	 <p>

        	 	 - <span class="sp">.grid</span> class wraps around everything. It sets the <span class="sp">display</span> property  to grid which activates the CSS Grid <br>
           - To set horizontal gutter, we used <span class="sp">grid-row-gap</span> properties.
            Layout.

        	 </p>
        	 <div class="cssCode">

        	 		<pre>
.grid  {
	display: grid;
	column-gap: 2%;
	grid-row-gap: 10px;
}
        	 		</pre>

        	 </div>
   			<p>

        	 	 - You can use <span class="sp">.column2</span> class with .grid class to make 2 column grid.
           - To set horizontal gutter, we used <span class="sp">grid-row-gap</span> properties.
            Layout.
        	 </p>

        <div class="cssCode">

        		<pre>
  .column2 {
	grid-template-columns: repeat(2, 49%);
  }
        		</pre>

        </div>

   			<h2 class="h2">2 Column Layout</h2>

   			<section class="grid column2">
				<article class="col">
					<h3>Article 1 - 49%</h3>
					<p> 2 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
				</article>
				<article class="col">
					<h3>Article 2 - 49%</h3>
					<p> 2 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

				</article>

 	 	   </section>
 	 	   <p>

        	 	 - You can use <span class="sp">.column2</span> class with <span class="sp">.grid</span> class to make 2 column grid.  <br>
           - To set horizontal gutter, we used <span class="sp">grid-row-gap</span> properties. <br>
           - You can also use <span class="sp">.column2-md</span> class to change layout to 2 colunm in medium viewport size.
            Layout. <br>
            -For 2 column grid you .column3 wrapper should have only 2 direct child elements.

        	 </p>
   		<div class="cssCode">

	   	<pre>
.column2 {
	grid-template-columns: repeat(2, 49%);
}
	   	</pre>

          </div>

 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid column2"&gt;
   &lt;article class="col"&gt;
	   &lt;h3&gt;Article 1 - 49%&lt;/h3&gt;
	   &lt;p&gt; 2 column layout. ....  &lt;/p&gt;
   &lt;/article&gt;
   &lt;article class="col"&gt;
	   &lt;h3&gt;Article 2 - 49%&lt;/h3&gt;
	   &lt;p&gt; 2 column layout. .... &lt;/p&gt;
   &lt;/article&gt;
&lt;/section&gt;
 	 	   		</pre>

 	 	   </div>

<!-- 	 	3 cols ---------------------------------   -->
 	 	   <h2 class="h2">3 Column Layout</h2>
 		<section class="grid column3">
 			<article>
 				<h3>Article 1 - 32%</h3>
 				<p> 3 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</article>
 			<article>
 				<h3>Article 2 - 32%</h3>
 				<p> 3 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumq neque nesciunt tenetur. So dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam.</p>

 			</article>
 			<article>
 				<h3>Article 3 - 32%</h3>
 				<p> 3 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur.</p>
 			</article>
 		</section>

  		<p class="mt mb ">

        	- You can use <span class="sp">.column3</span> class with <span class="sp">.grid</span> class to make 3 column grid.  <br>
           - For 3 column grid you .column3 wrapper should have only 3 direct child elements.
           -each column will span 32% of its container width;

        	 </p>
   			<div class="cssCode">

	   	<pre>
.column2 {
	grid-template-columns: repeat(3, 32%);
}
	   	</pre>

          </div>
 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid column3"&gt;
 &lt;article&gt;
 	&lt;h3&gt;Article 1 - 32%&lt;/h3&gt;
 	&lt;p&gt; 3 column layout. .... &lt;/p&gt;
 &lt;/article&gt;
 &lt;article&gt;
 	&lt;h3&gt;Article 2 - 32%&lt;/h3&gt;
 	&lt;p&gt; 3 column layout. ....&lt;/p&gt;

 &lt;/article&gt;
 &lt;article&gt;
 	&lt;h3&gt;Article 3 - 32%&lt;/h3&gt;
 	&lt;p&gt; 3 column layout. ....&lt;/p&gt;
 &lt;/article&gt;
&lt;/section&gt;

 	 	   		</pre>

 	 	   </div>



 	 <!-- 	 	4 cols ---------------------------------   -->

  <h2 class="h2">4 Column Layout</h2>

   			<section class="grid column4">
 			<article>
 				<h3>Article 1 - 23.5%</h3>
 				<p> 4 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</article>
 			<article>
 				<h3>Article 2 - 23.5%</h3>
 				<p> 4 column layout. Lorem ipsum dolem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur.</p>

 			</article>
 			<article>
 				<h3>Article 3 - 23.5%</h3>
 				<p> 4 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</article>
 			<article>
 				<h3>Article 4 - 23.5%</h3>
 				<p> 4 column layout. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. Lorem ipsum dolor site id neque nesciunt tenetur. </p>
 			</article>
 		</section>

	 	   <p class="mt mb ">

        	- You can use <span class="sp">.column4</span> class with <span class="sp">.grid</span> class to make 4 column grid.  <br>
           - For 4 column grid you .column3 wrapper should have only 4 direct child elements.
           - each column will span 23.5% of its container width;
           - It is responsive and will go to 2 column at medium viewport size and 1 column small viewport size

        	 </p>
        	 <div class="cssCode">

        	 		<pre>
.column2 {
	grid-template-columns: repeat(2, 23.5%);
 }
        	 		</pre>

        	 </div>

 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid column4"&gt;
	 &lt;article&gt;
		&lt;h3&gt;Article 1 - 23.5%&lt;/h3&gt;
		&lt;p&gt; 4 column layout. &lt;/p&gt;
	 &lt;/article&gt;
	 &lt;article&gt;
		&lt;h3&gt;Article 2 - 23.5%&lt;/h3&gt;
		&lt;p&gt; 4 column layout. &lt;/p&gt;

	 &lt;/article&gt;
	 &lt;article&gt;
		&lt;h3&gt;Article 3 - 23.5%&lt;/h3&gt;
		&lt;p&gt; 4 column layout.  &lt;/p&gt;
	 &lt;/article&gt;
	 &lt;article&gt;
		&lt;h3&gt;Article 4 - 23.5%&lt;/h3&gt;
		&lt;p&gt; 4 column layout. &lt;/p&gt;
	 &lt;/article&gt;
&lt;/section&gt;
 	 	   		</pre>

 	 	   </div>



 <!-- 	 	Aside Left---------------------------------   -->

  <h2 class="h2">Aside Left</h2>
   			<section class="grid asideLeft">
 			<aside>
 				<h3>Aside left</h3>

 				<p> Aside left. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 				<p> Paragraph 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 			</aside>
 			<article>
 					<h3>Page Content</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 					<h3>Heading 1</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur.</p>

 					<h3>Heading 2</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</article>
 		</section>

	 	   <p class="mt mb ">

        	- You can use <span class="sp">.asideLeft</span> class with <span class="sp">.grid</span> class to make 2 column grid.  <br>
           - This will be 2 colunm grid so .asideLeft wrapper should have only 2 direct child elements.
        	 </p>

        	 <div class="cssCode">

        	 		<pre>
 .asideLeft {
	grid-template-columns: 1fr 3fr;
}
        	 		</pre>

        	 </div>

 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid asideLeft"&gt;
 &lt;aside&gt;
 	&lt;h3&gt;Aside left&lt;/h3&gt;
 	&lt;p&gt; Aside left. ....&lt;/p&gt;
 	&lt;p&gt; Paragraph 2. ....&lt;/p&gt;
 &lt;/aside&gt;
 &lt;article&gt;
 		&lt;h3&gt;Page content&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet....&lt;/p&gt;

 		&lt;h3&gt;Heading 1&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;

 		&lt;h3&gt;Heading 2&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;
 &lt;/article&gt;
&lt;/section&gt;
 	 	   		</pre>

 	 	   </div>

<!-- 	 Aside Right        --------------------------------   -->

 	 	      <h2 class="h2">Aside Right </h2>
   			<section class="grid asideRight">
 			<article>
 				<h3>Page Content</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 					<h3>Heading 1</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur.</p>

 					<h3>Heading 2</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</article>
 			<aside>
 				<h3>Aside Right</h3>

 				<p> Aside right. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 				<p> Paragraph 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 			</aside>
 		</section>
   			 <p class="mt mb ">

        	- You can use <span class="sp">.asideRight</span> class with <span class="sp">.grid</span> class to make 2 column grid.  <br>
           - This will be 2 colunm grid so .asideRight wrapper should have only 2 direct child elements.
        	 </p>

        	 <div class="cssCode">

        	 		<pre>
 .asideLeft {
	grid-template-columns: 1fr 3fr;
}
        	 		</pre>

        	 </div>


 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid asideright"&gt;
 &lt;article&gt;
 		&lt;h3&gt;Page content&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet....&lt;/p&gt;

 		&lt;h3&gt;Heading 1&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;

 		&lt;h3&gt;Heading &lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;
 &lt;/article&gt;
 &lt;aside&gt;
 	&lt;h3&gt;Aside left&lt;/h3&gt;
 	&lt;p&gt; Aside left. ....&lt;/p&gt;
 	&lt;p&gt; Paragraph 2. ....&lt;/p&gt;
 &lt;/aside&gt;
&lt;/section&gt;
 	 	   		</pre>

 	 	   </div>


<!-- 	 2 sides        --------------------------------   -->

 	 	      <h2 class="h2"> Two Sides </h2>
   			<section class="grid doubleSides">
 			<aside>
 				<h3>Aside</h3>

 				<p> Aside right. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 			</aside>
 			<article>
 				<article>
 					<h3>Article 1</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 				</article>
 				<article>
 					<h3>Article 2</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur.</p>

 				</article>
 				<article>
 					<h3>Article 3</h3>
 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>
 				</article>
 			</article>
 			<aside>
 				<h3>Aside</h3>

 				<p> Aside right. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 				<p> Paragraph 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatibus ipsam, omnis fuga. Eius obcaecati cumque repellat, quibusdam iste id neque nesciunt tenetur. </p>

 			</aside>
 		</section>

 	 	   <h4>Required HTML Structure:</h4>
 	 	   <div class="htmlCode">

 	 	   		<pre>
&lt;section class="grid doubleSides"&gt;
&lt;aside&gt;
 	&lt;h3&gt;Aside left&lt;/h3&gt;
 	&lt;p&gt; Aside left. ....&lt;/p&gt;
 	&lt;p&gt; Paragraph 2. ....&lt;/p&gt;
 &lt;/aside&gt;
 &lt;article&gt;
 		&lt;h3&gt;Page content&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet....&lt;/p&gt;

 		&lt;h3&gt;Heading 1&lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;

 		&lt;h3&gt;Heading &lt;/h3&gt;
 		&lt;p&gt; Lorem ipsum dolor sit amet... &lt;/p&gt;
 &lt;/article&gt;
 &lt;aside&gt;
 	&lt;h3&gt;Aside left&lt;/h3&gt;
 	&lt;p&gt; Aside left. ....&lt;/p&gt;
 	&lt;p&gt; Paragraph 2. ....&lt;/p&gt;
 &lt;/aside&gt;
&lt;/section&gt;
 	 	   		</pre>

 	 	   </div>
 	 	  <p class="mt mb"> <a href="../examples/layouts.html" class="btn btn-primary" target="_blank"> See All Examples</a></p>
 	 	 </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
