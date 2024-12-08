<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Déclaration du type de document en HTML5 -->
    <meta charset="UTF-8">
    <!-- Définit le jeu de caractères en UTF-8, assurant la prise en charge des caractères spéciaux -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise à l'échelle pour une meilleure adaptabilité sur tous types d'écrans (ordinateurs, tablettes, mobiles) -->

    <!-- Titre de la page, qui apparaîtra dans l'onglet du navigateur -->
    <title>**Tache Recurrente**</title>

    <!-- Lien vers la feuille de style CSS principale pour le styles du formulaire -->
    <link rel="stylesheet" href="../filtrage/css/tacherecurrente.css">

    <!-- Inclusion des polices Google Fonts pour styliser le texte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Liens vers des logos populaires (par exemple, font-awesome pour des icônes de réseaux sociaux, de recherche, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Corps de la page.-->
    <form class="form" action="traitement.php" method="post" id="form">
        <p class="title">New Task </p>
        <p class="message">Create a new task !! </p>
        <div class="flex">
            <label>
                <input class="input" type="text" placeholder="" required="" name="name" id="name">
                <span>Task Name</span>
                <?php if (isset($messageErrors['name'])): ?>
                    <p style="color:red;"> <?php echo($messageErrors['name']); ?> </p> <?php endif; ?>
            </label>
           
            <label>
                <input class="input" type="text" placeholder="" required="" name="priority" id="priority">
                <span>priority</span>
                <?php if (isset($messageErrors['priority'])): ?>
                    <p style="color:red;"> <?php echo($messageErrors['priority']); ?> </p> <?php endif; ?>
            </label>
        </div>
        
        <label>
            <input class="input" type="date" placeholder="" required="" name="date" id="date">
            <?php if (isset($messageErrors['date'])): ?>
                <p style="color:red;"> <?php echo($messageErrors['date']) ?> </p> <?php endif; ?>
        </label>

        <label>
            <textarea class="input01" placeholder="" rows="3" required="" name="description" id="description"></textarea>
            <span>Description</span>
            <?php if (isset($messageErrors['description'])): ?>
                <p style="color:red;"> <?php echo($messageErrors['description']); ?> </p> <?php endif; ?>
        </label>
        <div class="butContent">
            <button class="submit" name="submit" type="submit" id="submit"><a href="../filtrage/filtre.php">Create</a></button>
            <button class="clear" name="clear" type="reset" id="clear">Clear</button>
        </div>
    </form>
</body>

</html>