@extends('layouts.app')
@section('title', 'Notifikasi')
@section('content')
<div class="container">
  <div class="py-5">
<div class="mb-5">
  <button type="button" class="btn py-2 px-3 text-white  " style="background-color: #1F3986"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
    </svg> <span > Kembali </span> </button>
</div>
<div class="mb-5">
  <h3 class="ms-4"> <img src="{{ asset('bootstrap/img/logo_book.svg') }}" alt="" width="40px"> Notifikasi  </h3>
  <p class="ms-5"><span class="ms-4"> Notifikasi pesan dari Admin akan muncul di sini</span></p>
</div> 

<div class="ms-5">   
  <div class="accordion ms-4 border-top border-start border-end   border-dark" id="accordionExample" style="width: 80%">
    <div class="accordion-item">
      <h2 class="accordion-header border-bottom border-dark" id="headingOne">
        <button class="accordion-button mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="row col-12 my-auto">
          <div class="col-md-8">
          <strong>Buku pelajaran kelas 12 mata pelajaran FISIKA telah tersedia! </strong>
          </div>   
          <div class="col-md-3">
          <p>14 Maret 2022 10.00 AM </p>  
          </div>
          </div>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body border-bottom border-dark">
          <p> Ayo ikuti lomba cipta puisi dan baca puisi yang diadakan oleh Perpustakaan SMK Wikrama Bogor. Untuk kriteria syarat pendaftar dan informasi lainnya dapat di cek pada Instagram  @perpustakaan_wikrama</p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header border-bottom border-dark" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="row col-12 my-auto">
          <div class="col-md-8">
          <strong>Lengkapi data dirimi untuk memudahkan kami mengenalmu! </strong>
          </div>   
          <div class="col-md-3">
          <p>14 Maret 2022 10.00 AM </p>  
          </div>
          </div>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body border-bottom border-dark">
          Ayo ikuti lomba cipta puisi dan baca puisi yang diadakan oleh Perpustakaan SMK Wikrama Bogor. Untuk kriteria syarat pendaftar dan informasi lainnya dapat di cek pada Instagram  @perpustakaan_wikrama
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header border-bottom border-dark " id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="row col-12 my-auto">
          <div class="col-md-8">
          <strong>Perpustakaan SMK Wikrama Bogor mengadakan lomba puisi </strong>
          </div>   
          <div class="col-md-3">
          <p>14 Maret 2022 10.00 AM </p>  
          </div>
          </div> 
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body   border-bottom border-dark">
          <p> Ayo ikuti lomba cipta puisi dan baca puisi yang diadakan oleh Perpustakaan SMK Wikrama Bogor. Untuk kriteria syarat pendaftar dan informasi lainnya dapat di cek pada Instagram  @perpustakaan_wikrama</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection