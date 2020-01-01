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
        <div class="row">
            
            <div class=col-sm-8>
                <br/><br/><br/>
                <div id="accordianId" role="tablist" aria-multiselectable="true" style="background-color: red;">
                    <div class="card" style="border:2px solid black;">
                        <div style="margin-left: 10px;" class="card-header" role="tab" id="section1HeaderId">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId"
                                    aria-expanded="true" aria-controls="section1ContentId">
                                    Kredi/Banka Kartı
                                </a>
                            </h5>
                        </div>
                        <div id="section1ContentId" class="collapse out" role="tabpanel" aria-labelledby="section1HeaderId">
                            <div class="card-body">
        
                                <form>
                                    <div style="margin-left: 10px;"class="row">
                                        <div  class="col-sm-5">
                                            Kart Numarası:<input type="number" class="form-control">
                                        </div>
                                        <div class="col-sm-5" style="margin-left: 10px;">
                                            Kart Üzerindeki İsim:<input type="text" class="form-control">
                                        </div>
                                    </div> <br/>
                                    <div style="margin-left: 10px;" class="row">
                                        <div class="col-sm-3">
                                            Son Kullanma Tarihi:
                                            Gün
                                            <select class="form-control">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <br/>
                                            Ay:
                                            <select class="form-control">
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5" style="margin-left: 10px;">
                                            <br/>
                                            CVC<input class="form-control" type="number">
                                        </div>
                                        
                                    </div> <br/> <br/>
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div style="background-image:url(Resimler/creditcard.png) ;background-repeat: no-repeat;margin-left: 3%;width: 100%;height: 40%; " id="creditcard">
                                                <div class="card-logo" style="background-color: hotpink;">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <br/>
                                    
                                </form>
        
                            </div>
                        </div>
                    </div>
                    <div class="card" style="border:2px solid black;">
                        <div style="margin-left: 10px;" class="card-header" role="tab" id="section2HeaderId">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId"
                                    aria-expanded="true" aria-controls="section2ContentId">
                                    Mobil Ödeme
                                </a>
                            </h5>
                        </div>
                        <div id="section2ContentId" class="collapse out" role="tabpanel" aria-labelledby="section2HeaderId">
                            <div class="card-body">
                                <form>
                                    <div style="margin-left: 10px;" class="row">
                                        <div class="col-sm-6">
                                            Telefon No:<input type="number" class="form-control">
                                        </div>
                                    </div><br/>
        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
            <div class="col-sm-3" style="background-color: coral;">
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
                        <a href="mainpage1.php"><button type="button" class="btn btn-block btn-primary btn-lg ">Devam Et</button></a>
                    </div><br/>
            </div>
                
        </div>
        
    </div>
</body>

</html>