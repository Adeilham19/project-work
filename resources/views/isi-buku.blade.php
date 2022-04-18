<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Backup CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/isi-buku.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Isi Buku</title>

  </head>
  <body>
    @extends('layouts.app')
    @section('title', 'Rak Saya')
    @section('content')

    <!--Breadcrumb-->
    <div class="container">
      <div class="py-5">
  <a href="{{ url()->previous() }} "> <button type="button" class="btn py-2 px-3 text-white  " style="background-color: #1F3986"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
    </svg> <span > Kembali </span> </button> </a>

   </div>
    <!--Akhir Breadcrumb-->
    <div class="container">
      <iframe src="media/tes.pdf#toolbar=0" width="750px" height="750px" style="margin-left: 275px;   border-radius: 5px;">
      </iframe>
    </div>
    </div>
     
    <!--<h1>PDF Example</h1>
    <p>Open a PDF file <a href="../Testag/media/tes.pdf#toolbar=0">example</a>.</p> -->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @endsection
  </body>
</html>