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
        <h1 class="title">Images</h1>

       <div class="info">
       <section class="inline-el">
           <h2 class="h2">Center Align Image</h2>
           <p>All Images in HSM are made responsive with <span class="sp">.img-responsive class. max-width: 100%; and height: auto;</span> are applied to the image so that it scales with the parent element. </p>
      		<div class="img-container img-alignCenter">
            <img class="img-responsive" src="../images/juice.jpg" alt="image" width="500">
           </div>
        	<div class="htmlCode">

        		<pre>
&lt;div class="img-container img-alignCenter"&gt;
	&lt;img class="img-responsive" src="../images/juice.jpg" alt="image" &gt;
&lt;/div&gt;
        		</pre>

        	</div>

		   <h2>Thumbnail Image</h2>
       	<p>Add <span class="sp">.img-thumbnail</span> class on img tag to make the image thumbnail size(250 x 250px).</p>
        	<div class="img-container">

            <img src="../images/juice.jpg" alt="image" class="img-responsive img-thumbnail">
        </div>
            <div class="htmlCode">

        		<pre>
&lt;div class="img-container"&gt;
	&lt;img class="img-responsive img-thumbnail" src="../images/juice.jpg" alt="image" &gt;
&lt;/div&gt;
        		</pre>

        	</div>



            <h2>Rounded Corner Image</h2>
       	<p>Add <span class="sp">.img-border and  .img-round</span> class on img tag to have a grey rounded border around the image.</p>
        <div class="img-container">
            <img src="../images/juice.jpg" alt="image" class="img-responsive img-thumbnail img-border img-round">
        </div>
         <div class="htmlCode">

        		<pre>
&lt;div class="img-container"&gt;
	&lt;img class="img-responsive img-thumbnail img-border img-round" src="../images/juice.jpg" alt="image" &gt;
&lt;/div&gt;
        		</pre>

        	</div>



        <h2>Circle Image</h2>
       	<p>Add <span class="sp">.img-circle </span> class on img tag to make the image round shaped. If the image is square it will result in circular image and if the image is rectangle size then it will be oval shaped image.</p>
        <div class="img-container">
            <img src="../images/juice.jpg" alt="image" class="img-responsive img-thumbnail img-circle">
        </div>


        <div class="htmlCode">

        		<pre>
&lt;div class="img-container"&gt;
	&lt;img class="img-responsive img-thumbnail img-circle" src="../images/juice.jpg" alt="image" &gt;
&lt;/div&gt;
        		</pre>

        	</div>



        <h2> Image With Caption</h2>
       	<p>Wrap <span class="sp">div with class .img-container</span> around figure tag to add a padding of 1em/16px to the images. Add <span class="sp">img-responsive and img-thumbnail </span> class on img tag to make the image responsive and thumbnail size. Add <span class="sp">.img-caption</span> on &lt;figcaption&gt; to have an caption in italic</p>
         <div class="img-container">
            <figure class="img-border">
                <img src="../images/juice.jpg" alt="image" class="img-responsive img-thumbnail">
                <figcaption class="img-caption img-alignCenter">Image Caption</figcaption>
            </figure>

        </div>


       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

<?php
	 // Set the date and include the header file.
     include('../includes/footer.html');
?>
