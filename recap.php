<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RECUP</title> <!-- titre de la page -->
</head>

<body>




       <?php
        /**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 8/9/18
 * Time: 10:36 AM
 */


        if (isset($_POST['send'])){ //quand la commender est lanceé


             echo "<strong><u><p align='center'>RECAP DE VOTRE COMMANDE:</p> </u></strong><br><br>";
             $fname = $_POST['nom'];
             $lname = $_POST['prenom'];

             echo "👋🏿 Hey! {$fname}, {$lname}<br>Trouvez ci-dessous le recup de votre commande!";
            }

        //recuperation des name de la form
       $nbrSand = $_POST['nbrSand'];
       $addresse = $_POST['addresse'];
       $viandeType = $_POST['viandeType'];
       $ingredient = $_POST['ingredient'];

         ?>

<!-- La list du recap -->

<ul>
    <li>
        <?php echo "{$nbrSand}";?>
        Sandwitch(s)
    </li>

    <li>
        A l'Addresse: <?php echo "{$addresse}";?>
    </li>

    <li>
        Le(s) sandwitch(s) est/sont avec du/de : <?php echo "{$viandeType}";?>
    </li>
    <?php

    if($_POST['ingredient'] !== null){ ?> <!--when none of the ingrediants is selected, this list won't appear amound the lists -->
    <li>

            Avec les ingredients:
        <ul>


            <?php foreach ($_POST['ingredient'] as $n): ?> <!-- la sous liste pour les ingredients -->
            <li><?php echo $n;  ?></li>
            <?php endforeach; ?>

        </ul>
        <?php } ?>
    </li>

</ul>

       <?php
       if ($nbrSand >=10){
           $addition  = ($nbrSand * 4) - (10*($nbrSand * 4)/100). " dt". " <i>(vous beneficiez d'une remise de 10%)</i>"; //calcul des 10$ de remise
       }else{
           $addition  = $nbrSand * 4;

       }

       ?>
       <p style="font-weight: bold; background: dodgerblue; color: white; width: 500px; height: 20px; font-size: 18px">
           Votre addition est:
           <?php echo $addition?>
       </p>

       <br>

<strong>Note: </strong>Les sandwitch(s) seront prêt(s) dans: <strong>5mn</strong>
</body>
</html>//html closing 



