<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet"> 
    <title>php</title>
</head>
<body>
<div class="container">
<header>
<div class="row">
<div class="col-12">
<nav class="navbar navbar-expand-lg bg-dark ">
<a class="navbar-brand" href="#">Introduction a PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#var">Les variables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#con">Les conditions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les boucles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les tableaux</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les dates</a>
      </li>
    </ul>
    </div>
</nav>
</div>
</div>
</header>
    <main>

        
        <!-- VARIABLE -->
        <section class="variable" id="var">

            <!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
            <!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
            <!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->

            <!-- <a href="https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html" target="_blank"><h2>PHP - Les variables</h2></a> -->
            <div class="row">
            <div class="col-12 text-center mt-3">
            <h1>LES VARIABLES</h1>
            </div>
            </div>
            <div class="row">
            <div class="col-12 space">

            <h4 class="text-center">Exercice 1</h4>
            <p class="text-center">Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
             $nom = "Dinara"<br>
             echo $nom;
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                $nom = "Dinara";
                echo $nom;
            ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>j'ai crée une variable en utilisant le signe $. J'ai utilisé la function "echo" pour l'afficher. Il ne faut pas oublier le point-virgule après chaque ligne!!! </p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 2</h4>
            <p class="text-center"> Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix.
             Attention age est de type entier. Afficher leur contenu.</p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
            
                $nom = "Toto"; <br>
                $prenom = "Plop";<br>
                $age = 18;<br>
                echo $nom; <br>
                echo $prenom;<br>
                echo $age;<br>
            
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                $nom = "Toto";
                $prenom = "Plop";
                $age = 18;
                echo $nom; 
                echo "<br/>";
                echo $prenom;
                echo "<br/>";
                echo $age;
            ?>  
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>La valeur de la variable de type entier est toujours un chiffre entier et non épelé avec le guillemet.</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 3</h4>
            <p class="text-center">  Créer une variable km. L'initialiser à 1. Afficher son contenu.
            Changer sa valeur par 3. Afficher son contenu.
             </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
                $km = "1";<br>
                echo $km;<br>
                $km = "3";<br>
                echo $km; <br>
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php

                $km = "1";
                echo $km;
                echo "<br/>";
                $km = "3";
                echo $km;

                ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>Pour changer la valeur d'une variable on peux l'initialiser à un  autre valeur.</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 4</h4>
            <p class="text-center">   Créer une variable de type string, une variable de type int, une variable de type float,
             une variable de type booléan et les initialiser avec une valeur de votre choix. 
            Les afficher.
            </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
               

                $number = 1;<br>
                $string = "blabla";<br>
                $bool = true;<br>
                $fnumber = "1.5";<br>
                echo $number;<br>
                settype($number, "integer");<br>
                echo $string;<br>
                settype($string, "string");<br>
                settype($bool, "boolean");<br>
                echo $bool;<br>
                echo $fnumber;<br>
                settype($fnumber, "float");<br>
 
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php

                $number = 1;
                $string = "blabla";
                $bool = true;
                $fnumber = "1.5";
                echo $number;
                settype($number, "integer");
                echo "<br/>";
                echo $string;
                settype($string, "string");
                echo "<br/>";
                settype($bool, "boolean");
                echo $bool;
                echo "<br/>";
                echo $fnumber;
                settype($fnumber, "float");

?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>
                Int est toujours un nombre entier. Float est un nombre décimal. Une variable de type float peut etre soit true soit false. String est tous qui 
                épelé avec le guillemet.
            </p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 5</h4>
            <p class="text-center">
                 Créer une variable de type float. L'initialiser à 1. Afficher son type.
            Changer sa valeur par 4.8 et afficher son contenu.

            </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
                $fnumber = 1;<br>
                settype($fnumber, "float");<br>
                var_dump($fnumber);<br>
                $fnumber = 4.8;<br>
                echo $fnumber; <br>
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                $fnumber = 1;
                settype($fnumber, "float");
                var_dump($fnumber);
                echo "<br/>";
                $fnumber = 4.8;
                echo $fnumber;
            ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>
            Pour changer le type de la variable on utilise la function "settype()". Et pour afficher son type la function "var_dump()".
            </p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 6</h4>
            <p class="text-center">
              Créer une variable nom et l'initialiser avec la valeur de votre choix.
            Afficher : "Bonjour" + nom + ", comment vas tu ?".
            </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
            $nom = "Dinara";<br>
            echo  "Bonjour " . $nom . " comment vas tu?";
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                    $nom = "Dinara";
                    echo  "Bonjour " . $nom . " comment vas tu?";
                ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>Pour ajouter la variable dans une phrase il faut la concatener avec 2 points.</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 7</h4>
            <p class="text-center">

                Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
                    Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".
            </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
                    $nom = "Toto";<br>
                    $prenom = "Plop";<br>
                    $age = 22;<br>
                    echo "Bonjour " . $nom . " " . $prenom . ",tu as " . $age . " ans." ;   
             </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                    $nom = "Toto";
                    $prenom = "Plop";
                    $age = 22;
                    echo "Bonjour " . $nom . " " . $prenom . ",tu as " . $age . " ans." ;
                ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>Pour ajouter la variable dans une phrase il faut la concatener avec 2 points.</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12">

            <h4 class="text-center">Exercice 8</h4>
            <p class="text-center">
                 Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.
            
            </p>
            <div class="row myborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
                $a = 3+4;<br>
                $b = 5*20;<br>
                $c = 45/5;<br>
                echo $a;<br>
                echo $b;<br>
                echo $c;<br>
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                $a = 3+4;
                $b = 5*20;
                $c = 45/5;
                echo $a;
                echo "<br/>";
                echo $b;
                echo "<br/>";
                echo $c;
                echo "<br/>";
            ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>
                La function "echo" en PHP fait le calcul automatique.
            </p>
            </div>
            </div>
        </div>
    </div>
            <?php
                // $nom = "Dinara";
                // echo $nom;
            ?>
            <!-- <h4>Exercice 2</h4> -->
            <!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. -->
            <!-- Attention age est de type entier. Afficher leur contenu. -->

            <?php
                // $nom = "Toto";
                // $prenom = "Plop";
                // $age = 18;
                // echo $nom; 
                // echo "<br/>";
                // echo $prenom;
                // echo "<br/>";
                // echo $age;
            ?>

            <!-- <h4>Exercice 3</h4> -->
            <!-- Créer une variable km. L'initialiser à 1. Afficher son contenu. -->
            <!-- Changer sa valeur par 3. Afficher son contenu. -->
            <!-- Changer sa valeur par 125. Afficher son contenu. -->

            <?php

                // $km = "1";
                // echo $km;
                // echo "<br/>";
                // $km = "3";
                // echo $km;

            ?>
         
            <!-- <h4>Exercice 4</h4> -->
            <!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. -->
            <!-- Les afficher. -->

            <?php

                // $number = 1;
                // $string = "blabla";
                // $bool = true;
                // $fnumber = "1.5";
                // echo $number;
                // settype($number, "integer");
                // echo "<br/>";
                // echo $string;
                // settype($string, "string");
                // echo "<br/>";
                // settype($bool, "boolean");
                // echo $bool;
                // echo "<br/>";
                // echo $fnumber;
                // settype($fnumber, "float");

            ?>

            <!-- <h4>Exercice 5</h4> -->
            <!-- Créer une variable de type float. L'initialiser à 1. Afficher son type. -->
            <!-- Changer sa valeur par 4.8 et afficher son contenu. -->

            <?php
                // $fnumber = 1;
                // settype($fnumber, "float");
                // var_dump($fnumber);
                // echo "<br/>";
                // $fnumber = 4.8;
                // echo $fnumber;
            ?>
         
            <!-- <h4>Exercice 6</h4> -->
            <!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. -->
            <!-- Afficher : "Bonjour" + nom + ", comment vas tu ?". -->

                <?php
                    // $nom = "Dinara";
                    // echo  "Bonjour " . $nom . " comment vas tu?";
                ?>
        
            <!-- <h4>Exercice 7</h4> -->
            <!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. -->
            <!-- Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->

             <?php
                    // $nom = "Toto";
                    // $prenom = "Plop";
                    // $age = 22;
                    // echo "Bonjour " . $nom . " " . $prenom . ",tu as " . $age . " ans." ;
                ?>
          
            <!-- <h4>Exercice 8</h4> -->
            <!-- Créer 3 variables. -->
            <!-- Dans la première mettre le résultat de l'opération 3 + 4. -->
            <!-- Dans la deuxième mettre le résultat de l'opération 5 * 20. -->
            <!-- Dans la troisième mettre le résultat de l'opération 45 / 5. -->
            <!-- Afficher le contenu des variables. -->
            
            <?php
                // $a = 3+4;
                // $b = 5*20;
                // $c = 45/5;
                // echo $a;
                // echo "<br/>";
                // echo $b;
                // echo "<br/>";
                // echo $c;
                // echo "<br/>";
            ?>
        
        </section><!-- /variable -->

        <!-- CONDITION -->
        <section class="condition" id="con">
        <div class="row">
        <div class="col-12 text-center">
        <h1> LES CONDITIONS</h1>
        </div>
        </div>
        <div class="row">
            <div class="col-12 space">

            <h4 class="text-center">Exercice 1</h4>
            <p class="text-center">
                 Les conditions ##Exercice 1 Créer une variable age et l'initialiser avec une valeur.
            Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
            
            </p>
            <div class="row myconborder">
            <div class="col-6">
            <h3>CODE</h3>
            <p>
            $age = 5;<br>
                if ($age >= 18) {<br>
                    echo "Vous êtes majeur";<br>
                }<br>

                else{<br>
                    echo "Vous êtes mineur";<br>
                }<br>
            </p>
            <h3>RESULTAT</h3>
            <p>
            <?php
                $age = 5;
                if ($age >= 18) {
                    echo "Vous êtes majeur";
                }

                else{
                    echo "Vous êtes mineur";
                }
            ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>J'ai comparé la variable "$age" avec le nombre donné dans mes conditions. Et selon la condition j'ai affiché le resultat correspondent </p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12 space">

            <h4 class="text-center">Exercice 2</h4>
            <p class="text-center">
                  Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
            Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
            
            </p>
            <div class="row myconborder">
            <div class="col-6">
            <h3>CODE</h3>
<pre>
$IsEasy = true;
if ($IsEasy){
echo " C'est facile!!";
}

else {
echo " C'est difficile !!!";
}
</pre>
            <h3>RESULTAT</h3>
            <p>
            <?php
$IsEasy = true;
if ($IsEasy){
    echo " C'est facile!!";
}

else {
    echo " C'est difficile !!!";
}
                    
                ?>
            </p>
            </div>
            <div class="col-6">
            <h3>COMMENT FAIRE</h3>
            <p>Car j'ai initialisé la variable IsEasy à true je n'ai pas besoin de le preciser dans mes conditions </p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-12 space">

    <h4 class="text-center">Exercice 3</h4>
    <p class="text-center">
             Créer deux variables age et genre. La variable genre peut prendre comme valeur :<br>
                Homme<br>
                Femme<br>

            En fonction de l'âge et du genre afficher la phrase correspondante :<br>

                Vous êtes un homme et vous êtes majeur<br>
                Vous êtes un homme et vous êtes mineur<br>
                Vous êtes une femme et vous êtes majeur<br>
                Vous êtes une femme et vous êtes mineur

            <!-- Gérer tous les cas. -->
    </p>
    <div class="row myconborder">
    <div class="col-6">
    <h3>CODE</h3>
    <pre>
    $age = 18;
    $genre = "femme";
    if ($age >= 18 & $genre == "femme"){
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 & $genre == "femme"){
        echo "Vous êtes une femme et vous êtes mineur";
    }
    elseif ($age < 18 & $genre == "homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    }

    else {
        echo "Vous êtes un homme et vous êtes majeur"; 
    }
    </pre>
<h3>RESULTAT</h3>
<p>
<?php
    $age = 18;
    $genre = "femme";
    if ($age >= 18 & $genre == "femme"){
        echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 & $genre == "femme"){
        echo "Vous êtes une femme et vous êtes mineur";
    }
    elseif ($age < 18 & $genre == "homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    }

    else {
        echo "Vous êtes un homme et vous êtes majeur"; 
    }
?>
    </p>
    </div>
    <div class="col-6">
    <h3>COMMENT FAIRE</h3>
    <p>J'ai fais plusieurs conditions en comparent la variable "$age" avec 18 et la variable "$genre" avec la valeur "femme" et "homme"</p>
    </div>
    </div>
</div>
</div>
            <!-- <a href="https://apprendre-php.com/tutoriels/tutoriel-9-les-structures-de-contrle-les-conditions.html" target="_blank"><h2>PHP - Les conditions</h2></a> -->

            <!-- <h4>Exercice 1</h4> -->
            <!-- Les conditions ##Exercice 1 Créer une variable age et l'initialiser avec une valeur. -->
            <!-- Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->
            
            
            <?php
                // $age = 5;
                // if ($age >= 18) {
                //     echo "Vous êtes majeur";
                // }

                // else{
                //     echo "Vous êtes mineur";
                // }
            ?>
         
            <!-- <h4>Exercice 2</h4> -->
            <!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur. -->
            <!-- Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. -->
                
                <?php
                    // $IsEasy = true;
                    // if ($IsEasy){
                    //     echo " C'est facile!!";
                    // }

                    // else {
                    //     echo " C'est difficile !!!";
                    // }
                    
                ?>

         
            <!-- <h4>Exercice 3</h4> -->
            <!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur : -->

                <!-- Homme -->
                <!-- Femme -->

            <!-- En fonction de l'âge et du genre afficher la phrase correspondante : -->

                <!-- Vous êtes un homme et vous êtes majeur -->
                <!-- Vous êtes un homme et vous êtes mineur -->
                <!-- Vous êtes une femme et vous êtes majeur -->
                <!-- Vous êtes une femme et vous êtes mineur -->

            <!-- Gérer tous les cas. -->

                <?php
                    $age = 18;
                    $genre = "femme";
                    if ($age >= 18 & $genre == "femme"){
                        echo "Vous êtes une femme et vous êtes majeur";
                    }
                    elseif ($age < 18 & $genre == "femme"){
                        echo "Vous êtes une femme et vous êtes mineur";
                    }
                    elseif ($age < 18 & $genre == "homme") {
                        echo "Vous êtes un homme et vous êtes mineur";
                    }

                    else {
                       echo "Vous êtes un homme et vous êtes majeur"; 
                    }
                ?>

            <h4>Exercice 4</h4>
            <!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. -->
            <!-- Cette échelle va de 1 à 9. -->
            <!-- Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. -->

                <!-- 1	Micro-séisme impossible à ressentir. -->
                <!-- 2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. -->
                <!-- 3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. -->
                <!-- 4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. -->
                <!-- 5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. -->
                <!-- 6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. -->
                <!-- 7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. -->
                <!-- 8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. -->
                <!-- 9	Séisme capable de tout détruire sur une très vaste zone. -->

            <!-- Gérer tous les cas et utiliser autre chose que des if else -->
                
                <?php
                    $magnitude = 5;
                    switch ($magnitude){
                        case 1 :
                            echo "Micro-séisme impossible à ressentir.";
                        break;

                        case 2 :
                            echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                        break;

                        case 3 :
                            echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                        break;

                        case 4 :
                            echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                        break;

                        case 5 :
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                        break;

                        case 6 :
                            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                        break;

                        case 7 :
                            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                        break;

                        case 8 :
                            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                        break;

                        case 9 :
                            echo "Séisme capable de tout détruire sur une très vaste zone.";
                        break;
                    }
                ?>

            <h4>Exercice 5</h4>
            <!-- Traduire ce code avec des if et des else : -->

                <!--<?php

                    echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
                    
                    ?>-->
                <?php
                        if ($maVariable != 'Homme') {
                            echo 'C\'est une développeuse !!!';
                        }
                        else {
                            echo 'C\'est un développeur !!!';
                        }
                        
              ?>

            <h4>Exercice 6</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <!--<?php

                echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';

            ?>-->

            <?php
                if ($monAge >= 18) {
                    echo "Tu es majeur";
                }
                else {
                    echo "Tu n\'es pas majeur";
                }
            ?>
           
            <h4>Exercice 7</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <!--<?php

                echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';

            ?>-->

            <?php
                if ($mavariable){
                    echo "c\'est ok !!";
                }
                else {
                    echo "c\'est pas bon !!!";
                }
            ?>
          
            <h4>Exercice 8</h4>
            <!-- Traduire ce code avec des if et des else : -->

            <!--<?php

                echo ($maVariable) ? 'cest ok !!' : 'cest null :D';

            ?>-->
            
            <?php
                if ($mavariable){
                    echo "c\'est ok !!";
                }
                else {
                    echo "cest null :D";
                }
            ?>
          

        </section><!-- /condition -->

        <!-- BOUCLE -->
        <section class="loop">

            <a href="https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html" target="_blank"><h2>PHP - Les boucles</h2></a>

            <h4>Exercice 1</h4>
            <!-- Créer une variable et l'initialiser à 0. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrémenter -->
                <?php
                      for($i=0; $i<10; $i++){
                          echo $i, "<br/>";
                      }
                ?>
        

            <h4>Exercice 2</h4>
            <!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas supérieur à 20 : -->

                <!-- multiplier la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- incrémenter la première variable --> 

            <?php
                $a = 0;
                $randomnumber = rand(1,100);
                while($a<20) {
                     $a = $a * $randomnumber;
                     echo $a . "<br/>";
                     $a++;
                }
            
            ?>

            <h4>Exercice 3</h4>
            <!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas inférieur ou égale à 10 : -->

                <!-- la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- décrémenter la première variable -->
            
                
            <?php
                 $number = 100;
                 $random = mt_rand(1,100); 
                 do                   
                 {
                     echo ($number / $random), '<br/>';
                     $number--;
                 }
                 while ($number <= 10)
            
            ?>

            <h4>Exercice 4</h4>
            <!-- Créer une variable et l'initialiser à 1. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrementer de la moitié de sa valeur -->

                      
            <?php
                $a = 1;
                while($a<10) {
                     echo $a . "<br/>";
                     $a = $a + ($a/2); 
                }
            
            ?>

            <h4>Exercice 5</h4>
            <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->

            <?php
                      for($i=1; $i<15; $i++){
                          echo $i, "<br/>";
                          echo "On y arrive presque. <br/>";
                      }
                ?>

            <h4>Exercice 6</h4>
            <!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->
            
          
            <?php
                      for($i=20; $i>0; $i--){
                          echo $i, "<br/>";
                          echo "C'est presque bon. <br/>";
                      }
                ?>

            <h4>Exercice 7</h4>
            <!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->

            <?php
                     foreach (range(1, 100, 15) as $number) {
                        echo $number, "<br/>";
                        echo " On tient le bon bout", "<br/>";
                    }
                    
                ?>

            <h4>Exercice 8</h4>
            <!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->
            <?php
                     foreach (range(200, 0, 12) as $number) {
                        echo $number, "<br/>";
                        echo "Enfin !!!!", "<br/>";
                    }
                    
                ?>
          

        </section><!-- /loop -->

        <!-- TABLEAU -->
        <section class="array">
        
            <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2>PHP - Les tableaux (ou array)</h2></a>

            <h4>Exercice 1</h4>
            <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

                <!-- janvier -->
                <!-- février -->
                <!-- mars -->
                <!-- avril -->
                <!-- mai -->
                <!-- juin -->
                <!-- juillet -->
                <!-- aout -->
                <!-- septembre -->
                <!-- octobre -->
                <!-- novembre -->
                <!-- décembre -->
                <?php
                $mois = array( janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre);
                
                ?>

            <h4>Exercice 2</h4>
            <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
            <?php
                $mois = array( "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
                echo $mois[2];
                ?>
          
            <h4>Exercice 3</h4>
            <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->

            <?php
                $mois = array( janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre);
                echo $mois[5];
                ?>

            <h4>Exercice 4</h4>
            <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->

            <?php
                $mois = array( "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
                $mois[7] = "août";
                echo $mois[7];
                ?>

            <h4>Exercice 4</h4>
            <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->

            <?php
                  $identite = array(
                      "Aisne"=>02,"Nord"=>59,"Oise"=>60,"Pas-de-Calais"=>62,"Somme"=>80
                );
            
            ?>

            <h4>Exercice 6</h4>
            <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->

            <?php
                  $identite = array(
                    02=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme"
                );
                echo $identite[59];
            ?>

            <h4>Exercice 7</h4>
            <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->

            <?php
                  $identite = array(
                    02=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme"
                );
                $identite [51] = "Marne";
                foreach ($identite as $key => $value) {
                    echo $value, " ";
                   }
            ?>

            <h4>Exercice 8</h4>
            <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->


             <?php
                $mois = array( janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre);
                foreach ($mois as $value) {
                    echo $value, " ";
                   }
                ?>
                
            

            <h4>Exercice 9</h4>
            <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

            <?php 
            
            $identite = array(
                02=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme"
            );
            foreach ($identite as $key => $value) {
                echo $value, " ";
               }
            ?>

            <h4>Exercice 10</h4>
            <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
            <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->

            <?php 
            
            $identite = array(
                02=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme"
            );
            foreach ($identite as $key => $value) {
                echo " Le département " .$value.  " a le numéro" .$key;
               }
            ?>

        </section><!-- /array -->
        
        <!-- DATE -->
        <section class="date">

             <a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2>PHP - Les dates</h2></a>

            <h4>Exercice 1</h4>
            <!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->
            
            <?php
               echo date('d/F/Y '); 
            ?>
          

            <h4>Exercice 2</h4>
            <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->

            <?php
               echo date('d-F-Y'); 
            ?>
          

            <h4>Exercice 3</h4>
            <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->
            <?php
               
            echo date('l jS F Y ');
            ?>

            <h5>Bonus</h5>
            <!-- Bonus : Le faire en français. -->
            <?php
                 $date1 = date('Y-m-d'); // Date du jour
                 setlocale(LC_TIME, "fr_FR","French");
                 echo strftime("%A %d %B %G", strtotime($date1));
               ?>
          

            <h4>Exercice 4</h4>
            <!-- Afficher le timestamp du jour. -->
            <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->

          <?php
                echo time(),"<br/>";
                $date = new DateTime('2016-08-02');
                echo $date->getTimestamp();
          ?>

            <h4>Exercice 5</h4>
            <!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->

            <?php
            

                $now = time(); // or your date as well
                $your_date = strtotime("2016-05-16");
                $datediff = $now - $your_date;

                echo round($datediff / (60 * 60 * 24));


          ?>

            <h4>Exercice 6</h4>
            <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

            <?php
               echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                

          ?>


            <h4>Exercice 7</h4>
            <!-- Afficher la date du jour + 20 jours. -->
               <?php
                  $now = date(d);
                  echo $now + 20  
               ?>
          

            <h4>Exercice 8</h4>
            <!-- Afficher la date du jour - 22 jours -->

            <?php
                  $now = date(d);
                  echo $now - 22  
               ?>

            <h4>Exercice FINAL</h4>
            <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
            <!-- En fonction des choix, l'afficher dans un calendrier -->

            <?php
    
        //    <form>
        //         <select size="1" name="month">
        //         <option selected value="January">January</option>
        //         <option value="February">February</option>
        //         <option value="March">March</option>
        //         <option value="April">April</option>
        //         <option value="May">May</option>
        //         <option value="June">June</option>
        //         <option value="July">July</option>
        //         <option value="August">August</option>
        //         <option value="September">September</option>
        //         <option value="October">October</option>
        //         <option value="November">November</option>
        //         <option value="December">December</option>
        //         </select>
        //     </form>;
         ?>
        </section>

    </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>