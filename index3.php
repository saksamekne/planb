<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Moja Galéria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    // 1. Nastavenie cesty a načítanie priečinkov
    $adresar = 'images';
    // array_diff vyhodí tie otravné bodky . a ..
    $priečinky = array_diff(scandir($adresar), array('.', '..'));

    // 2. Zistenie, na čo používateľ klikol
    $vyber = $_GET['f'] ?? '';
?>

<header>
    <ul class="nav">
        <?php foreach($priečinky as $p): ?>
            <?php 
                // Skrášlime názov: pomlčky za medzery a veľké písmeno
                $peknyNazov = ucfirst(str_replace('-', ' ', $p));
                $trieda = ($vyber == $p) ? 'active' : '';
            ?>
            <li>
                <a href="?f=<?= $p ?>" class="<?= $trieda ?>">
                    <?= $peknyNazov ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</header>

<main>
    <?php if($vyber): ?>
        <div class="galeria">
            <?php
                $cestaKPhotkam = $adresar . '/' . $vyber;
                $fotky = array_diff(scandir($cestaKPhotkam), array('.', '..'));

                foreach($fotky as $foto): ?>
                    <div class="karta">
                        <a href="<?= $cestaKPhotkam . '/' . $foto ?>" download>
                            <img src="<?= $cestaKPhotkam . '/' . $foto ?>" alt="foto">
                        </a>
                        <p><?= $foto ?></p>
                    </div>
                <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p style="text-align:center; margin-top:50px;">Vyber si kategóriu z menu hore.</p>
    <?php endif; ?>
</main>

</body>
</html>


    //php.net
    w3schools.com
    stackoverflow.com
    github.com
    w3.org
    skillmea.sk
    https://www.itnetwork.cz/
    https://code.mu/
    https://developer.mozilla.org/en-US/
    https://php.vrana.cz/
    https://www.itnetwork.cz/
    https://sentry.io/


