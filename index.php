<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Datatype:wght@100..900&family=Playwrite+DK+Uloopet+Guides&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Chcem sa ukoncit</title>
</head>
<body>
    <?php 
    
    $dir    = './images';
    $folders = scandir($dir);

    array_shift($folders);
    array_shift($folders);

    $selectedFolder = '';
    if(isset($_GET['folder'])){
        $selectedFolder = $_GET['folder'];
    }

    echo $selectedFolder;

    ?>
    <header>
        <ul class="header-ul">
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





