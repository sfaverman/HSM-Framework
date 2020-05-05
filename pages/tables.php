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
        <h1 class="title"> Tables</h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2 mb">Basic Tables</h2>
           <p>Design beautiful tables using just a few classes and HTML5 syntax. To design a basic table use the class <span class="sp">.basic-table and .table-container</span>. The <span class="sp">.table-container</span> adds a 1em/16px padding all the way around. To center the contents of the table use the class <span class="sp">.table-center</span></p>
        	<div class="table-container table-responsive">
          <h4>Basic Table</h4>

          <table class="basic-table table-center">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
          <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table table-center"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>
        </div>

        <h2 class="h2">Striped Row Table</h2>
        <p>Add the class <span class="sp">.striped-table</span> to style the tables as stripped</p>
        <div class="">
          <table class="basic-table striped-table">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table striped-table"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>


        <h2 class="h2">Striped Column Table</h2>
                <p>Add the class <span class="sp">.striped-col-table</span> to style the tables as striped columns</p>
        <div class="table-container">
          <h4>Striped Column Table</h4>

          <table class="basic-table striped-col-table">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table striped-col-table"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>



          <h2 class="h2">Table lined</h2>
          <p>Add the class <span class="sp">.table-lined</span> to style the tables with lines as seprator for rows</p>
        <div class="table-container">
          <h4>Striped Column Table</h4>

          <table class="basic-table table-lined">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table table-lined"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>


         <h2 class="h2">Table lined Colunms</h2>
                   <p>Add the class <span class="sp">.table-lined-col</span> to style the tables with lines as seprator for columns</p>
        <div class="table-container">
          <h4>Striped Column Table</h4>

          <table class="basic-table table-lined-col">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table table-lined-col"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>


           <h2 class="h2">Bordered Table</h2>
                              <p>Add the class <span class="sp">.table-border</span> to style the tables with lines as seprator for columns and rows</p>
        <div class="table-container">
          <h4>Striped Column Table</h4>

          <table class="basic-table table-border">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
	 &lt;table class="basic-table table-border"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
          		</pre>

          </div>



           <h2 class="h2">Responsive Table</h2>
                     <p>Add the class <span class="sp">.table-responsive</span> to make the table responsive with a scroll bar along the x-axis</p>
        <div class="table-container table-responsive">
          <h4>Responsive Table - Scroll Bar</h4>

          <table class="basic-table">
           <caption>Table caption</caption>
            <thead>
                <tr>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                  <th>Table Heading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
                <tr>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                  <td>Table Data</td>
                </tr>
            </tbody>
          </table>
        </div>
        <h4 class="mt bm">
          	HTML Structure:
          </h4>
          <div class="htmlCode">

          		<pre>
  &lt;div class="table-container table-responsive"&gt;
	 &lt;table class="basic-table"&gt;
           &lt;caption&gt;Table caption&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                  &lt;th&gt;Table Heading&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                  &lt;td&gt;Table Data&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
&lt;/div&gt;
          		</pre>

          </div>


  <p>
  	<a href="../examples/table.html" class="btn btn-primary" target="_blank">See More Examples</a>
  </p>

       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
