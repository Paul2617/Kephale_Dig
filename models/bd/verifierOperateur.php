<?php
// Fonction pour vérifier l'opérateur d'un numéro
function verifierOperateur($numero) {
    // Enlever les espaces, tirets ou autres caractères non numériques
    $numero = preg_replace('/\D/', '', $numero);

    // Vérifier si le numéro est valide (commence par 7, 6 et a 8 chiffres)
    if (strlen($numero) === 8) {
        // Vérification pour Orange Mali
        $orangePrefix = ['70', '71', '72', '75', '76', '94'];
        // Vérification pour Malitel
        $malitelPrefix = ['66', '67', '68', '69'];

        // Vérifier l'opérateur basé sur les préfixes
        foreach ($orangePrefix as $prefix) {
            if (substr($numero, 0, 2) === $prefix) {
                return 'Orange Mali';
            }
        }

        foreach ($malitelPrefix as $prefix) {
            if (substr($numero, 0, 2) === $prefix) {
                return 'Malitel';
            }
        }

        return 1;
          // Opérateur inconnu
    } else {
        return 2;
        // Numéro invalideu
    }
}
?>