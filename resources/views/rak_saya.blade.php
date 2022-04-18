@extends('layouts.app')
@section('title', 'Rak Saya')
@section('content')
<div class="container">
  <div class="py-5">
<div class="mb-5">
  <a href="{{ url()->previous() }} "> <button type="button" class="btn py-2 px-3 text-white  " style="background-color: #1F3986"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
    </svg> <span > Kembali </span> </button> </a>
</div>
<div class="mb-5">
  
  <h3 class="ms-4"> <img src="{{ asset('bootstrap/img/logo_book.svg') }}" alt="" width="40px"> Rak Saya  </h3>
  <p class="ms-5"><span class="ms-4"> Halaman ini terdapat buku yang anda tambahkan ke Rak Saya</span></p>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-5 rounded ms-1">
    <div class="col">
        <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
      
            <div class="card-body">
              <h5 class="card-title">Judul</h5>
              <p class="card-text " style="color: #E47710">Pengarang</p>
               
  
             <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
             
            </div>
          </div>
    </div>

    <div class="col">
      <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
    
          <div class="card-body">
            <h5 class="card-title">Judul</h5>
            <p class="card-text " style="color: #E47710">Pengarang</p>
             

            <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
           
          </div>
        </div>
  </div>

  <div class="col">
    <div class="card">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
  
        <div class="card-body">
          <h5 class="card-title">Judul</h5>
          <p class="card-text " style="color: #E47710">Pengarang</p>
           

         <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
         
        </div>
      </div>
</div>

<div class="col">
  <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>

      <div class="card-body">
        <h5 class="card-title">Judul</h5>
        <p class="card-text " style="color: #E47710">Pengarang</p>
         

        <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
       
      </div>
    </div>
</div>

<div class="col">
        <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
      
            <div class="card-body">
              <h5 class="card-title">Judul</h5>
              <p class="card-text " style="color: #E47710">Pengarang</p>
               
  
              <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
             
            </div>
          </div>
    </div>

    <div class="col">
      <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
    
          <div class="card-body">
            <h5 class="card-title">Judul</h5>
            <p class="card-text " style="color: #E47710">Pengarang</p>
             

            <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
           
          </div>
        </div>
  </div>

  <div class="col">
        <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
      
            <div class="card-body">
              <h5 class="card-title">Judul</h5>
              <p class="card-text " style="color: #E47710">Pengarang</p>
               
  
             <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
             
            </div>
          </div>
    </div>

    <div class="col">
      <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Isi Foto" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Isi Foto</text></svg>
    
          <div class="card-body">
            <h5 class="card-title">Judul</h5>
            <p class="card-text " style="color: #E47710">Pengarang</p>
             

            <div class=" ">
                <button type="button" class="btn btn-sm text-white rounded " style="width:48%; background-color:#1F3986 "  >HAPUS</button>
                <a href="{{ url('isi-buku') }} "><button type="button" class="btn btn-sm text-white rounded float-end " style="width:48%; background-color: #E47710"  >BACA</button></a>
            </div>
           
          </div>
        </div>
  </div>
</div>
</div>
  
    
    
 
 
@endsection