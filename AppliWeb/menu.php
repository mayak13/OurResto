<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>OUR RESTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--js-->
  <!--ICON-->
   <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"> 
</head>
<body>
    <!--la barre de navigation-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--le header-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> OURRESTO</a>
            </div>
            <!--la navigation-->
            <div id="menu" class="collapse navbar-collapse">
                <ul class=" liens nav navbar-nav">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li class="active"><a href="menu.php">MENU</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            
            <!--login-->
            
                <?php 
              
                if (isset($_SESSION['auth']) && $_SESSION['auth']==true) {
                    echo '<ul class="nav navbar-nav navbar-right ">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>' .$_SESSION["pseudo"].'</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
                          </ul>';
                }else if (!isset($_SESSION['auth']) || $_SESSION['auth']==false) { #Cas de: Quand on se connecte pour la première fois ou s'il y a une erreur 
                        echo '<ul class="nav navbar-nav navbar-right ">
                                <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                                <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                              </ul>';
                }

            ?>

            </div>
        </div>
    </nav>
    <!-- le header de notre page-->
    <section id="about" class="container-fluid">
            <!--insertion du logo-->
        <div class="row">
            <div class="profile-picture">
                <p>
                   <a href="images/logo_activité1.png"><img src="images/logo_activité1_mini.png"
                     alt="logo" title="logo"></a>
                </p>
            </div>
            <!-- l'entete-->
            <div class="heading">
                <h1><em>Our Resto <br />Bejaia 06</em></h1>
                <h3>25 rue de la liberté</h3>
            </div>
            <a class="button1" href="reservation.php">Reserver</a>
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title text-center">MENU</h2>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>NOS ENTREES</h3>
				<ul class="list-unstyled">
					<li>Brick(bourak)</li>
					<li>Salade</li>
					<li>Soupe</li>
					<li>Chorba</li>
					<li>Mhajeb</li>
				</ul>
            </div>
            <div class="col-md-6 text-center">
				<p>
                    <img style="width: auto;" src="images/5.jpeg" class="img-responsive img-thumbnail ">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
				<p>
                    <img style="width: auto;" src="images/about.jpg" class="img-responsive img-thumbnail ">
                </p>
            </div>
            <div class="col-md-6 text-center">
                <h3>NOS PLATS</h3>
                <dl>
                    <dt><b>Couscous berbere</b></dt><dd>semoule, 5 legumes, 2 viandes au choix.</dd>
                    <dt><b>Couscous royal</b></dt><dd>semoule, légumes, brochette, poulet,merguez...</dd>
                    <dt><b>Couscous zerda</b></dt><dd>semoule, légumes, cote d'agneau,boulette...</dd>
                    <dt><b>Tajin kefta</b></dt><dd>boulette de viande, olives, oeufs, petits pois.</dd>
                    <dt><b>Tajin poulet</b></dt><dd>poulet, citron, olive.</dd>
                    <dt><b>Tajin végétarien</b></dt><dd>légumes.</dd>
                    <dt><b>Tajin poisson</b></dt><dd>poisson.</dd>
                </dl  >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>NOS DESSERTS</h3>
				<ul class="list-unstyled">
					<li>Mousse au chocolat</li>
					<li>Crème brûlée</li>
					<li>Salade au fruits</li>
					<li>Nougat glacé</li>
				</ul>
            </div>
            <div class="col-md-6 text-center">
                <p>
                    <img style="width: auto;" src="images/1.jpeg" class="img-responsive img-thumbnail ">
                </p>
            </div>
        </div>
    
        <div class="text-center">
            <a id="env" href="menu-restaurant.pdf">voir plus</a>
        </div>
        

    </div>
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Our Resto 2018.
            </p>
    </footer>
    <script src="Assets/jquery/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>