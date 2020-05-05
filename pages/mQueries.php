<?php
	 // Set the page title and include the header file.
    define('TITLE', 'HSM-Documentation');
    include('../includes/header.html');
    include('../includes/sidebar.html');
?>
<!--	<script src="../js/main.js"></script>-->
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
        <h1 class="title"> Media Queries</h1>
       <div class="info">
       <section class="inline-el">
           <p>We use the following media queries to create the key breakpoints in our grid system.
           <br></p>
           <p>
           	Extra small devices (phones, up to 480px):
           </p>
           <p class="htmlCode">

           		@media screen and (min-width: 480px) { ... }

           </p>
<br>
Small devices (tablets, 570px and up):
		<p class="htmlCode">

           		@media screen and (min-width: 570px) { ... }

           </p>
<br>
Small to Medium devices (tablets, 768px and up):

		   <p class="htmlCode">

           		@media screen and (min-width: 768px) { ... }

           </p>
<br>
Medium to Large devices ( desktops, 960px and up):

           <p class="htmlCode">

           		@media screen and (min-width: 960px) { ... }

           </p>

        	<br>

        	Large to Extra Large devices (large desktops, 12000px and up ):

           <p class="htmlCode">

           		@media screen and (min-width: 10pxpx) { ... }

           </p>


       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
