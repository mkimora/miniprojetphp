<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="acceuil.css" media="screen" type="text/css" />
    <title>Modifier</title>
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
            array('gel  douche',800,4000),
            array('fond de teint',800,32000),
            array('parfum',800,4000),
            array('palette de phare à paupière',800,17500),
            array('poudre',800,25000),
            array('rouge à lèvre',500,15000),
            array('pinceaux',1000,15000),
            array('huile pour cheveux',900,1000),
            array('savon gommant',7,500),
            array('lait de coprs',6,4000),
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
    <h1>Formulaire de modification de produits</h1>
    <form action="" method="POST">
    <table>
                 <tr>
                      <td>
                         <label > NOM</label>
                      </td>
                      <td>
                         <input type="text" name="nom"  required>
                      </td>
                 </tr>
                 <tr>
                   <td>
                        <label > Quantité</label>
                   </td>
                   <td>
                        <input type="number" name="qte"  required min=1>
                   </td>
                </tr>  
                <tr>
                   <td>
                        <label > Prix unitaire</label>
                   </td>
                   <td>
                      <input type="number" name="pu"  required min=100>
                   </td>
                </tr>
                <tr>
                  <td>
                   <input type="submit" name="modif" value="Modifier">
                   </td>
                </tr>
 </table>               
</form>
<?php
        if(isset($_POST['modif']))
        {
            $trouve=false;
                for($ligne=0; $ligne<count($listep); $ligne++)
                {
                    if(strcasecmp($_POST['nom'],$listep[$ligne][0])==0)
                    {
                        $trouve=true;
                        $listep[$ligne][1]=$_POST['qte'];
                        $listep[$ligne][2]=$_POST['pu'];
                    }
                    
                }
            if($trouve==true)
            {
                echo "<h1>Liste des produits modifiés</h1>";
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
            }
            else
            {
                
                    echo "<font color='red'><h3>Ce produit n'existe pas!!!!!!!</h3></font><br>";
               
            }
        }
        
?>
</body>
</html>