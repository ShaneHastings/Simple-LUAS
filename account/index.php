<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="../js/stopSelector.js"></script>
	<!-- Icon Tags -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="icon" href="img/luas.svg" type="image/svg+xml" />
	<meta name="theme-color" content="#503694">

	
	<!-- Primary Meta Tags -->
	<title>Favourites - Simple LUAS</title>
	<meta name="title" content="Favourites - Simple LUAS">
	<meta name="description" content="Favourite stops | No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://shanehastings.eu/luas/">
	<meta property="og:title" content="Favourites - Simple LUAS">
	<meta property="og:description" content="No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">
	<meta property="og:image" content="simpleluas.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://shanehastings.eu/luas/">
	<meta property="twitter:title" content="Favourites - Simple LUAS">
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
	

	</head>
  <body onload="populateStops()">
  
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

			  <a href="/faq" class="navbar-item">
				FAQ
			  </a>
			  
			  <a href="/account" class="navbar-item is-active">
				Favourites
			  </a>
			</div>

		  </div>
		</nav><hr><br>
	<!-- Navigation Bar End-->

		<div class="box">
				  <article class="media">

  <script>
    function SetCookie(c_name,value,expiredays)
        {
            var exdate=new Date()
            exdate.setDate(exdate.getDate()+expiredays)
            document.cookie=c_name+ "=" +escape(value)+
            ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    		location.reload()
			
        }
    </script>
	

					<div class="media-content">
					  <div class="content">
					  <b>Your current stop is:</b> 
						<?php if (isset($_COOKIE['luas_stop'])) {
								echo $_COOKIE["luas_stop"]; }
								else { echo "unknown.";   }
						?>
						
						<p>
						  
						  <div class="field is-grouped">
						  
						  <p class="control">
						   <div class="select">
							<select name="stopID" id='stopPicker' ></select>
							</div>
						</p>
						  
							  <p class="control">
								<a href="" onClick="SetCookie('luas_stop','<?php echo ""; ?>','-1')"><button type="button" name="accept" class="button is-info">Set Stops</button>
							  </p>
							  
							</div>
						 
						  


						</p>
					  </div>
					</div>
				  </article>
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
