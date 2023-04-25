<html>
 <head>
 <meta charset="utf-8">

 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="base.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="bloc">

 <!-- zone de connexion -->
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" nom="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" nom="password" required>

 <input type="submit" id='submit' value='VALIDATION' >

 <?php

 include ('connexion.php');
 if(isset($_POST['submit']))

    {// RECUPERATION DES VARIABLES + CONTROLER LA QUALITER DES VARIABLES DEPUIS LE FORMULAIRE
    if(!empty($_POST['prenom']) AND !empty($_POST['password']))
        {
            $erreur=$_GET['error']??NULL;
        if ($erreur=='error'){echo 'haha';}
        $identifiant = htmlspecialchars($_POST['prenom']);
        $password = sha1($_POST['password'].SALT);
        $classe=$_POST['user'];

        $select = mysqli_query($conn, "SELECT `id_user`, `id_bassin`, `nom`, `prenom`, `password`, `email`, `numero`, `adresse`, `groups` 
        FROM `user` 
        WHERE prenom=$identifiant AND password=$password");
    }
    }

    require('connexion.php');
    session_start();
    if (isset($_POST['user'])){

      $username = stripslashes($_REQUEST['user']);
      $username = mysqli_real_escape_string($conn, $username);
      $password = stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($conn, $password);
      
      
      if($rows==1){
          $_SESSION['user'] = $user;
          header("Location: index.php");
      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    }
    
?>
    
</form>
</div>
</body>
</html> 