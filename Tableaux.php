<?php
    /*
        on distingue deux types de tableaux en PHP
    */

    //Tableaux numérotés 
    
    $recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

    // La fonction array permet aussi de créer un array
    $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

    echo $recipes[0];

    //Tableaux Associatifs
    $recipe =
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'john.doe@exemple.com',
        'enabled' => true,
    ];
    echo $recipe['title'];

    //La boucle foreach

    // Déclaration du tableau des recettes
    $recipes = [
        ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
        ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
    ];

    foreach ($recipes as $recipe) {
        echo '<br> <br>$recipe[0]'; // Affichera Cassoulet, puis Couscous
    }

    // le foreach permet aussi de parcouris les tableaux associatifs
    foreach ($recipe as $value) {
        echo $value;
    }
    
    //utilisation de tableaux de tableaux

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => '',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => '',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
    ];
    
    foreach($recipes as $recipe) {
        echo '<br> <br>';
        echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
    }

    $recipe = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
    ];
    echo '<br> <br>';
    echo '<br> <br>';
    foreach($recipe as $property => $propertyValue)
    {
        echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
    }

    // print_r
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
    ];
    
    echo '<pre>';
    print_r($recipes);
    echo '</pre>';

    //les recherches dans les tableaux
    if (array_key_exists('title', $recipe))
    {
        echo 'La clé "title" se trouve dans la recette !';
    }

    if (array_key_exists('commentaires', $recipe))
    {
        echo 'La clé "commentaires" se trouve dans la recette !';
    }
?>