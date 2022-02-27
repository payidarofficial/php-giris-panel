<style>
    .basarili{
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
        color: #49c973;
        font-weight: bold;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
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
    ob_start();
    session_start();

    require 'baglan.php';

    // Kayit İşlemlerimiz
    if(isset($_POST['kayit'])){
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        
        if(!$username){
            echo "<div class='error'>Lütfen Kullanıcı Adınızı Girin</div>";
        } elseif(!$password){
            echo "<div class='error'>Lütfen Şifre Girin</div>";
        } else{
            $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
            $ekle = $sorgu->execute([
                $username, $password
            ]);
            if($ekle){
                echo "<div class='basarili'>Kayıt Başarıyla Gerçekleştirildi, yönlendiriliyorsunuz.</div>";
                header('Refresh:2; index.php');
            } else{
                echo "<div class='error'>Bir HATA ile karşılaştınız. Lütfen tekrar deneyin.</div>";
            }
        }
    }

    // Giriş İşlemleri
    if(isset($_POST['giris'])){
        $username = @$_POST['username'];
        $password = @$_POST['password'];

        if(!$username){
            echo "<div class='error'>Giriş Yapmak İçin Kullanıcı Adınızı Giriniz</div>";
        } elseif(!$password){
            echo "<div class='error'>Giriş Yapmak İçin Şifrenizi Giriniz</div>";
        } else{
            $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? || user_password = ?');
            $kullanici_sor->execute([
                $username, $password
            ]);

            $say = $kullanici_sor->rowCount();
            if($say == 1){
                $_SESSION['username'] = $username;
                echo "<div class='basarili'>Başarıyla Giriş Yaptınız, yönlendiriliyorsunuz.</div1";
                header('Refresh:2; tema.php');
            } else{
                echo "
                
                    <div class='error'>Kayıtlarımızda Böyle Bir Kullanıcı Kaydı Bulunmadı. Tekrar Dene<br/>
                        <a href='kayit.php'>Kayıt Ol</a>
                    </div>
                ";
            }
        }
    }

?>