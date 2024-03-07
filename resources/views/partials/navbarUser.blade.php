    <link rel="stylesheet" href="{{asset('css/navbarUser.css')}}">
@auth

<!-- navbar -->
    <nav class="border navbar navbar-expand-lg bg-body-tertiary position-fixed top-0" style="z-index: 101; background-color:white;" >
        <div class="container-fluid nav-main">
                <a class="navbar-brand d-block" href="/"><img src={{asset('img/6119220b00264b22a4bd4e5140f3f408.webp')}} alt="glints logo" class="img-fluid logo" width="58px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <!-- offcanvas -->
            <div class="offcanvas offcanvas-end collapse" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" style="font-size: 1.2em; color:white;">
                    <button type="button" class="btn-close-white btn-close my-2" style="margin-left: 220px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="nav-item mx-2 d-flex align-items-center me-auto my-3">
                        <a href="#" class="d-flex align-items-center" style="color:white;">
                            <div class="rounded-circle mx-2 profile_picture_offcanvas">
                                <img src={{asset('storage/'.auth()->user()->UserDesc->profile_picture)}} alt="pfp" class="rounded-circle" style="width: 100px; height: 43px;">
                            </div>
                            <span class="username" style="font-size: 1.4em;">{{auth()->user()->UserDesc->User->first_name}} {{auth()->user()->UserDesc->User->last_name}}</span>
                        </a>
                    </div>
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link" href="/user/profil" style="color:white;"> <img src={{asset('img/profile.png')}} alt="profile" width="30px">&ensp;Profil Saya</a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link" href="/user/lamaran" style="color: white;"> <img src={{asset('img/file.png')}} alt="file" width="30px">&ensp;Lamaran Saya</a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link" href="/user/bookmark" style="color: white;"> <img src={{asset('img/file.png')}} alt="file" width="30px">&ensp;Bookmarks/a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <a class="nav-link" href="/user/pengaturan" style="color:white;"> <img src={{asset('img/settings.png')}} alt="settings" width="30px">&ensp;Pengaturan Akun</a>
                        </li>
                        <li class="nav-item my-2 hover p-1">
                            <form action="/logout" method="POST" class="justify-content-start">
                                @csrf
                                <button class="nav-link" style="color:white; background-color:transparent; display: block; border:none;"> <img src={{asset('img/power.png')}} alt="log out" width="30px">&ensp;Logout</button>
                            </form>
                        </li>
                    </ul>
                    <hr>
                    <a href="/opportunities" class="my-2 hover p-2 d-block fw-bold fs-6 underline">LOWONGAN KERJA</a>
                    <a href="/companies" class="my-2 hover p-2 d-block fw-bold fs-6 underline">PERUSAHAAN</a>
                    <a href="/blog" target="_blank" class="my-2 hover p-2 d-block fw-bold fs-6 underline">BLOG</a>
                    <a href="/expertclass" class="my-2 hover p-2 d-block fw-bold fs-6 underline">EXPERTCLASS</a>
                    <hr>
                    <a href="/perusahaan">
                        <div class="nav-item border p-2 my-4 hover p-1" style="font-size: 0.9em;">
                            UNTUK PERUSAHAAN <img src={{asset('img/arrow-right.png')}} alt="arrow-right" width="22px">
                        </div>
                    </a>
                    <div class="nav-item dropdown language mx-2" style="margin-bottom: 90px;">
                        <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton">
                            <img class="img-fluid mx-1" width="12.5px" src={{asset('img/globe-white.png')}} alt="globe">
                            <span class="arrow">
                                ID <img src={{asset('img/arrow-white.png')}} width="10px" alt="arrow">
                            </span>
                        </a>  
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item fw-bold" href="#">ENGLISH</a></li>
                            <li><a class="dropdown-item fw-bold" href="#">INDONESIAN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of offcanvas -->

            <div class="navbar-collapse collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" aria-current="page" href="/opportunities">LOWONGAN KERJA</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/companies">PERUSAHAAN</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/blog" target="_blank">BLOG</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/expertclass">EXPERTCLASS</a>
                    </li>
                </ul>
               <div class="nav-item mx-2">
                    <a href="/notification">
                        <button type="button" class="btn position-relative" style="border:none">
                            <img class="img-fluid" width="20px" src={{asset('img/bell.png')}} alt="bell">
                            @if($notificationCount != 0)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              {{$notificationCount}}
                        
                              <span class="visually-hidden">unread messages</span>
                            </span>              
                            @endif
                        </button>
                    </a>
                </div>
                <div class="nav-item ms-2 me-5 d-flex align-items-center dropdown" id="account">
                    <a href="/#" class="d-flex" style="color: black;" data-bs-toggle="dropdown">
                        <div class="rounded-circle mx-2 profile_picture">
                            <img src={{asset('storage/'.auth()->user()->UserDesc->profile_picture)}} alt="pfp" class="img-fluid rounded-circle" style="width: 100px; height: 42px;">
                        </div>
                        <span class="username underline d-flex align-items-center">{{auth()->user()->UserDesc->User->first_name}} {{auth()->user()->UserDesc->User->last_name}}</span>
                    </a>
                    <ul class="dropdown-menu" style="font-size: 20px !important;">
                        <li><a class="dropdown-item" href="/user/profil">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="/user/bookmarks">Bookmark Saya</a></li>
                        <li><a class="dropdown-item" href="/user/lamaran">Lamaran Saya</a></li>
                        <li><a class="dropdown-item" href="/user/pengaturan">Pengaturan Akun</a></li>
                        <li>
                            <form action="/logout" method="POST" class="d-block">
                                @csrf
                                <button class="dropdown-item" type="submit" style="font-size: 14px;">Keluar</button>
                            </form>
                        </li>
                    </ul>
                    <span class="username_arrow arrow">
                        <img src="{{asset('img/arrow.png')}}" width="10px" alt="arrow">
                    </span>
                </div>
                
            </div>
        </div>
    </nav>
<!-- end of navbar  -->

@else
    <!-- navbar -->
    <nav class="border navbar navbar-expand-lg bg-body-tertiary position-fixed top-0" style="z-index: 100; background-color:white;" >
        <div class="container-fluid nav-main">
                <a class="navbar-brand d-block" href="/"><img src={{asset('img/6119220b00264b22a4bd4e5140f3f408.webp')}} alt="glints logo" class="img-fluid logo" width="58px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <!-- offcanvas -->
            <div class="offcanvas offcanvas-end collapse" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" style="font-size: 1.2em; color:white;">
                    <button type="button" class="btn-close-white btn-close my-2" style="margin-left: 220px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <hr>
                    <a href="/opportunities" class="my-2 hover p-2 d-block fw-bold fs-6 underline">LOWONGAN KERJA</a>
                    <a href="/companies" class="my-2 hover p-2 d-block fw-bold fs-6 underline">PERUSAHAAN</a>
                    <a href="/blog" target="_blank" class="my-2 hover p-2 d-block fw-bold fs-6 underline">BLOG</a>
                    <a href="/expertclass" class="my-2 hover p-2 d-block fw-bold fs-6 underline">EXPERTCLASS</a>
                    <hr>
                    <a href="/perusahaan">
                        <div class="nav-item border p-2 my-4 hover p-1" style="font-size: 0.9em;">
                            UNTUK PERUSAHAAN <img src={{asset('img/arrow-right.png')}} alt="arrow-right" width="22px">
                        </div>
                    </a>
                    <a href="/register" class="btn btn-primary my-3 text-decoration-none">Daftar</a>
                    <a href="/login" class="btn btn-primary text-decoration-none">Masuk</a>
                </div>
            </div>
            <!-- end of offcanvas -->

            <div class="navbar-collapse collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" aria-current="page" href="/opportunities">LOWONGAN KERJA</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/companies">PERUSAHAAN</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/blog" target="_blank">BLOG</a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link active underline" href="/expertclass">EXPERTCLASS</a>
                    </li>
                </ul>
                <div class="nav-item mx-2">
                    <a style="color: black;" href="/register">Daftar</a>
                </div>
                <div class="nav-item mx-2">
                    <a style="color: black;" href="/login">Masuk</a>
                </div>
                <div class="nav-item ms-2 me-5">
                    <a href="/perusahaan" class="text-decoration-none" style="color:white; background-color: #017eb7; padding: 5px 10px;">Untuk Perusahaan <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </nav>
@endauth
