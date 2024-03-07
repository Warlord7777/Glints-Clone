@push('style')
    <link rel="stylesheet" href="{{asset('css/tp.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Glints Talent Pool: Akses 3 JT Talenta Terbaik')

@section('content')
<div class="row section-1">
    <div class="col-12 text-center" style="padding-top: 20%;">
        <div class="fs-1 mb-3">
            Kumpulan Talenta Glints
        </div>
        <div class="fs-4 px-5 mx-5">
            Lengkapi kebutuhan talenta perusahaan Anda dengan terhubung ke lebih dari 4 juta kandidat di Asia Tenggara dan Taiwan
        </div>
        <button class="mt-4 btn btn-mulairekrut w-25 py-2 mb-5" onclick="location.href = '/perusahaan/page/konsultasi'">
            KONSULTASI SEKARANG
        </button>
    </div>
</div>
<div class="row pt-5" style="background-color: #efefef;">
    <div class="col-12">
        <div class="row text-center">
            <div class="col-12 fs-2" style="color: #0090b8">
                Sekilas Tentang Profil Kandidat Kami
            </div>
            <div class="col-12 fw-bold mt-3 fs-4">
                Akses lebih dari 4 juta profil kandidat siap wawancara!
            </div>
        </div>
        <div class="container">
            <div class="row px-xl-5 px-0 mt-5">
                <div class="col-12 col-xl-6"><img src="{{asset('img/tp-2')}}.webp" alt="tp2" class="img-fluid"></div>
                <div class="col-12 col-xl-6 mt-xl-0 mt-3"><img src="{{asset('img/tp-3')}}.webp" alt="tp3" class="img-fluid"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="row mt-5 mx-5 p-4 mb-5" style="background-color: white; border: 3px solid #1e8daf; border-radius: 10px;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-center fw-bold fs-4 mb-4">
                            Keahlian Kandidat
                        </div>
                    </div>
                </div>
                <div class="col-12 px-5">
                    <div class="row row-cols-7">
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-4')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    38%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Tech & Engineer
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-5')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    20%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Sales & Marketing
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-6')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    11%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Management
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-7')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    12%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Design & Media
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-8')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    4%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    HR
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-9')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    4%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Finance
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{asset('img/tp-10')}}.webp" alt="tp4" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 percent">
                                    11%
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    Lainnya 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="row pt-5">
    <div class="col-12">
        <div class="row text-center">
            <div class="col-12 fs-2" style="color: #0090b8">
                Perluas Keberagaman Keahlian Talenta Perusahaan Anda!
            </div>
        </div>
        <div class="row mx-5 mt-5 border-row">
            <div class="col-12 px-0">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="{{asset('img/tp-11')}}.webp" alt="tp-11" class="img-fluid w-100 h-100">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="row my-4" id="posisitech">
                            <div class="title-tp col-12">
                                Posisi <i>Tech</i>
                            </div>
                            <div>
                                <ul>
                                    <li>Full Stack Engineer</li>
                                    <li>Security Engineer</li>
                                    <li>Frontend/Backend Engineer</li>
                                    <li>Engineering Manager</li>
                                    <li>Machine Learning Engineer</li>
                                    <li>Data Scientist</li>
                                    <li>DevOps Engineer</li>
                                    <li>Product Manager</li>
                                    <li>UI/UX Designer</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 title-tp">
                                            <i>Framework</i> yang digunakan
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row row-cols-10 row-cols-md-5 h-100">
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-12')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Selenium
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-13')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Cucumber
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-14')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Java
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-15')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                MySQL
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-16')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Angular
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-17')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                React.js
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-18')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Javascript
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-19')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Bootstrap
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-20')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                ASP.net
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-21')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                iOS
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-22')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Mongo
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-23')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Python
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-24')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Vue
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-25')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                PHP
                                            </div>
                                        </div>
                                        <div class="col text-center d-flex flex-column justify-content-center">
                                            <div>
                                                <img src="{{asset('img/tp-26')}}.webp" alt="tp-11">
                                            </div>
                                            <div>
                                                Android
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5 my-5 border-row">
            <div class="col-12 px-0">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="row my-4 px-5 pt-4">
                            <div class="title-tp col-12">
                                Posisi Bisnis
                            </div>
                            <div id="posisibisnis">
                                <ul>
                                    <li>Growth Hacker</li>
                                    <li>Sales Development Representative</li>
                                    <li>Digital Marketer</li>
                                    <li>Account Executive</li>
                                    <li>Product Marketer</li>
                                    <li>Customer Support</li>
                                    <li>Content Marketer</li>
                                    <li>Business Development Manager</li>
                                    <li>Graphic Designer</li>
                                    <li>Telemarketer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img src="{{asset('img/tp-27')}}.webp" alt="tp-27" class="img-fluid w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-lg-flex d-none">
    <div class="col-12" style="background-color: #e7f2f6;">
        <div class="container">
            <div class="row my-5">
                <div class="fs-2 text-center" style="color: #0090b8">
                    Kenal Sekilas Kandidat Anda!
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner d-flex align-items-center" style="height: 550px; background-color: white;" id="#carousel-inside">
                            <div class="carousel-item active">
                                <img src="{{asset('img/tp-28')}}.png" class="d-block w-100 " alt="slide1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/tp-29')}}.png" class="d-block w-100" alt="slide2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/tp-30')}}.png" class="d-block w-100" alt="slide3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row my-5 d-flex justify-content-center">
                <button class="btn w-25 btn-mulairekrut py-3" onclick="location.href = '/perusahaan/page/konsultasi'">
                    KONSULTASI SEKARANG
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="text-center fs-3 mt-5" style="color:#0090b8">
            <i>Insight</i> Menarik untuk Anda!
        </div>
    </div>
    <div class="col-12">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 fs-4 fw-bold" style="color:#0090b8">
                            Laporan Kompensasi Talenta Digital di Asia Tenggara
                        </div>
                        <div class="col-12 mt-4 fw-bold mb-3">
                            Temukan mengapa kawasan Asia Tenggara tetap menjadi magnet dalam membangun tim talenta digital berkualitas.
                        </div>
                        <div class="col-12">
                            <ul>
                                <li>Temukan tren dan wawasan mengenai posisi <i>engineering</i>,<i>product management</i> , <i>data science</i>, <i>marketing</i> dan PR.
                                </li>
                                <li class="my-3">Ketahui data kompensasi dan ekuitas dari <i>founders</i> dan <i>startup</i> lintas negara, tahap pendanaan, dan fungsi bisnis.
                                </li>
                                <li>Pahami tentang budaya dari 6 <i>startup</i> dengan pertumbuhan tercepat di Asia Tenggara  dalam membangun bisnis dan tim mereka.
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="{{asset('img/unduh.png')}}" alt="laporan" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-3 mb-5">
        <a href="/blog" style="text-decoration: none; color:#0090b8; font-weight: 600;">
            PELAJARI <i>INSIGHT</i> LAIN 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </a>
    </div>
</div>
@include('partials.formPerusahaan')

@endsection
