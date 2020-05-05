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
        <h1 class="title"> Sidebar </h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2">Fix sidebar</h2>

   <p>
   	<a class="btn btn-primary" href="sidebarNav.html" target="_blank">See Example</a>
   </p>
   <p><a href="sidebarNav.html" target="_blank"><img src="../img/sidebarEx.png" alt="sidebarExample_image" class="img-responsive"></a></p>

   <p>HSM provides you <span class="sp">Responsive</span> ready to use sidebar. <br>
   - To use this sidebar you need to follow following HTML structure.
   <br>- Sidebar uses classset of <span class="sp">.sidebar, .sidebar-menu, .sidebar-item, .sidebar-heading, .sidebar-title</span> etc.<br>
   - This sidebar is made fixed for better user-experience.</p>
<div class="htmlCode">

     		<pre>
&lt;div class="sidebar"&gt;
  &lt;div class="sidebar-menu"&gt;
   &lt;h3 class="sidebar-heading"&gt;Today's Special
    &lt;span class="menu-bar-close"&gt;
       &lt;i class="far fa-window-close"&gt;&lt;/i&gt;
     &lt;/span&gt;
    &lt;/h3&gt;
    &lt;a href="download.html" class="sidebar-item sidebar-title"&gt;Dinner&lt;/a&gt;
    &lt;a href="cards.html" class="sidebar-item"&gt;Brunch&lt;/a&gt;
    &lt;a href="image.html" class="sidebar-item"&gt;Birthday Specials&lt;/a&gt;
    &lt;a href="nav.html" class="sidebar-item"&gt;Special Occasion&lt;/a&gt;
    &lt;a href="carousel.html" class="sidebar-item"&gt;Catering&lt;/a&gt;
    &lt;a href="image.html" class="sidebar-item"&gt;Drinks&lt;/a&gt;
    &lt;a href="buttons.html" class="sidebar-item"&gt;Cake&lt;/a&gt;
    &lt;a href="#" class="sidebar-item sidebar-title"&gt;Lunch&lt;/a&gt;
    &lt;a href="accordian.html" class="sidebar-item"&gt;Pizza&lt;/a&gt;
    &lt;a href="grid.html" class="sidebar-item"&gt;Pasta&lt;/a&gt;
    &lt;a href="forms.html" class="sidebar-item"&gt;Salad&lt;/a&gt;
    &lt;a href="typography.html" class="sidebar-item sidebar-title"&gt;Breakfast&lt;/a&gt;
    &lt;a href="gallery.html" class="sidebar-item"&gt;Desserts&lt;/a&gt;
    &lt;a href="tables.html" class="sidebar-item"&gt;Chinese&lt;/a&gt;
    &lt;a href="tables.html" class="sidebar-item"&gt;Indian&lt;/a&gt;
    &lt;a href="tables.html" class="sidebar-item"&gt;Mexican&lt;/a&gt;
    &lt;a href="tables.html" class="sidebar-item"&gt;More&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
     		</pre>

     </div>

         <p>
   	<a class="btn btn-primary" href="sidebarNav.html" target="_blank">Click Here To See Example</a>
   </p>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
