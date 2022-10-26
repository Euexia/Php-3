<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
 

    <title>Contactez moi !</title>
</head>
<body>
  <!-- NavBar -->
    <header id="header">
      <nav class="navbar navbar-expand-lg shadow-lg mb-4 bg-light fixed-top">
        <div class="container-fluid">
          <a class="nav-link text-dark fw-bold fs-4" style="margin-right: 10px; margin-left: 10px" href="index.php">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">A propos</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="portfolio.php">Portfolio</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="contact.php">Contact</a>
              <a class="nav-link text-dark fs-5" style="margin-right: 10px; margin-left: 10px" href="A Propos.php">CV</a>
            </div>
          </div>
        </div>
      </nav>
    </header> -->
    <!-- Navbar END -->




    <h1 class="title">Contact</h1>


		<div class="all_location">
						<div>
							<div>
								Paris
							</div>
							<p>
								Main Office <br>
								01 89 16 82 41
							</p>
							<p>
              1 Parvis de la Défense <br>
              92800 Puteaux<br>
							</p>

							<a href="https://www.google.com/maps/place/Grande+Arche+de+la+D%C3%A9fense/@48.8925978,2.2339234,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66502128aae1f:0x9dce86817f537c!8m2!3d48.8925978!4d2.2361121" target="_blank" class="location-cta o-media__icon tx--aqua-bright">
								<span class="tx--callout">Ouvrir La Map</span>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M9 17L14 11.5L9 6" stroke="currentColor" stroke-width="2"></path>
								</svg>
							</a>
						</div>

						<picture class="image_loca">
														<img src="Image/Archre de la defense.jpg" alt="Error">
						</picture>

		</div>
														
    <div class="office">

		<form id="contactForm" class="contact-form js-contact-form has--loader" method="post" data-js-contactform="">

    <h2>Contactez Nous</h2>
    <p>Use the form below to get in touch or email us at info@mcbridedesign.com.</p>

    <br>
    <br>

    

    <div class="success-message"></div>  

   

  
     <form method="post">

    <div class="flex-row row">
        <div class="namecontact">
            <input id="nom" name="nom" type="text" data-validate="text" value="" required="" placeholder="Nom">
        </div>

        <div class="col-xs-12 col-md-6">
            <input id="email" type="email" name="email" data-validate="email" value="" placeholder="Adresse Email" required="">
        </div>
    </div>


    <div class="flex-row row">
        <div class="col-xs-12 col-md-6">
            <label for="phone" class="sr">Numéro de télephone</label>
            <input id="telephone" name="telephone" type="text" data-validate="tel" value="" placeholder="Numéro de Télephone" required="">
        </div>
    </div>

    <div class="flex-row row">
        <div class="col-xs-12">
            <div class="select-box js-select-fx">
                
            <div class="" tabindex="0"><span class="cs-placeholder">How can we help you?</span><div class="cs-options"><ul><li data-option="" data-value=""><span>How can we help you?</span></li><li data-option="" data-value="I have a new project or idea."><span>I have a new project or idea.</span></li><li data-option="" data-value="I have a media request or need a quote."><span>I have a media request or need a quote.</span></li><li data-option="" data-value="I am interested in a job or career."><span>I am interested in a job or career.</span></li><li data-option="" data-value="I have a product that could help your team."><span>I have a product that could help your team.</span></li><li data-option="" data-value="I need something else."><span>I need something else.</span></li></ul></div><select id="reason" name="message[Reason][]" required="" data-validate="text">
                    <option value="">How can we help you?</option>
                                            <option value="I have a new project or idea.">I have a new project or idea.</option>
                                            <option value="I have a media request or need a quote.">I have a media request or need a quote.</option>
                                            <option value="I am interested in a job or career.">I am interested in a job or career.</option>
                                            <option value="I have a product that could help your team.">I have a product that could help your team.</option>
                                            <option value="I need something else.">I need something else.</option>
                                    </select></div></div>
        </div>
        
        <div class="col-xs-12">
            <label class="sr" for="urgency">How quickly should we get back to you?</label>
            <div class="select-box js-select-fx">
                
            <div class="" tabindex="0"><span class="cs-placeholder">How quickly should we get back to you?</span>
              <div class="cs-options">
                <ul>
                <li data-option="" data-value=""><span>How quickly should we get back to you?</span></li>
                <li data-option="" data-value="ASAP"><span>ASAP</span></li>
                <li data-option="" data-value="Today or tomorrow."><span>Today or tomorrow.</span></li>
                <li data-option="" data-value="Within the next week."><span>Within the next week.</span></li>
                <li data-option="" data-value="Anytime is good."><span>Anytime is good.</span></li>
                </ul>
              </div>
              <select id="urgency" name="message[Urgency][]" data-validate="text" required="">
                    <option value="">How quickly should we get back to you?</option>
                                            <option value="ASAP">ASAP</option>
                                            <option value="Today or tomorrow.">Today or tomorrow.</option>
                                            <option value="Within the next week.">Within the next week.</option>
                                            <option value="Anytime is good.">Anytime is good.</option>
                                    </select></div></div>
        </div>
    </div>

    <div class="flex-row row">
        <div class="col-xs-12 col-md-6">
            <label for="body" class="sr">Anything else we should know?</label>
            <textarea rows="3" cols="40" id="message" name="message[body]" placeholder="Anything else we should know?" maxlength="500"></textarea>
        </div>
    </div>



    <button class="form-button btn btn--blue has--loader" type="submit" form="contactForm" value="Submit">
        Submit
    </button>
    <a href="./admin.php" target="_blank"> ADMIN</a>
    </form>												
			<footer class="connect-footer">
				<div class="column newsletter">
					<h4 class="tx--body-lead label">Stay Updated</h4>
					
					<div class="signup-field">
						<form action="//mcbridedesign.us3.list-manage.com/subscribe/post?u=ceb2a2bc7b069fc1ea4dd2e54&amp;id=acda54d35e" method="post" target="_blank"><p><input type="text" id="mail" required="" name="EMAIL" placeholder="Sign up for newsletter…" class="subscribe-field">
							<button type="submit" class="subscribe-btn">Sign Up</button><br></p>
					</form>
						<svg class="signup-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.2071 0.792908L19.9142 9.50001L11.2071 18.2071L9.79289 16.7929L16.0858 10.5H0V8.50001H16.0858L9.79289 2.20712L11.2071 0.792908Z" fill="#ECF2F7"></path>
					</svg></div>
				</div>

				<div class="column">
					<h4 class="tx--body-lead label">Media</h4>
          <p>Lucie Quintana<br>
          lucie.quintana@gmail.com<br>
          0000000000</p>				
        </div>

				<div class="column social">
					<h4 class="tx--body-lead label">Follow Us</h4>
											<li>
    <a class="no-barba tx--caption first" href="#" title="Facebook" target="_blank">Facebook</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Twitter" target="_blank">Twitter</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Instagram" target="_blank">Instagram</a>
      </li>

											<li>
    <a class="no-barba tx--caption" href="#" title="Linkedin" target="_blank">Linkedin</a>
      </li>

									</div>
			</footer>
		</div>

	
	</div></main>

</div> 

 


<?php
$pdo = new PDO('mysql:host=localhost;dbname=tableur info', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if ($_POST) {
    echo $_POST['nom'];
    echo $_POST['email'];
    echo $_POST['telephone'];
    echo $_POST['message'];
    $pdo->exec("INSERT INTO tableur (nom, email, telephone, message) VALUES ('$_POST[nom]', '$_POST[email]', '$_POST[telephone]', '$_POST[message]')");
} 

?>

</body>
</html>
