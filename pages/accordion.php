<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
    <style>
    .accordionContent {
            margin-top: 0!important;
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
       <h1 class="title"> Accordion</h1>
       <div class="info">
       <section class="inline-el">
       <h2 class="h2">Vertical Slide Accordion</h2>
        <p>
        	HSM framework has included a beautiful accordian feature for your restaurant site. It by default has a smooth animation. <br>
        	- To use Accordion you need to wrap <span class="sp">.accordion-container &lt;div&gt;</span> around ul tag. <br>
        	- Give <span class="sp">&lt;ul&gt;</span> tag <span class="sp">.accordion</span> class. <br>
        	- Each li tag will have main content. The <span class="sp">.accordionHeader</span> class gives special styling to the header. <br>
        	- Inside li tag you can use any block level tag with <span class="sp">.accordionContent</span> class. Here you can add any content, images, grid etc.
        </p>
       <section class="inline-el">

        	<div class="accordion-container">
           <ul class="accordion">
           <li>
               <h3 class="accordionHeader">Breakfast</h3>
               <p class="accordionContent">Breakfast specials- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque illo incidunt earum sunt sint excepturi consectetur impedit dolorum iste est vel nesciunt, nobis quae laborum, rem facilis hic. Tenetur, rem!</p>
           </li>
           <li>
			   <h3 class="accordionHeader">Lunch</h3>
               <p class="accordionContent">Lunch specials - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque illo incidunt earum sunt sint excepturi consectetur impedit dolorum iste est vel nesciunt, nobis quae laborum, rem facilis hic. Tenetur, rem!</p>
           </li>
           <li>
               <h3 class="accordionHeader">Brunch</h3>
               <p class="accordionContent">Brunch specials - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque illo incidunt earum sunt sint excepturi consectetur impedit dolorum iste est vel nesciunt, nobis quae laborum, rem facilis hic. Tenetur, rem!</p>
           </li>
           <li>
               <h3 class="accordionHeader">Dinner</h3>
               <p class="accordionContent">Dinner specials - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque illo incidunt earum sunt sint excepturi consectetur impedit dolorum iste est vel nesciunt, nobis quae laborum, rem facilis hic. Tenetur, rem!</p>
           </li>
           <li>
               <h3 class="accordionHeader">Drinks</h3>
               <p class="accordionContent">Drinks specials - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque illo incidunt earum sunt sint excepturi consectetur impedit dolorum iste est vel nesciunt, nobis quae laborum, rem facilis hic. Tenetur, rem!</p>
           </li>

       </ul>
       </div>
      <h3 class="mb ">HTML Structure</h3>
   <div class="htmlCode">

<pre>
&lt;div class="accordion-container"&gt;
  &lt;ul class="accordion"&gt;
   &lt;li&gt;
     &lt;h3 class="accordionHeader"&gt;Breakfast&lt;/h3&gt;
     &lt;p class="accordionContent"&gt;Breakfast specials- ...!&lt;/p&gt;
   &lt;/li&gt;
   &lt;li&gt;
	 &lt;h3 class="accordionHeader"&gt;Lunch&lt;/h3&gt;
     &lt;p class="accordionContent"&gt;Lunch specials - ...&lt;/p&gt;
   &lt;/li&gt;
   &lt;li&gt;
     &lt;h3 class="accordionHeader"&gt;Brunch&lt;/h3&gt;
     &lt;p class="accordionContent"&gt;Brunch specials - ...!&lt;/p&gt;
   &lt;/li&gt;
   &lt;li&gt;
      &lt;h3 class="accordionHeader"&gt;Dinner&lt;/h3&gt;
      &lt;p class="accordionContent"&gt;Dinner specials - ...&lt;/p&gt;
   &lt;/li&gt;
   &lt;li&gt;
     &lt;h3 class="accordionHeader"&gt;Drinks&lt;/h3&gt;
     &lt;p class="accordionContent"&gt;Drinks specials - ...&lt;/p&gt;
  &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
   		</pre>

   </div>
       </section>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
