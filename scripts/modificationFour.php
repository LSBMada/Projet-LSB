<?php
session_start();
 include('../modeles/enteteAdmin.php'); ?>
 <table width="1350" border="0" cellpadding="100" cellspacing="10"  bgcolor="#ABAD68">
  <tr >
    <td height="350" valign="top">
<!--div class="row">
  <div class="col-xs-offset-2 col-xs-8">
      <h3>Système de gestion des stages</h3>
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
    bar_fournisseur(4);
    echo ' </div> 

    <div class="col-xs-8  ">'; 
    
    $sqlquery="select ID_F, RAISSOCF FROM FOURNISSEUR";
    $result=mysqli_query($link,$sqlquery);
      ?> 
  
  
 
      <form name="form1" method="post" action="modificationFour1.php" class="well1">
        
        <p>
           <div class="row">
            <div class="col-xs-1">
               <img src="../images/modifFour.PNG" class="img-circle" width="100" heigth="100">
            </div>
            <div class="col-xs-offset-1 col-xs-10">
            <legend><h1>Modification d'un Fournisseur<h1></legend>
          </div>
           </div>
            
    <fieldset>
      <div class="row">
       <div class="form-group">
          <label for="select" class="col-xs-4">Le fournisseur à modifier</label>
          <div class="col-xs-8">
          <select id="select" name="modifour" class="form-control ">
          <?php
          while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
          {
            echo '<option value="'.$row['ID_F'].'"> '.$row['ID_F'].'  - '.$row['RAISSOCF'].'</option>';
          }
          ?>
         
        
      </select>
      </div>
    </div>
  </div>
      <input type="submit" name="Submit" value="Suivant" class=" pull-right btn btn-primary">
    </div>
    </fieldset>
        
        </p>
      </form>
       </div>
     </div>

    
 </td>

  </tr>

</table>
<?php 
include('../modeles/deconnexion.php');
include('../modeles/pied.php'); ?>