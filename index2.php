<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <?php

    $dir    ='images'; //hladam priecinok DIR = NAJST
    $folders = scandir($dir); //iba foldery cize scan a pomocou dir

    array_shift($folders);
    array_shift($folders); //furt vlastne neviem ale nieco take ze filtrujem iba na tie priecinky co chcem mat

    $selectedFolder = $_GET['folder'] ?? '';
    ?>

    <header>
        <ul class=header_ul>
            <?php 
            
            foreach($folders as $folder){
                $filters = ['_', '-', '~'];
                $cleanFolder = str_replace($filters, ' ', $folder);
                $cleanFolder = ucfirst($cleanFolder);

                $class = '';
                if($selectedFolder == $folder){
                    $class = 'active';
                }

                echo '<li><a class="'.$class.'" href="?folder='.$folder.'">'.$cleanFolder.'</a></li>';
            }

            if($selectedFolder){
                $images = scandir('./images/'.$selectedFolder);

                if($images){
                    array_shift($images);
                    array_shift($images);
                    
                    echo '<ul>';
                    foreach($images as $image){
                        echo '<li><img src="./images/'.$selectedFolder.'/'.$image.'"height="50"></li>';
                    }
                    echo '</ul>';
                }
            }


            
            ?>
        </ul>
    </header>
</body>
</html>