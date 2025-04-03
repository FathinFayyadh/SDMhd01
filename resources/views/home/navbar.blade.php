<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container-fluid px-3 d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <img src="{{ asset('landingpage/assets/img/icon-muhamdiuah.jpg') }}" alt=""
            style="width: 100px; height: 80px" />
        <div class="d-flex align-items-center order-lg-3">
            <a href="">
                <button class="btn btn-danger fw-bold px-3 me-2">PPDB</button>
            </a>
            <a href="">
                <button class="btn btn-outline-success fw-bold px-3">
                    Login Siswa
                </button>
            </a>
            <!-- Toggle Menu for Mobile -->
            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi-list"></i>
            </button>
        </div>
        <!-- Navbar Menu (Digeser ke kanan pada mode mobile) -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul
                class="navbar-nav ms-auto mx-lg-auto d-flex flex-lg-row flex-column align-items-lg-end align-items-end text-end">
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="#features">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="#Program">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3" href="{{ route('fasilitas') }}">Fasilitas SD</a>
                </li>
                <li class="nav-item my-2 my-lg-0">
                    <a class="nav-link me-lg-3" href="#contact">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
