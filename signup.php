<?php 
$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "pets4things";
?>
<html>
<head>
    <title>Kayıt Ol</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container {
            height: 35%;
        }

        .row {
            width: 50%;
            margin-bottom: 2%;
            margin-left: 25%;
        }
        #sepetbtn.btn.btn-primary {
        width: 80%;
    }
    </style>
    <script>
    function signup() {

    }
    </script>
</head>

<body>
    <header>
        <div class="headerdiv" id="logo">
            <a href="mainpage1.html"><img class="logo" src="Resimler/testlogo.jpg"></a>
        </div>
        <div class="headerdiv" id="logoyazi">
            <h3 id="logobaslik">PETS4THİNGS</h3>
        </div>
        <div class="headerdiv" id="searchbar">
            <div class="search" id="searchbartxtdiv">
                <input id="searchbartxt" type="text" placeholder="Aranacak Kelime Giriniz">
            </div>
            <div class="search" id="searchbarbtndiv">
                <button id="searchbtn">Ara </button>
            </div>
        </div>
        <div class="headerdiv" id="hesapsepet">

            <div class="hs">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Giris Yap
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="userlogin.html">Uye Giris</a></li>
                        <li><a href="signup.html">Kayıt ol</a></li>
                        <li><a href="adminlogin.html">Admin Giris</a></li>
                    </ul>
                </div>
            </div>

            <div class="hs">
                <div class="sepetbtndiv"></div>
                <a href="basket.html"><button class ="btn btn-primary" id="sepetbtn">Sepet</button></a>
            </div>
        </div>
    </header> <br/> <br/>
    <div class="container">

        <div class="row">
            <div class="col border text-center p-5 m-1">
                <h1 class="display-5">Kayıt Ol</h1><br/>
                <form action="kaydol.php" method="POST">
                    <div class="form-group">

                        Adınız <input type="text" class="form-control" id="signupadinp" name="signupad" autocomplete required>
                    </div>
                    <div class="form-group">

                        Soyadınız <input type="text" class="form-control" id="signupsoyadinp" name="signupsoyad" autocomplete required >
                    </div>
                    <div class="form-group">

                        E-Posta <input type="email" class="form-control" id="signupemailinp" name="signupemail" autocomplete placeholder="xxxxx@xxxx.com">
                    </div> 
                    <div class="form-group">

                        Telefon No <input type="number" class="form-control" id="signuptelnoinp" name="signuptel" required autocomplete >
                    </div> 
                    
                    <div class="form-group">

                        Şifre <input type="password" class="form-control" id="signupsifreinp" name="signupsifre" required>
                    </div>
                    <div class="form-group">

                        Şifre-Tekrar <input type="password" class="form-control" id="signuppw2inp" name="signuppw2" required>
                    </div>
                   <input style="margin-top:3%" class="form-checkbox" type="checkbox" > Okudum Onaylıyorum 
                    
                   <input style="margin-top: 5%;" type="submit" class="btn btn-primary px-5 btn-block" value="Üye Ol">
                </form>
            </div>

        </div>

    </div>
</body>

</html>