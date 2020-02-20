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
  </head>
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
        <div class="field">
          <div class="control has-icons-left">
            <div class="select">
              <form name="stopIDS" action="index.php" method="get">
                <select name="stopID" onchange="this.form.submit()">
                  <option selected="selected" value="<?php echo $stopID; ?>">
                    <?php 
                            $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
                            echo utf8_decode($xml['stop']);?>
                  </option>
                  <option value="TPT">The Point</option>
                  <option value="SDK">Spencer Dock</option>
                  <option value="MYS">Mayor Square - NCI</option>
                  <option value="GDK">George&#39;s Dock</option>
                  <option value="CON">Connolly</option>
                  <option value="BUS">Bus&aacute;ras</option>
                  <option value="ABB">Abbey Street</option>
                  <option value="JER">Jervis</option>
                  <option value="FOU">Four Courts</option>
                  <option value="SMI">Smithfield</option>
                  <option value="MUS">Museum</option>
                  <option value="HEU">Heuston</option>
                  <option value="JAM">James&#39;s</option>
                  <option value="FAT">Fatima</option>
                  <option value="RIA">Rialto</option>
                  <option value="SUI">Suir Road</option>
                  <option value="GOL">Goldenbridge</option>
                  <option value="DRI">Drimnagh</option>
                  <option value="FET">Fettercairn</option>
                  <option value="CVN">Cheeverstown</option>
                  <option value="CIT">Citywest Campus</option>
                  <option value="FOR">Fortunestown</option>
                  <option value="SAG">Saggart</option>
                  <option value="DEP">Depot</option>
                  <option value="BRO">Broombridge</option>
                  <option value="CAB">Cabra</option>
                  <option value="PHI">Phibsborough</option>
                  <option value="GRA">Grangegorman</option>
                  <option value="BRD">Broadstone - DIT</option>
                  <option value="DOM">Dominick</option>
                  <option value="PAR">Parnell</option>
                  <option value="OUP">O&#39;Connell - Upper</option>
                  <option value="OGP">O&#39;Connell - GPO</option>
                  <option value="MAR">Marlborough</option>
                  <option value="WES">Westmoreland</option>
                  <option value="TRY">Trinity</option>
                  <option value="DAW">Dawson</option>
                  <option value="STS">St. Stephen&#39;s Green</option>
                  <option value="HAR">Harcourt</option>
                  <option value="CHA">Charlemont</option>
                  <option value="RAN">Ranelagh</option>
                  <option value="BEE">Beechwood</option>
                  <option value="COW">Cowper</option>
                  <option value="MIL">Milltown</option>
                  <option value="WIN">Windy Arbour</option>
                  <option value="DUN">Dundrum</option>
                  <option value="BAL">Balally</option>
                  <option value="KIL">Kilmacud</option>
                  <option value="STI">Stillorgan</option>
                  <option value="SAN">Sandyford</option>
                  <option value="CPK">Central Park</option>
                  <option value="GLE">Glencairn</option>
                  <option value="GAL">The Gallops</option>
                  <option value="LEO">Leopardstown Valley</option>
                  <option value="BAW">Ballyogan Wood</option>
                  <option value="RCC">Racecourse</option>
                  <option value="CCK">Carrickmines</option>
                  <option value="BRE">Brennanstown</option>
                  <option value="LAU">Laughanstown</option>
                  <option value="CHE">Cherrywood</option>
                  <option value="BRI">Bride&#39;s Glen</option>
                  <option value="BLA">Blackhorse</option>
                  <option value="BLU">Bluebell</option>
                  <option value="KYL">Kylemore</option>
                  <option value="RED">Red Cow</option>
                  <option value="KIN">Kingswood</option>
                  <option value="BEL">Belgard</option>
                  <option value="COO">Cookstown</option>
                  <option value="HOS">Hospital</option>
                  <option value="TAL">Tallaght</option>
                </select>
              </form>
            </div>
            <div class="icon is-small is-left">
			<i class="fas fa-subway"></i>
			</div>
          </div>
        </div>
        <br />
        <div class="notification is-info">
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
				  <article class="media">

					<div class="media-content">
					  <div class="content">
						<p>
						  <br>
						    <?php
                                              $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
											  echo "<strong>" . utf8_decode($xml['stop']) . "</strong> <small>XXXXX Line</small> <small></small><br>";
                                              echo "<b>Direction: </b>" . $xml->direction[0]['name'] . "<hr>";
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
				  <article class="media">

					<div class="media-content">
					  <div class="content">
						<p>
						  
						  <br>
						    <?php
                                              $xml=simplexml_load_file("http://luasforecasts.rpa.ie/xml/get.ashx?action=forecast&stop=$stopID&encrypt=false") or die("Error: Cannot create object");
											  echo "<strong>" . utf8_decode($xml['stop']) . "</strong> <small>XXXXX Line</small> <small></small><br>";
                                              echo "<b>Direction: </b>" . $xml->direction[1]['name'] . "<hr>";
                                              for ($i = 0; $i < count($xml->direction[1]); $i++) {
                                                                      echo "<b>Destination: </b>" . $xml->direction[1]->tram[$i]['destination'] . "<br>";
                                                                      echo "<b>Due in: </b>" . $xml->direction[1]->tram[$i]['dueMins'] . " mins<br><br>";
                                                                      
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
