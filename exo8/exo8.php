<?php
// cette fonction sert a crée un triangle
function triangle($hauteur = 5, $char = 'm')
{
    for ($i = 0; $i < $hauteur; ++$i) {
        for ($j = 0; $j <= $i; ++t) {
            echo $char[0].' ';
        }
        echo "\n";
    }
}
// on donne les instruction
        echo 'Veuillez entrer la hauteur du triangle : ';
        $h = readline();
        if (!is_numeric($h)) {
            echo "\tTaille invalide, utilisation de la valeur par défaut : 5\n";
            $h = 5;
        }

        echo 'Veuillez entrer le caractère à afficher : ';
        $c = readline();
// on appels la fonction triangle pour l'affiché
        triangle($h, $c);
