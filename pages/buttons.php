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
        <h1 class="title"> Buttons</h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2">Buttons</h2>

           <h4 class="mt mb"> On &lt;a&gt; Tags</h4>
       <div class="btn-container">
            <a href="#" class="btn btn-default">Default</a>
            <a href="#" class="btn btn-primary">Login</a>
            <a href="#" class="btn btn-primary active">Sign-Up</a>
            <a href="#" class="btn btn-success">Order</a>
            <a href="#" class="btn btn-danger">Cancel</a>
            <input type="submit" value="Send" class="btn">
            <a href="#" class="btn btn-link">Link</a>
        </div>

         <p class="mb mt ">
        	- HSM comes with predefined button styles. <br>
        	-The <span class="sp">.btn</span> classes are designed to be used with the <span class="sp">&lt;button&gt;</span> element. However, you can also use these classes on <span class="sp">&lt;a&gt;</span> tag or <span class="sp">&lt;a&gt;</span> elements (You can also use these classes on any inline elements ). <br>
        	- <span class="sp">.btn</span> class adds <span class="sp">.5em/8px </span> of margin all around.
         </p>
        <div class="htmlCode">

        		<pre>
&lt;a href="#" class="btn btn-default"&gt;Default&lt;/a&gt;
&lt;a href="#" class="btn btn-primary"&gt;Primary&lt;/a&gt;
&lt;a href="#" class="btn btn-primary active"&gt;Primary - active&lt;/a&gt;
&lt;a href="#" class="btn btn-success"&gt;Success&lt;/a&gt;
&lt;a href="#" class="btn btn-danger"&gt;Danger&lt;/a&gt;
&lt;input type="submit" value="Submit" class="btn"&gt;
&lt;a href="#" class="btn btn-link"&gt;Link&lt;/a&gt;
        		</pre>

        </div>

        <h4 class="mt mb"> On &lt;button&gt; Tags</h4>
       <div class="btn-container">
            <button class="btn btn-default">Default</button>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-primary active">Primary - active</button>
            <button class="btn btn-success">Success</button>
            <button class="btn btn-danger">Danger</button>
            <input type="submit" value="Submit" class="btn">
            <button class="btn btn-link">Link</button>
        </div>

        <div class="htmlCode">

        		<pre>
&lt;a href="#" class="btn btn-default btn-x-sm"&gt;X-Small&lt;/a&gt;
&lt;a href="#" class="btn btn-default btn-sm"&gt;Small&lt;/a&gt;
&lt;a href="#" class="btn btn-default"&gt;Default&lt;/a&gt;
&lt;a href="#" class="btn btn-default btn-lg"&gt;Large&lt;/a&gt;
        		</pre>

        </div>

        <h4 class="mt mb">Button Sizes</h4>
        <p>HSM also comes with buttons in few different sizes from extra-small to extra-large.</p>
        <div class="btn-container">
            <a href="#" class="btn btn-default btn-x-sm">X-Small</a>
            <a href="#" class="btn btn-default btn-sm">Small</a>
            <a href="#" class="btn btn-default">Default</a>
            <a href="#" class="btn btn-default btn-lg">Large</a>
        </div>


   <div class="htmlCode">

   		<pre>
&lt;a href="#" class="btn btn-default btn-x-sm"&gt;X-Small&lt;/a&gt;
&lt;a href="#" class="btn btn-default btn-sm"&gt;Small&lt;/a&gt;
&lt;a href="#" class="btn btn-default"&gt;Default&lt;/a&gt;
&lt;a href="#" class="btn btn-default btn-lg"&gt;Large&lt;/a&gt;
   		</pre>

   </div>

     <p class="mt mb">You can combine classes to get preferred output. Here are some examples.</p>

      <div class="btn-container">
            <button class="btn btn-default btn-x-sm">Default</button>
            <button class="btn btn-primary btn-sm">Primary-Small</button>
            <button class="btn btn-primary active">Default-size</button>
            <button class="btn btn-success btn-lg">Success-Large</button>
            <button class="btn btn-danger btn-xl">Danger-XL</button>
        </div>

        <div class="htmlCode">

        		<pre>
&lt;button class="btn btn-default btn-x-sm"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-sm"&gt;Primary-Small&lt;/button&gt;
&lt;button class="btn btn-primary active"&gt;Default-size&lt;/button&gt;
&lt;button class="btn btn-success btn-lg"&gt;Success-Large&lt;/button&gt;
&lt;button class="btn btn-danger btn-xl"&gt;Danger-XL&lt;/button&gt;
        		</pre>

        </div>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
