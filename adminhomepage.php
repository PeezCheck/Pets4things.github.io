<?php

?>
<html>

<head>
    <title>Admin Home Page</title>
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
                <h1 class="display-5">İşlem Seçiniz</h1> <br/>
                <form>    
                        <a href="addproduct.php"><button type=button class="btn btn-primary btn-block " >Ürün Ekle</button></a> <br/> 

                        <a href="delproduct.php"><button type=button class="btn btn-primary btn-block " >Ürün Sil</button></a> <br/> 

                        <a href="listproduct.html"><button type=button class="btn btn-primary btn-block ">Stok Bilgisi</button> </a>
                </form>
           
             
            </div>
        
        </div>
       
    </div>

</body>

</html>