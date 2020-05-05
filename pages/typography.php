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
        <h1 class="title"> Typography</h1>

       <div class="info">
       <h2 class="h2">Headings</h2>
        <p>For all HTML headings, &lt;h1&gt; through &lt;h6&gt; default setting is available. <br> <span class="sp">.h1</span> through <span class="sp">.h6</span> classes are also available with <span class="sp">margin</span> of <span class="sp">.5em</span> all around and spacific font size and <span class="sp">Font-family </span> of <span class="sp">Arial, Helvetica, sans-serif</span></p>
        <div class="table-responsive">
        	 <table class="basic-table table-header-color striped-col-table heading">
            <thead>
                <tr>
                  <th> Heading</th>
                  <th> Examples</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                  <td><pre>&lt;h1&gt;&lt;/h1&gt;</pre></td>
                  <td><h1>Heading 1</h1></td>
                </tr>
                <tr>
                  <td><pre>&lt;h2&gt;&lt;/h2&gt;</pre></td>
                  <td><h2>Heading 2</h2></td>
                </tr>
                <tr>
                  <td><pre>&lt;h3&gt;&lt;/h3&gt;</pre></td>
                  <td><h3>Heading 3</h3></td>
                </tr>
                <tr>
                  <td><pre>&lt;h4&gt;&lt;/h4&gt;</pre></td>
                  <td><h4>Heading 4</h4></td>
                </tr>
                <tr>
                  <td><pre>&lt;h5&gt;&lt;/h5&gt;</pre></td>
                  <td><h5>Heading 5</h5></td>
                </tr>
                <tr>
                  <td><pre>&lt;h6&gt;&lt;/h6&gt;</pre></td>
                  <td><h6>Heading 6</h6></td>
                </tr>

            </tbody>
          </table>
        </div>
          <h3 class="h3 mt">Required HTML structure with Classes</h3>
          <p></p>
        <div class="htmlCode">
            <pre>&lt;h1 class="h1"&gt; .h1 HSM heading1 &lt;/h1&gt;</pre>
            <pre>&lt;h2 class="h2"&gt; .h2 HSM heading2 &lt;/h2&gt;</pre>
            <pre>&lt;h3 class="h3"&gt; .h3 HSM heading3 &lt;/h3&gt;</pre>
            <pre>&lt;h4 class="h4"&gt; .h4 HSM heading4 &lt;/h4&gt;</pre>
            <pre>&lt;h5 class="h5"&gt; .h5 HSM heading5 &lt;/h5&gt;</pre>
            <pre>&lt;h6 class="h6"&gt; .h6 HSM heading6 &lt;/h6&gt;</pre>
        </div>
 <section class="inline-el">
       <h2 class="h2">Inline Elements</h2>

           <p class="text-bold">Bold text.</p>
           <div class="htmlCode">
              <pre>&lt;span class="text-bold"&gt; Bold text &lt;/span&gt;</pre>
           </div>
            <p class="text-normal">Normal weight text.</p>
            <div class="htmlCode">
               <p><pre>&lt;span class="text-normal"&gt; Bold text &lt;/span&gt;</pre>
           </div>

            <p class="text-italic">Italic text.</p>
            <div class="htmlCode">
              <pre>&lt;span class="text-italic"&gt; Bold text &lt;/span&gt;</pre>
           </div>
           <p>This is a <cite title="Cited from xyz">cite from xyz</cite></p>
           <div class="htmlCode">


               <pre>&lt;p&gt; This is a &lt;cite title="Cited from xyz" &gt;cite from xyz &lt;/cite&gt; &lt;/p&gt;</pre>


           </div>
           <p class="text-underline">Html Code</p>
           <p>Wrap inline snippets of code with &lt;code&gt;. Be sure to escape HTML angle brackets.</p>
      <p>This code uses the class <span class="codeHighlight">. htmlCode</span> to style the code</p>
          <div class="htmlCode">

               <pre>&lt;div class="htmlCode"&gt; &lt;p&gt;This is a Html Code ..&lt;/p&gt;&lt;/div&gt;</pre>


          </div>

     <p class="text-underline">CSS Code</p>
      <div class="cssCode">
 <pre>
          * {

              margin: 0;

              padding: 0;
          }

       </pre>
      </div>

       <div class="htmlCode">
               <pre>&lt;div class="cssCode"&gt;
    &lt;code&gt; &lt;pre&gt; {
        margin: 0;
        padding: 0;
    }
   &lt;/pre&gt; &lt;/code&gt;
&lt;/div&gt;</pre>

          </div>

         <p class="text-underline">JS Code</p>
       <div class="jsCode">

       		<pre>
$(function() {
    $('.accordion h3').click(function () {
    $('.accordion p').slideUp();
    });
});
       		</pre>

       </div>
       <div class="htmlCode">
     <pre>&lt;div class="jsCode"&gt;
    &lt;code&gt; &lt;pre&gt; $(function() {
        $('.accordion h3').click(function () {
        $('.accordion p').slideUp();
        });
     });
   &lt;/pre&gt; &lt;/code&gt;
&lt;/div&gt;</pre>

          </div>

   <p>This is a variable <var class="variables">(a+b)*(c+d) = ac+bc+ad+bd</var></p>
      <div class="htmlCode">
               <pre>&lt;var class="variables"&gt;
       (a+b)*(c+d) = ac+bc+ad+bd &lt;p&gt;This is a Html Code
           ..
&lt;/var&gt;</pre>

      </div>

<!--      Alignment         -->
      <h2 class="h2">Text Alignment</h2>
      <p>Add <span class="sp"> .text-alignCenter </span>,<span class="sp"> .text-alignCenter </span>,<span class="sp"> .text-alignCenter</span> Classes to align the elements.</p>
    <div class="align">
          <p class="text-alignCenter">Center Aligned</p>
           <p class="text-alignLeft">Left Aligned</p>
           <p class="text-alignRight">Right Aligned</p>
    </div>
          <div class="htmlCode">
               <pre>&lt;p class="text-alignCenter"&gt; Center Aligned &lt;/p&gt;</pre>
                <pre>&lt;p class="text-alignLeft"&gt; Center Left &lt;/p&gt;</pre>
                 <pre>&lt;p class="text-alignRight"&gt; Center Right &lt;/p&gt;</pre>
           </div>

      <h2 class="h2">Abbreviations</h2>
      <p>Stylized implementation of HTML’s &lt;abbr&gt;  element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.</p>
      <p>The abbreviation for World Health Organization is <abbr title="World Health Organization" class="abbrStyle">WHO</abbr></p>
         <div class="htmlCode">
      <pre>&lt;p&gt; The abbreviation for World Health Organization is
    &lt;abbr title="World Health Organization"class="abbrStyle"&gt; &lt;/abbr&gt; WHO
&lt;/p&gt;</pre>
           </div>


        <h2 class="h2">Address</h2>
        <p>The &lt;address&gt; element is updated to reset the browser default font-style from italic to normal. line-height is also now inherited, and margin-bottom: 1rem has been added. &lt;address&gt; s are for presenting contact information for the nearest ancestor (or an entire body of work). Preserve formatting by ending lines with &lt;br&gt; .</p>
        <address class="addressStyle">
       San Diego Continuing Education <br>
       4343 Ocean View Boulevard <br>
       San Diego, CA 92113-1915 <br>
       619.388.4956
   </address>

      <div class="htmlCode">
          <pre>&lt;address&gt;
San Diego Continuing Education <br>
4343 Ocean View Boulevard <br>
San Diego, CA 92113-1915 <br>
619.388.4956
&lt;/address&gt;</pre>
           </div>


        <h2 class="h2">Block Quotes</h2>

        <p>Margin on the &lt;blockquote&gt; element is updated to <span class="sp">5px</span>. also added background inmage with open and clode quotes. Also <span class="sp">8 px</span> padding added. </p>

        <blockquote class="quoteStyle">
       <span>Live and let Live</span>
   </blockquote>
      <div class="htmlCode">
              <pre>&lt;blockquote class="quoteStyle"&gt; Live and let Live&lt;/blockquote&gt;</pre>
           </div>




           <h2 class="h2">&lt;a&gt; Tag</h2>
           <h3>Default link</h3>
           <p>  Default &lt;a&gt; tag color is updated to <span class="sp">#069</span>. Also defaut underline is removed and added opacity on hover state. </p>
           <p><a href="#">This is a link</a></p>



           <h2 class="h2">Lists</h2>
            <h4>Simple/Unstyled List</h4>
            <p>Just add <span class="sp">.listStyle</span> class on <span class="sp">&lt;ul&gt;</span> tag. Bullets are removed. 1em/16px padding is added all around the ul tag. Also .5em/8px padding on li tags.</p>
           <ul class="listStyle">
               <li>Item 1</li>
               <li>Item 2</li>
               <li>Item 3</li>
           </ul>
           <div class="htmlCode">

 <pre>
    &lt;ul class="listStyle"&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ul&gt;
                    </pre>

           </div>

   <h4 class="h4 mt">List with stripes</h4>
     <p> In Addition to <span class="sp">.listStyle</span> class add one more class <span class="sp">.stripped-list</span>. This class adds background color to alternate list items.</p>
      <ul class="listStyle striped-list">
       <li>Item 1</li>
       <li>Item 2</li>
       <li>Item 3</li>
   </ul>
   <div class="htmlCode">

 <pre>
    &lt;ul class="listStyle striped-list"&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ul&gt;
                    </pre>

           </div>

   <h4 class="h4 mt">Nested Lists</h4>
     <p> Add <span class="sp">.listStyle</span> class to nested <span class="sp">&lt;ul&gt;</span> tag as well. </p>
      <ul class="listStyle">
       <li>Item 1
           <ul class="listStyle">
               <li>item 1.1</li>
               <li>item 1.2</li>
               <li>item 1.3</li>
           </ul>
       </li>
       <li>Item 2</li>
       <li>Item 3</li>
   </ul>

      <div class="htmlCode">

 <pre>
    &lt;ul class="listStyle"&gt;
        &lt;li&gt;Item 1
            &lt;ul class="listStyle"&gt;
            &lt;li&gt;Item 1&lt;/li&gt;
            &lt;li&gt;Item 2&lt;/li&gt;
            &lt;li&gt;Item 2&lt;/li&gt;
            &lt;/ul&gt;
       &lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
    &lt;/ul&gt;
                    </pre>

           </div>



           <h2 class="h2">Margin</h2>
           <p>Add <span class="sp">.mt</span> class for margin-top,<span class="sp">.mr</span> for margin-right ,<span class="sp">.mb</span> for margin-bottom,<span class="sp">.ml</span> for margin-left. All classes adds .5em/8px margin.</p>
       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>


