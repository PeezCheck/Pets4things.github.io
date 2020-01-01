<?php
session_start();
?>
<header>
  <div class="headerdiv" id="logo">
    <a href="mainpage1.php"><img class="logo" src="Resimler/testlogo.jpg"></a>
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
      <?php
      if ($_SESSION["logged"] == "false") {
      ?>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Giris Yap
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="userlogin.php">Uye Giris</a></li>
            <li><a href="signup.php">Kayıt ol</a></li>
            <li><a href="adminlogin.php">Admin Giris</a></li>
          </ul>
        </div>

      <?php
      } else if ($_SESSION["logged"] == "true") {
      ?>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo ($_SESSION["uye_ad"] . " " . $_SESSION["uye_soyad"]) ?>
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="adminhomepage.php">Admin Anasayfa</a></li>
            <li><a href="logout.php">Çıkış Yap</a></li>

          </ul>
        </div>

      <?php
      }
      ?>

    </div>

    <div class="hs">
      <div class="sepetbtndiv"></div>
      <a href="basket.php"><button class="btn btn-primary" id="sepetbtn">Sepet</button></a>
    </div>
  </div>
</header> <br /> <br />