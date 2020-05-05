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
        <h1 class="title"> Forms</h1>
       <div class="info">
       <section class="inline-el">
         <h2 class="2">HSM Forms</h2>
         <p>Forms are used to collect user inputs. Form elements includes text boxes, drop down lists, text areas, radio buttons, check boxes, fieldsets and labels, etc. We have designed the form fields in such a way that they have unique styling applied to them so that they do not look like the default form fields.</p>
         <p>Below are types of forms:-</p>
         <ul>
            <li>- Contact Form</li>
             <li>- Order Form</li>
         </ul>
          <h2 class="2">Contact Form</h2>
           <p>To design the contact form use the class <span class="sp">.contactForm .fullWidthForm</span>. The <span class="sp">.fullWidthForm</span> class makes the elements span 100% width.</p>
           <p>To style the fieldset and legend that wraps the form elements use the class <span class="sp"> .fieldsetStyle and .legendStyle </span> on the appropriate tags.</p>
        	  <div class="contactForm fullWidthForm">
            <form action="post" method="post" id="formReg">
                   <fieldset class="fieldsetStyle">
                       <legend class="legendStyle">Contact Information</legend>
                               <ul class="formInput">
                                   <li>
                                       <label for="fName">First Name*:</label>
                                       <input type="text" id="fName" name="firstName" required>
                                   </li>

                                   <li>
                                       <label for="email">Email*:</label>
                                       <input type="email" id="email" name="email" required placeholder="name@url.com">
                                   </li>

                                   <li>
                                       <label for="msg">Questions/Comments:</label>
                                       <textarea name="message" id="msg" placeholder="Please write your message here"></textarea>
                                   </li>
                               </ul>
        <!--                  p.note{* indicates required field}-->
                           <p class="note">* indicates required field</p>
                   </fieldset>


                   <ul class="formBtn">
                       <li>
                           <input type="reset" class="btn button">
                       </li>
                       <li>
                           <input type="submit" class="btn button" value="Let's Go!">
                       </li>
                   </ul>
       </form>
        </div>
        <div class="htmlCode">

        		<pre>
&lt;div class="contactForm fullWidthForm"&gt;
&lt;form action="" method="post" id="formReg"&gt;
&lt;fieldset class="fieldsetStyle"&gt;
    &lt;legend class="legendStyle"&gt;Contact Information&lt;/legend&gt;
      &lt;ul class="formInput"&gt;
          &lt;li&gt;
              &lt;label for="fName"&gt;First Name*:&lt;/label&gt;
              &lt;input type="text" id="fName" name="firstName" required&gt;
          &lt;/li&gt;
          &lt;li&gt;
              &lt;label for="email"&gt;Email*:&lt;/label&gt;
              &lt;input type="email" id="email" name="email" required placeholder="name@url.com"&gt;
          &lt;/li&gt;
          &lt;li&gt;
              &lt;label for="msg"&gt;Questions/Comments:&lt;/label&gt;
              &lt;textarea name="message" id="msg" placeholder="Please write your message here"&gt;&lt;/textarea&gt;
          &lt;/li&gt;
      &lt;/ul&gt;
       &lt;p class="note"&gt;* indicates required field&lt;/p&gt;
&lt;/fieldset&gt;

&lt;ul class="formBtn"&gt;
  &lt;li&gt;
    &lt;input type="reset" class="btn button"&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;input type="submit" class="btn button" value="Let's Go!"&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;/form&gt;
&lt;/div&gt;
        		</pre>

        </div>


<!--    order form -->

      <h2 class="h2">Order Form</h2>
           <p>To style elements for order form wrap the form with the class <span class="sp">.formWrapper</span> which gives the form a unique background color and border. Inorder to style the headings, sub headings and content text use the class <span class="sp">.formHeader, formSubHeader and .formText</span> on appropriate tags.</p>
           <p>To style elements such as drop down lists, radio buttons, check boxes etc use the class <span class="sp">.dropOption, .radioList and  .cbList</span> on the appropriate containers.</p>
              <div id="formWrapper">
             <h1 class="formHeader">Order pizza</h1>
      <p>Build a pizza you&#39;d like to order. Start with the personal information that the delivery man will use to deliver your pizza, choose from variety options and we wil provide you with an estimated total.</p>
            <form action="post" id="pizza-form">
            <article class="fullWidthForm">
                <fieldset class="fieldsetStyle">
                    <legend class="formSubHeader legendStyle">Delivery Location</legend>
                <p>Please enter your name and address:</p>

                <label for="name">Name*:</label>
                <input type="text" id="name" name="name">
                <label for="a-type">Address Type:</label>
                    <select name="a-type" id="a-type">
                        <option value="">- Please select -</option>
                        <option value="H">House</option>
                        <option value="A">Apartment</option>
                        <option value="B">Business</option>
                        <option value="C">Campus</option>
                        <option value="H">Hotel</option>
                        <option value="D">Dorm</option>
                        <option value="O">Other</option>
                    </select>
                <div id="otherOpt" style="display:none">
                    <label for="other">Other Address Type:</label>
                    <input type="text" id="other" name="other">
                </div>
                <label for="street">Street name*:</label>
                <input type="text" id="street" name="street" >
                <ul>
                    <li>
                        <label for="city">City*:</label>
                        <input type="text" id="city" name="city">
                    </li>
                    <li>
                        <label for="s-state">State:</label>
                        <select name="s-state" id="s-state">
                            <option value="">- Please select -</option>
                            <option value="CA">California</option>
                            <option value="WA">Washington</option>
                            <option value="OR">Oregon</option>
                            <option value="AZ">Arizona</option>
                        </select>
                    </li>
                    <li>
                        <label for="zip">ZipCode*:</label>
                        <input type="text" id="zip" name="zip">
                    </li>
                </ul>

                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" placeholder="name@url.com">


                <label for="phone">Phone*:</label>
                <input type="tel" id="phone" name="phone" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">

                <p class="formNote">* indicated required field</p>
                </fieldset>

            </article>

                <fieldset class="fieldsetStyle">
                    <legend class="formSubHeader legendStyle">Build your order</legend>

                <p>You Make It - We Bake It. The Best custom built pizza restaurant all over San Diego Area.</p>



                <p class="formSubHeader text-bold text-underline">Choose your crust</p>


                        <ul class="radioList">
                           <li>
                              <label for="r-dough-hand">
                            <input type="radio" name="r_dough" value="hand" id="r-dough-hand">Hand Tossed</label>
                           </li>
                           <li>
                              <label for="r-dough-thin">
                        <input type="radio" name="r_dough" value="thin" id="r-dough-thin">Thin Crust</label>
                           </li>
                           <li>
                               <label for="r-dough-nys">
                        <input type="radio" name="r_dough" value="nys" id="r-dough-nys">New York Style</label>
                           </li>
                           <li>
                               <label for="r-dough-gluten">
                        <input type="radio" name="r_dough" value="gluten" id="r-dough-gluten">Gluten Free</label>
                           </li>
                       </ul>





            <article>
                <p class="formSubHeader text-bold text-underline">Choose pizza size, cheese and sauce</p>
                <p>Please enter the size of pizza:</p>

               <ul class="dropOption">
                   <li>
                        <label for="p-size" class="floatLeft-md">Pizza size:</label>
                    <select name="p-size" id="p-size" class="halfWidth marginLeft">
                        <option value="">- Please select -</option>
                        <option value="9.99">Small ($9.99)</option>
                        <option value="12.99">Medium ($12.99)</option>
                        <option value="14.99">Large ($14.99)</option>
                    </select>

                   </li>
                   <li class="clearfloat"></li>
                   <li>
                           <label for="o-cheeze" class="floatLeft-md">Cheeze options:</label>
                    <select name="o-cheeze" id="o-cheeze" class="halfWidth marginLeft">
                        <option value="">- Please select -</option>
                        <option value="0">Light ($0.00)</option>
                        <option value="0">Normal ($0.00)</option>
                        <option value="2.99">Extra ($2.99)</option>
                        <option value="3.99">Double ($3.99)</option>
                    </select>
                   </li>
                   <li class="clearfloat"></li>
                   <li>
                         <label for="o-sauce" class="floatLeft-md">Sauce options:</label>
                    <select name="o-sauce" id="o-sauce" class="halfWidth marginLeft">
                        <option value="">- Please select -</option>
                        <option value="0.00">Regular Tomato ($0.00)</option>
                        <option value="0.99">Hearty Tomato ($0.99)</option>
                        <option value="1.99">BBQ Sauce ($1.99)</option>
                    </select>
                   </li>
                   <li class="clearfloat"></li>
               </ul>


            </article>
            <article >
                <p class="formSubHeader text-bold text-underline">Toppings</p>
                <p>Select the toppings. Each topping is $.99 extra. </p>

                 <ul class="cbList">
                           <li>
                              <label for="c-pepperoni">
                              <input type="checkbox" name="toppings" value="pepperoni" id="c-pepperoni">Pepperoni</label>
                            </li>
                           <li>
                              <label for="c-sausage">
                    <input type="checkbox" name="toppings" value="sausage" id="c-sausage">Sausage</label>
                           </li>

                           <li>
                              <label for="c-ham">
                    <input type="checkbox" name="toppings" value="ham" id="c-ham">Ham</label>
                           </li>
                           <li>
                              <label for="c-bacon">
                    <input type="checkbox" name="toppings" value="bacon" id="c-bacon">Bacon</label>
                           </li>
                           <li>
                              <label for="c-salami">
                    <input type="checkbox" name="toppings" value="salami" id="c-salami">Salami</label>
                           </li>
                           <li>
                              <label for="c-peppers">
                    <input type="checkbox" name="toppings" value="peppers" id="c-peppers">Peppers</label>
                           </li>
                           <li>
                               <label for="c-olives">
                    <input type="checkbox" name="toppings" value="olives" id="c-olives">Olives</label>
                           </li>
                           <li>
                               <label for="c-jalapenos">
                    <input type="checkbox" name="toppings" value="jalapenos" id="jalapenos">Jalapenos</label>
                           </li>

                    <li>
                        <label for="c-mashrooms">
                    <input type="checkbox" name="toppings" value="mashrooms" id="c-mashrooms">Mushrooms</label>
                    </li>

                    <li>
                        <label for="c-pineapple">
                    <input type="checkbox" name="toppings" value="pineapple" id="c-pineapple">Pineapple</label>

                    </li>
                    <li>
                        <label for="c-onions">
                    <input type="checkbox" name="toppings" value="onions" id="onions">Onions</label>
                    </li>

                    <li>
                        <label for="c-spinach">
                    <input type="checkbox" name="toppings" value="spinach" id="spinach">Spinach</label>
                    </li>
                       </ul>





            </article>

            <article class="fullWidthForm">
                <p class="formSubHeader text-bold text-underline">Special notes</p>
                 <label for="msg"></label>
                 <textarea name="message" id="msg" placeholder="Please write your message here"></textarea>

            </article>

            <div>
                    <p>
                        <label for="btn-orderForm">Click to estimate:</label>
                        <input type="submit" class="btn btn-orderForm" value="Total">
                        <input type="text" placeholder="$0.00" id="txt-estimate">
                    </p>
                    <div id="results"></div>
            </div>
             </fieldset>
         </form>

         <!-- Billing form -->
         <form action="#" id="billingForm">
         <article >
              <fieldset class="fieldsetStyle">
                  <legend class="formSubHeader legendStyle">Billing Information</legend>
                <p class="formText">Please select the method of payment</p>

               <ul class="radioList">
                   <label for="r-card-visa">
                      <li>
                        <input type="radio" name="r_card" value="visa" id="r-card-visa">Visa
                     </li>
                   </label>
                   <label for="r-card-master">
                   <li>

                        <input type="radio" name="r_card" value="master" id="r-card-master">Master Card

                   </li>
                   </label>
                   <label for="r-card-ax">
                   <li>


                        <input type="radio" name="r_card" value="ax" id="r-card-ax">American Express
                   </li>
                   </label>
               </ul>
              </fieldset>

            </article>

            <article class="formBtn">
                <input type="submit" class="btn btn-orderForm" value="Order!">
                <input type="reset" class="btn btn-orderForm">
            </article>
        </form> <!-- end billing form -->
        </div>
   <div class="htmlCode">

   		<pre>

     &lt;div id="formWrapper"&gt;
             &lt;h1 class="formHeader"&gt;Order pizza&lt;/h1&gt;
      &lt;p&gt;Build a pizza you&#39;d like to order. Start with the personal information that the delivery man will use to deliver your pizza, choose from variety options and we wil provide you with an estimated total.&lt;/p&gt;
            &lt;form action="" id="pizza-form"&gt;
            &lt;article class="fullWidthForm"&gt;
                &lt;fieldset class="fieldsetStyle"&gt;
                    &lt;legend class="formSubHeader legendStyle"&gt;Delivery Location&lt;/legend&gt;
                &lt;p&gt;Please enter your name and address:&lt;/p&gt;

                &lt;label for="name"&gt;Name*:&lt;/label&gt;
                &lt;input type="text" id="name" name="name" autofocus&gt;
                &lt;label for="a-type"&gt;Address Type:&lt;/label&gt;
                    &lt;select name="a-type" id="a-type"&gt;
                        &lt;option value=""&gt;- Please select -&lt;/option&gt;
                        &lt;option value="H"&gt;House&lt;/option&gt;
                        &lt;option value="A"&gt;Apartment&lt;/option&gt;
                        &lt;option value="B"&gt;Business&lt;/option&gt;
                        &lt;option value="C"&gt;Campus&lt;/option&gt;
                        &lt;option value="H"&gt;Hotel&lt;/option&gt;
                        &lt;option value="D"&gt;Dorm&lt;/option&gt;
                        &lt;option value="O"&gt;Other&lt;/option&gt;
                    &lt;/select&gt;
                &lt;div id="otherOpt" style="display:none"&gt;
                    &lt;label for="other"&gt;Other Address Type:&lt;/label&gt;
                    &lt;input type="text" id="other" name="other"&gt;
                &lt;/div&gt;
                &lt;label for="street"&gt;Street name*:&lt;/label&gt;
                &lt;input type="text" id="street" name="street" &gt;
                &lt;ul&gt;
                    &lt;li&gt;
                        &lt;label for="city"&gt;City*:&lt;/label&gt;
                        &lt;input type="text" id="city" name="city"&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                        &lt;label for="s-state"&gt;State:&lt;/label&gt;
                        &lt;select name="s-state" id="s-state"&gt;
                            &lt;option value=""&gt;- Please select -&lt;/option&gt;
                            &lt;option value="CA"&gt;California&lt;/option&gt;
                            &lt;option value="WA"&gt;Washington&lt;/option&gt;
                            &lt;option value="OR"&gt;Oregon&lt;/option&gt;
                            &lt;option value="AZ"&gt;Arizona&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/li&gt;
                    &lt;li&gt;
                        &lt;label for="zip"&gt;ZipCode*:&lt;/label&gt;
                        &lt;input type="text" id="zip" name="zip"&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;

                &lt;label for="email"&gt;Email*:&lt;/label&gt;
                &lt;input type="email" id="email" name="email" placeholder="name@url.com"&gt;

                &lt;label for="phone"&gt;Phone*:&lt;/label&gt;
                &lt;input type="tel" id="phone" name="phone" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"&gt;

                &lt;p class="formNote"&gt;* indicated required field&lt;/p&gt;
                &lt;/fieldset&gt;
            &lt;/article&gt;

                &lt;fieldset class="fieldsetStyle"&gt;
                    &lt;legend class="formSubHeader legendStyle"&gt;Build your order&lt;/legend&gt;

                &lt;p&gt;You Make It - We Bake It. The Best custom built pizza restaurant all over San Diego Area.&lt;/p&gt;

                &lt;p class="formSubHeader text-bold text-underline"&gt;Choose your crust&lt;/p&gt;
                        &lt;ul class="radioList"&gt;
                           &lt;li&gt;
                              &lt;label for="r-dough-hand"&gt;
                            &lt;input type="radio" name="r_dough" value="hand" id="r-dough-hand"&gt;Hand Tossed&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                              &lt;label for="r-dough-thin"&gt;
                        &lt;input type="radio" name="r_dough" value="thin" id="r-dough-thin"&gt;Thin Crust&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                               &lt;label for="r-dough-nys"&gt;
                        &lt;input type="radio" name="r_dough" value="nys" id="r-dough-nys"&gt;New York Style&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                               &lt;label for="r-dough-gluten"&gt;
                        &lt;input type="radio" name="r_dough" value="gluten" id="r-dough-gluten"&gt;Gluten Free&lt;/label&gt;
                           &lt;/li&gt;
                       &lt;/ul&gt;


            &lt;article&gt;
                &lt;p class="formSubHeader text-bold text-underline"&gt;Choose pizza size, cheese and sauce&lt;/p&gt;
                &lt;p&gt;Please enter the size of pizza:&lt;/p&gt;

               &lt;ul class="dropOption"&gt;
                   &lt;li&gt;
                        &lt;label for="p-size" class="floatLeft-md"&gt;Pizza size:&lt;/label&gt;
                    &lt;select name="p-size" id="p-size" class="halfWidth marginLeft"&gt;
                        &lt;option value=""&gt;- Please select -&lt;/option&gt;
                        &lt;option value="9.99"&gt;Small ($9.99)&lt;/option&gt;
                        &lt;option value="12.99"&gt;Medium ($12.99)&lt;/option&gt;
                        &lt;option value="14.99"&gt;Large ($14.99)&lt;/option&gt;
                    &lt;/select&gt;

                   &lt;/li&gt;
                   &lt;li class="clearfloat"&gt;&lt;/li&gt;
                   &lt;li&gt;
                           &lt;label for="o-cheeze" class="floatLeft-md"&gt;Cheeze options:&lt;/label&gt;
                    &lt;select name="o-cheeze" id="o-cheeze" class="halfWidth marginLeft"&gt;
                        &lt;option value=""&gt;- Please select -&lt;/option&gt;
                        &lt;option value="0"&gt;Light ($0.00)&lt;/option&gt;
                        &lt;option value="0"&gt;Normal ($0.00)&lt;/option&gt;
                        &lt;option value="2.99"&gt;Extra ($2.99)&lt;/option&gt;
                        &lt;option value="3.99"&gt;Double ($3.99)&lt;/option&gt;
                    &lt;/select&gt;
                   &lt;/li&gt;
                   &lt;li class="clearfloat"&gt;&lt;/li&gt;
                   &lt;li&gt;
                         &lt;label for="o-sauce" class="floatLeft-md"&gt;Sauce options:&lt;/label&gt;
                    &lt;select name="o-sauce" id="o-sauce" class="halfWidth marginLeft"&gt;
                        &lt;option value=""&gt;- Please select -&lt;/option&gt;
                        &lt;option value="0.00"&gt;Regular Tomato ($0.00)&lt;/option&gt;
                        &lt;option value="0.99"&gt;Hearty Tomato ($0.99)&lt;/option&gt;
                        &lt;option value="1.99"&gt;BBQ Sauce ($1.99)&lt;/option&gt;
                    &lt;/select&gt;
                   &lt;/li&gt;
                   &lt;li class="clearfloat"&gt;&lt;/li&gt;
               &lt;/ul&gt;


            &lt;/article&gt;
            &lt;article &gt;
                &lt;p class="formSubHeader text-bold text-underline"&gt;Toppings&lt;/p&gt;
                &lt;p&gt;Select the toppings. Each topping is $.99 extra. &lt;/p&gt;

                 &lt;ul class="cbList"&gt;
                           &lt;li&gt;
                              &lt;label for="c-pepperoni"&gt;
                              &lt;input type="checkbox" name="toppings" value="pepperoni" id="c-pepperoni"&gt;Pepperoni&lt;/label&gt;
                            &lt;/li&gt;
                           &lt;li&gt;
                              &lt;label for="c-sausage"&gt;
                    &lt;input type="checkbox" name="toppings" value="sausage" id="c-sausage"&gt;Sausage&lt;/label&gt;
                           &lt;/li&gt;

                           &lt;li&gt;
                              &lt;label for="c-ham"&gt;
                    &lt;input type="checkbox" name="toppings" value="ham" id="c-ham"&gt;Ham&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                              &lt;label for="c-bacon"&gt;
                    &lt;input type="checkbox" name="toppings" value="bacon" id="c-bacon"&gt;Bacon&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                              &lt;label for="c-salami"&gt;
                    &lt;input type="checkbox" name="toppings" value="salami" id="c-salami"&gt;Salami&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                              &lt;label for="c-peppers"&gt;
                    &lt;input type="checkbox" name="toppings" value="peppers" id="c-peppers"&gt;Peppers&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                               &lt;label for="c-olives"&gt;
                    &lt;input type="checkbox" name="toppings" value="olives" id="c-olives"&gt;Olives&lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li&gt;
                               &lt;label for="c-jalapenos"&gt;
                    &lt;input type="checkbox" name="toppings" value="jalapenos" id="jalapenos"&gt;Jalapenos&lt;/label&gt;
                           &lt;/li&gt;

                    &lt;li&gt;
                        &lt;label for="c-mashrooms"&gt;
                    &lt;input type="checkbox" name="toppings" value="mashrooms" id="c-mashrooms"&gt;Mushrooms&lt;/label&gt;
                    &lt;/li&gt;

                    &lt;li&gt;
                        &lt;label for="c-pineapple"&gt;
                    &lt;input type="checkbox" name="toppings" value="pineapple" id="c-pineapple"&gt;Pineapple&lt;/label&gt;

                    &lt;/li&gt;
                    &lt;li&gt;
                        &lt;label for="c-onions"&gt;
                    &lt;input type="checkbox" name="toppings" value="onions" id="onions"&gt;Onions&lt;/label&gt;
                    &lt;/li&gt;

                    &lt;li&gt;
                        &lt;label for="c-spinach"&gt;
                    &lt;input type="checkbox" name="toppings" value="spinach" id="spinach"&gt;Spinach&lt;/label&gt;
                    &lt;/li&gt;
                       &lt;/ul&gt;





            &lt;/article&gt;

            &lt;article class="fullWidthForm"&gt;
                &lt;p class="formSubHeader text-bold text-underline"&gt;Special notes&lt;/p&gt;
                 &lt;label for="msg"&gt;&lt;/label&gt;
                 &lt;textarea name="message" id="msg" placeholder="Please write your message here"&gt;&lt;/textarea&gt;

            &lt;/article&gt;

            &lt;div&gt;
                    &lt;p&gt;
                        &lt;label for="btn-orderForm"&gt;Click to estimate:&lt;/label&gt;
                        &lt;input type="submit" class="btn btn-orderForm" value="Total"&gt;
                        &lt;input type="text" placeholder="$0.00" id="txt-estimate"&gt;
                    &lt;/p&gt;
                    &lt;div id="results"&gt;&lt;/div&gt;
            &lt;/div&gt;
             &lt;/fieldset&gt;
         &lt;/form&gt;

         &lt;!-- Billing form --&gt;
         &lt;form action="#" id="billingForm"&gt;
         &lt;article &gt;
              &lt;fieldset class="fieldsetStyle"&gt;
                  &lt;legend class="formSubHeader legendStyle"&gt;Billing Information&lt;/legend&gt;
                &lt;p class="formText"&gt;Please select the method of payment&lt;/p&gt;

               &lt;ul class="radioList"&gt;
                   &lt;label for="r-card-visa"&gt;
                      &lt;li&gt;
                        &lt;input type="radio" name="r_card" value="visa" id="r-card-visa"&gt;Visa
                     &lt;/li&gt;
                   &lt;/label&gt;
                   &lt;label for="r-card-master"&gt;
                   &lt;li&gt;

                        &lt;input type="radio" name="r_card" value="master" id="r-card-master"&gt;Master Card

                   &lt;/li&gt;
                   &lt;/label&gt;
                   &lt;label for="r-card-ax"&gt;
                   &lt;li&gt;

                        &lt;input type="radio" name="r_card" value="ax" id="r-card-ax"&gt;American Express
                   &lt;/li&gt;
                   &lt;/label&gt;
               &lt;/ul&gt;
              &lt;/fieldset&gt;

            &lt;/article&gt;

            &lt;article class="formBtn"&gt;
                &lt;input type="submit" class="btn btn-orderForm" value="Order!"&gt;
                &lt;input type="reset" class="btn btn-orderForm"&gt;
            &lt;/article&gt;
        &lt;/form&gt; &lt;!-- end billing form --&gt;
        &lt;/div&gt;


   		</pre>

   </div>

       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
