<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Icon Tags -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="icon" href="img/luas.svg" type="image/svg+xml" />
	<meta name="theme-color" content="#503694">

	
	<!-- Primary Meta Tags -->
	<title>FAQ - Simple LUAS</title>
	<meta name="title" content="FAQ - Simple LUAS">
	<meta name="description" content="Frequently asked questions | No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://shanehastings.eu/luas/">
	<meta property="og:title" content="FAQ - Simple LUAS">
	<meta property="og:description" content="No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">
	<meta property="og:image" content="simpleluas.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://shanehastings.eu/luas/">
	<meta property="twitter:title" content="FAQ - Simple LUAS">
	<meta property="twitter:description" content="No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">
	<meta property="twitter:image" content="simpleluas.png">
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css" />
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
	<style>
		.title {
		  font-family: 'Varela Round', sans-serif;
		}
		.subtitle {
		  font-family: 'Varela Round', sans-serif;
		}
	</style>
  <body>
  
    <?php

	function error_found(){
  header("Location: error.php");
	}
	set_error_handler('error_found');
    ?>
    <section class="section">
	
      <div class="container">
        <h1 class="title">Simple LUAS <i class="fas fa-subway"></i></h1> 
        <p class="subtitle">Easy interaction with the 
        <strong>Luas RTPI API</strong>!</p>
        
				<!-- Navigation Bar -->
		<nav class="navbar" role="navigation" aria-label="main navigation">
		  <div id="navbarBasicExample" class="navbar-menu is-active">
			<div class="navbar-start">
			  <a href="/" class="navbar-item">
				Real Time
			  </a>

			  <a href="/faq" class="navbar-item is-active">
				FAQ
			  </a>
			  
			  <a href="/account" class="navbar-item">
				Favourites
			  </a>
			</div>

		  </div>
		</nav><br>
	<!-- Navigation Bar End-->
		<div class="columns">
  <div class="column">
    <div class="card">
		  <header class="card-header">
			<p class="card-header-title">
			  GitHub Project
			</p>
		  </header>
		  <div class="card-content">
			<div class="content">
			  This project is on GitHub if you'd like to play around with it. It's nothing serious but you are more than welcome to make changes or suggestions.
			  <br>
			</div>
		  </div>
		  <footer class="card-footer">
		<a href="https://github.com/ShaneHastings/Simple-LUAS" class="card-footer-item">GitHub</a></footer>
		</div>
  </div>
  <div class="column">
    		<div class="card">
		  <header class="card-header">
			<p class="card-header-title">
			  Where does the data come from?
			</p>
		  </header>
		  <div class="card-content">
			<div class="content">
			  The real time information displayed on this website uses an API supplied by Transport Infrastructure Ireland (TII). This is the same source used by the official Luas app, and many third party apps. 
			  <br>
			</div>
		  </div>
		  <footer class="card-footer">
		<a href="https://data.gov.ie/dataset/luas-forecasting-api" class="card-footer-item">API</a></footer>
		</div>
  </div>

</div>
		
		
		
				<div class="columns">
  <div class="column">
    		<div class="card">
		  <header class="card-header">
			<p class="card-header-title">
			  Where can I make a suggestion?
			</p>
		  </header>
		  <div class="card-content">
			<div class="content">
			  Feel free to message me on Twitter or send me an email with any queries/suggestions you might have! 
			  <br>
			</div>
		  </div>
		  <footer class="card-footer">
		<a href="https://twitter.com/ShaneHastingsIE" class="card-footer-item">@ShaneHastingsIE</a>
		<a href="mailto:hello@shanehastings.eu" class="card-footer-item">hello@shanehastings.eu</a>
		</footer>
		</div>
  </div>

</div>
		<br>


      </div>
	
	  
	  
	  
    </section>
		<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Simple LUAS</strong> by <a href="https://twitter.com/ShaneHastingsIE">Shane Hastings</a>. API courtesy of <a href="https://www.transportforireland.ie/">Transport for Ireland</a>.
    </p>
  </div>
</footer>
  </body>
</html>
