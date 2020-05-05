<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
    <style>
       main {
            display: flex;
			padding-bottom: 100px;
        }
        @media screen and (min-width: 960px){
            main{
                display: block;
		    }
        }
	</style>


<div class=" documentation">
    <h1 class="title"> Documentation </h1>

    <div class="info">
    <h3 class="h3">What is HSM?</h3>
    <p>Get started with HSM Framework, easiest framework for building responsive, mobile-first sites for your business.</p>
    <p>We made HSM easy to get started making amazing websites for restaurant business. We put together these guides to help you get up and running in no time. These guides include css setup and install, how to use the HSM CSS, JavaScript, accessibility and more.</p>

    <h3 class="h3">Why HSM?</h3>
    <p>HSM is one of the best framework for reatsaurant sites and other small scale businesses. These are some of the best features HSM provies you.</p>
    <ul>
        <li>
            <p>If you want to develop an application or a website promptly, it is imperative to consider using HSM. It helps to save your coding effort by offering less CSS functionality and pre-built blocks of code rather than structuring code from the scratch. Ready-made themes of HSM will help achieve your needs through a faster route.</p>
        </li>
        <li>
            <p>It helps to save your coding effort by offering less CSS functionality and pre-built blocks of code rather than structuring code from the scratch.</p>
        </li>
        <li>

        </li>
        <li>
            <p>HSM is very easy to use. You just need to download required files and follow the documentation.</p>
        </li>
        <li>
            <p>Ready-made themes of HSM will help achieve your needs through a faster route.</p>
        </li>
    </ul>

    <h3 class="h3">Where to Start?</h3>
    <a href="download.html" class="btn btn-success">Download <i class="fas fa-cloud-download-alt"></i> </a>
        <a href="https://github.com/sfaverman/HSM-Framework" class="btn btn-primary" target="_blank"> Visit Github <i class="fab fa-github-square"></i></a>

    <h4 class="h4">CSS</h4>
    <p>Copy-paste the stylesheet &lt;link&gt; into your  &lt;head&gt; before all other stylesheets to load our CSS.</p>
     <div class="css-link">
    <pre>&lt;link rel="stylesheet" href="../css/hsm-min.css" type="text/css""&gt;</pre>

    <pre>&lt;link rel="stylesheet" href="../css/hsm.css" type="text/css""&gt;</pre>
    </div>

    <h4 class="h4">JS</h4>
    <p>Many of our components require the use of JavaScript function. Specifically, they require jQuery, and our own JavaScript plugins. Place the following &lt;script&gt; s near the end of your pages, right before the closing &lt;body&gt; tag, to enable them. jQuery must come first, and then our JavaScript plugins.</p>
    <div class="css-link">
   <pre>&lt;script src="../js/hsm-min.js">script &gt; &lt;/script&gt;
    </pre><pre >&lt;script src="../js/hsm.js">script &gt;&lt;script&gt;
    </pre>
    </div>

    <h3 class="h3">More Important Things</h3>
    <h4>HTML5 doctype</h4>
    <div class="css-link">

        <pre>&lt;!DOCTYPE html&gt;</pre>
        <pre>&lt;html&gt;</pre>
        ...
        <pre>&lt;/html&gt;</pre>

    </div>

    <h4 class="h4">Add Responsive Meta Tag</h4>
    <p>HSM is developed mobile first, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices, add the responsive viewport meta tag to your   &lt;head&gt;.</p>
    <div class="css-link">

    <pre>&lt;meta name="viewport" content="width=device-width, initial-scale=1 &gt;</pre>

    </div>

    <h4 class="h4">Font Awesome Link</h4>
    <p>By using an &lt;i&gt; or other HTML element is the easiest way to render any icon from font awesome. Font awesome has lots of food and restaurant related icons which you can use. </p>
    <p>In our Framework we have used some font awesome icons. For that you need to put following link to your &lt;head&gt; before all the css links. </p>
    <div class="css-link">


    <pre>&lt;link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"&gt;
    </pre>


    </div>

    </div>
</div>
    <div class="clearfix"></div>
     </main>

<?php
	 // Set the date and include the header file.
     include('../includes/footer.html');
?>
