<?php 
$sayfa="Ana Sayfa";
include 'include/db.php'; 

$sorgu=$baglanti->prepare("SELECT * FROM anasayfa");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$anahtar=$sonuc["anahtar"];

include 'include/header.php';
?>


  <!-- Header-->
  <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2"><?php echo $sonuc["ust_baslik"]; ?></h1>
                            <p class="lead text-white-50 mb-4"><?php echo $sonuc["aciklama"]; ?></p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="dodofitliol"><?php echo $sonuc["satis_link"]; ?></a>
                                <a class="btn btn-outline-light btn-lg px-4" href="subeler"><?php echo $sonuc["bilgi_link"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
      
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Fiyat Düşük Kalite Yüksek</h2>
                        <p>Dodofit sizlere çok uygun fiyatlar sunar ve buna karşılık çok fazla kalite sunar</p>
                        <a class="text-decoration-none" href="dodofitliol">
                            Fiyatları Gör
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Biz Kimiz?</h2>
                        <p>Tecrübeli ekibimiz ve sayısız imkanlarımız ile hizmetinizdeyiz</p>
                        <a class="text-decoration-none" href="hakkımızda">
                            Hakkımızda
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Şubelerimiz</h2>
                        <p>Maltepe, Ataşehir ve Kadıköy olmak üzere 3 adet şubemiz sizlerin hizmetinde</p>
                        <a class="text-decoration-none" href="subeler">
                            Şubeleri incele
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
       
       
        <?php include 'include/footer.php';  ?>
