<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project - HackersPoulette</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- css -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/> <!-- mettre le css bootstrap en premier pour éviter que notre css ne l'écrase-->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/product.css" /> <!-- création de notre propre feuille de style pour apporter plus de modifications-->
    <script src="assets/js/main.js"></script>
</head>
<body>
    <!-- Début de la navigation-->
    <?php
    include 'navbar.php';
    ?>
    <!-- Fin de la navigation -->

    <!-- button products -->
    <div class="container marge2">
        <div class="row mt-3">
            <div class="col-md-offset-4 col-md-4 scale-in-center">
                <button class="btn btn-dark">Produits</button>
            </div>
        </div>
    </div>

    <!-- End button products-->

    <!-- Main layout-->
    <main class="mt-4">

    <!--Main container-->
    <div class="container">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

          <div class="view overlay z-depth-1-half scale-in-center">
            <img src="https://www.distrelec.ch/Web/WebShopImages/landscape_large/87/fa/raspberry-pi-b-plus-30001887fa.jpg" class="card-img-top" alt="">
            <div class="mask rgba-white-light"></div>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 mb-4 scale-in-center">

          <h2 class="main-title">RASPBERRY PI MOD B+</h2>
          <hr>
          <p class="main-text">1.4GHz 64-bit processeur quad-core, réseau local sans fil double bande, Bluetooth 4.2/BLE, Ethernet plus rapide et prise en charge Power-over-Ethernet<br>
          Le Raspberry Pi 3 Model B+ est le dernier produit de la gamme Raspberry Pi 3.
Les débutants peuvent commencer par le gestionnaire d’installation du système d’exploitation NOOBS</p>
          <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b-plus/" class="btn btn-blue">Plus d'infos</a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 scale-in-center2">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2019/01/CM304-462x322.jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Module de calcul 3+/32GB</h4>
              <!--Text-->
              <p class="card-text">Le module de calcul 3+ (CM3+) est un modèle B+ sous forme flexible, destiné aux applications industrielles. Le module de calcul contient les tripes d’un Raspberry Pi 3 B+</p>
              <a href="#!" class="btn btn-blue">Achetez maintenant</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 scale-in-center2">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2018/11/3A-1-462x322.jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Raspberry Pi 3 Model A+</h4>
              <!--Text-->
              <p class="card-text">Processeur quad-core 64-bit de 1.4GHz, réseau sans fil double bande, Bluetooth 4.2/BLE dans le même format mécanique que l'illustre et estimé Raspberry Pi 1 modèle A+</p>
              <a href="#" class="btn btn-blue">Achetez maintenant</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 scale-in-center2">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2017/05/Pi-Zero-W-Tilt-462x322.jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Raspberry Pi Zero W</h4>
              <!--Text-->
              <p class="card-text">Le Raspberry Pi Zero W prolonge la famille Pi Zero et est livré avec une connectivité sans fil LAN et Bluetooth. Un petit Raspberry Pi qui est assez abordable pour n’importe quel projet!</p>
              <a href="#" class="btn btn-blue">Achetez maintenant</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

       <!-- button accessories -->
    
        <div class="row mt-3 scale-in-center3">
            <div class="col-md-offset-4 col-md-4">
                <button class="btn btn-dark">Les accessoires Raspberry Pi</button>
            </div>
        </div>
    

    <!-- End button accessories-->

      <!--Grid row-->
      <div class="row mt-4 scale-in-center3">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2017/05/Power-supply-1-462x322.jpg" class="card-img-top"
                alt="">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body scale-in-center3">
              <!--Title-->
                <div class="title-h4">
                    <h4 class="card-title">Raspberry Pi Alimentation électrique Universelle</h4>
                    <!--Text-->
                    <p class="card-text">L’alimentation universelle micro USB officielle et recommandée pour Raspberry Pi</p>
                    <a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" class="btn btn-blue">Achetez maintenant</a>
                </div>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 scale-in-center3">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2017/05/Official-Case-no-Pi-1-462x322.jpg" class="card-img-top"
                alt="accessoire ">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body scale-in-center3">
              <!--Title-->
              <h4 class="card-title">Raspberry Pi 3 Case</h4>
              <!--Text-->
              <p class="card-text">L’étui officiel Raspberry Pi pour le modèle Raspberry Pi 3 B et le modèle B+, ce modèle est disponible en rouge/blanc ou noir/gris</p>
              <a href="https://www.raspberrypi.org/products/raspberry-pi-3-case/?variant=raspberry-pi-3-case" class="btn btn-blue">Achetez maintenant</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 scale-in-center3">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="https://www.raspberrypi.org/app/uploads/2019/03/Red_White-Mouse-462x322.jpg" class="card-img-top"
                alt="accessoire souris blanche">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h4 class="card-title">Souris Raspberry Pi</h4>
              <!--Text-->
              <p class="card-text">La souris officielle Raspberry Pi, disponible en rouge framboise et blanc, ou noir et gris. La souris a des boutons qui activent les ...</p>
              <a href="https://www.raspberrypi.org/products/raspberry-pi-mouse/?variant=raspberry-pi-mouse-rw" class="btn btn-blue">Achetez maintenant</a>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
    <!--Main container-->

  </main>
  <!--Main layout-->

  
    <!-- Le footer-->
    <?php
    include 'footer.php';
    ?>

<!-- javacript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>