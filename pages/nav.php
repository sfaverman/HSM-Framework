<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
    <div class=" documentation">
        <h1 class="title"> Navigation</h1>

       <div class="info">
       <section class="inline-el">
        <h2 class="h2">Top Toolbar</h2>
        <div class="mb">
        	- Here’s what you need to know before getting started with the Toolbar:
        	<ol>
        		<li>Toolbar require a wrapping of class  <span class="sp">.top-toolbar.</span></li>
        		<li>Toolbar is responsive and has widht of <span class="sp">100%.</span> I </li>
        		<li>We used <span class="sp">flex </span> to seperate the contents inside toolbar</li>
        		<li>Left right content is wrapped in separate classes <span class="sp">.top-toolbar-left and .top-toolbar-right</span>.</li>
        	</ol>
        </div>
        <div class="top-toolbar ">
		   <div class="top-toolbar-left">
			   <ul class="text-widget">
				   <li><a href="">Login</a></li>
				   <li><p class="text">Open daily: 7:30 am to 11:00 pm</p></li>
			   </ul>
		   </div>
		   <div class="top-toolbar-right ">
			   <ul class="text-widget social-widgets">
				   <li><p class="text search"><input type="search" name="search" id="search" placeholder="Search"> <i class="fas fa-search"></i></p></li>
				   <li><a href=""><i class="fab fa-facebook"></i></a></li>
				   <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
			   </ul>
		   </div>
	   </div>
        <h4 class="mb mt">HTML Structure:-</h4>
       <div class="htmlCode">

       		<pre>
&lt;div class="top-toolbar "&gt;
  &lt;div class="top-toolbar-left"&gt;
	&lt;ul class="text-widget"&gt;
	  &lt;li&gt; ...&lt;/li&gt;
	  &lt;li&gt;... &lt;/li&gt;
	&lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="top-toolbar-right "&gt;
  &lt;ul class="text-widget social-widgets"&gt;
   &lt;li&gt; ...&lt;/li&gt;
   &lt;li&gt;... &lt;/li&gt;
  &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;
       		</pre>

       </div>



<!--navbar	-->
      <h2 class="h2">Navbar</h2>
      <div class="navbar-ex mb">
      	<nav class="navbar-container">
       <div class="logo">
          <a href="#" class="navbar-brand">Restaurant-logo</a>
       </div>
       <button id="navbar-toggler">
             <span class="menu-bar"><i class="fas fa-bars"></i></span>
       </button>
       <div id="menu">
            <ul class="main-nav">
                <li class="nav-item">
                    <a href="#" class="nav-title">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-title">Menu</a>
                </li>
                <li class="nav-item dropdown-menu">
                    <a href="#" class="nav-title">Order <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                       <li class="dropdown-menu-item"><a href="nav.html" class="dropdown-menu-title">Breakfast</a></li>
                        <li class="dropdown-menu-item"><a href="typography.html" class="dropdown-menu-title">Dinner</a></li>
						 <li class="dropdown-menu-item"><a href="tabs.html" class="dropdown-menu-title">Lunch</a></li>
						 <li class="dropdown-menu-item"><a href="accordion.html" class="dropdown-menu-title">Brunch</a></li>
						 <li class="dropdown-menu-item"><a href="cards.html" class="dropdown-menu-title">Drinks</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown-menu">
                    <a href="#" class="nav-title">Events</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-title">Specials</a>
                </li>
            </ul>
        </div>
    </nav>
     <div class="mb mt">
        	- Here’s what you need to know before getting started with the Navbar:
        	<ol>
        		<li>Navbars require a wrapping of class  <span class="sp">.navbar-container.</span></li>
        		<li>Toolbar is responsive and has widht of <span class="sp">100%.</span> It goes to hamburber menu at smaller screen size </li>
        		<li>We used <span class="sp">flex </span> to seperate the navigation items. You can add multiple items inside navigation. To avoid collapse need to adjust the padding and font-size on <span class="sp">.nav-title</span> class.</li>
        	</ol>
        </div>

        <div class="htmlCode">

        		<pre>
&lt;nav class="navbar-container"&gt;
 &lt;div class="logo"&gt;
  &lt;a href="#" class="navbar-brand"&gt;Restaurant-logo&lt;/a&gt;
 &lt;/div&gt;
 &lt;button id="navbar-toggler"&gt;
   &lt;span class="menu-bar"&gt;&lt;i class="fas fa-bars"&gt;&lt;/i&gt;&lt;/span&gt;
 &lt;/button&gt;
 &lt;div id="menu"&gt;
   &lt;ul class="main-nav"&gt;
      &lt;li class="nav-item"&gt;...&lt;/li&gt;
      &lt;li class="nav-item"&gt;...&lt;/li&gt;
      &lt;li class="nav-item dropdown-menu"&gt;
        &lt;ul class="dropdown"&gt;
          &lt;li class="dropdown-menu-item"&gt;...&lt;/li&gt;
          &lt;li class="dropdown-menu-item"&gt;...&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
     &lt;li class="nav-item"&gt;...&lt;/li&gt;
     &lt;li class="nav-item"&gt;...&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/div&gt;
&lt;/nav&gt;
        		</pre>

        </div>
      </div>




      <h2 class="h2">Toolbar and Navbar Together</h2>
      <article class="nav-tool">
      	<div class="top-toolbar ">
		   <div class="top-toolbar-left">
			   <ul class="text-widget">
				   <li><a href="">Login</a></li>
				   <li><p class="text">Open daily: 7:30 am to 11:00 pm</p></li>
			   </ul>
		   </div>
		   <div class="top-toolbar-right ">
			   <ul class="text-widget social-widgets">
				   <li><p class="text search"><input type="search" name="search" id="search" placeholder="Search"> <i class="fas fa-search"></i></p></li>
				   <li><a href=""><i class="fab fa-facebook"></i></a></li>
				   <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
			   </ul>
		   </div>
	   </div>
     <div class="navbar-ex mb">
      	<nav class="navbar-container">
       <div class="logo">
          <a href="#" class="navbar-brand">Restaurant-logo</a>
       </div>
       <button id="navbar-toggler">
             <span class="menu-bar"><i class="fas fa-bars"></i></span>
       </button>
       <div id="menu">
            <ul class="main-nav">

                <li class="nav-item">
                    <a href="#" class="nav-title">Menu</a>
                </li>
                <li class="nav-item dropdown-menu">
                    <a href="#" class="nav-title">Order <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown">
                       <li class="dropdown-menu-item"><a href="nav.html" class="dropdown-menu-title">Breakfast</a></li>
                        <li class="dropdown-menu-item"><a href="typography.html" class="dropdown-menu-title">Dinner</a></li>
						 <li class="dropdown-menu-item"><a href="tabs.html" class="dropdown-menu-title">Lunch</a></li>
						 <li class="dropdown-menu-item"><a href="accordion.html" class="dropdown-menu-title">Brunch</a></li>
						 <li class="dropdown-menu-item"><a href="cards.html" class="dropdown-menu-title">Drinks</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown-menu">
                    <a href="#" class="nav-title">Events</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-title">Specials</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
      </article>

     <div class="htmlCode">

       		<pre>
&lt;div class="top-toolbar "&gt;
  &lt;div class="top-toolbar-left"&gt;
	&lt;ul class="text-widget"&gt;
	  &lt;li&gt; ...&lt;/li&gt;
	  &lt;li&gt;... &lt;/li&gt;
	&lt;/ul&gt;
 &lt;/div&gt;
 &lt;div class="top-toolbar-right "&gt;
  &lt;ul class="text-widget social-widgets"&gt;
   &lt;li&gt; ...&lt;/li&gt;
   &lt;li&gt;... &lt;/li&gt;
  &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;
       		</pre>
       	 <br>

        		<pre>
&lt;nav class="navbar-container"&gt;
 &lt;div class="logo"&gt;
  &lt;a href="#" class="navbar-brand"&gt;Restaurant-logo&lt;/a&gt;
 &lt;/div&gt;
 &lt;button id="navbar-toggler"&gt;
   &lt;span class="menu-bar"&gt;&lt;i class="fas fa-bars"&gt;&lt;/i&gt;&lt;/span&gt;
 &lt;/button&gt;
 &lt;div id="menu"&gt;
   &lt;ul class="main-nav"&gt;
      &lt;li class="nav-item"&gt;...&lt;/li&gt;
      &lt;li class="nav-item"&gt;...&lt;/li&gt;
      &lt;li class="nav-item dropdown-menu"&gt;
        &lt;ul class="dropdown"&gt;
          &lt;li class="dropdown-menu-item"&gt;...&lt;/li&gt;
          &lt;li class="dropdown-menu-item"&gt;...&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
     &lt;li class="nav-item"&gt;...&lt;/li&gt;
     &lt;li class="nav-item"&gt;...&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/div&gt;
&lt;/nav&gt;
        		</pre>

        </div>


        <h2 class="h2">More examples</h2>
        <p>
   	<a class="btn btn-primary" href="../examples/nav-framework/basic-nav.html" target="_blank">See Example</a>
   </p>
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
