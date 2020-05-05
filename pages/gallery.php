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
        <h1 class="title">Gallery</h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2">HSM Gallery</h2>
                   <p>
        	HSM framework has included a beautiful gallery feature for your restaurant site. Its designed using the Flexbox model. <br>
                       - To create a gallery for the images use the class <span class="sp">.gallery</span> to wrap around the content.<br>
                       - Add the class <span class="sp">.img-responsive</span> to make the images responsive.
        </p>
        <section class="gallery">

        <div class="card-container">
            <div><img src="../images/6.jpg" alt="image" class="img-responsive"></div>
            <div>
                 <h3>Name 1</h3>
                <p>Information 1</p>
            </div>
        </div>

        <div class="card-container">
            <div><img src="../img/2-.jpg" alt="image" class="img-responsive"></div>
            <div>
                <h3>Name 2</h3>
                <p>Information 2</p>
            </div>
        </div>

		<div class="card-container">
            <div><img src="../img/4.jpg" alt="image" class="img-responsive"></div>
            <div>
                 <h3>Name 3</h3>
                <p>Information 3</p>
            </div>
        </div>

        <div class="card-container">
            <div><img src="../img/4.jpg" alt="image" class="img-responsive"></div>
            <div>
                <h3>Name 4</h3>
                <p>Information 4</p>
            </div>
        </div>

		<div class="card-container">
            <div><img src="../img/6.jpg" alt="image" class="img-responsive"></div>
            <div>
                 <h3>Name 5</h3>
                <p>Information 5</p>
            </div>
        </div>

        <div class="card-container">
            <div><img src="../img/5.jpg" alt="image" class="img-responsive"></div>
            <div>
                <h3>Name 6</h3>
                <p>Information 6</p>
            </div>
        </div>

		<div class="card-container">
            <div><img src="../images/6.jpg" alt="image" class="img-responsive"></div>
            <div>
                 <h3>Name 7</h3>
                <p>Information 7</p>
            </div>
        </div>

        <div class="card-container">
            <div><img src="../images/4.jpg" alt="image" class="img-responsive"></div>
            <div>
                <h3>Name 8</h3>
                <p>Information 8</p>
            </div>
        </div>

  </section>

      <h4 class="mt mb">HTML Structure</h4>

        <div class="htmlCode">

        		<pre>

&lt;section class="gallery"&gt;

        &lt;div class="card-container"&gt;
            &lt;div&gt;&lt;img src="images/page-2_img02.jpg" alt="image" class="img-responsive"&gt;&lt;/div&gt;
            &lt;div&gt;
                 &lt;h3&gt;Name 1&lt;/h3&gt;
                &lt;p&gt;Information 1&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="card-container"&gt;
            &lt;div&gt;&lt;img src="images/page-2_img02.jpg" alt="image" class="img-responsive"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;h3&gt;Name 2&lt;/h3&gt;
                &lt;p&gt;Information 2&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

		&lt;div class="card-container"&gt;
            &lt;div&gt;&lt;img src="images/page-2_img02.jpg" alt="image" class="img-responsive"&gt;&lt;/div&gt;
            &lt;div&gt;
                 &lt;h3&gt;Name 3&lt;/h3&gt;
                &lt;p&gt;Information 3&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="card-container"&gt;
            &lt;div&gt;&lt;img src="images/page-2_img02.jpg" alt="image" class="img-responsive"&gt;&lt;/div&gt;
            &lt;div&gt;
                &lt;h3&gt;Name 4&lt;/h3&gt;
                &lt;p&gt;Information 4&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

  &lt;/section&gt;
        		</pre>

        </div>


      <p>
      	<a href="../examples/gallery.html" class="btn btn-primary" target="_blank"> See more Examples</a>
      </p>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
