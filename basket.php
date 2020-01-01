<?php 

?>
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
            <div class="col-sm-8" style="background-color: red;">
                <div class="row" style="margin: 10px;">
                    <div>
                        <h1 class="float:left">Sepet</h1>
                    </div>
                    <div >
                        <div style="float:right;width: 6%;">
                            Fiyat
                        </div>
                        <div style="float:right;width: 16%;">
                            Adet
                        </div>
                    </div><br/>
                     <hr>
                     
                        <div class="col-sm-2">
                        <img src="Resimler/9728580386866.jpg" width="80" height="80">
                        </div>
                        <div class="col-sm-10" style="background-color: white;">
                            <div class=row>
                                New Dog Kuzu Etli & Pirinçli Yetişkin Köpek Maması 15 kg 
                                <div style="float:right;"class="product-prices-utils">

    
                                    <div class="price">
                                        <div style="font-size: 19px;" data-bind="html: price">69,90 TL</div>
                                        <p style="color: blue;"> Kargo Bedava</p>
                                    </div>
                                </div>
                                <div style="float: right; width: 14%;"class="input-group">
                                    <input style="width: 40px;
                                    padding: 0;font-weight: 700;text-align: center;
                                    color: #484848;float: left;height: 40px;border: none;margin: 2px 0;
                                    border-radius: 2px;"name="quantity" class="quantity" type="number" value="1" maxlength="3" data-bind="disable: quantityFixed, value: quantity, valueUpdate: 'afterkeypress', enterkey: $parent.quantityEnterKey.bind($data, $data)">
                                </div>
                            </div>
                            <div class="row" style="background-color: white;">Satıcı:<a href="#">New Dog</a></div>
                            
                        </div>
                    
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div  class=col-sm-3 style="background-color: coral;padding: 20px;">
                
                <div style="text-align: center;" ><h3>Sipariş Özeti</h3></div style="float:right;">
                <div style="text-align:center">
                    <p data-bind="text: cartItemTotalQuantity">1 ürün</p>
                </div>
                <div style="text-align:center">
                    <p data-bind="text: cartItemTotalQuantity"><p>Fiyat</p></p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>69,90 TL</p>
                </div>
                <div style="text-align:center">
                    <p data-bind="text: cartItemTotalQuantity">Kargo</p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>0 TL</p>
                </div>
                <div style="text-align:center">
                    <p data-bind="text: cartItemTotalQuantity">Net Tutar</p>
                </div>
                <div style="text-align: center;font-size: 20;"><p>69.90 TL</p>
                </div>
                <div class="text-center" style="width: 100%;">
                    <a href="paymentadress.php"><button type="button" class="btn btn-block btn-primary btn-lg ">Ödemeye Geç</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>