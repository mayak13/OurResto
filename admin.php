<?php

$bdd = new pdo('mysql:host=localhost;dbname=our_restau','root','');


if (isset($_POST['a'])) {
  
$ajout = $bdd->prepare('INSERT into reservations(nom,prenom,email,tel,personnes,jour,heure)values(?,?,?,?,?,?,?)');
$ajout->execute(array($_POST['Nom'],$_POST['Prénom'],$_POST['E_mail'],$_POST['Téléphone'],$_POST['Nbr_de_Personne'],$_POST['Date'],$_POST['Time']));

}




if (isset($_POST['h'])) {
  
$modif = $bdd->prepare('UPDATE `reservations` SET `nom`=?,`prenom`=?,`email`=?,`tel`=?,`personnes`=?,`jour`=?,`heure`=? WHERE `id`= ? ');
$_POST['idd']=(int)$_POST['idd'];
$modif->execute(array($_POST['Nom'],$_POST['Prénom'],$_POST['E_mail'],$_POST['Téléphone'],$_POST['Nbr_de_Personne'],$_POST['Date'],$_POST['Time'],is_int($_POST['idd'])));
}






if (isset($_GET['sup'])) {
$sup = (int) $_GET['sup'];
$suprimer = $bdd->prepare('DELETE  from reservations where id = ?');
$suprimer->execute(array($sup));

}



$res = $bdd->query('SELECT * from reservations ');
$ress = $bdd->query('SELECT * from reservations ');

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
 <script src="js/canvas.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css_admin/css_canevas.css">
<link rel="stylesheet" type="text/css" href="css_admin/css_menu_admin.css">
<link rel="stylesheet" type="text/css" href="css_admin/popup.css">
<link rel="stylesheet" type="text/css" href="css_admin/css_formulaire.css">
<link rel="stylesheet" type="text/css" href="css_admin/css_tableau_supression.css">
<meta charset="utf-8">
</head>
<body>


<section>






<!--  ////////////////////////// premiere partie 'ajout' ////////////////////////////////////  -->


<div id="popup1" class="overlay">
  <div class="popup">
    <h2>ajout de Réservation</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      


<div class="form-style-2" id="new" >
<div class="form-style-2-heading">New Comande (Formulaire de creation de Comendes)</div>

<form method="post" action=""  >

<label for="Nom"><span>Nom <span class="required">*</span></span><input type="text" class="input-field" name="Nom" value="" /></label>

<label for="Prénom"><span>Prénom <span class="required">*</span></span><input type="text" class="input-field" name="Prénom" value="" /></label>

<label for="E_mail"><span>E_mail <span class="required">*</span></span><input type="email" class="input-field" name="E_mail" value="" /></label>

<label for="Téléphone"><span>Téléphone <span class="required">*</span></span><input type="text" class="input-field" name="Téléphone" value="" /></label>



<label for="Nbr_de_Personne">
  <span>Nbr de Personne</span><select name="Nbr_de_Personne" class="select-field">
<option value="1">1  </option>
<option value="2">2  </option>
<option value="3">3  </option>
<option value="4">4  </option>
<option value="5">5  </option>
<option value="6">6  </option>
<option value="7">7  </option>
<option value="8">8  </option>
<option value="9">9  </option>

</select></label>

<label for="Date"><span>Date <span class="required">*</span></span><input type="date" class="input-field" name="Date" value="" /></label>

<label for="Time"><span>Time <span class="required">*</span></span><input type="time" class="input-field" name="Time" value="" /></label>


<label for="PS"><span>PS <span class="required">*</span></span><textarea name="PS" class="textarea-field"></textarea></label>

<label for="f"><span>Me notifier par mail </span><input type="checkbox" class="input-field" name="f" value="" /></label>
<br>

<label><span> </span><input type="submit" value="Submit" name="a" /></label>
</form>
</div>

    </div>
  </div>

</div>
<!--  ////// end ajout ///////  -->







<!--  ////////////////////////// deuxieme parti 'modif' ////////////////////////////////////  -->




<div id="popup2" class="overlay">
  <div class="popup">
    <h2>Modif des Réservations</h2>
    
    <a class="close" href="#">&times;</a>
    <div class="content">



<div class="form-style-2" id="new" >
<div class="form-style-2-heading">Settings Comends (Formulaire de Reserve)</div>

<form method="post" action=""  >

<label for="idd"><span>Num de comande</span><select name="idd" class="select-field">

<?php  while ($r = $res->fetch()) {   ?>              

<option value="<?php echo($r['id'])?>"> <?=  $r['id']; ?> </option>

<?php  }  ?>              




</select></label>

<label for="Nom"><span>Nom <span class="required">*</span></span><input type="text" class="input-field" name="Nom" value="" /></label>

<label for="Prénom"><span>Prénom <span class="required">*</span></span><input type="text" class="input-field" name="Prénom" value="" /></label>

<label for="E_mail"><span>E_mail <span class="required">*</span></span><input type="email" class="input-field" name="E_mail" value="" /></label>

<label for="Téléphone"><span>Téléphone <span class="required">*</span></span><input type="text" class="input-field" name="Téléphone" value="" /></label>



<label for="Nbr_de_Personne">
  <span>Nbr de Personne</span><select name="Nbr_de_Personne" class="select-field">
<option value="1">1  </option>
<option value="2">2  </option>
<option value="3">3  </option>
<option value="4">4  </option>
<option value="5">5  </option>
<option value="6">6  </option>
<option value="7">7  </option>
<option value="8">8  </option>
<option value="9">9  </option>

</select></label>

<label for="Date"><span>Date <span class="required">*</span></span><input type="date" class="input-field" name="Date" value="" /></label>

<label for="Time"><span>Time <span class="required">*</span></span><input type="time" class="input-field" name="Time" value="" /></label>


<label for="field5"><span>PS <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>

<label for="field1"><span>Me notifier par mail </span><input type="checkbox" class="input-field" name="tmail" value="" /></label>
<br>
<label><span> </span><input type="submit" value="Submit" name="h" /></label>
<br>

</form>

</div>

    </div>
  </div>

</div>
<!--  ////// end modif ///////  -->





<!--  ////////////////////////// troisieme partie 'supression' ////////////////////////////////////  -->


<div id="popup3" class="overlay">
 <div class="popup">
    <h2>
Supression des réservations</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      

<div class="table100">
  <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">nom</th>
                <th class="column2">prenom</th>
                <th class="column3">tel</th>
                <th class="column4"></th>
                
              </tr>
            </thead>
            <tbody>
<?php  while ($rr = $ress->fetch()) {   ?>              

                <tr>
                  <td class="column1"><?=  $rr['nom']; ?></td>
                  <td class="column2"><?=  $rr['prenom']; ?></td>
                  <td class="column3"><?=  $rr['tel']; ?></td>
                  <td class="column4"><a href="admin.php?sup=<?php  echo $rr['id']; ?>"> sup</a> </td>
                  
                </tr>
<?php  } ?>             
                
                
            </tbody>
          </table>
      </div>


    </div>
  </div>


</div>

<!--  ////// end supression ///////  -->








<div class="title">
     <center><font color="#202020">espace </font><font color="#ffff00">d'administration </font></center>   
</div>
<br>
<br>
<br>
<br>

<!--  ////////////////////////// le navigateur ////////////////////////////////////  -->

<table style="width:100%;" class="tab">
  <tr>
    <td width="100%" >
    <table width="100%">
     <tr>
      <td class="menu"><a class="button" href="#popup1"> ajout de Réservations  </a></td>
      <td class="menu"><a class="button" href="#popup2"> Modif de réservation </a></td>
      <td class="menu"><a class="button" href="#popup3"> Suppression de réservation </a></td>
      <td class="menu"><a class="button" href="#popup4"> .. </a></td>
      <td class="menu"><a class="button" href="#popup5"> .. </a></td>
     </tr>   
    </table>          
    </td>    
  </tr>       
</table>
<!--  ////// end navigateur ///////  -->



<!--  //////////////////// la petite animation d'en dessous 'le canvas' //////////////////////  -->

</section>
<canvas id='canvas'></canvas>
</body>
<!--  ////// end canvas ///////  -->

</html>