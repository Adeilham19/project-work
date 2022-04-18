@extends('layouts.app')
@section('title', 'Profil')
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
  <h3 class="ms-4"> <img src="{{ asset('bootstrap/img/logo_book.svg') }}" alt="" width="40px"> Profil Pengguna Akun  </h3>
</div> 
<section class="pt-4 pb-5   text-center container">
    <div class="mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
    </div> 
    <div class=" ">
        <button type="button" class="btn border border-3  rounded text-black  py-2 fw-normal me-3" style="background-color:white; width: 130px " >Batal</button>
        <button type="button" class="btn  rounded text-white   py-2 " style="background-color: #E47710; width: 130px "  >Simpan</button>
    </div>
  </section>
<div class="row align-items-md-stretch g-5 px-4"  >
    <div class="col-md-6">
      <div class=" px-4 py-5  border border-dark rounded-3" style="height: 500px">
        <div class="mb-4">
         <h4  >Data Akun</h4>
        </div>
         <form class="px-3"  >
            <div class="mb-3">
                <label for="username" class="form-label fw-normal "  >Username</label>
                <input type="text" class="form-control border-dark" id="username" placeholder="" value="" required>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label fw-normal">Email </label>
              <input type="email" class="form-control  border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
            </div> 
           
          </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="px-4 py-5 border border-dark rounded-3" style="height: 500px">
        <div class="mb-4">
            <h4  ">Data Pribadi</h4>
        </div>
            <form class="px-3">
               <div class="mb-3">
                   <label for="nama" class="form-label fw-normal "  >Nama</label>
                   <input type="text" class="form-control border-dark" id="nama" placeholder="" value="" required>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Jenis Kelamin</label>
                    <select class="form-select  border-dark" id="jk" required>
                      <option value="">Pilih...</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                    {{-- <div class="invalid-feedback">
                        Please select a .....
                      </div> --}}
                    </div>  
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label fw-normal">Nomor Telepon </label>
                 <input type="number" class="form-control  border-dark" id="telp"  required> 
               </div> 
               <div class="mb-3">
                <label for="country" class="form-label">Tingkatan</label>
                <select class="form-select  border-dark" id="tingkatan" required>
                  <option value="">Pilih...</option> 
                  <option>Wikrama Kelas X</option>
                  <option>Wikrama Kelas XI</option>
                  <option>Wikrama Kelas XII</option>
                  <option>Guru</option>
                  <option>Staff</option>
                  <option>Umum</option>
                </select>
                {{-- <div class="invalid-feedback">
                        Please select a .....
                      </div> --}}
                </div>  
              
              
             </form>
         </div>
    </div>
    </div> 
</div>
</div>
@endsection