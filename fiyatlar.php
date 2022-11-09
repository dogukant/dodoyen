<?php 
$sayfa="Fiyatlar";
include 'include/db.php'; 

$sorgu=$baglanti->prepare("SELECT * FROM fiyatlar");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$tanimlama=$sonuc["tanimlama"];
$anahtar=$sonuc["anahtar"];

include 'include/header.php';
?>

<?php

$sorgu2=$baglanti->prepare("SELECT * FROM fiyatlar");
$sorgu2->execute();
while ($sonuc2=$sorgu2->fetch()) {
                        
 ?>     
 
<!-- Pricing section-->
<section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder"><?php echo $sonuc2["baslik"]; ?></h2>
                    <p class="lead mb-0"><?php echo $sonuc2["alt_baslik"]; ?></p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"><?php echo $sonuc2["uyelik"]; ?></div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold"><?php echo $sonuc2["fiyat"]; ?></span>
                                    <span class="text-muted">/ <?php echo $sonuc2["uyelik_sure"]; ?></span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong><?php echo $sonuc2["uyelik_sube"]; ?></strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <?php echo $sonuc2["uyelik_saatler"]; ?>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <?php echo $sonuc2["uyelik_misafir"]; ?>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <?php echo $sonuc2["uyelik_olcum"]; ?>
                                    </li>
                                 
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Paketi seç</a></div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            </section>
            
                    <?php } ?>

                    <?php /*
                    <!-- Pricing card pro-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    Pro
                                </div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$9</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>5 users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Free linked domain
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-x"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                                <div class="mb-3">
                                    <span class="display-4 fw-bold">$49</span>
                                    <span class="text-muted">/ mo.</span>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited users</strong>
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        5GB storage
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited public projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Community access
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Unlimited private projects
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        Dedicated support
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check text-primary"></i>
                                        <strong>Unlimited</strong>
                                        linked domains
                                    </li>
                                    <li class="text-muted">
                                        <i class="bi bi-check text-primary"></i>
                                        Monthly status reports
                                    </li>
                                </ul>
                                <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Choose plan</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        */?>

        <?php include 'include/footer.php'; ?>