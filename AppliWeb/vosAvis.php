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
                    <li><a href="menu.php">MENU</a></li>
                    <li class="active"><a href="vosAvis.php">VOS AVIS</a></li>
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
            <a class="button1" href="reservations.php">Reserver</a>
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title  text-center">Vos avis</h2>
        <div id="avis" class="avis">
                <form id="formulaire" class="form-inline" method="post" action="insertAvis.php">
                        <div class="form-group">
                            <label for="pseudo">Pseudo: </label>
                            <?php 
                            if (isset($_SESSION['auth']) && $_SESSION['auth']==true) {
                                echo   '<input id="pseudo" type="text" name="pseudo" class="form-control" required value="'.$_SESSION['pseudo'].'">';
                            }
                            else if (!isset($_SESSION['auth']) || $_SESSION['auth']==false) { #Cas de: Quand on se connecte pour la première fois ou s'il y a une erreur 
                                echo '<input id="pseudo" type="text" name="pseudo" class="form-control" required>';
                            }

                         ?>
                          
                        </div>
                        <div class="form-group">
                            <label for="msg">Message: </label>
                            <input id="msg" type="text" name="msg" class="form-control" required>
                        </div>	
                        <?php 
                            if (isset($_SESSION['auth']) && $_SESSION['auth']==true) {
                                echo '<button id="btn" type="submit" class="btn btn-primary btn-lg">Commenter</button>';
                            }
                            else if (!isset($_SESSION['auth']) || $_SESSION['auth']==false) { #Cas de: Quand on se connecte pour la première fois ou s'il y a une erreur 
                                echo '<button id="btn" type="submit" class="btn btn-primary btn-lg "disabled>Commenter</button>';
                            }

                         ?>
                       
                </form>
                <div id="commentaire">
                    <?php
                        include('connectBDD.php');
                        $selection=$BDD->query('SELECT * FROM avis ORDER BY jour desc');
                        while ($donnee=$selection->fetch()) { #fetch et non fetchAll parce qu'on veut les afficher ligne par ligne
                            echo '<h2>'.$donnee['pseudo'].'</h2><p>'.$donnee['commentaire'].'</p><blockquote>'.$donnee['jour'].'</blockquote>'; #On met dans donnée ce qu'il y a dans la BDD
                        }

                    ?>
                </div>		
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