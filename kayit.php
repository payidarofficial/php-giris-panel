<?php

    require "baglan.php"

?>

<html>
    <head>
        <title>Pâyidar - Admin Panel</title>
    </head>
    <body>
        <!-- STYLE -->
        <style>
            body{
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            *{
                box-sizing: border-box;
            }

            /* Giriş CSS */
            .giris-ekran{
                background-color: white;
                box-shadow: 0 10px 50px 0px rgba(0, 0, 0, .5);
                border-radius: 5px;
                width: 400px;
                text-align: center;
                overflow: hidden;
            }
            .giris-ekran hr{
                background: #333;
                opacity: .1;
                border: none;
                height: 1px;
            }
            .giris-ekran .islemler{
                text-align: left;
            }
            .giris-ekran .islemler input{
                margin-bottom: 15px;
                padding: 7px;
                margin: 5px 10px 5px 0px;
                border: none;
                outline: none;
                width: 100%;
            }
            .giris-ekran .islemler input[type="password"]{
                margin-bottom: -5px;
            }
            .giris-ekran .button{
                padding: 10px;
                display: inline-block;
                outline: none;
                box-shadow: 0 0 0 1px rgba(0, 0, 0, .5);
                margin: 5px 15px -5px 15;
                text-decoration: none;
                color: black;
                transition: 250ms all;
                width: 200px;
                border-radius: 2px;
                border: none;
                background-color: white;
            }
            .giris-ekran .button:hover{
                background-color: black;
                color: white;
                box-shadow: initial;
            }
            .giris-ekran .hesap-kayit{
                color: black;
                text-decoration: none;
                transition: .4s ease;
                display: block;
                margin-bottom: 10px;
            }
            .giris-ekran .hesap-kayit:hover{
                color: red;
            }
        </style>

        <!-- Box -->
        <div class="giris-ekran">
            <div class="giris-title">
                <h1>Kayıt Ol</h1>
            </div>
            <hr/>
            <form action="islem.php" method="post">
                <div class="islemler">
                    <input type="text" name="username" placeholder="Kullanıcı İsmi Seçin" maxlength="20">
                    <hr/>
                    <input type="password" name="password" placeholder="Şifre Girin" maxlength="20">
                </div>
                <hr/>
                <button href="kayit.php" name="kayit" class="button">Kayıt Ol</button><br/>
            </form>
            <a href="index.php" class="hesap-kayit">Hesabın Var mı?</a>
        </div>
    </body>
</html>