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
    <h1 class="title"> Download </h1>
   <div class="info">
   <p>Download whole framework with all the necessary components.</p>
    <a href="../HSM-Framework.zip" class="btn btn-success" download>Download All <i class="fas fa-cloud-download-alt"></i> </a>
        <a href="https://github.com/sfaverman/HSM-Framework" class="btn btn-primary" target="_blank"> Visit Github <i class="fab fa-github-square"></i></a>

    <h4>Download CSS files</h4>
    <p>Download ready-to-use compiled code to easily add into your project. </p>

    <ul>
        <li>Compiled and minified CSS. <a href="../css/hsm-min.css" download> Download <i class="fas fa-cloud-download-alt"></i> </a></li>
        <li> Compiled and unminified CSS. <a href="../css/hsm.css" download> Download <i class="fas fa-cloud-download-alt"></i> </a></li>
    </ul>
    <h4>CSS CDN</h4>
    <p>Copy-paste the stylesheet &lt;link&gt; into your  &lt;head&gt; before all other stylesheets to load our CSS.</p>
    <div class="css-link">
    <pre>&lt;link rel="stylesheet" href="../css/hsm-min.css" type="text/css""&gt;</pre>

    <pre>&lt;link rel="stylesheet" href="../css/hsm.css" type="text/css""&gt;</pre>
    </div>

    <h4>Download JavaScript Files :</h4>
    <p>Many of our components require the use of JavaScript to function. Specifically, they require jQuery, and our own JavaScript plugins.
    <br>Download ready-to-use JavaScript code to easily add into your project.</p>
     <ul>
        <li>Minified Javacript file. ready-to-use. <a href="../js/hsm-min.js" download> Download <i class="fas fa-cloud-download-alt"></i> </a></li>
        <li> Unminified Javacript file. ready-to-use. Easy to modify. <a href="../js/hsm.js" download> Download <i class="fas fa-cloud-download-alt"></i> </a></li>
    </ul>
    <br>
    <h4>JS CDN</h4>
    <p> Place the following &lt;script&gt; s near the end of your pages, right before the closing &lt;body&gt; tag, to enable them. jQuery must come first, and then our JavaScript plugins.</p>
    <div class="css-link">
    <pre>&lt;script src="../js/hsm-min.js">script &gt; &lt;/script&gt;
    </pre><pre >&lt;script src="../js/hsm.js">script &gt;&lt;script&gt;
    </pre>
    </div>

    <h3>More Important Things</h3>
    <h4>HTML5 doctype</h4>
    <div class="css-link">

        <pre>&lt;!DOCTYPE html&gt;</pre>
        <pre>&lt;html&gt;</pre>
        ...
        <pre>&lt;/html&gt;</pre>

    </div>

    <h4>Add Responsive Meta Tag</h4>
    <p>HSM is developed mobile first, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices, add the responsive viewport meta tag to your   &lt;head&gt;.</p>
    <pre class="css-link">&lt;meta name="viewport" content="width=device-width, initial-scale=1 &gt;</pre>


    </div>
</div>
    <div class="clearfix"></div>
     </main>

<?php
	 // Set the date and include the header file.
     include('../includes/footer.html');
?>
