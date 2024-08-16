<?php
include 'actions/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- leaflet css -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

  <!-- leaflet js -->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Raleway&display=swap" rel="stylesheet">

  <!-- fontawesome icon -->
  <script src="https://kit.fontawesome.com/9afba118d6.js" crossorigin="anonymous"></script>

  <title>Eycha Guest House | Landing Page</title>
</head>

<body>
  <!-- navbar -->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Eycha Guest House</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link item-scroll" id="btn-tentang" href="#tentang">Tentang</a>
            <a class="nav-item nav-link item-scroll" id="btn-keunggulan" href="#keunggulan">Keunggulan</a>
            <a class="nav-item nav-link item-scroll" id="btn-testimoni" href="#testimoni">Testimoni</a>
            <a class="nav-item btn btn-light tombol tombol-nav" href="pages/sign-up.php" tabindex="-1" aria-disabled="true">Daftar</a>
            <a class="nav-item btn btn-light tombol tombol-nav" href="pages/sign-in.php" tabindex="-1" aria-disabled="true">Masuk</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- navbar end -->

  <main>

    <?php

    $query = "SELECT * FROM info_kost";
    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_array($result)) {

    ?>

      <!-- jumbotron -->
      <div class="jumbotron jumbotron-atas jumbotron-fluid" id="jumbotron">
        <div class="container banner-tittle">
          <h3>WELCOME TO</h3>
          <h1 class="display-4 text-uppercase"><?php echo $data['nama_kost']; ?></h1>
          <p class="lead"><?php echo $data['deskripsi_kost']; ?></p>
          <a href="pages/kamar-tersedia.php" class="btn up-1 btn-jumbotron">Cek Ketersediaan Kamar</a>
        </div>
      </div>
      <!-- jumbotron -->

    <?php } ?>

    <section id="tentang">
      <!-- tentang -->
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h2 class="tentang pt-5">Eycha Guest House
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="text-muted text-center mt-2 ">Mengapa harus kost di Eycha Guest House?</p>
          </div>
        </div>
        <div class="row">
          <div class="col col-12 col-md-6 pb-3">
            <!-- img preview1 -->
            <img src="img/logo.jpg" class="img-fluid mt-n3" alt="Eychakost Mockup" style="width: 80%; height: auto;">
          </div>
          <div class="col col-12 col-md-6 pt-md-3 mt-md-5 pr-5">
            <!-- deskripsi -->
            <h4 class="font-weight-bold">Lokasi Strategis</h4>
            <p class="text-muted">terletak di lokasi yang strategis, Eycha Guest House mudah diakses dari berbagai tempat.</p>
            <p class="font-weight-bold text-break">
              <i class="fas fa-check-circle text-success"></i> Rumah sakit <br>
              <i class="fas fa-check-circle text-success"></i> Minimarket <br>
              <i class="fas fa-check-circle text-success"></i> Stasiun kereta <br>
              <i class="fas fa-check-circle text-success"></i> Kampus <br>
              <i class="fas fa-check-circle text-success"></i> Pusat perbelanjaan
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- tentang -->

    <!-- keunggulan atas-->
    <div class="container-fluid bg-light pt-5 pb-4">
      <div class="container">
        <div class="row">
          <!-- kiri -->
          <div class="col col-12 col-md-6">
            <!-- kiri atas -->
            <div class="row">
              <div class="col col-2">

                <i class="fas fa-wifi ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Wifi</h6>
                <p class="text-muted">
                  koneksi WiFi yang stabil dan cepat agar memenuhi kebutuhan penghuni
                </p>
              </div>
            </div>

            <!-- kiri bawah -->
            <div class="row mt-md-4">
              <div class="col col-2">
                <i class="fas fa-user-shield ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Lingkungan yang Aman</h6>
                <p class="text-muted">
                  Keamanan penghuni merupakan prioritas utama di Eycha Guest House.
                  Dengan adanya CCTV keamanan yang terjamin dan pengawasan yang ketat, Anda dapat tinggal dengan tenang dan nyaman.
                </p>
              </div>
            </div>
          </div>

          <!-- kanan -->
          <div class="col col-12 col-md-6">
            <!-- kanan atas -->
            <div class="row">
              <div class="col col-2">

                <i class="fas fa-utensils ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Dapur bersama</h6>
                <p class="text-muted">
                  penghuni tidak perlu mengeluarkan biaya ekstra untuk membeli peralatan dapur pribadi.
                  Mereka bisa menggunakan fasilitas seperti kompor, kulkas, microwave, dan alat masak lainnya,
                  yang secara signifikan mengurangi biaya hidup.
                </p>
              </div>
            </div>

            <!-- kanan bawah -->
            <div class="row">
              <div class="col col-2">
                <i class="fas fa-car ikon-besar"></i>
              </div>
              <div class="col col-10">
                <h6 class="font-weight-bold">Tempat parkir yang luas</h6>
                <p class="text-muted">
                  Area parkir yang luas membuat penghuni merasa nyaman karena mereka tidak perlu khawatir
                  mencari tempat parkir yang sesak atau jauh dari kosan. Penghuni dapat dengan mudah memarkir
                  kendaraan mereka di tempat yang aman, mengurangi risiko pencurian atau kerusakan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- keunggulan atas-->

    <div class="container bg-keunggulan" id="keunggulan">
      <!-- keuunggulan deskripsi -->
      <div class="row mt-5">
        <div class="container">
          <h5 class="font-weight-bold text-center">Fasilitas unggulan Eycha Guest House</h5>
          <p class="text-muted text-center">Menawarkan sejumlah fasilitas unggulan yang meningkatkan kenyamanan
            dan pengalaman menginap para tamunya.<br>
            Berikut adalah beberapa fasilitas unggulan yang ditawarkan
            oleh<span class="coklat font-weight-bold"> Eycha Guest House:</span></p>

        </div>
      </div>

      <!-- keunggulan dengan gambar -->
      <div class="row mt-3 pb-5">
        <!-- kiri -->
        <div class="col col-12 col-md-6">

          <div class="row">
            <div class="col col-2">
              <div class="lingkar">1</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Tersedia ruang santai roof top</h6>
              <p class="text-muted ml-2">
                Menawarkan pemandangan spektakuler, serta menjadi tempat yang sempurna untuk bersantai sambil menikmati panorama kota
                atau lingkungan sekitarnya.</p>
            </div>
          </div>

          <div class="row">
            <div class="col col-2">
              <div class="lingkar mt-2">2</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Tersedia kamar mandi dalam</h6>
              <p class="text-muted ml-2">
                memberikan privasi yang lebih tinggi kepada penghuni,
                memungkinkan mereka untuk merasa lebih nyaman dan aman saat menggunakan fasilitas
                tersebut tanpa harus berbagi dengan orang lain.</p>
            </div>
          </div>

          <div class="row">
            <div class="col col-2">
              <div class="lingkar mt-2">3</div>
            </div>
            <div class="col col-10">
              <h6 class="font-weight-bold ml-2">Tersedia pendingin ruangan disetiap kamar</h6>
              <p class="text-muted ml-2">
                selama cuaca panas atau musim panas yang ekstrem. Ini membantu penghuni untuk tidur nyenyak
                dan beristirahat dengan baik. Serta meningkatkan produktivitas penghuni, baik untuk belajar,
                bekerja, atau beraktivitas lainnya.</p>
            </div>
          </div>
        </div>

        <!-- kanan -->
        <div class="col col-12 col-md-6">
          <img src="img/fasilitas.jpg" class="img-fluid mt-n3 scale" alt="Eychakost Mockup" style="width: 80%; height: auto;">
        </div>

      </div>
    </div>


    <!-- testimoni -->
    <!-- jumbotron -->
    <div class="jumbotron testimoni jumbotron-fluid" id="testimoni">
      <div class="container item">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center font-weight-bold coklat">Testimoni</h2>
            <p class="text-center text-light">Apa kata mereka yang telah nge-kost di Eycha Guest House?</p>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="testmonial_slider_area text-center owl-carousel">
                  <div class="row">
                    <div class="col col-12 col-md-6">
                      <div class="single_testimonial">
                        <div class="pic">
                          <!-- Menggunakan ikon user dari Font Awesome -->
                          <i class="fas fa-user" style="font-size: 70px;"></i>
                        </div>
                        <h5 class="testimonial-title">Yuki Rizkylawati</h5>
                        <span class="test_designation">Penyewa kost Eycha Guest House</span>
                        <p class="text-muted">
                          Super nyaman, bersih, rapi, teratur. Mantappp poll buat kost satu ini
                        </p>
                      </div><!-- end Single Testimonials -->
                    </div>

                    <div class="col col-12 col-md-6">
                      <div class="single_testimonial">
                        <div class="pic">
                          <!-- Menggunakan ikon user dari Font Awesome -->
                          <i class="fas fa-user" style="font-size: 70px;"></i>
                        </div>
                        <h5 class="testimonial-title">Octavia Dewi</h5>
                        <span class="test_designation">Penyewa kost Eycha Guest House</span>
                        <p class="text-muted">
                        Kosannya nyaman banget dan supeeer bersih! Falisitas lengkap, dan daerah sekitarnya juga 
                        banyak dagang makanan jadi gak susah nyari makanan. pokoknya recommended!
                        </p>
                      </div><!-- end Single Testimonials -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jumbotron -->
    <!-- testimoni -->


    <!-- bergabung -->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center font-weight-bolder mt-3 mb-3">TUNGGU APALAGI? KOST DI EYCHA GUEST HOUSE!</h2>
        </div>
      </div>
      <div class="row">
        <a href="https://api.whatsapp.com/send?phone=6287886844430" target="_blank" class="btn btn-gradient-big mb-5">PESAN SEKARANG</a>
      </div>
    </div>
    <!-- bergabung -->
  </main>

  <!-- footer -->
  <footer>
    <!-- footer atas -->
    <div class="container-fluid bg-dark text-light m-0 pt-4 pl-3">
      <div class="row">
        <div class="col col-12 col-md-3">
          <h5 class="text-white font-weight-bold h6 mt-2">Apa itu Eycha Guest House?</h5>
          <p class="text-light smaller-text h6">Kosan khusus putri yang luas dengan fasilitas modern, 
            dan lokasi strategis. Cocok untuk pelajar dan pekerja profesional yang mencari privasi, keamanan, 
            dan suasana yang mendukung produktivitas. Tersedia juga ruang bersama untuk interaksi 
            sosial dan relaksasi.</p>
        </div>
        <div class="col col-12 col-md-3">
          <h5 class="text-white font-weight-bold h6 mt-2">Mengapa harus Kost Eycha Guest House?</h5>
          <p class="text-light smaller-text h6">Menawarkan sejumlah fasilitas unggulan yang meningkatkan kenyamanan 
            serta berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan bagi para tamunya.</p>
        </div>

        <?php

        $query = "SELECT * FROM info_kost";
        $result = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_array($result)) {

        ?>

          <div class="col col-12 col-md-3 footer-atas">
            <h5 class="text-light font-weight-bold h6 mt-2"><?php echo $data['nama_kost']; ?></h5>
            <p class="text-light smaller-text h6">
              <i class="fas fa-map mr-1"></i> <?php echo $data['alamat_kost']; ?>, <?php echo $data['kota_kost']; ?>, <?php $data['provinsi_kost']; ?>
            </p>
            <p class="text-light smaller-text h6">
              <i class="fas fa-phone-alt mr-1"></i>
              <?php echo $data['no_kost']; ?>
            </p>
            <p class="text-light smaller-text h6">
              <i class="fas fa-envelope mr-1"></i>
              <?php echo $data['email_kost']; ?>
            </p>
          </div>

        <?php } ?>

        <div class="col col-12 col-md-3">
          <div id="mapid" class="mt-2"></div>
        </div>
      </div>
      <div class="row footer-bawah pt-3 pl-3 mt-3">
        <p class="text-muted">Powered by Tiarawahyuni </p>
      </div>
    </div> <!-- akhir footer atas -->
  </footer>

  <d iv class="button-up">
    <i class="fas fa-arrow-circle-up"></i>
    </div>

    <!--        Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
      var mymap = L.map('mapid').setView([-6.351099740588589, 106.85095572604102], 15);

      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(mymap);


      var marker = L.marker([-6.351099740588589, 106.85095572604102]).addTo(mymap);

      marker.bindPopup("<b>Eycha Guest House!</b><br>Jl. Kol. Pol Pranoto No.36, Depok").openPopup();


      // Header scroll class
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('#header').addClass('header-scrolled');
        } else {
          $('#header').removeClass('header-scrolled');
        }
      });

      if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
      }

      <?php

      $query = "SELECT * FROM info_kost";
      $result = mysqli_query($conn, $query);

      while ($data = mysqli_fetch_array($result)) {

      ?>

        $(function() {
          $(".jumbotron-atas").css({
            "background-image": "url(img/<?php echo $data['foto_kost'] ?>)"
          })
        })

      <?php } ?>
    </script>
</body>

</html>