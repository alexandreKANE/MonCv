<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Site de poèmes</title>
  <link rel="stylesheet" media="screen" type="text/css" title="Design" href="../../resources/design.css" />  <!-- Le design du site  -->

</head>
<body>

   <div id="bs-example-navbar-collapse-1"> <!-- La sidebar contient les liens vers les différents poèmes -->
        <p>
          <a href="/home/kanelito/Bureau/Exos/Intégration1.html">Integration1</a> <br />b
          <a href="index.php?poeme=2">Titre poème 2</a> <br />
          <a href="index.php?poeme=3">Titre poème 3</a> <br />
        </p>


   </div>

<!-- Fin de la sidebar -->

   <div id="contenu" >

        <?php
   switch($_GET['poeme']) /* On affiche le contenu du poème, et son titre */
   {
            case 1:
            echo "<strong>Poème 1:</strong><br /><br />";
                        echo "Contenu poème 1<br /><br />";
                        break;

            case 2:
            echo "<strong>Poème 2:</strong><br /><br />";
                        echo "Contenu poème 2.<br /><br />";
            break;

            case 3:
            echo "<strong>Poème 3:</strong><br /><br />";
                        echo "Contenu poème 3<br /><br />";
            break;
   }
   ?>
        <br/><br/>

   </div>

</body>
</html>
