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
		.grid > div{
			background-color: #fff;
		}
        @media screen and (min-width: 960px){
            main{
                display: block;
            }
        }
    </style>


    <div class=" documentation">
        <h1 class="title">Grid Menu</h1>
       <div class="info">
       <section class="inline-el">
           <h2 class="h2 mb">Classic Menu</h2>
                   <p>Add the class <span class="sp">.menu-item</span> to style the menu heading. The <span class="sp">.menu-dots</span> adds dots in between the menu name and the price. The class <span class="sp">.menu-price</span> styles the price of the menu item and the class <span class="sp">.menu-desc</span> styles the description of the menu item</p>

        		<div class="grid column321 mt ">
								<div >
							<div class="menu-item ">
									<h3 class="menu-title">Tex-Mex Chicken Wings</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span><span >$</span>6.50</span></span>
											<div class="menu-desc">
							Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Venezuelan Scrambled Eggs</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>8.50</span></span>
											<div class="menu-desc">
							Caramelized onions . tomatoes . mashed potatoes. tilapia						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Quesadillas Acapulco</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>2.50</span></span>
											<div class="menu-desc">
							Corn chips topped with cheese sauce, served with sour cream, guacamole &amp; pico de gallo						</div>

				</div>

				</div>
													<div >
							<div class="menu-item ">
									<h3 class="menu-title">Classic Nachos</h3>					<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>6.50</span></span>
											<div class="menu-desc">
							Corn chips topped with cheese sauce, served with sour cream, guacamole &amp; pico de gallo						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Avocado Shell Stuffed</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>8.50</span></span>
											<div class="menu-desc">
							Caramelized onions . tomatoes . mashed potatoes. tilapia						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Baked Potato Jackets</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>6.50</span></span>
											<div class="menu-desc">
							Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce						</div>

				</div>

				</div>
													<div >
							<div class="menu-item ">
									<h3 class="menu-title">Nachos Grande</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>3.50</span></span>
											<div class="menu-desc">
							Corn chips. Mexican fried chili beans. sour cream. guacamole &amp; salsa. chili lamb mince						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Mexican Taco Shells</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>6.50</span></span>
											<div class="menu-desc">
							Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce						</div>

				</div>
													<div class="menu-item ">
									<h3 class="menu-title">Greek Stuffed Mushroom</h3>
										<span class="menu-dots"></span>
					<span class="menu-price"><span ><span >$</span>6.50</span></span>
											<div class="menu-desc">
							Sundried tomato. pimento &amp; ricotta. stuffed button mushrooms with balsamic drizzle						</div>

				</div>

				</div>
							</div>


        	<div class="htmlCode">

        			<pre>

&lt;div class="grid column321 mt "&gt;
	&lt;div &gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;


	&lt;div &gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="menu-item "&gt;
			&lt;h3 class="menu-title"&gt;Tex-Mex Chicken Wings&lt;/h3&gt;
			&lt;span class="menu-dots"&gt;&lt;/span&gt;
			&lt;span class="menu-price"&gt;&lt;span&gt;&lt;span &gt;$&lt;/span&gt;6.50&lt;/span&gt;&lt;/span&gt;
			&lt;div class="menu-desc"&gt;
				Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;

        			</pre>

        	</div>

       </section>
       </div>
    </div><div class="clearfix"></div>
</main>

</body>
</html>
