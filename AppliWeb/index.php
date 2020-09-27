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
<body data-spy="scroll" data-target="#menu" >
    <!--la barre de navigation-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--le header-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monmenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> OURRESTO</a>
            </div>
            <!--la navigation-->
            <div id="monmenu" class="collapse navbar-collapse">
                <ul class=" liens nav navbar-nav">
                    <li class="active"><a href="index.php">ACCUEIL</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
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
        <div class="heading-title"><h2 class="text-center">ACCUEIL</h2></div>
        <div class="row">
                <section class="col-sm-8">
                        <blockquote class="text-justify">
                                <p>
                                    Bienvenue chez Our Resto bejaia 06, nous proposons des spécialités orientales dans une<br />
                                    ambiance traditionnelle. Le restaurant est situé au 25 rue de la liberté près de<br />
                                    la poste algerie.
                                </p>
                                <p>
                                    A la carte vous retrouverez les classiques de la cuisine orientale.
                                </p>
                                <p>
                                    Coté entrées des bricks, salades et soupes (chorba et harira).
                                </p>
                                <p>
                                    Vous aurez aussi un large choix de tajines: Tajine de kefta, de poulet, d'agneau, au carré <br />
                                    d'ageau, aux 5 légumes, au poisson et végétarien.
                                </p>
                                <p>
                                    Les couscous proposés sont le Couscous Zerda (différentes viandes), royal (toutes les viandes),<br />
                                    mixte (brochette d'agneau et merguez), d'agneau cuit en sauce, sucré et berbère (légumes et viande <br /> 
                                    sans bouillon).
                                </p>
                                <p>
                                    Les déserts sont également variés avec mousse au chocolat, patisseries orientales, crêpes <br />
                                    orientales (berbère et msemen), salade de fruits et bien d'autres.
                    
                                </p>
                                <p>
                                    Au plaisir de vous accueillir
                                </p>
                                <footer class="text-right">
                                    L'équipe du Our Resto.
                                </footer>
                        </blockquote>    

                </section>
    
                
        </div>
        <div class="col-sm-4" >
                    <h3> Horaires d'overture</h3>
                    <div class="table-responsive"> 
                        <table class="table">
                            <tr>
							    <td>Samedi</td>
							    <td>11:00--14:30</td>
							    <td>19:00--23:00</td>
						    </tr>
						    <tr>
							    <td>Dimanche</td>
							    <td>11:00--14:30</td>
							    <td>19:00--23:00</td>
						    </tr>
						    <tr>
							    <td>Lundi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Mardi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Mercredi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Jeudi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr class="bg-danger">
                                <td>Vendredi</td>
                                <td>ferme</td>
                                <td>ferme</td>
                            </tr>
                        </table>
                    </div>
                </div>
        <div class="row" style=" background-color: rgba(209, 87, 87, 0.849);
        padding: 20px;">
            <div class="col-lg-12">
                   <video  class="embed-responsive-item" style="width: 80%;height: auto;" id="video-elt" src="images/vid1.mp4" controls width="400" >
                                Il est temps de mettre à jour votre navigateur !
                    </video>
                    <h2>Bienvenus au OUR RESTO 😋 </h2>
            </div>
        </div>   
        <div class="row" style="margin-top:10px;">
            <div class="container">
                <div class="col-sm-4">
            	<h3><span class="glyphicon glyphicon-th-list"></span> Infos complementaires</h3>
					<ul>
						<li>Disponibilité du wifi.</li>
						<li>Terasse.</li>
						<li>Climatisation.</li>
						<li>Paiement cache ou carte bancaire.</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h3><span class="glyphicon glyphicon-map-marker"></span> Coordonneés</h3>
                    <iframe width="300" height="auto" frameborder="0" style="border:0"
                     src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAE_VcqoWWoW5bQR3MLLCn2AsWXeuwVlk4
                      &q=bejaia,poste" allowfullscreen>
                    </iframe>
				</div>
				<div class="col-sm-4">
                    
                        <h3><span class="glyphicon glyphicon-road"></span> Notre adresse</h3>
                        15 rue de la liberté <br>
                        Béjaia, 066000<br>
				</div>
            </div>    
        </div>
    </div>
    <div id="containGallery" class="container">
            <div id="monCarousel" class="carousel slide center-block" data-ride="carousel"
             style="height: auto; width: 80%;">
                    <ol class="carousel-indicators">
                        <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#monCarousel" data-slide-to="1"></li>
                        <li data-target="#monCarousel" data-slide-to="2"></li>
                        <li data-target="#monCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="images/about.jpg">
                            <div class="carousel-caption">
                                <h3>Plat 1</h3>
                            </div>
                        </div>
                        <div class="item">
                                <img  class="img-responsive" src="images/about2.jpg">
                                <div class="carousel-caption">
                                    <h3>Plat 2</h3>
                                </div>
                        </div>
                        <div class="item">
                                <img class="img-responsive" src="images/header.jpg">
                                <div class="carousel-caption">
                                    <h3>Plat 3</h3>
                                </div>
                        </div>
                        <div class="item">
                                <img class="img-responsive" src="images/4.jpeg">
                                <div class="carousel-caption">
                                    <h3>salon</h3>
                                </div>
                        </div>
                    </div>
                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
      
                    </a>
    </div>
    <div class="text-center" >
        <h2>Quelques photos de notre restaurant et de nos plats 😍</h2>
    </div>
    </div>
    <div id="contact" class="container">
        <div class="row text-center">
                <h2 class="heading-title">CONTACT</h2>
                <span class="glyphicon glyphicon-earphone"></span><abbr title="Telephone"> Tel:</abbr> (213) 555 555 555 <br />
                    ou <br />
                <span class="glyphicon glyphicon-phone-alt"></span><abbr title="Telephone fixe"> Tel:</abbr> (213) 34 555 555

                <p><a id="env" href="mailto:ibra.alg021095@gmail.com"><span class="glyphicon glyphicon-envelope"></span> Envoyer un e-mail !</a></p>
        </div>
    </div>
   
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Our Resto 2020.
            </p>
    </footer>
    <script src="Assets/jquery/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>