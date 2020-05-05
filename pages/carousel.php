<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
    <style>
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
        <h1 class="title"> Carousel</h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2">Carousel</h2>
			<div class="carousel">
			  <ul class="carousel-body">
				  <li>
					 <img src="../img/4.jpg" alt="">
					 <div class="slide-caption">
						<h1>Caption -default</h1>
						<p class="mb">Lorem ipsum dolor sit amet,rum reprehenderit culpa illo, fugit, totam.</p>
					 </div>
				  </li>
				  <li>
					 <img src="../img/6.jpg" alt="">
					 <div class="slide-caption caption-left">
					   <h1>Caption -Right</h1>
					   <p class="mb">Lorem ipsum dolo delenmenda. Commodi harum reprehenderit culpa illo, fugit, totam.</p>
					 </div>
				  </li>
				  <li>
					<img src="../img/2-.jpg" alt="">
					<div class="slide-caption caption-center">
				      <h1>Caption -center</h1>
				      <p class="mb">Lorem ipsum dolm.mmodi harum reprehenderi</p>
					</div>
				  </li>
			  </ul>
			  <ol class="indicators"></ol>
			  <div class="left">
				  <span><i class="fas fa-chevron-circle-left"></i></span>
			  </div>
			  <div class="right">
				  <span><i class="fas fa-chevron-circle-right"></i></span>
			  </div>
  		   </div>


  		  <p class="mt mb"> <a href="../examples/carousel/carousel.html" class="btn btn-primary" target="_blank">Open in new page</a></p>
  		   <h4 class="mb mt">How To Start : </h4>
  		   <p class="mb">
  		   This carousel is responsive by default and comes with all necessary component like indicators, caption, previous and next bottons also default fade in animation.
  		   <br>
  		   - To use this carousel follow the HTML stucture given below. <br>
  		   - You meed to use carpusel wrapping class <span class="sp">.carousel</span> then inside that to <span class="sp">&lt;ul&gt;</span> tag with class <span class="sp">.carousel-body</span>
  		   <br>
  		   - <span class="sp">&lt;img&gt;</span> tag is added inside <span class="sp">&lt;li&gt;</span>  tag.
  		   </p><br>
  		   <h4 class="mt mb">For Caption</h4>

			<p class="mb mt">
				- To use caption on your carousel you need to add <span class="sp">&lt;div&gt;</span> with a class <span class="sp">slide-caption</span> as mention below. <br>
				- You have to use <span class="sp">&lt;h1&gt;</span> for heading and <span class="sp">&lt;p&gt;</span> for description on caption as it comes with default styling. <br>
				- You can add caption on right ,center or left on your slide for that you have to use <span class="sp"> .caption-left or caption-center</span> on slide-caption div.
			</p>
		<h4 class="mb mt">HTML Structure</h4>
	   <div class="htmlCode">
	   		<pre>
&lt;div class="carousel"&gt;
 &lt;ul class="carousel-body"&gt;
   &lt;li&gt;
	 &lt;img src="../img/4.jpg" alt=""&gt;
	 &lt;div class="slide-caption"&gt;
		&lt;h1&gt;Caption -default&lt;/h1&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet,rum reprehenderit culpa illo, fugit, totam.&lt;/p&gt;
	 &lt;/div&gt;
  &lt;/li&gt;
  &lt;li&gt;
	 &lt;img src="../img/4.jpg" alt=""&gt;
	 &lt;div class="slide-caption"&gt;
		&lt;h1&gt;Caption -default&lt;/h1&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet,rum reprehenderit culpa illo, fugit, totam.&lt;/p&gt;
	 &lt;/div&gt;
  &lt;/li&gt;
  &lt;li&gt;
	 &lt;img src="../img/4.jpg" alt=""&gt;
	 &lt;div class="slide-caption"&gt;
		&lt;h1&gt;Caption -default&lt;/h1&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet,rum reprehenderit culpa illo, fugit, totam.&lt;/p&gt;
	 &lt;/div&gt;
  &lt;/li&gt;
 &lt;/ul&gt;
 &lt;ol class="indicators"&gt;&lt;/ol&gt;
  &lt;div class="left"&gt;
	&lt;span&gt;&lt;i class="fas fa-chevron-circle-left"&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="right"&gt;
    &lt;span&gt;&lt;i class="fas fa-chevron-circle-right"&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
	   		</pre>
	   </div>


       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
