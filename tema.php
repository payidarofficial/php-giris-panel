<?php

    require 'islem.php';

    $username = @$_SESSION['username'];

    if(!isset($_SESSION['username'])){
        echo "Giriş Yapmadınız. Giriş Yapıp Sayfayı Görüntüleyebilirsiniz.";
    } else{

        echo '<html>
        <head>
            <title>Dashboard</title>
    
            <!-- Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        </head>
        <body>
            <style>
            body{background-color:white;font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif}
            </style>
            <h1>Hoşgeldin <font color="red">'.$username.'</font></h1>
            <a href="logout.php">Çıkış Yap</a>
        </body>
    </html>';

    }

?>

