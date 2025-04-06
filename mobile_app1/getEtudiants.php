
<?php
// Inclure la racine et les services nécessaires
include_once './racine.php';
include_once RACINE . '/service/EtudiantService.php';

// Indiquer que la réponse est au format JSON
header('Content-Type: application/json');

// Créer une instance du service Etudiant
$es = new EtudiantService();

// Récupérer tous les étudiants via le service
$etudiants = $es->findAllApi();

// Retourner les étudiants sous forme de JSON
echo json_encode($etudiants);
