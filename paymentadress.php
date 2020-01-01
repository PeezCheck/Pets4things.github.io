<?php ?>
<html>

<head>
    <title>Sepet</title>
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
<?php include 'header.php' ?>
    <div class="container">
        <h2>Adres Bilgileriniz</h2>
        <div class="row">
            <div class="col-sm-8" style="background-color: chartreuse;"><br/>
                <form style="margin-left: 10%;" action="adresekle.php" method="POST" >
                    <div class="row">
                        <div class="col-sm-5">
                            Adınız:<input type="text" class="form-control" name="adresad">
                        </div>
                        <div class="col-sm-5">
                            Soyadınız:<input type="text" class="form-control" name="adressoyad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            E-mail:<input type="e-mail" class="form-control" name="adresemail">
                        </div>
                        <div class="col-sm-5">
                            Telefon:<input type="number" class="form-control" name="adrestelefon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            İl:
                            <select class="form-control" name="adresil">
                                <option>Kocaeli</option>
                                <option>Bursa</option>
                                <option>Trabzon</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            İlçe:
                            <select class="form-control" name="adresilce">
                                <option>Gölcük</option>
                                <option>Yazlık</option>
                                <option>Yeniköy</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            Adress:
                            <br /><textarea class="form-control" rows="8" name="tamadres"></textarea>
                        </div>
                    </div><br/> <br/>
                </form>
            </div>
            <div class="col-sm-1">

            </div>
            <div  class=col-sm-3 style="background-color: coral;padding: 20px;">
                
                <div style="text-align: center;" ><h3>Sipariş Özeti</h3></div style="float:right;">
                <div style="text-align:center">
                    <p >1 ürün</p>
                </div>
                <div style="text-align:center">
                    <p ><p>Fiyat</p></p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>69,90 TL</p>
                </div>
                <div style="text-align:center">
                    <p >Kargo</p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>0 TL</p>
                </div>
                <div style="text-align:center">
                    <p >Net Tutar</p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>69.90 TL</p>
                </div>
                <div class="text-center" style="width: 100%;">
                    <a href="paymentcard.php"><button type="button" class="btn btn-block btn-primary btn-lg ">Devam Et</button></a>
                </div><br/>
            </div>

        </div>
    </div>

</body>

</html>