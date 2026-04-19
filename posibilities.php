<?php
// Zoznam povolených koncoviek
$povolene = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

foreach($fotky as $f) {
    $info = pathinfo($f);
    $pripona = strtolower($info['extension'] ?? '');

    // Ak koncovka nie je v zozname povolených, tento súbor preskoč
    if(!in_array($pripona, $povolene)) continue;

    // ... tu pokračuje tvoj echo s <img> ...
}
?>


/////

if ($sel && !is_dir($adresar . '/' . $sel)) {
    echo "<h2>Chyba: Takýto priečinok neexistuje!</h2>";
    echo "<a href='index.php'>Späť na hlavnú stránku</a>";
    exit; // Zastaví vykonávanie kódu, aby nevyhodilo ďalšie chyby
}


/////


<?php
    $pocet = count($fotky);
    echo "<p>V tomto priečinku sa nachádza <strong>$pocet</strong> obrázkov.</p>";
?>


/////


$limit = array_slice($fotky, 0, 10); // Vezme len prvých 10 kusov
foreach($limit as $f) { ... }



/////////



if (empty($fotky)) {
    echo "<p>Tento priečinok je momentálne prázdny.</p>";
}


/////////


if (!is_dir($hlavny_adresar)) {
    echo "Chyba: Hlavný priečinok '$hlavny_adresar' nebol nájdený.";
    exit;
}


/////////


<a href="<?= $cesta_k_fotke ?>" download class="btn-download">
    📥 STIAHNUŤ OBRÁZOK
</a>

