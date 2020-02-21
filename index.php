<!DOCTYPE html>
<html>
  <head>
	<!-- RTPI /luas/ -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="js/stopSelector.js"></script>
	<!-- Icon Tags -->
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="icon" href="img/luas.svg" type="image/svg+xml" />
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
  </head>
  <body onload="populateStops()">
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
        <div class="field">
          <div class="control has-icons-left">
            <div class="select">
              <form name="stopIDS" action="index.php" method="get">
                <select name="stopID" id='stopPicker' onchange="this.form.submit()">
                  <option selected="selected" value="<?php echo $stopID; ?>">
                    <?php 
                            $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
                            echo utf8_decode($xml['stop']);?>
                  </option>
                </select>
              </form>
            </div>
            <div class="icon is-small is-left">
			<i class="fas fa-subway"></i>
			</div>
          </div>
        </div>
        <br />
		<!-- Service Alert Delete -->
				
		<script>
				document.addEventListener('DOMContentLoaded', () => {
		  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
			$notification = $delete.parentNode;

			$delete.addEventListener('click', () => {
			  $notification.parentNode.removeChild($notification);
			});
		  });
		});
		</script>
        <div class="notification is-info">
		<button class="delete"></button>
        <strong>Service Announcement</strong>
        <br />
		<Br>
								<?php
                                $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
								echo  $xml->message . "<br>"; 
								?>
		
		
		
		</div>
        <div class="columns">
		  <div class="column">
				  <div class="box">
				  <!-- Line Indicator Box -->
				  <div class="tile">
				  
				  <?php 
					$greenline = array("Broombridge","Cabra","Phibsborough","Grangegorman","Broadstone - DIT","Dominick","Parnell","O'Connell - Upper","OConnell - GPO","Marlborough","Westmoreland","Trinity","Dawson","St. Stephen's Green","Harcourt","Charlemont","Ranelagh","Beechwood","Cowper","Milltown","Windy Arbour","Dundrum","Balally","Kilmacud","Stillorgan","Sandyford","Central Park","Glencairn","The Gallops","Leopardstown Valley","Ballyogan Wood","Racecourse","Carrickmines","Brennanstown","Laughanstown","Cherrywood","Bride's Glen"); 
					$xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
					if (in_array(utf8_decode($xml['stop']), $greenline)) 
					  { 
							$isGreen = "success";
					  } 
					else
					  { 
							$isGreen = "danger";
					  } 
					?> 
				  
						<article class="tile is-child notification is-<?php echo $isGreen; ?>">
					   <p class="title">
					   <?php $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
							  echo utf8_decode($xml['stop']) . "</p>  <p class='subtitle'>" . $xml->direction[0]['name'] . "</p>"; ?>

					   </article>
					</div>
					<!-- RTPI Info -->
				  <article class="media">

					<div class="media-content">
					  <div class="content">
						<p>
						  
						  <br>
						    <?php
                                              $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
                                              for ($i = 0; $i < count($xml->direction[0]); $i++) {
                                                                      echo "<b>Destination: </b>" . $xml->direction[0]->tram[$i]['destination'] . "<br>";
                                                                      echo "<b>Due in: </b>" . $xml->direction[0]->tram[$i]['dueMins'] . " mins<br><br>";
                                                                      
                                                      }


                                      echo "<hr>";
                                      // this code counts the number of trams in each direction. index 0 is inbound, 1 is outbound.
                                      echo count($xml->direction[0]);
                                      echo " trams forecast.";


                                                      ?>
						</p>
					  </div>
					</div>
				  </article>
				</div>
		  </div>
		  <div class="column">
				  <div class="box">
				  <!-- Line Indicator Box -->
				  <div class="tile">
						<article class="tile is-child notification is-<?php echo $isGreen; ?>">
					   <p class="title">
					   <?php $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
							  echo utf8_decode($xml['stop']) . "</p>  <p class='subtitle'>" . $xml->direction[1]['name'] . "</p>"; ?>

					   </article>
					</div>
					<!-- RTPI Info -->
				  <article class="media">

					<div class="media-content">
					  <div class="content">
						<p>
						  
						  <br>
						    <?php
                                              $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
                                              for ($i = 0; $i < count($xml->direction[1]); $i++) {
                                                                      echo "<b>Destination: </b>" . $xml->direction[1]->tram[$i]['destination'] . "<br>";
                                                                      echo "<b>Due in: </b>" . $xml->direction[1]->tram[$i]['dueMins'] . " mins<br><br>";
                                                                      
                                                      }


                                      echo "<hr>";
                                      // this code counts the number of trams in each direction. index 0 is inbound, 1 is outbound.
                                      echo count($xml->direction[1]);
                                      echo " trams forecast.";


                                                      ?>
						</p>
					  </div>
					</div>
				  </article>
				</div>
		  </div>

		  
		  
        </div>
        <hr /><?php
                                $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");

                                echo "<b>Updated: </b>" . $xml['created']  ;
                                
                                ?>
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
