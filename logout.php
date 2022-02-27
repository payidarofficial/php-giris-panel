<style>
    .error{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
        background-color: white;
        box-shadow: 0 10px 50px 0px rgba(0, 0, 0, .5);
        border-radius: 5px;
        width: 400px;
        text-align: center;
        color: red;
        font-weight: bold;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .error a{
        color: black;
        font-weight: bold;
        font-style: italic;
        transition: 250ms all;
    }
    .error a:hover{
        color: red;
    }
</style>

<?php
    session_start();
    ob_start();
    session_destroy();

    echo "<div class='error'>Çıkış Yapıldı. Yönlendiriliyorsunuz</div>";

    header('Refresh:2; index.php')

?>