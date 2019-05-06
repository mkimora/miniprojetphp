<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="acceuil.css" media="screen" type="text/css" />
    <title>Ajouter produit</title>
    
</head>
<body>
<img src="makeuprevolution.png" alt="makeuprevolution.png" width="1382" height="150" >
<h1>Bienvenue dans le site officiel de Fatou et Kimora Cosmetics!</h1>
<nav>
            <label for="menu-mobile" class="menu-mobile">Menu</label>
            <input type="checkbox" id="menu-mobile" role="button">
            <ul>
                <li class="menu1"><a href="listeproduit.php"><h1>Liste des Produits</h1></a>

                </li>

                <li class="menu2"><a href="rechercherproduit.php"><h1>Rechercher Produits</h1></a>
                
                </li>
                <li class="menu3"><a href="ajoutproduit.php"><h1>Ajouter Produit</h1></a>
                   
                   </li>

                <li class="menu4"><a href="modifierproduit.php"><h1>Modifier Produit</h1></a>
                   
                </li>

                <li class="menu5"><a href="supprimproduit.php"><h1>Supprimer Produit</h1></a>
                    <ul class="submenu">
                        <li><a href="plus"></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
<div id="container">
    <?php
     $listep=array(
        array('geldouche',800,4000),
        array('fonddeteint',800,32000),
        array('parfum',800,4000),
        array('palettedephareàpaupière',800,17500),
        array('poudre',800,25000),
        array('gloss',500,15000),
        array('pinceaux',1000,15000),
        array('huilepourcheveux',900,1000),
        array('savon',7,500),
        array('laitdecorps',6,4000),
        array('shampoing',800,2500),
        
        );
        echo "<h1>Liste des produits</h1>";
            echo "
                     <table class='tableau_produit'>
                              <tr>
                                     <td>  Nom  </td>  
                                     <td>  Quantité  </td> 
                                     <td>   Prix unitaire </td> 
                                     <td>  Montant</td> 
                              </tr>
                 ";  
                              
                              for($ligne=0; $ligne<count($listep); $ligne++)
                              {
                                if($listep[$ligne][1]<10)
                                {
                                  echo '
                                  <tr>
                                       <td class="roug">'.$listep[$ligne][0].'</td>
                                       <td class="roug">'.$listep[$ligne][1].'</td>
                                       <td class="roug">'.$listep[$ligne][2].'</td>
                                       <td class="roug">'.$listep[$ligne][2]*$listep[$ligne][1].'</td>
                                  </tr>
                              ';
                                }else
                                {
                                  echo '
                                  <tr>
                                       <td>'.$listep[$ligne][0].'</td>
                                       <td>'.$listep[$ligne][1].'</td>
                                       <td>'.$listep[$ligne][2].'</td>
                                       <td>'.$listep[$ligne][2]*$listep[$ligne][1].'</td>
                                  </tr>
                              '; 
                                }
                              }

                              echo "
                     </table> ";
    ?>
<form action="" method="POST">
<h1>Ajouter produit</h1>
 <table> 
     <tr>   
         <td>         
<label><b>NOM</b></label>
</td>
<td>
<input type="text" placeholder="Entrer le nom du produit à rechercher" name="nomprod" required>
</td>
</tr> 
<tr>
    <td>
<label><b>Quantite</b></label> 
</td>
<td>
<input type="number" placeholder="Entrer la quantité du produit" name="qte" required> 
</td>
</tr>
<tr>
    <td>
<label><b>Prix</b></label> 
</td>
<td>
<input type="number" placeholder="Entrer le prix du produit" name="prix" required>
</td> 
</tr>
<tr>
    <td>
<input type="submit" id='submit' value='Ajouter'name="ajout" >
</td>

</tr>
</table> 
</form>
<?php
  
           $nomprod=$_POST['nomprod'];
$qte=$_POST['qte'];
$prix=$_POST['prix'];
$montant= $qte*$prix;
if($nom!=""|| $qte!=""||$prix!="")
{
    //$listep[]=array($nomprod,$qte,$prix,$montant);
    array_push($listep,array($nomprod,$qte,$prix,$montant));
}
?>
<?php
if(isset($_POST['ajout']))
{
    echo '<table class="tableau_produit">
          <tr>
             <th>Nom</th>
             <th>Quantité</th>
             <th>prix unitaire</th>
             <th>Montant</th>
          </tr>               
         

'; 
        for($i=0; $i<count($listep); $i++)
        {
            if($listep[$i][1]<10)
            {
               
                echo "  <tr>

                              <td class='roug'>".$listep[$i][0]."</td>
                              <td class='roug'>".$listep[$i][1]." </td>
                              <td class='roug'>".$listep[$i][2]."</td>
                              <td class='roug'>".$listep[$i][2]*$listep[$i][1]."</td>
                        </tr>
                "; 
            } else
            {
                echo "  <tr>
                <td>".$listep[$i][0]."</td>
                <td>".$listep[$i][1]." </td>
                <td>".$listep[$i][2]."</td>
                <td>".$listep[$i][2]*$listep[$i][1]."</td>
          </tr>
  "; 
            }       
           
        }
}
 
      
?>

</div>
</body>
</html>