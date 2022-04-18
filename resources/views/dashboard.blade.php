<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/40788522df.js" crossorigin="anonymous"></script>

    <!--Backup CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/dashboard.css">
    <!--LightSlider CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/lightslider.css">
    <!--Jquery-->
    <script type="text/javascript" src="dists/js/jquery.js"></script>
    <!--LightSlider JS-->
    <script type="text/javascript" src="dists/js/lightslider.js"></script>
    <title>Beranda</title>
  </head>
  <body>
    @extends('layouts.app')
    @section('content')  
      <div id="homepage-slider">
        <div class="slider-hero">
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
            <div class="slide">
                <div class="kotak"></div>
            </div>
        </div>
        <div class="slider-arrow">
            <ul>
                <div class="prev"><i class='fa fa-chevron-left' aria-hidden='true'></i></div>
                <div class="next"><i class='fa fa-chevron-right' aria-hidden='true'></i></div>
            </ul>
        </div>
    </div>
      <!--Akhir Carrousel-->

      <!--Kategori Pilihan-->
      <section id="category">
        <div class="container mt-5">
          <div class="row text-center mb-5">
            <div class="col">
              <h2>Kategori Pilihan</h2>
            </div>
          </div>
          <div class="row justify-content-center" >
            <div class="col-2">
              <a href="{{ url('daftar-buku') }}"><button type="button" class="  button-category" >BSE</button></a>
            </div>
            <div class="col-2">
              <a href="{{ url('daftar-buku') }}"><button type="button" class="  button-category">JURNAL</button></a>
            </div>
            <div class="col-2">
              <a href="{{ url('daftar-buku') }}"><button type="button" class="  button-category">MAJALAH</button></a>
            </div>
            <div class="col-2">
              <a href="{{ url('daftar-buku') }}"><button type="button" class="  button-category">PROSSIDING</button></a>
            </div>
          </div>
        </div>
      </section>
      <!--Akhir Kategori Pilihan-->

      
      <!--Pembaca Terbaik-->
      <div class="container mt-5" style="padding-top: 100px;">
        <div class="row text-center">
          <div class="col mt-5">
            <h2>Pembaca Terbaik</h2>
          </div>
        </div>
        <div class="row mt-5 justify-content-center" style="margin-left: 40px;">
          <div class="col-3">
            <div class="card" style="width: 14em;">
              <img src="img/profil-1.jpg" class="card-img-top" alt="..." style="height: 250px;">
              <div class="card-body">
                <h5 class="card-title">Nama</h5>
                <p class="card-text">Jumlah Buku</p>
                <p class="card-text" style="color: #e47710;">Waktu</p>
              </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 14em;">
            <img src="img/profil-1.jpg" class="card-img-top" alt="..." style="height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Nama</h5>
              <p class="card-text">Jumlah Buku</p>
              <p class="card-text" style="color: #e47710;">Waktu</p>
            </div>
        </div>
      </div>
        <div class="col-3">
          <div class="card" style="width: 14em;">
            <img src="img/profil-1.jpg" class="card-img-top" alt="..." style="height: 250px;">
            <div class="card-body">
              <h5 class="card-title">Nama</h5>
              <p class="card-text">Jumlah Buku</p>
              <p class="card-text" style="color: #e47710;">Waktu</p>
            </div>
        </div>
      </div>
    </div>
    <!--Akhir Pembaca Terbaik-->

    <!--Rekomendasi Buku-->
      <div class="container">
        <section style="padding-top: 120px;">
          <div class="col text-center" style="padding-bottom: 40px;">
            <h2>Rekomendasi Buku</h2>
          </div>
          <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-1.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class="  btn-baca">BACA</button>
                </div>
                <a href="#"></a>
              </div>
            </li>
            <li class="item-b">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-2.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class=" btn-baca">BACA</button>
                </div>
                <a href="#"></a>
              </div>
            </li>
            <li class="item-c">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-3.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class="  btn-baca">BACA</button>
                </div>
              </div>
            </li>
            <li class="item-d">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-4.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class="  btn-baca">BACA</button>
                </div>
              </div>
            </li>
            <li class="item-e">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-5.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class="  btn-baca">BACA</button>
                </div>
              </div>
            </li>
            <li class="item-f">
              <div class="box">
                <div class="slide-img">
                  <img src="img/cover-6.jpg" alt="" srcset="">
                  <div class="overlay">
                    <a href="#" class="read-btn">Baca</a>
                  </div>
                </div>
                <div class="detail-box"></div>
                <div class="type">
                  <h5>Judul</h5>
                  <p>Penerbit</p>
                  <button type="button" class="  btn-baca">BACA</button>
                </div>
              </div>
            </li>
          </ul>
      </section>
    </div>
 
    <!--Akhir Rekomendasi Buku-->







    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Script Link-->
    <script type="text/javascript" src="dists/js/dashboard.js"></script>

    
    <!-- Slick Carousel JS -->
    <script>

      $(document).ready(function() {
          $('.slider-hero').slick({
              slidesToShow: 3,
              centerMode: true,
              centerPadding: "0px",
              speed: 500,
              prevArrow: $('.prev'),
              nextArrow: $('.next')
          });
      });
      </script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      
    </script>
  </body>
</html>

@endsection