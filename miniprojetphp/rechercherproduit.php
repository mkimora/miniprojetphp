
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="acceuil.css" media="screen" type="text/css" />
  <title>Rechercher</title>
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
<?php
           $listep=array(
            array('geldouche',800,4000),
            array('fonddeteint',800,32000),
            array('parfum',800,4000),
            array('palettedeàpaupière',800,17500),
            array('poudre',800,25000),
            array('gloss',500,15000),
            array('pinceaux',1000,15000),
            array('huilepourcheuveux',900,1000),
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
    <h1>Formulaire de recherche de produits</h1>
    <form action="" method="POST">
    <table>
                 <tr>
                      <td>
                         <label > QUANTITE</label>
                      </td>
                      <td>
                         <input type="number" name="qte" min=1 >
                      </td>
                 </tr>
                 <tr>
                   <td>
                        <label > Prix minimal</label>
                   </td>
                   <td>
                        <input type="number" name="prixmin"   min=100>
                   </td>
                </tr>  
                <tr>
                   <td>
                        <label > Prix maximal</label>
                   </td>
                   <td>
                      <input type="number" name="prixmax"   min=100>
                   </td>
                </tr>
                <tr>
                  <td>
                   <input type="submit" name="recherche" value="Rechercher">
                   </td>
                </tr>
 </table>   
 <?php
   
  
             
      if(isset($_POST['recherche']))
     
      {
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
            if($_POST['qte']<=$listep[$ligne][1] && $_POST['prixmin']==0 && $_POST['prixmax']==0 )
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
            }else
            if( $_POST['qte']=$listep[$ligne][1] && $_POST['prixmin']<=$listep[$ligne][2] && $_POST['prixmax']>=$listep[$ligne][2])
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
            }else
            if($_POST['qte']==0 && $_POST['prixmin']<=$listep[$ligne][2] && $_POST['prixmax']>=$listep[$ligne][2])
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
        }
      }
      echo "</table>";
     
 ?>            
</body>
</html>