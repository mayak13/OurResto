<?php
  include_once('to_connect.php');

  ?>
     <form method="post" action="">
      <div class="form-group">
        <button type="submit" name="connecter" class="btn btn-outline-primary" <?php if(isset($_GET["conn"])){ echo 'hidden';}?>>Se connecter</button>
      </div>
     </form>
  <?php
 if (isset($_GET["conn"])) {
     ?>
     <div class="container"> 
        <h2 class="heading-title text-center">Connexion</h2>

        <form id="formulaire" class="form-inline" method="post" action="">
                        <div class="form-group">
                            <label for="login">Login: </label>
                            <input id="login" type="text" name="login" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mdp">Mot de passe: </label>
                            <input id="mdp" type="password" name="mdp" class="form-control" required>
                        </div>  
                        <button id="btn" type="submit" class="btn btn-primary btn-lg" name="conn_admin">Connexion</button>
                        <?php
                         
                           if (isset($_GET["error"])) {
                               ?>
                                <strong class="text-danger"><?php echo $_GET["error"]?></strong>
                               <?php
                           } 
                        ?>
        </form>
    </div>
     <?php
 }

?>


<?php
 if (isset($_POST["conn_admin"])) {
    
    $login=htmlspecialchars($_POST["login"]);
    $mdp=htmlspecialchars($_POST["mdp"]);

    to_connect($login,$mdp);

 } 

 if (isset($_POST["connecter"])) {
    
    header('location:conn_admin.php?conn');

 }
?>