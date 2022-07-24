<?php
    //les conditions en PHP
    $isEnabled = true; // La condition d'accès
    $isOwner = false ;
    $isAdmin = true ;

    if ($isEnabled == true) {
        echo "<br>Vous êtes autorisé(e) à accéder au site ✅";
    }
    else
    {
        echo "Accès refusé ❌ ";
    }

    //utiliser les booleens
    if($isEnabled)
    {
        echo "<br>Vous êtes autorisé(e) à accéder au site ✅";
    }
    else
    {
        echo "<br>Accès refusé ❌ ";
    }

    // && and ||

    if($isEnabled && $isOwner)
    {
        echo "<br>Accès à la recette validé ✅";
    }
    else
    {
        echo "<br>Acès à la recette interdit ! ❌";
    }
    if(($isEnabled && $isOwner)||$isAdmin)
    {
        echo "<br>Accès à la recette validé ✅";
    }
    else
    {
        echo "<br>Acès à la recette interdit ! ❌";
    }

//Switch

$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "<br>Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "<br>Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "<br>Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "<br>Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "<br>Tu es assez bon";
    break;
    
    case 16:
        echo "<br>Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "<br>Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "<br>Désolé, je n'ai pas de message à afficher pour cette note";
}

// les conditions Ternaires

    $userAge = 24;

    if ($userAge >= 18)
    {
        $isAdult = true;
    }
    else 
    {
        $isAdult = false;
    }
    //ou bien

    $isAdult = ($userAge >= 18) ? true : false;

    // Ou mieux, dans ce cas précis
    $isAdult = ($userAge >= 18);


?>

<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?><!-- Ni le ";" après le endif -->