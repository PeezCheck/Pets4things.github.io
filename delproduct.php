<?php ?>
<html>

<head>

    <title>Ürün Ekle</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #sepetbtn.btn.btn-primary {
            width: 80%;
        }
    </style>
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
                <a href="basket.html"><button class="btn btn-primary" id="sepetbtn">Sepet</button></a>
            </div>
        </div>
    </header> <br /> <br />
    <div class="container">
        <div class="row">
            <div class="col border text-center p-5 m-1">
                <h1>Silinecek Ürün Id Giriniz</h1> <br />
                <form action="urunsil.php" method="POST">
                    <div class="form-group">

                        <label for="#">Ürün Id</label>
                        <input type="number" id="deleteproductidinp" class="form-control" name="deleteproductid">

                    </div>
                    <button type="submit" class="btn btn-primary btn-block" >Ürünü Sil</button>
                </form>
               
            </div>


        </div>
    </div>

</body>

</html>