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
   <h1 class="title"> Tabs</h1>
   <div class="info">
     <section class="inline-el">
<h2 class="h2">Horizontal Tabs</h2>
           <p>
       	- use a <span class="sp">.tab-container</span> class  as wraper class for tabs.
       	<br>
           - It should contain <span class="sp">ul</span> with <span class="sp">.tabs</span> class which will create the tab links. Each tab links data-tab attribute value should match the <span class="sp">id</span> of its tabs content. The tab content should be wrapped around a <span class="sp">div</span> with class <span class="sp">.tab-content</span>
       	<br>
           - <span class="sp">div</span> with the class <span class="sp">.current</span> will be set as the default active tab
       </p>
		       <div class="tab-container">
			<ul class="tabs">
				<li class="current" data-tab="tab-1">Breakfast</li>
				<li data-tab="tab-2">Lunch</li>
				<li data-tab="tab-3">Dinner</li>
			</ul>
			<div id="tab-1" class="tab-content current clearfloat">
			<h2>This is the first tab</h2>
				<img src="../images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive">
						<p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one’s definition of your life; define yourself.</p>

</div>
			<div id="tab-2" class="tab-content clearfloat">
				<h2>This is the second tab</h2>
				 <img src="../images/page-2_img02.jpg" alt="water" class="floatRight-md img-responsive">
						<p>Food qualities braise chicken cuts bowl through slices butternut snack. Tender meat juicy dinners. One-pot low heat plenty of time adobo fat raw soften fruit. sweet renders bone-in marrow richness kitchen, fricassee basted pork shoulder.</p>
</div>
			<div id="tab-3" class="tab-content clearfloat">
	<h2>This is the third tab</h2>
		<img src="../images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Juicy meatballs brisket slammin' baked shoulder. Juicy smoker soy sauce burgers brisket. polenta mustard hunk greens. Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere. </p>

	</div>
	   </div>
       </section>


        <div class="htmlCode">

			<pre>

&lt;div class=" documentation"&gt;
   &lt;h1 class="title"&gt; Tabs&lt;/h1&gt;
   &lt;div class="info"&gt;
     &lt;section class="inline-el"&gt;
        &lt;h4 class="mb mt"&gt;Horizontal Tabs&lt;/h4&gt;
         &lt;div class="tab-container"&gt;
			&lt;ul class="tabs"&gt;
			  &lt;li class="current" data-tab="tab-1"&gt;Breakfast&lt;/li&gt;
			  &lt;li data-tab="tab-2"&gt;Lunch&lt;/li&gt;
			  &lt;li data-tab="tab-3"&gt;Dinner&lt;/li&gt;
			&lt;/ul&gt;
			&lt;div id="tab-1" class="tab-content current"&gt;
			  &lt;h2&gt;This is the first tab&lt;/h2&gt;
			  &lt;p&gt;...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab-2" class="tab-content"&gt;
			  &lt;h2&gt;This is the second tab&lt;/h2&gt;
			  &lt;p&gt;...&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="tab-3" class="tab-content"&gt;
			  &lt;h2&gt;This is the third tab&lt;/h2&gt;
              &lt;p&gt;&lt;/p&gt;
			&lt;/div&gt;
	     &lt;/div&gt;
       &lt;/section&gt;
   &lt;/div&gt;
&lt;/div&gt;
			</pre>

</div>

  <section class="inline-el">
  <h2 class="h2">Vertical Tabs</h2>
     <p>
       	- For vertical tabs use the <span class="sp">.tab-container-vertical</span> class  as wraper class for tabs.
       	<br>
           - It should contain <span class="sp">ul</span> with <span class="sp">.tabs-vertical</span> class which will create the tab links. Each tab links data-tab attribute value should match the <span class="sp">id</span> of its tabs content. The tab content should be wrapped around a <span class="sp">div</span> with class <span class="sp">.tab-content-vertical</span>
       	<br>
           - <span class="sp">div</span> with the class <span class="sp">.current-v</span> will be set as the default active tab
       </p>
      <div class="tab-container-vertical">

	<ul class="tabs-vertical">
		<li class="current-v" data-tab="tabv-1">Breakfast</li>
		<li data-tab="tabv-2">Lunch</li>
		<li data-tab="tabv-3">Dinner</li>
		<li data-tab="tabv-4">Snacks</li>
		<li data-tab="tabv-5">Drinks</li>
	</ul>

	<div id="tabv-1" class="tab-content-vertical current-v clearfloat">
	<h2>This is the first tab</h2>
		<img src="../images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Juicy meatballs brisket slammin' baked shoulder. Juicy smoker soy sauce burgers brisket. polenta mustard hunk greens.Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere.  </p>

	</div>
	<div id="tabv-2" class="tab-content-vertical clearfloat">
        <h2>This is the second tab</h2>
         <img src="../images/page-2_img02.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere. </p>
	</div>
	<div id="tabv-3" class="tab-content-vertical clearfloat">
	<h2>This is the third tab</h2>
		<img src="../images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Juicy meatballs brisket slammin' baked shoulder. Juicy smoker soy sauce burgers brisket. polenta mustard hunk greens. Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere.  </p>

	</div>
	<div id="tabv-4" class="tab-content-vertical clearfloat">
	<h2>This is the fourth tab</h2>
		<img src="../images/page-2_img02.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere. </p>
	</div>
	<div id="tabv-5" class="tab-content-vertical clearfloat">
	<h2>This is the fifth tab</h2>
		<img src="../images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive">
                <p>Juicy meatballs brisket slammin' baked shoulder. Juicy smoker soy sauce burgers brisket. polenta mustard hunk greens. Crafting renders aromatic enjoyment, then slices taco. Minutes undisturbed cuisine lunch magnificent mustard curry. Juicy share baking sheet pork. Meals ramen rarities selection, raw pastries richness magnificent atmosphere. </p>

	</div>

</div>
       </section>
 <h4 class="mb mt">HTML stucture: </h4>
  <div class="htmlCode">

  		<pre>

&lt;div class="tab-container-vertical"&gt;

	&lt;ul class="tabs-vertical"&gt;
	 &lt;li class="current-v" data-tab="tabv-1"&gt;Breakfast&lt;/li&gt;
	 &lt;li data-tab="tabv-2"&gt;Lunch&lt;/li&gt;
	 &lt;li data-tab="tabv-3"&gt;Dinner&lt;/li&gt;
	 &lt;li data-tab="tabv-4"&gt;Snacks&lt;/li&gt;
	 &lt;li data-tab="tabv-5"&gt;Drinks&lt;/li&gt;
  &lt;/ul&gt;

	&lt;div id="tabv-1" class="tab-content-vertical current-v clearfloat"&gt;
	 &lt;h2&gt;This is the first tab&lt;/h2&gt;
		&lt;img src="images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive"&gt;
        &lt;p&gt;Juicy meatballs brisket slamminmagnificent atmosphere. ... &lt;/p&gt;
	&lt;/div&gt;

	&lt;div id="tabv-2" class="tab-content-vertical clearfloat"&gt;
        &lt;h2&gt;This is the second tab&lt;/h2&gt;
        &lt;img src="images/page-2_img02.jpg" alt="water" class="floatRight-md img-responsive"&gt;
        &lt;p&gt;Crafting renders aromatic enjoymre ba. ..... &lt;/p&gt;
	&lt;/div&gt;

	&lt;div id="tabv-3" class="tab-content-vertical clearfloat"&gt;
	  &lt;h2&gt;This is the third tab&lt;/h2&gt;
	  &lt;img src="images/watermelonMint.jpg" alt="water" class="floatRight-md img-responsive"&gt;
      &lt;p&gt;Juicy meatballs brisket slammin' baked shoulder....  &lt;/p&gt;
	&lt;/div&gt;

	&lt;div id="tabv-4" class="tab-content-vertical clearfloat"&gt;
	&lt;h2&gt;This is the fourth tab&lt;/h2&gt;
		&lt;img src="images/page-2_img02.jpg" alt="water" class="floatRight-md img-responsive"&gt;
        &lt;p&gt;Crafting renders aromatic enjoyment, then slices taco.... &lt;/p&gt;
	&lt;/div&gt;

&lt;/div&gt;
  		</pre>

  </div>
   </div>

</div><div class="clearfix"></div>


</main>

</body>
</html>
