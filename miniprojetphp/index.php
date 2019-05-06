
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="index.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            <?php 
           $users = array(
           1 => array('nom' => 'Fatou', 'login' => 'toufa', 'password' => '123'),
           2 => array('nom' => 'Maman', 'login' => 'kimora', 'password' => '132'),
           3 => array('nom' => 'Khady', 'login' => 'Blanca', 'password' => '321')
           );
           ?>       
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='connexion' >
            </form>
                <!--?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?-->
                <?php
                       if(isset($_POST['username']) && isset($_POST['password']))
                       {
                           $n=count($users);
                           
                           $use='false';
                           for($i=0; $i<=$n; $i++)
                           {
                            $ligne=$users[$i];
                                foreach ($ligne as $key => $value)
                                 {
                                   
                                    if($key=='login')
                                    {
                                        if($_POST['username']==$value)
                                        {
                                            $use='true';
                                           
                                        }
                                    }
                                    if($key=='password' && $use=='true')
                                    {
                                        
                                        if($_POST['password']==$value)
                                        {
                                            header('Location: acceuil.php');
                                        }

                                    }
                                   
                                }
                           }
                       }
                  ?>
            </div>
            <li><a href="acceuil.php"></a> </li>
        </body>
    </html>