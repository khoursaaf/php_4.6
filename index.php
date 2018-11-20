<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
    <?php
    function sentence($nom, $prenom, $age)
    {
      if (is_string($nom) && is_string($prenom) && is_int($age)) {
        echo "Bonjour"." ".$nom." ".$prenom.", tu as"." ".$age." "."ans.";
      } else {
        echo "Vérifier information!";
      }

    }
    $nom = "Gold";
    $prenom = "Silver";
    $age = 4;
    ?>
    <p><?php echo sentence($nom, $prenom, $age); ?></p>
  </body>
</html>
