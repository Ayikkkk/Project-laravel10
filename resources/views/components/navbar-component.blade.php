 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">
         <img src="https://AdenSahwaludin.github.io/Logo%20Aden%20Sahwaludin.png" alt="Logo" class="rounded-circle"
             style="width: 40px; height: 40px; margin-right: 10px;">
         Pemesanan Tiket Online
     </a>
     <a class="navbar-brand" href="#">Pemesanan Tiket Online</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="{{ url('/welcome') }}">Beranda <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('/Pesan') }}">Pesan Tiket</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Riwayat Pemesanan</a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="https://img.icons8.com/ios-filled/24/000000/user.png" alt="Akun">
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Pengaturan Akun</a>
                     <a class="dropdown-item" href="#">Ganti Sandi</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Log Out</a>
                 </div>
             </li>
         </ul>
     </div>
 </nav>
