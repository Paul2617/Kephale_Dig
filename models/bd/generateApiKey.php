<?php
// Fonction pour générer une clé API unique
function generateApiKey($length = 32) {
    // Utiliser des caractères alphanumériques et des caractères spéciaux
    return bin2hex(random_bytes($length / 2));  // bin2hex transforme les octets aléatoires en une chaîne hexadécimale
}