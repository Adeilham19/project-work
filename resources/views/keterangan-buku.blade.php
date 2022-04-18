<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Backup CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/keterangan-buku.css"> 
  </head>
  <body>
    @extends('layouts.app')
    @section('title', 'Keterangan Buku')
    @section('content') 
<div class=" ">
    <!--Breadcrumb-->
    <div class="jumbotron">
        <div class="container">
            <div class="breadcrumb">
                <a href="#"><img src="img/home-icon.png" alt="" srcset=""></a>
                <a href="#">Daftar Buku</a>
                <a href="#">Isi Buku</a>
            </div>
        </div>
        </div>
    </div>
    <!--Breadcumb-->

    <!--Keterangan Buku-->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/cover-1.jpg" class="" alt="..." style="height: 350px; width: 250px; border-radius: 10px; margin-top: -50px;">
            </div>
        </div>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-8">
                <div class="detail">
                    <h2><img src="img/logo-judul.png" class="" alt="..." style="height: 50px; width: 50px; padding: 2px; margin-top: -10px;">Judul Buku</h2>
                    <div class="content">
                        <h4>Deskripsi</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt modi accusantium facere assumenda autem tempora repudiandae fugit omnis perferendis atque eveniet aperiam voluptas qui, neque possimus. Officiis, ad dolorum.</p>
                    </div>
                    <div class="content">
                        <h4>Penerbit</h4>
                        <p>Perpustakaan Andalan</p>
                    </div>
                    <div class="content">
                        <h4>Penulis</h4>
                        <p>John Lenon</p>
                    </div>
                    <div class="content">
                        <h4>Jumlah Halaman</h4>
                        <p>324 Halaman</p>
                    </div>
                    <div class="content">
                        <h4>Bahasa</h4>
                        <p>Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
    <!--Akhir Keterangan Buku-->
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @endsection
</body>
</html>