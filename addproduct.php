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
<?php include 'header.php' ?>
    <div class="container">
        <div class="row">
            <div class="col border text-center p-5 m-1">
                <h1>Eklenecek Ürünün Özellikleri Giriniz</h1> <br/>
            <form action="urunekle.php" method="POST">
                <div class="form-group">

                    <label for="#">Ürün Adı</label>
                    <input type="text"  id="addproductadinp" class="form-control" name="addproductad">
                  
                </div>
                <div class="form-group">

                    <label for="">Ürün Satıcı Adı</label>
                    <input type="text"  id="addproductsatadinp" class="form-control" name="addproductsatad" >

                </div>
                <div class="form-group">

                  <label for="">Fiyatı</label>
                  <input type="text"  id="addproductfiyatinp" class="form-control" name="addproductfiyat">
                
                </div>
                
                <div class="form-group">

                  <label for="">Resim</label>
                  <input type="file" class="form-control-file border" name="addproductresimurl">
                  
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ürünü Ekle</button>
            </form>
            </div>
        </div> <br/> <br/>
        
    </div>

</body>
</html>