<?php
session_start();
 include('../modeles/enteteAdmin.php'); ?>
 <table width="1350" border="0" cellpadding="100" cellspacing="10"  bgcolor="#ABAD68">
  <tr >
    <td height="350" valign="top">
<!--div class="row">
  <div class="col-xs-offset-2 col-xs-8">
      <h3>Ajout Fournisseur</h3>
      </div>
    </div-->
    <div class="row">
      <div class="col-xs-2">
      

    <?php
   include('../scripts/connexionDB.php');
    $retour=connexion();
//$c=$retour[0];
$link=$retour[0];
   
   include('../modeles/bar_menu.php'); 
    bar_fournisseur(2);
    echo ' </div> 

    <div class="col-xs-8 ">';   ?> 
  
  
 
      <form name="form1" method="post" action="enregistrer_fournisseur.php" class="well1" onSubmit="return verification()">
        
        <p>
           <div class="row">
            <div class="col-xs-1">
               <img src="../images/ajoutFour.PNG" class="img-circle" width="100" heigth="100">
            </div>
            <div class="col-xs-offset-1 col-xs-10">
            <legend><h1>Ajout d'un Fournisseur<h1></legend>
          </div>
           </div>
            
    <fieldset>
      <div class="row">
    <div class="form-group">
      <label for="texte" class="col-xs-2">Raison Sociale / Nom</label>
      <div class="col-xs-4">
      <input pattern=".{3,30}" required title="La raison sociale contient minimum 3 caractères et maximum 30 caractères." name="RAISSOCF" id="texte" class="form-control" maxlength="30">
      </div>
      <label for="texte" class="col-xs-2">Tél.</label>
      <div class="col-xs-4">
      <input pattern=".{10,10}" required title="Le numéro de téléphone contient 10 numéros" name="TEL_F" id="texte" class="form-control " maxlength="10">
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">

      <label for="texte" class="col-xs-2">E-mail</label>
      <div class="col-xs-4">
      <input type="email"  name="EMAIL_F" id="texte" class="form-control " >
      </div>

      <label for="texte" class="col-xs-2">Fax.</label>
      <div class="col-xs-4">
      <input pattern=".{10,10}" required title="Le Fax contient 10 numéros" name="FAX_F" id="texte" class="form-control " maxlength="10">
      </div>
     </div>
    </div>
        <div class="row">
       <div class="form-group">
        <label for="textarea" class="col-xs-2">Adresse</label>
      <div class="col-xs-6">
      <textarea  id="textarea" name="ADRESSE_F" class="form-control" cols="50" rows="4" maxlength="100" ></textarea>
      </div>

      
    </div>
    </div>

<div class="row">
           
            <div class="col-xs-1é">
            <legend></legend>
          </div>
           </div>

    <div class="form-group">
      <div class="col-xs-2">
       <input type="reset" name="Submit" value="Réinitialiser" class=" pull-right btn btn-primary">
    </div>
      <input type="submit" name="Submit" value="Ajouter" class=" pull-right btn btn-primary">
    </div>
    </fieldset>
        
        </p>
        <script language="javascript" type="text/javascript">
                            function verification()
                            {
                             
                                if(document.forms["form1"].elements["EMAIL_F"].value=="")
                                {
                                  alert("Vous avez laissez le champs de l'e-mail vide");
                                  return false;

                                }
                                if(document.forms["form1"].elements["ADRESSE_F"].value=="")
                                {
                                  alert("Vous avez laissez le champs de l'Adresse vide");
                                  return false;

                                }
                                else 
                                {
                                  return true;
                                }
                            }
                          </script>
      </form>
       </div>
     </div>

      
   
  




 </td>

  </tr>

  

</table>
<?php 
include('../modeles/deconnexion.php');
include('../modeles/pied.php'); ?>