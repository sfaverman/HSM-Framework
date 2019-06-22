<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Demo');
    include('../includes/header.html');
?>

	<style>
		hr{
			border-top: 1px solid #888;
		}
		.ex h3{
			text-align: center;
		}
		 p.bt {
			text-align: center;
		}
        .footer{
             background-color: #ccc;
             color: #fff;
             text-align: center;
             padding: .5em 0 0 1rem;
             margin-top: 1em;
             line-height: 1.4;
             min-height: 100px;
             margin-top: auto;
            position: fixed;
            bottom: 0;
         }
         .footer .social{
             font-size: 2em;
         }
         .footer .social a:hover{
             color: #fff;
         }
    </style>

    <h1 class="title"> Demo Sites </h1>

    <main class="container" >
         <div class="intro">
            <div class=".ex">
            	<h3>Example -1 </h3>

            <p><img src="../images/demosite1-responsive.png" alt="demosite1" class="img-responsive"></p>
             <p class="bt"><a href="../examples/demoSite1.html" class="btn btn-success" target="_blank">Visit Site</a></p>
           <!-- <p class="bt"><a href="https://harshapk.com/fewd2/demo/demoSite1.html" class="btn btn-success" target="_blank">Visit Site</a></p>-->

            <hr>

            <h3>Example -2 </h3>

            <p><img src="../images/demosite2.png" alt="demosite1" class="img-responsive"></p>
             <p class="bt"><a href="../examples/demoSite2.html" class="btn btn-success" target="_blank">Visit Site</a></p>
            <!--<p class="bt"><a href="https://harshapk.com/fewd2/demo/demoSite2.html" class="btn btn-success" target="_blank">Visit Site</a></p>-->

            <hr>
            <h3>Example -3 </h3>

            <p><img src="../images/demosite3.png" alt="demosite1" class="img-responsive"></p>
             <p class="bt"><a href="../examples/demoSite3s.html" class="btn btn-success" target="_blank">Visit Site</a></p>
           <!-- <p class="bt"><a href="https://harshapk.com/fewd2/demo/demosite3s.html" class="btn btn-success" target="_blank">Visit Site</a></p>-->
            </div>
		</div>

     </main>

<?php
	 // Set the date and include the header file.
     include('../includes/footer.html');
?>
