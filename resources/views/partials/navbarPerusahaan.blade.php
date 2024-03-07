<link href="{{asset('css/navbarperusahaan.css')}}" rel="stylesheet">


@auth
<!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed top-0 w-100 bg-white border-bottom">
        <div class="container-fluid nav-main">
            <a class="navbar-brand" href="/perusahaan/page/dashboard"><img src="{{asset('img/logo.png')}}" alt="glints logo" class="img-fluid logo" width="130px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- offcanvas -->
            <div class="offcanvas border offcanvas-end collapse" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" style="font-size: 1.2em">
                    <button type="button" class="btn-close btn-close my-2" style="margin-left: 270px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item my-2 hover p-1">      
                            <div class="nav-item mx-2 d-flex align-items-center">
                                <div class="rounded-circle mx-2 profile_picture">
                                    <img src="{{asset('storage/'.auth()->user()->Company->company_logo)}}" alt="pfp" class="img-fluid object-fit-cover rounded-circle" style="width: 200px; height:200px;">
                                </div>
                                <span class="username underline">{{auth()->user()->Company->User->first_name}} {{auth()->user()->Company->User->last_name}}</span>
                            </div>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/dashboard">DASHBOARD</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/lainnya">LAINNYA</a>
                        </li>
                                         
                    </ul>
                    <a href="#">
                        <div class="nav-item border konsultasi-offcanvas mx-auto" style="font-size: 0.8em;">
                            PASANG LOKER
                        </div>
                    </a>
                </div>
            </div>
            <!-- end of offcanvas  -->

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active underline" href="/perusahaan/page/dashboard">DASHBOARD</a>
                    </li>
                     <li class="nav-item mx-3">
                        <a class="nav-link active underline" href="/perusahaan/page/konsultasi">KONSULTASI</a>
                    </li>
                 
                </ul>
                <div class="nav-item mx-2 loker px-3 py-1">
                    <a class="nav-link active underline" href="/perusahaan/page/createJob">Pasang Loker</a>
                </div>
                <div class="nav-item ms-2 me-5 d-flex align-items-center dropdown">
                    <a href="#" class="d-flex text-decoration-none" style="color: black;" data-bs-toggle="dropdown">
                        <div class="rounded-circle mx-2 profile_picture">
                            <img src={{asset('storage/'.auth()->user()->Company->logo_company)}} alt="pfp" class="img-fluid rounded-circle" style="width: 100px; height: 42px;">
                        </div>
                        <span class="username text-decoration-none d-flex align-items-center">{{auth()->user()->Company->User->first_name}} {{auth()->user()->Company->User->last_name}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="font-size: 16px !important;  position: absolute !important; top: 40px;" id="account">
                        <li><a class="dropdown-item" href="/perusahaan/edit-profil">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="/perusahaan/page/dashboard">Lowongan Saya</a></li>
                        <li>
                            <form action="/logout" method="POST" class="d-block">
                                @csrf
                                <button class="dropdown-item " type="submit" style="font-size: 16px;">Keluar</button>
                            </form>
                        </li>
                    </ul>
                    <span class="username_arrow arrow ms-1">
                        <img src="{{asset('img/arrow.png')}}" width="10px" alt="arrow">
                    </span>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    @else
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed top-0 w-100 bg-white border-bottom">
        <div class="container-fluid nav-main">
            <a class="navbar-brand" href="glints"><img src="{{asset('img/logo.png')}}" alt="glints logo" class="img-fluid logo" width="130px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- offcanvas -->
            <div class="offcanvas border offcanvas-end collapse" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" style="font-size: 1.2em">
                    <button type="button" class="btn-close btn-close my-2" style="margin-left: 270px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link hover_nav" href="/login">LOGIN</a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link hover_nav" href="/register/company">REGISTER</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 nav_title">
                            <a class="nav-link disabled" href="#" style="color: #797979;">SOLUSI</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/recruitment">REKRUTMEN GLINTS</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/managedtalent">BAKAT TERKELOLA</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/jobsearch">PENCARIAN KERJA</a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link hover_nav" href="/perusahaan/page/kisahsukses">KISAH SUKSES</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 nav_title">
                            <a class="nav-link disabled" href="#" style="color: #797979;">SUMBER</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/strukturbiaya">STRUKTUR BIAYA</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/remotehiring">REKRUTMEN ASING</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/talentpool">KUMPULAN TALENTA</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/perusahaan/page/faq">FAQ</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                            <a class="nav-link hover_nav" href="/blog">BLOG</a>
                        </li>
                        <li class="nav-item my-2 hover p-1 ms-3">
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link hover_nav" href="/">JOB SEEKER</a>
                        </li>
                    </ul>
                    <a href="konsultasi">
                        <div class="nav-item border konsultasi-offcanvas mx-auto" style="font-size: 0.8em;">
                            JADWALKAN KONSULTASI
                        </div>
                    </a>
                </div>
            </div>
            <!-- end of offcanvas  -->

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link active underline dropdown-toggle" aria-current="page" href="#">SOLUSI</a>
                        <ul class="dropdown-menu" style="font-size: 1em;">
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/recruitment">REKRUTMEN GLINTS</a></li>
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/managedtalent">BAKAT TERKELOLA</a></li>
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/jobsearch">PENCARIAN KERJA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active underline" href="/perusahaan/page/kisahsukses">KISAH SUKSES</a>
                    </li>
                    <li class="nav-item mx-3 dropdown">
                        <a class="nav-link active underline dropdown-toggle" href="#">SUMBER</a>
                        <ul class="dropdown-menu" style="font-size: 1em;">
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/feestructure">STRUKTUR BIAYA</a></li>
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/remotehiring">REKRUTMEN ASING</a></li>
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/talentpool">KUMPULAN TALENTA</a></li>
                            <li><a class="dropdown-item fw-bold" href="/perusahaan/page/faq">FAQ</a></li>
                            <li><a class="dropdown-item fw-bold" href="/blog">BLOG</a></li>

                        </ul>
                    </li>
                </ul>
                <div class="nav-item mx-3">
                    <a class="nav-link active underline" href="/login">LOGIN</a>
                </div>
                <div class="nav-item mx-3">
                    <a class="nav-link active underline" href="/register/company">REGISTER</a>
                </div>
                <div class="nav-item mx-2">
                    <a class="nav-link active underline" href="/">JOB SEEKER</a>
                </div>
                <a href="/perusahaan/page/konsultasi" class="nav-item mx-2 konsultasi konsultasi-nav" style="margin-right:100px !important; font-size: 0.87em; border: none; text-decoration:none;">
                    JADWALKAN KONSULTASI 
                </a>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

@endauth