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
        <h1 class="title"> Help Classes </h1>
       <div class="info">
       <section class="inline-el">
           <p>Help classes allows the user to quickly float an element to left or right. You can also disable the float based on the screen sizes. <br>
			For example: - <span class="sp">.floatLeft-md</span> float the element to the left on viewport size medium and larger. <br>
     	- If user wants to clear the float the <span class="sp">clearfix</span> class can be used. <br>
      	- The float has the following 3 properties. <br>
      	1. Float Left <br>
		2. Float Right <br>
		3. Float None <br>
       	</p>

        <p>
        	floatNone is the default behavior,
			<span class="sp">.floatLeft</span> and <span class="sp">floatRight</span> makes the element floated to left and right respectively.
        </p>
        <p><span class="sp">.clearfloat</span> prevents the floated element from overflowing out of the container. <br>
- <span class="sp">.clearIt</span> clears the float from the element on which the class is specified. <br>
   -The most common way to use the clearIt class is after you have used a float property on an element</p>


       <p>
       	<span class="sp">.floatLeft</span> - Floats elements to the left.<br>
       	<span class="sp">.floatRight</span> - Floats elements to the right.<br>
       	<span class="sp">.floatLeft-sm</span> - Floats elements to the left on viewport size small (570px).<br>
       	<span class="sp">.floatLeft-md</span> - Floats elements to the left on viewport size medium (768px).<br>
       	<span class="sp">.floatLeft-lg</span> - Floats elements to the left on viewport size large  (960px).<br>
       	<span class="sp">.floatLeft-xl</span> - Floats elements to the left on viewport size Extra large (960px).<br> <br>
       	<span class="sp">.floatRight-sm</span> - Floats elements to the right on viewport size small.<br>
       	<span class="sp">.floatRight-md</span> - Floats elements to the right on viewport size medium.<br>
       	<span class="sp">.floatRight-lg</span> - Floats elements to the right on viewport size large.<br>
       	<span class="sp">.floatRight-lg</span> - Floats elements to the right on viewport size extra large.<br>
       	<span class="sp">.floatNone</span> - Removes the float.<br>
       </p>
<h4 class="mb mt">No print class:</h4>
      <p><span class="sp">.noPrint</span> Class prevents element that the class is attached to from being sent to the printer.<br></p>

      <h4 class="mt mb">Margin</h4>
           <p>Add <span class="sp">.mt</span> class for margin-top,<br>
           <span class="sp">.mr</span> for margin-right ,<br>
           <span class="sp">.mb</span> for margin-bottom,<br>
           <span class="sp">.ml</span> for margin-left. <br>
           All classes adds .5em/8px margin.</p>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
