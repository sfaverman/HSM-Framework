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
		.card-rounded{
			margin: 0!important;
		}
        @media screen and (min-width: 960px){
            main{
                display: block;
            }
        }

    </style>

    <div class=" documentation">
        <h1 class="title"> Cards</h1>

       <div class="info">
       <section class="inline-el">
           <h2 class="h2">Simple Card with Image</h2>
           <p>Add the class <span class="sp">.card-container</span> to style the cards.</p>
      		<div class="card-container mb">
            <img src="../images/juice.jpg" alt="image" class="img-responsive">
            <div>
                 <h3>Name</h3>
                <p>Information</p>
            </div>
        	</div>
        	<h4 class="h4 mt mb">HTML Structure</h4>
        	<div class="htmlCode">

        				<pre>&lt;div class="card-container"&gt;
    &lt;img src="../images/page-2_img02.jpg" alt="image" class="img-responsive"&gt;
    &lt;h3 &gt; Name&lt;/h3 &gt;
    &lt;p&gt; Information&lt;/p&gt;
&lt;/div&gt;
        </pre>

        	</div>




        	<h2 class="h2">Pricing Card</h2>
        	           <p>Add the class <span class="sp">.priceCard-container</span> to style the cards suitable for price display. Each layer is styled uniquely using class<span class="sp">.priceTag .priceTitle and .priceContent</span> </p>
      		<div class="gallery">
            <div class="priceCard-container text-alignCenter">

                <div class="priceTag">$22<sup>99</sup></div>
                <div class="priceTitle">Breakfast</div>
                <div class="priceContent">
                    <ul class="listStyle noListBullet">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>

        </div>


        <div class="priceCard-container text-alignCenter">

                <div class="priceTag">$22<sup>99</sup></div>
                <div class="priceTitle">Lunch</div>
                <div class="priceContent">
                    <ul class="listStyle noListBullet">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>

        </div>
                <div class="priceCard-container text-alignCenter">

                <div class="priceTag">$22<sup>99</sup></div>
                <div class="priceTitle">Dinner</div>
                <div class="priceContent">
                    <ul class="listStyle noListBullet">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>

        </div>
      </div>


   <div class="clearIt"></div>
        	<h4 class="h4 mt mb">HTML Structure</h4>
        	<div class="htmlCode">

        				<pre>&lt;div class="priceCard-container text-alignCenter"&gt;
      &lt;div class="priceTag"&gt;$22&lt;sup&gt;99&lt;/sup&gt;&lt;/div&gt;
      &lt;div class="priceContent"&gt;
        &lt;ul class="listStyle noListBullet"&gt;
          &lt;li &gt; Item 1&lt;/li &gt;
          &lt;li &gt; Item 2&lt;/li &gt;
          &lt;li &gt; Item 3&lt;/li &gt;
        &lt;/ul&gt;
        &lt;a href="#" class="btn btn-primary"&gt;Buy&lt;/a&gt;
  &lt;/div&gt;
        </pre>

        	</div>





        	<h2 class="h2">Rounded Corner Card</h2>
        	 <p>Add the class <span class="sp">.card-rounded</span> to style the cards with rounder border and color.</p>
        	<div class="card-rounded">
		   <img src="../images/juice.jpg" alt="image" class="img-responsive">
		   <div>
		        <h3>San Diego Deli Pizza</h3>
		        <p class="mb">ABC-Pizza's traditional pan pizza baked to perfection and topped with freshly sliced pepperoni and salami, lean ground beef and our signature gourmet cheese blend.</p><br>
		        <a href="#" class="btn button mt">More Info</a>
		   </div>
		</div>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

<!--
<footer class="footer">
    <section>
        <p><b class="h">H</b><b class="s">S</b><b class="m">M</b></p>
   <div class="social">
       <a href="#" class="tw"><i class="fab fa-twitter-square"></i></a>
       <a href="#" class="fb"><i class="fab fa-facebook-square"></i></a>
       <a href="#" class="git"><i class="fab fa-github-square"></i></a>
       <a href="#" class="gl"><i class="fab fa-google-plus-square"></i></a>
   </div>
    </section>
</footer>
-->
</body>
</html>
