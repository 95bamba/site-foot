<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "", "admin") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email,phone,  subject, message) VALUES 
		('" . $name. "', '" . $email. "','" . $phone. "',  '" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées et transmises avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}
//l'envoie du mail



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SAINT'IC</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

<div class="hero_area" style="background: #17d355;">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span style="
            font-size: 50px;
            font-weight: bold;
            color: #f8e538;
            cursor: pointer;
            first-letter: #f8e538;
            opacity: 400%;
            ">
              SAINT'IC
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Accueill<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="about.php"> A Propos</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
           
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Veuillez nous contacter
              </h2>
            </div>
            <form id="form" enctype="multipart/form-data" onsubmit="return validate()" action="traitement.php" method="post">
              <div>
              <input type="text" id="name" name="name" placeholder="Prénom & Nom " required/>
              </div>
              <div>
              <input type="text" id="email" name="email" placeholder="Email" required/>
              </div>
              <div>
              <input type="char" id="phone" name="phone" placeholder="Numero" required/>
              </div>
              <div>
              <input type="text" id="subject" name="subject" placeholder="Votre sujet" required/>
              </div>
              <div>
                <input type="text" id="message" name="message" class="message-box" placeholder="Message" required/>
              </div>
              <input type="submit" name="send" value="Envoyer le message" style="background: #17d355; color: white;" required/>
			       <div id="statusMessage"> 
             <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
             <?php } ?>
             <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <img src="images/locc.png" alt="" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <div class="footer_container" style="baackground: #17d355; background-color: #17d355;">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <h4>
                SAIN'TIC
              </h4>
              <p>
                SENEGAL ACADEMY TIC <strong>(SAIN'TIC) </strong> est un site vitrine qui incube ses plateformes de collaborations.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Liens
              </h4>
              <div class="info_links">
                <a class="" href="index.php">
                  Accueil
                </a>
                <a class="" href="about.php">
                  A Propos
                </a>
                
                <a class="" href="contact.php">
                  Contact 
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Ecrire
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit" style="background: #f8e538;">
                envoie
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Adress
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Localisation
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Tél :
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    Email :
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Welcome to
          <a href="index.php">SAIN'TIC</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>

  <!-- jQery -->
  <script src="js/contact.js"></script>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivrs.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>