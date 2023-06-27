<?php

$age = 33;

echo ($age >= 18)?'<p>Vous êtes majeur</p>':'<p>Vous êtes mineur</p>';

$isEasy = true;

echo ($isEasy)?'<p>C\'est facile!!</p>':'<p>C\'est difficile!!!</p>';
echo (!$isEasy)?'<p>C\'est difficile!!!</p>':'<p>C\'est facile!!</p>';

$gender = 'Homme';

$pGender = ($gender === 'Homme')?'un homme':'une femme';
$pAge = ($age >= 18)?'majeur':'mineur';

echo "<p>Vous êtes $pGender et vous êtes $pAge</p>";

$richterValues = [
    'Micro-séisme impossible à ressentir.',
    'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.',
    'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.',
    'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.',
    'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.',
    'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.',
    'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.',
    'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.',
    'Séisme capable de tout détruire sur une très vaste zone.'
];

$magnitude = 3;

echo '<p>' . $richterValues[$magnitude - 1] . '</p>';

if ($gender != 'Homme') {
    echo 'C\'est une développeuse !!!';
} else {
    echo 'C\'est un développeur !!!';
}

if ($age >= 18) {
    echo 'Tu es majeur';
} else {
    echo 'Tu n\'es pas majeur';
}

$isOk = true;

if ($isOk == false) {
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';
}

if ($isOk) {
    echo 'c\'est ok !!';
} else {
    echo 'c\'est pas bon !!!';
}

?>
