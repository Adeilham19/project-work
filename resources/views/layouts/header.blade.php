
<header class="p-3 border-bottom border-4" >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0  text-decoration-none me-2">
          <img src="{{ asset('bootstrap/img/logo-perpus.png') }}" alt="" width="40px">
        </a>
        <a href="#" class="nav-link px-2 py-1   me-5 fw-bold  " style="color: #1F3986">WikBook</a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
           
          <li><a href="{{ url('dashboard') }} " class="nav-link px-2 py-1 btn  text-black me-4" >Beranda</a></li>
          <li><a href="{{ url('berita') }} " class="nav-link active px-4 py-1 btn text-black me-4" aria-current="page"   > Berita</a></li>
          <li><a href="{{ url('rak-saya') }} " class="nav-link px-1 py-1 px-2 btn text-black "   >Rak Saya</a></li>
           
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <div class="input-group">
            
            <input type="search" class="bi bi-search form-control form-control-dark rounded-pill py-1" placeholder="Pencarian" aria-label="Search">
      
          
        </div> 
        </form>

        <div class="text-end ms-4">
          <button type="button" class="btn py-1 text-white " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #1F3986"> <span class="me-1">Username</span> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>  
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item py-0 " href="{{ url('profil') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg> <span class="px-3">Profil</span></a></li>
          <li><a class="dropdown-item py-0 " href="{{ url('permintaan-buku') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg> <span class="px-3">Permintaan Buku</span></a></li>
          <li><a class="dropdown-item py-0 " href="{{ url('change-password') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
          </svg> <span class="px-3"> Ubah Password</span></a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item py-0  " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg> <span class="px-3"> Logout </span> </a></li> 
        </ul>
          {{-- <button type="button" class="btn px-4 py-1 ms-4 text-white" style="background-color: #1F3986">Logout</button> --}}
        </div>
        <div class="ms-4 mb-1"  >
          <a href="{{ url('notifikasi') }}"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
        </svg></a> 
        </div>
      </div>
    </div>
  </header>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"> 
        <div class="modal-body p-4 ">
          <h5 class="mb-2"  id="exampleModalLabel">Logout</h5> 
          <p class="mb-0">Apakah yakin ingin keluar?</p>
        </div>
        <div class="modal-footer border-top-0">
          <button type="button" class="btn text-black " data-bs-dismiss="modal" >Batal</button>
          <button type="button" class="btn text-white px-4 " style="background-color: #FF4343">Keluar</button>
        </div>
      </div>
    </div>
  </div>

 