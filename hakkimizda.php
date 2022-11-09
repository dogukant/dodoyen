<?php 
$sayfa="Hakkimizda";
include 'include/db.php'; 

$sorgu=$baglanti->prepare("SELECT * FROM hakkimizda");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$anahtar=$sonuc["anahtar"]; 

include 'include/header.php';
?>

  <!-- Header-->
  <header class="bg-dark py-5">
  <br>
  <br>
            <div class="container px-">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2"><?php echo $sonuc["baslik"]; ?></h1>
                            <p class="lead text-white-50 mb-4"><?php echo $sonuc["alt_baslik"]; ?></p>
                            <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="subeler">Şubelerimizi Gez</a>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
           
           
        </header>
        

        <?php include 'include/footer.php'; ?>



















