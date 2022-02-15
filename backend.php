<?php

    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'elegant'
    );

    if($connection){
        echo "Database is connected / ";
    }
?>