@extends('layouts.app')
@section('title', 'Permintaan Buku')
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
  <h3 class="ms-4"> <img src="{{ asset('bootstrap/img/logo_book.svg') }}" alt="" width="40px"> Permintaan Buku  </h3>
  <p class="ms-5"><span class="ms-4"> Untuk permintaan buku agar disediakan di website, harap mengisi formulir di bawah ini:</span></p>
</div> 
<div class="row align-items-md-stretch px-5 ms-2"  >
     
    <div class="col-md-8">
      <div class="px-4 py-5 border border-dark rounded-3" style="height: 580px">
        <div class="mb-4">
            <h4  ">Data Pribadi</h4>
        </div>
            <form class="px-3">
               <div class="mb-3">
                   <label for="judul" class="form-label fw-normal "  >Judul</label>
                   <input type="text" class="form-control border-dark" id="judul" placeholder="" value="" required>
                </div>
                <div class="mb-3">
                  <label for="penulis" class="form-label fw-normal "  >Penulis</label>
                  <input type="text" class="form-control border-dark" id="penulis" placeholder="" value="" required>
               </div> 
               <div class="mb-3">
                <label for="penerbit" class="form-label fw-normal "  >Penerbit</label>
                <input type="text" class="form-control border-dark" id="penerbit" placeholder="" value="" required>
              </div>
               <div class="mb-5">
                 <label for="tahun-terbit" class="form-label fw-normal">Tahun Terbit </label>
                 <input type="number" class="form-control  border-dark" id="tahun-terbit"  required> 
               </div>   
              <div class="  text-end"> 
                  <button type="button" class="btn  text-white rounded px-5 py-2" style="background-color: #E47710">Kirim</button>
              </div>
              
              
             </form>
         </div>
    </div>
    </div> 
  </div>
  </div>
@endsection