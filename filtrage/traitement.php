<?php
//Dans cette section je vais gerer le formulaire et la creation de nouvelle tache

//Recuperation des données via $_POST
$name = htmlspecialchars($_POST['name']);
$priority = htmlspecialchars($_POST['priority']);
$date = htmlspecialchars($_POST['date']);
$description = htmlspecialchars($_POST['description']);

$errors = array(
    'name' => '',
    'priority' => '',
    'date' => '',
    'description' => ''
);

//Declaration de la variable contenant les message d'erreurs
$messageErrors = array(
    'name' => '',
    'priority' => '',
    'date' => '',
    'description' => ''
);

//verification des erreurs
function verification($tableau)
{
    $errors = "";
    foreach ($tableau as $key) {
        if ($tableau[$key] == "") {
            $errors = $errors . "_" . $key;
            header("Location:./index.php?erreur=" . $errors); //affichage des erreurs dans l'url
        }
    }

    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    verification($_POST);//Appel de la fonction de verification des erreurs

    if (isset($name) && isset($priority) && isset($date) && isset($description)) {

    }
}

//Verification des erreurs
if (!empty($_GET)) {

    $error = $_GET['error'];//Recuperrer l'erreurs dans l'URL
    //separation des erreurs 
    $tableError = explode("_", $error);

    //Affichage des erreurs 
    foreach ($tableError as $value) {
        # code...
        switch ($value) {
            case 'name':
                $messageErrors['name'] = 'Veuillez entrer un nom d\'évènement valide.';
                break;
            case 'priority':
                $messageErrors['name'] = 'Veuillez choisir une priorité de l\'évènement.';
                break;
            case 'date':
                $messageErrors['name'] = 'Veuillez entrer une date d\'évènement valide.';
                break;
            case 'description':
                $messageErrors['name'] = 'Veuillez entrer une description d\'évènement valide.';
                break;
            default:
                echo ("<script alert = 'Veuillez remplir tous les champs de saisie.'></script>");
                break;
        }
    }
}










