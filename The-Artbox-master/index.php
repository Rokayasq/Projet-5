<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <main>
        <div id="liste-oeuvres">
    <?php
    $oeuvres = [
    [
        'lien' => 'oeuvre-1.php',
        'image' => 'img/clark-van-der-beken.png',
        'titre' => 'Dodomu',
        'artiste' => 'Mia Tozerski',
    ],
    [
        'lien' => 'oeuvre-2.php',
        'image' => 'img/pawel-czerwinski-3.png',
        'titre' => 'Aashaaheen Baadal',
        'artiste' => 'Anaisha Devi',
    ],
    [
        'lien' => 'oeuvre-3.php',
        'image' => 'img/dan-cristian-padure.png',
        'titre' => 'Nightlife Traffic',
        'artiste' => 'Andrew Forsythe',
    ],
    [
        'lien' => 'oeuvre-4.php',
        'image' => 'img/steve-johnson-5.png',
        'titre' => 'Le refuge de l\'Havre',
        'artiste' => 'Simon Pelletier',
    ],
    [
        'lien' => 'oeuvre-5.php',
        'image' => 'img/steve-johnson.png',
        'titre' => 'Red Washover',
        'artiste' => 'Kit Van Der Borght',
    ],
    [
        'lien' => 'oeuvre-6.php',
        'image' => 'img/pawel-czerwinski.png',
        'titre' => 'Chromatics',
        'artiste' => 'Jean-Michel Delatronchette',
    ],
    [
        'lien' => 'oeuvre-7.php',
        'image' => 'img/jazmin-quaynor.png',
        'titre' => 'Digital Negative',
        'artiste' => 'Hamish McKee',
    ],
    [
        'lien' => 'oeuvre-8.php',
        'image' => 'img/steve-johnson-6.png',
        'titre' => 'Blast from the past',
        'artiste' => 'Juliette Baskerville',
    ],
    [
        'lien' => 'oeuvre-9.php',
        'image' => 'img/victor-grabarczyk.png',
        'titre' => 'Hurricane',
        'artiste' => 'Natalie Wellington',
    ],
    [
        'lien' => 'oeuvre-10.php',
        'image' => 'img/pawel-czerwinski-2.png',
        'titre' => 'La marée rouge',
        'artiste' => 'Martin Rodrigue',
    ],
    [
        'lien' => 'oeuvre-11.php',
        'image' => 'img/steve-johnson-2.png',
        'titre' => 'Asimilacion',
        'artiste' => 'Angel Sanchez-Fernandez',
    ],
    [
        'lien' => 'oeuvre-12.php',
        'image' => 'img/fly-d.png',
        'titre' => 'La Galaxia Gialla',
        'artiste' => 'Eduardo Tancredi',
    ],
    [
        'lien' => 'oeuvre-13.php',
        'image' => 'img/orfeas-green.png',
        'titre' => 'Puffy Amalgamate',
        'artiste' => 'Sandro De Blasi',
    ],
    [
        'lien' => 'oeuvre-14.php',
        'image' => 'img/steve-johnson-4.png',
        'titre' => 'Mirage',
        'artiste' => 'Stéphanie Kaiser',
    ],
    [
        'lien' => 'oeuvre-15.php',
        'image' => 'img/steve-johnson-3.png',
        'titre' => 'Blaue Gelbe Muster',
        'artiste' => 'Adelheid Von Schreiber',
    ],
];
?>

<?php foreach ($oeuvres as $oeuvre): ?> 
    <article class="oeuvre">
        <a href="<?php echo $oeuvre['lien']; ?>">
            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
            <h2><?php echo $oeuvre['titre']; ?></h2>
            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
        </a>
    </article>
<?php endforeach; ?>

        </div>
    </main>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>