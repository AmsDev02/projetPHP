<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université XYZ - Gestion des Emplois du Temps</title>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>My real-time schedule</h1>
            <nav>
                <ul>
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#schedule">Emplois du Temps</a></li>
                    <li><a href="#rooms">Salles de Classe</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="container">
        <h2>Bienvenue sur le Site de Gestion des Emplois du Temps</h2>
        <p>Ce site vous permet de consulter et de gérer les emplois du temps et les salles de classe de l'université XYZ.</p>
    </section>

    <section id="schedule" class="container">
        <h2>Emplois du Temps</h2>
        <p>Consultez les emplois du temps des différentes salles de classe pour chaque jour de la semaine.</p>
        <a href="schedule.php">Voir les Emplois du Temps</a>
    </section>

    <section id="rooms" class="container">
        <h2>Salles de Classe</h2>
        <p>Découvrez les différentes salles de classe de l'université.</p>
        <!-- Ajoutez le lien vers la page des salles de classe -->
        <a href="classrooms.php">Voir les Salles de Classe</a>
    </section>

    <section id="about" class="container">
        <h2>À Propos de Nous</h2>
        <p>En savoir plus sur l'université XYZ et notre engagement envers l'éducation.</p>
    </section>

    <section id="contact" class="container">
        <h2>Contactez-nous</h2>
        <p>N'hésitez pas à nous contacter pour toute question ou préoccupation.</p>
        <!-- Ajoutez le formulaire de contact ici -->
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 Université XYZ. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
<!-- <?php
// session_start();
?>
<?php 
    // if (!isset($_SESSION['connected'])) {
    //   header('<Location:projet_php>connexion.php');  
    // }
?> -->
