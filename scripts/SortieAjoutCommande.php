<?php
session_start();
 include('../modeles/enteteAdmin.php'); ?>
    <div class="row">
      <div class="col-xs-3">
      

    <?php
  include('../scripts/connexionDB.php');
    $retour=connexion();
//$c=$retour[0];
$link=$retour[0];
  
    include('../modeles/bar_menu.php'); 
    bar_sortie(1);
    echo ' </div> 

    <div class="col-xs-9 well3 ">'; 
    
    $sqlquery="select ID_C, RAISSO_C FROM CLIENT";
    $result=mysqli_query($link,$sqlquery);
    
    $an=date('Y');
    $req="SELECT COUNT(*) AS total FROM commande where YEAR(DATE_CO)='$an'";
    $res = mysqli_query($link,$req) OR die(mysql_error());
    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $total = $row['total']+1;
    
      ?> 
  
  
 
      <form name="form1" method="post" action="SortieAjoutCommande1.php" >
           <div class="row">
            <div class="col-xs-1">
              <img src="../images/SortieAjout.PNG" width="100" heigth="100" class="img-circle">
            </div>
            <div class="col-xs-offset-1 col-xs-10">
            <legend><h1>Ajout d'une Commande<h1></legend>
          </div>
           </div>
            
    <fieldset>
      <div class="row">
       <div class="form-group">
       	<!--<label for="texte" class="col-xs-5">Num de la Commande</label>
      <div class="col-xs-7">
      	 <input  pattern=".{3,30}" required  class="form-control" name="NUM_CO" maxlength="30" value="<?php echo $total.'/'.$an ?>">
      
      </div>-->
       	<label for="texte" class="col-xs-5">Réference de la Commande</label>
      <div class="col-xs-7">
      	 <input  pattern=".{1,30}" required title="La référence contient minimum 1 caractères et maximum 30 caractères." class="form-control" name="REF_CO" maxlength="30">
      
      </div>
          <label for="select" class="col-xs-5">Le Client </label>
          <div class="col-xs-7">
          <select id="select" name="ID_C" class="form-control ">
          <?php
          while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
          {
            echo '<option value="'.$row['ID_C'].'"> '.$row['ID_C'].'  - '.$row['RAISSO_C'].'</option>';
          }
          ?>
         
        
      </select>
      </div>
    </div>
  </div>
  <div class="row">
   <div class="form-group">
       	<label for="texte" class="col-xs-5">Date de la Commande</label>
      <div class="col-xs-7">
      	<?php
              echo' <input type="date" name="DATE_CO" id="texte" class="form-control " min="'.date('Y').'-'.date('m').'-'.date('d').'" value="'.date('Y').'-'.date('m').'-'.date('d').'">';
        ?>
      </div>
     </div>
    </div>
  </fieldset>
  <div class="row">
    <div class="form-group">
      <div class="col-xs-offset-10 col-xs-2">
          <button type="submit" name="Submit" value="Valider" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
      </form>
       </div>
     </div>
<?php 
include('../modeles/pied.php'); ?>