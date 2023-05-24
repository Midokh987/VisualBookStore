<!DOCTYPE html>
<html>
<head>
	<title>Library Website</title>
	

	<link rel="stylesheet" href="internet.css">
    <link rel="Website icon" type="png"
    href="file:Internete/image/.jpg">
  </head>
<body>
	<header>
		<nav>
            <ul>
            <div class="dropdown">
                <button class="k"><a>Categorys</a></button>
                  <div class="dropdown-options">
                    	<a href="Internete/Form/index.html">Home</a>
                        <a href="file:Internete/Form/Literature.html">Literature</a>
                        <a href="file:Internete/Form/Science%20Fiction.html">Science Fiction</a>
                        <a href="file:Internete/Form/Excitement%20and%20Suspense.html">Excitement and Suspense</a>
                        <a href="file:Internete/Form/Romantic.html">Romantic</a>
                  </div>
             </div>
                <div class="cart">
                    <a onclick="redirectme('LargeCart.html')">Cart</a>
                    <span id="items" class="cart-items">0</span>
                </div>  
                <div class="search">
                    <form>
                        <input id="searchinput" onkeyup="search1()" type="text" placeholder="Search for books...">
                        <button type="submit"><a>Search</a></button>
                    </form>
                </div>
                <div  class="signup">
                    <a href="login.html"> Logout </a>
                  </div>
            </ul>
		</nav>
	</header>
	<main>
		<section data-category="literature">
			<h2>Trending Books</h2>
			<ul>
				<li>
					<img src="1.jpg" alt="Book 1">
					<h3>A Court of Mist and Fury</h3>
					<p>Feyre has undergone more trials than one human woman can carry in her heart. Though she's now been granted the powers and lifespan of the High Fae, she is haunted by her time Under the Mountain and the terrible deeds she performed to save the lives of Tamlin and his people.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="2.jpg" alt="Book 2">
					<h3>In Cold Blood </h3>
					<p>I liked the novel and because of it watched the movie about its author.
                        "On November 15, 1959, in the small town of Holcomb, Kansas, four members of the Clutter family were savagely murdered by blasts from a shotgun held a few inches from their faces. There was no apparent motive for the crime, and there were almost no clues."
                        Quote from the back of the book.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="3.jpg" alt="Book 3">
					<h3>Falkner</h3>
					<p>Mary Shelley, the celebrated author of Frankenstein, scrutinizes the developing impact of Indian culture on a young English soldier, Falkner. As a child Falkner was mistreated 
                        and neglected at home and at school. While in the company of Mrs.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
                <li>
					<img src="4.jpg" alt="Book 4">
					<h3>Poppy</h3>
					<p>At the very edge of Dimwood Forest stood an old charred oak where, silhouetted by the moon, a great horned owl sat waiting. The owl's name was Mr. Ocax, and he looked like death himself. With his piercing gaze, he surveyed the lands he called his own, watching for the creatures he considered his subjects. Not one of them ever dared to cross his path . . . until the terrible night when two little mice went dancing in the moonlight . . .
                        --back cover</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="5.jpg" alt="Book 5">
					<h3>The Silence of the Lambs</h3>
					<p>Thomas Harris will seize you with an emotion more profound than terror.
                        Of his previous novel, Stephen King wrote, "The book simply comes at you and comes at you, finally leaving you shaken and sober and afraid on a deeper level than simple 'thrills' alone furnish." Harris' new book is his most powerful and provocative, a novel with an impact unlike any other.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					
					<img src="6.jpg" alt="Book 6">
					<h3>BThe Agricola and The Germania </h3>
					<p>"THE Agricola of Tacitus, the biography of the most famous governor of Roman Britain, is part of our national story, and as such has a direct claim on our interest."</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="7.jpg" alt="Book 7">
					<h3>A first course in differential equations with modeling applications</h3>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="8.jpg" alt="Book 8">
					<h3>Before (After Series)</h3>
					<p>Recounts Hardin's first encounters with Tessa and their ensuing love affair that became a vortex pulling in everyone around them.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="/9.jpg" alt="Book 9">
					<h3>First Impressions</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="10.jpg" alt="Book 10">
					<h3>Eyes of Darkness</h3>
					<p>Tina Evans has spent a year suffering from incredible heartache since her son Danny's tragic death. But now, with her Vegas show about to premiere, Tina can think of no better time for a 
                        fresh start. Maybe she can finally move on and put her grief behind her.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="11.jpg" alt="Book 11">
					<h3>IT</h3>
					<p>Derry: A small city in Maine, place as hauntingly familiar as your own hometown, only in Derry the haunting is real...
                        They were seven teenagers when they first stumbled upon the horror.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
				<li>
					<img src="12.jpg" alt="Book 12">
					<h3>Pet Sematary</h3>
					<p>When a little boy persuades his parents to bury his dead pet in the old cemetary near their 
                        house, they encounter a mysterious place filled with restless spirits.</p>
					<button onclick="cartplus()">Add to Cart</button>
				</li>
			</ul>
		</section>
	</main>
	<script src="internet.js"></script>
	

</body>
</html>
