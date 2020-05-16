<?php
    include 'db.php'; // Connexion bdd
    
    $ISBN = $_GET['isbn']; // récupère l'isbn dans l'URL

    $query = '
         SELECT l.titre,
         l.annee,
         p.nom, 
         p.prenom, 
         g.libelle AS Genre,
         e.libelle AS Editeur
         FROM Livre l
         JOIN Auteur a
             ON l.isbn = a.idLivre
         JOIN Personne p
             ON a.idPersonne = p.id
         JOIN Genre g
             ON l.genre = g.id
         JOIN Editeur e
             ON l.editeur = e.id
         WHERE l.isbn = '.$ISBN.' 
    ';//utiliser la variable isbn
?>

<html>
<head>
</head>
<body>
    
    <?php include 'header.php' ?>

    
</body>
</html>