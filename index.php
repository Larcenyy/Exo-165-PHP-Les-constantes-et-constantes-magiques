<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const CONSTANTE1 = 12;
const CONSTANTE2 = 2;
const CONSTANTE3 = "C'est cool PHP <br>";

echo CONSTANTE1 * CONSTANTE2;
$result = (CONSTANTE1 + CONSTANTE2) * strlen(CONSTANTE3) . "<br>";
echo $result;
/**
 *
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.²
echo "Répértoire du fichier:" . __FILE__ . "<br>";
echo "Répértoire :" . __DIR__  . "<br>";
echo "Ligne numéro :" . __LINE__ . "<br>";
echo "Ligne numéro :" . __METHOD__  . "<br>";
echo "Ligne numéro :" . __NAMESPACE__  . "<br>";
echo "Ligne numéro :" . __TRAIT__  . "<br>";