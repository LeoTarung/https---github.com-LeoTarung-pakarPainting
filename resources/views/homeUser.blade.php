@extends('mainUser')
@section('contentUser')
<div class="container-fluid w-100">      
  <!-- Header Section Start -->
  <header id="home" class="hero-area">    
    <div class="overlay">
      <span></span>
      <span></span>
    </div>
  
    <div class="container-fluid">      
      <div class="row space-100">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="contents">
            <h2 class="head-title">You are Using Free Lite Version</h2>
            <p>Please, Purchase full version of Slick to get all pages, features and permission to use in commercial projects</p>
            <div class="header-button ms-4">
              <a type="button" class="btn btn-border-filled" data-bs-toggle="modal" data-bs-target="#konsultasi">Konsultasi</a>
              {{-- <a href="https://rebrand.ly/slick-ud" rel="nofollow" target="_blank" class="btn btn-border page-scroll">Learn More</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 p-0">
          <div class="intro-img">
            <img src="/user/img/pabrik.gif" alt="">
          </div>            
        </div>
      </div> 
    </div>             
  </header>
</div>

 {{-- Modal ISI NAMA --}}
 <div class="modal fade" id="konsultasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-md ">
     <form action="/isinama/tambah" method="POST" onSubmit="document.getElementById('submit').disabled=true;">
         @csrf
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fs-5" id="staticBackdropLabel">Isi Data Diri</h5>
                 <button type="button" class="btn-danger rounded btn-close" data-bs-dismiss="modal"
                     aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row">
                     <div class="col-12 mb-3">
                         <label for="nrp" class="form-label">NRP</label>
                         <input type="number" class="form-control border-primary" id="nrp" name="nrp" aria-describedby="emailHelp" required>
                     </div>
                     <div class="col-12 mb-3">
                         <label for="nama" class="form-label">NAMA</label>
                         <input type="text" class="form-control border-primary" id="nama" name="nama" aria-describedby="emailHelp" required>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="reset" class="btn btn-secondary" id="btn-cancel">Reset</button>
                 {{-- <button type="submit" class="btn btn-primary" onclick="redirect()">Lanjutkan</button> --}}
                 <button type="submit" id="submit" class="btn btn-success">Simpan</button>
             </div>
         </div>
     </form>
 </div>
</div>
@endsection