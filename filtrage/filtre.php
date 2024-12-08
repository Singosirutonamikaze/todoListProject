<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Déclaration du type de document en HTML5 -->
    <meta charset="UTF-8">
    <!-- Définit le jeu de caractères en UTF-8, assurant la prise en charge des caractères spéciaux -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuration de la mise à l'échelle pour une meilleure adaptabilité sur tous types d'écrans (ordinateurs, tablettes, mobiles) -->

    <!-- Titre de la page, qui apparaîtra dans l'onglet du navigateur -->
    <title>Liste des taches</title>

    <!-- Lien vers la feuille de style CSS principale pour le styles du formulaire -->
    <link rel="stylesheet" href="../filtrage/css/filtrage.css">

    <!-- Inclusion des polices Google Fonts pour styliser le texte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Liens vers des logos populaires (par exemple, font-awesome pour des icônes de réseaux sociaux, de recherche, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Corps de la page.-->
    <main>
        <header>
            <h1>TaskList</h1>
            <nav>
                <ul>
                    <li class="link"><a href="#">Home</a></li>
                    <li class="link"><a href="#">About</a></li>
                    <li class="link"><a href="#">Contact</a></li>
                    <li class="link"><button><a href="../filtrage/tacheRecurrente.php">Create Task</a></button></li>
                </ul>
                <div class="search">
                    <div class="searchbar">
                        <div class="searchbar-wrapper">
                            <div class="searchbar-left">
                                <div class="search-icon-wrapper">
                                    <span class="search-icon searchbar-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="searchbar-center">
                                <div class="searchbar-input-spacer"></div>

                                <input type="text" class="searchbar-input" maxlength="2048" name="q"
                                    autocapitalize="off" autocomplete="off" title="Search" role="combobox"
                                    placeholder="Search Google">
                            </div>

                            <div class="searchbar-right">
                                <svg class="voice-search" role="button" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path fill="#4285f4"
                                        d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z">
                                    </path>
                                    <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
                                    <path fill="#fbbc05"
                                        d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z">
                                    </path>
                                    <path fill="#ea4335"
                                        d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <section class="section">
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
            <div class="container"> </div>
        </section>

    </main>
</body>

</html>