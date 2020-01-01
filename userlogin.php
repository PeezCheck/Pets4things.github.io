<?php ?>
<html>
    <head>
        <title>Uye Giris</title>
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
            margin-bottom:  2%;
            margin-left: 25%;
        }
        #sepetbtn.btn.btn-primary {
        width: 80%;
    }
        </style>
    </head>
    <body>
    <?php include 'header.php' ?>
        <div class="container">
            
            <div class="row">
                <div class="col border text-center p-5 m-1">
                    <h1 class="display-5">Üye Giriş</h1><br/>
                    <form action="uyegiris.php" method="POST">
                        <div class="form-group">
                            
                            E-Posta Adresi <input type="email" class="form-control" id="userloginemailinp" name="userloginemail" required autocomplete placeholder="xxxxx@xxxx.com">
                        </div>
                        <div class="form-group">
                            
                            Şifre  <input type="password" class="form-control" id="userloginpwinp" name="userloginpw" placeholder="*********">
                        </div> <br/>
                        <input type="submit" class="btn btn-primary px-5 btn-block" value="Giriş Yap" >
                    </form>
                </div>
                
            </div>
    
        </div>
    </body>
</html>