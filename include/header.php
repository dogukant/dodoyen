<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dodofit'li Ol</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">Dodofit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link <?php if ($sayfa=="Ana Sayfa") echo "active" ?>" aria-current="page" href="anasayfa">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($sayfa=="Fiyatlar") echo "active" ?>" href="dodofitliol">Dodofit'li Ol</a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($sayfa=="Hakkimizda") echo "active" ?>" href="hakkımızda">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($sayfa=="İletisim") echo "active" ?>" href="iletisim">İletişim</a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($sayfa=="Subeler") echo "active" ?>" href="subeler">Şubelerimiz</a></li>
                    </ul>
                </div>
            </div>
        </nav>

  
  
