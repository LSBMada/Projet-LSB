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
    bar_sortie();
if (isset($_POST['Submit'])){
//print_r($_POST);
    //how many ids came through in the $_POST array?
   	$id_count = count($_POST['ID_CO_LIGNE']);
	$LIGNES=$_POST['ID_CO_LIGNE'];
	$QTES= $_POST['QTE_CO'];
        
    for($i=0;$i<$id_count;$i++){ 
       $rabot=$_POST['rabot'.$i];
       
         $sec=$_POST['sec'.$i];
         
        	$sql = "UPDATE contenir_co SET QTE_CO=$QTES[$i], RABOT=$rabot, SEC=$sec WHERE ID_CO_LIGNE=$LIGNES[$i]";
          
          //}
  	 $result=mysqli_query($link,$sql)  or die(panel('panel-danger','Erreur de Mise à jour ','<p> <img src="../images/ERREUR.gif"><strong>Echec de la Mise à jour</strong></p>'));
         
        }
  
    ?>
     </div> 
   <div class="col-xs-9 well3">
   <?php
     panel('panel-success','Mise à jour  réussie','<p> <img src="../images/ok.PNG">Les lignes de commande ont bien été mise à jour.</p>');
}
?>
</div>
</div>