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

    <?php 

        if (isset($_SESSION['reserv']) && $_SESSION['reserv']==true) {
            echo '<script>alert("Réservation effectuée!")</script>';
            $_SESSION['reserv']==false;
        }

    ?>

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
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li class="active"><a href="reservations.php">RESERVATIONS</a></li>
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
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title  text-center">RESERVATIONS</h2>
        <div class="col-xs-offset-3 col-xs-6">
            <form id="form" class="form-horizontal text-center" method="post" action="insertReserv.php">
                <div>
                    <div class="form-group">
                        <label for="nom" class="control-label col-sm-2">Nom:</label>
                        <input class="col-sm-10 form-control" id="nom" type="text" name="nom" placeholder="Enter Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="control-label col-sm-2">Prenom:</label>
                        <input class="col-sm-10 form-control" id="prenom" type="text" name="prenom" placeholder="Enter Votre prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email:</label>
                        <input class="col-sm-10 form-control" id="email" type="text" name="email" placeholder="Enter Votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="control-label col-sm-2">Tel:</label>
                        <input class="col-sm-10 form-control" id="tel" type="text" name="tel" placeholder="Enter Votre numero de telephone" required>
                    </div>
                    <legend>Votre réservation</legend>
                    <div class="form-group">
                        <label for="nbr" class="control-label col-sm-2">personnes:</label>
                        <input class="col-sm-10 form-control" id="nbr" type="number" name="nbr" max="8" min="1" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="date" class="control-label col-sm-2">Le jour:</label>
                        <input class="col-sm-10 form-control" id="date" type="date" name="date"  required>
                    </div>
                    <div class="form-group">
                        <label for="heure" class="control-label col-sm-2">L'heure:</label>
                        <select class="form-control" name="heure" id="heure" class="col-sm-10">
                            <option value="12:00" selected>12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="12:30">12:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:15">19:15</option>
                            <option value="19:30">19:30</option>
                            <option value="19:45">19:45</option>
                            <option value="20:00">20:00</option>
                            <option value="20:15">20:15</option>
                            <option value="20:30">20:30</option>
                            <option value="20:45">20:45</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>
                <input id="valid-btn" class="btn btn-primary" type="submit" name="valider">
            </div>
            </form>
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