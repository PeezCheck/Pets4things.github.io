<?php

?>
<html>

<head>
  <title>Anasayfa</title>
  <link href="ana.css" type="text/css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="jquery.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="container" style="width:40%;height:60%;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="Resimler/2.jpg" alt="Los Angeles" style="width:100%; height:100%">
        </div>

        <div class="item">
          <img src="Resimler/4.jpg" alt="Chicago" style="width:100%;height:100%">
        </div>

        <div class="item">
          <img src="Resimler/10.jpg" alt="New york" style="width:100%;height:100%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br /> <br />
  <div class="container" style="width:60%">
    <div class="row">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "PeezCheck61.";
      $dbname = "pets4things";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM Urun";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          
          
        echo '<div class="col-sm-3 text-center" style="background-color:rgb(255,0,0)">';
        ?>
                <br/><div class="p-3"><a href="product.php"><img  src="Resimler/<?php echo $row["urun_resimurl"] ?>" width="300" height="200"></div></a><br/>
                <p style="font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" name="urunadi" class="card-text"><?php echo $row["urun_ad"] ?><p>
                    <p style="font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="card-text"><?php echo $row["urun_saticiad"] ?><p>
                        <p style="font-size:20px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="card-text"><?php echo $row["urun_fiyat"] ?>₺<p>
            
      <?php
        echo '</div>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();


      ?>

    </div>
  </div>

</body>

</html>