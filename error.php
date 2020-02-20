<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Icon Tags -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="icon" href="luas.svg" type="image/svg+xml" />
	<meta name="theme-color" content="#503694">

	
	<!-- Primary Meta Tags -->
	<title>Simple LUAS -  Real Time Luas Information</title>
	<meta name="title" content="Simple LUAS -  Real Time Luas Information">
	<meta name="description" content="No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://shanehastings.eu/luas/">
	<meta property="og:title" content="Simple LUAS -  Real Time Luas Information">
	<meta property="og:description" content="No ads, simple, clean and fast. Get up to date real time information for all Luas stops in Dublin anywhere.">
	<meta property="og:image" content="simpleluas.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://shanehastings.eu/luas/">
	<meta property="twitter:title" content="Simple LUAS -  Real Time Luas Information">
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

    if (isset($_GET['stopID'])) {
        $stopID = htmlspecialchars($_GET['stopID']);
    } else if(isset($_POST['stopID'])) {
        $stopID = htmlspecialchars($_POST['stopID']);
    }
            else {
                    
                    $stopID = "STS";
                    
    }

    function displayStopDetails() {
        $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");

            echo "<b>Stop Name: </b>" . $xml['stop'] . " <br>";
            echo "<b>Direction: </b>" . $xml->direction[1]['name'] . "<hr>";
    }


    ?>
    <section class="section">
      <div class="container">
        <h1 class="title">Simple LUAS <i class="fas fa-subway"></i></h1> 
        <p class="subtitle">Easy interaction with the 
        <strong>Luas RTPI API</strong>!</p>
        
        <br />
        <div class="notification is-danger">
        <strong>Error</strong>
        <br /><Br />
		Either the page you're looking for doesn't exist or the stop you chose was passed incorrectly to the server. Either way, there's nothing here.<br><br>
		<a href="index.php">Click here to go back</a>

		
		
		
		</div>

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
