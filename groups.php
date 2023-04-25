<?php

include("connexion.php");
$sql = 'SELECT `id_groups`,`activite`,`commentaire` FROM `groups`';

//echo $sql;
$resultat = mysqli_query($bdd, $sql);


// var_dump($resultat);
// die();

?>
<html>
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" media="all">
<meta name="author" content="Stephane Brunet" />
<link rel="icon" type="image/svg+xml" href="php.svg">
<title></title>
</head>
<body>
<header>
    <div><h1></h1></div>
    <nav>
      
        <a href="index.php">ACCEUIL</a>
        <a href="index.php">CLUB</a>
        <a href="index.php">SCOLAIRE</a>
        <a href="index.php">PUBLIC</a>
        <a href="connexion.php">DECONNEXION</a>
    </nav>

</header>
<article>

<?php

while($donnees = mysqli_fetch_assoc($resultat))
{
  echo $donnees['id_groups'].' '.$donnees['activite'].' 
  <a href="6-modif-film.php?id='.$donnees['id_groups'].'">
  Modif</a><br />'."\n";
}
mysqli_free_result($resultat);

?>
</article>
</body>
 </html>
