@push('style')
    <link rel="stylesheet" href="{{asset('css/recruitment.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Glints Recruitment: Bangun Tim Hebat Impian Anda Sekarang!')

@section('content')
    <div class="row section-1">
            <div class="col-12 text-center" style="margin-top: 20%;">
                <div class="fs-1">
                    Glints Recruitment
                </div>
                <div class="fs-4">
                    Rekrut kandidat tepat dengan waktu dan biaya yang lebih hemat.
                </div>
                <button class="mt-5 btn btn-mulairekrut w-25 py-2" onclick="location.href='/perusahaan/page/dashboard'">
                    Mulai Rekrut Sekarang
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-color: #132647; color:white;">
                <div class="container">
                    <div class="row text-center align-items-center p-5">
                        <div class="col-12 col-md-3 fs-4">
                            Permudah Rekrutmen Anda Bersama Glints
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                50%
                            </div>
                            <div>
                                Lebih Cepat
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                0
                            </div>
                            <div>
                                Biaya Muka
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                90 Hari
                            </div>
                            <div>
                                Gratis Garansi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5" style="background-image: url(../img/southeast-asia.png); background-position: center; background-repeat: no-repeat;">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-12 fs-3" style="color: #0090b8">
                        Rekrut Kandidat Lokal dan Jarak Jauh
                    </div>
                    <div class="col-12 fw-bold mt-3 fs-5">
                        Rekruter ahli Glints akan membantu Anda:
                    </div>
                </div>
                <div class="row px-5 mx-5 mt-5">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/pk.webp')}}" alt="Pencarian Kandidat">
                        </div>
                        <div class="text-center mt-2">
                            Pencarian Kandidat
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/kp.webp')}}" alt="Kurasi Profil">
                        </div>
                        <div class="text-center mt-2">
                            Kurasi Profil
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/tp.webp')}}" alt="Tes & Penyaringan">
                        </div>
                        <div class="text-center mt-2">
                            Tes & Penyaringan
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/jw.webp')}}" alt="Jadwalkan Wawancara">
                        </div>
                        <div class="text-center mt-2">
                            Jadwalkan Wawancara
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/np.webp')}}" alt="Negosiasi Penawaran">
                        </div>
                        <div class="text-center mt-2">
                            Negosasi Penawaran
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10%;">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="mx-auto">
                                <a href="/perusahaan/page/feestructure" class="px-5 py-2 fw-bold text-decoration-none" style="border: 3.5px solid #0090b8; color: #0090b8; background-color: transparent; border-radius: 5px;">
                                    Lihat Struktur Biaya
                                </a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mx-auto mt-4">
                                <a href="/perusahaan/page/remotehiring" style="color: #2090b8; text-decoration: none;">
                                    PELAJARI REKRUTMEN JARAK JAUH
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #efefef;">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="{{asset('img/recruitment-2')}}.webp" alt="recruitment-2" class="img-fluid">
                        </div>
                        <div class="col-12 col-lg-6 px-5">
                            <div>
                                <div class="fs-3 mb-5" style="color:#0090b8; margin-top: 15%;">
                                    Temukan Kandidat Ahli Lebih Cepat
                                </div>
                                <div class="mb-5">
                                    Bersama rekruter ahli & teknologi AI Glints, Anda akan dibantu terhubung dengan kandidat dari Asia Tenggara dan Taiwan — khususnya untuk posisi ahli seperti <i>engineering</i>, <i>data science</i>, dan <i>product management</i>.
                                </div>
                                <div class="mb-2">
                                    <a href="/perusahaan/page/talentpool" style="text-decoration: none; color:#0090b8; font-weight: 600;">
                                        KUMPULAN TALENTA GLINTS 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-image: linear-gradient(120deg, #3394c1, #57a6ca);">
                <div class="container">
                    <div class="row my-5">
                        <div class="fs-3 text-center" style="color: #fff240">
                            Glints Recruitment
                        </div>
                        <div class="text-center fs-4" style="color: white; font-weight: 800;">
                            Cepat, Tepat, dan Lebih Hemat
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around row-cols-md-3 row-cols-1">
                        <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/1.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Ceritakan Kebutuhan Rekrutmen Anda
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Dapatkan rekomendasi strategi rekrutmen terbaik dari ahli Glints
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/2.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Persetujuan Rekrutmen
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Tanpa biaya muka, Anda juga mendapatkan garansi penggantian kandidat 90 hari
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/3.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Terima Profil Terkurasi
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Jadwalkan wawancara pertama bersama kandidat hanya dalam 7 hari
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column mt-5 cards-num" style="background-image: url(../img/4.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Seleksi & Wawancara
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Seleksi dan evaluasi profil kandidat terpilih yang sesuai dengan tim Anda
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column mt-5 cards-num" style="background-image: url(../img/5.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Penerimaan Kandidat
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Saatnya tahap memberikan surat penawaran dan mulai onboarding
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-center mt-5" style="border: 1px dashed white; background-color: transparent; height: 45vh !important; width: 25vw; border-width: 5px; color:white;">
                            <div class="fw-bold">
                                Kandidat belum ditemukan? Tim kami akan mengulang proses pencarian hingga sesuai dengan ketepatan tim Anda.
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <button class="btn w-25 btn-mulairekrut" onclick="location.href='/perusahaan/page/konsultasi'">
                            KONSULTASI SEKARANG
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-color: #efefef;">
                <div class="container">
                    <div class="row d-flex my-md-0 my-4">
                        <div class="col-12 col-md-6 flex-column d-flex align-self-center">
                            <div class="fs-3" style="color: #57a6ca">
                                Rekruter Ahli dengan Teknologi AI
                            </div>
                            <div class="mt-4">
                                Kandidat telah dikurasi dengan tepat melalui rekomendasi AI, <i>machine learning</i> dan data, sehingga menghasilkan kesesuaian yang akurat dan cepat.
                            </div>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <img src="{{asset('img/ai.webp')}}" alt="ai" class="img-fluid w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="col-12 my-5">
                <div class="row">
                    <div class="col-12 fs-2 text-center mb-4" style="color:#0090b8;">
                        Cerita Mereka Bersama Glints
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="background-color: #f4f4f4; box-shadow: 10px 10px 10px gray; border-radius: 10px;">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        </div>
                                        <div class="carousel-inner" style="height: 400px; " id="#carousel-inside">
                                            <div class="carousel-item active">
                                            <img src="{{asset('img/cs-1')}}.png" class="d-block w-100" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="{{asset('img/cs-2')}}.png" class="d-block w-100" alt="slide2">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="{{asset('img/cs-3')}}.png" class="d-block w-100" alt="slide3">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="{{asset('img/cs-4')}}.png" class="d-block w-100" alt="slide4">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="{{asset('img/cs-5')}}.png" class="d-block w-100" alt="slide5">
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
                        </div>
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
            {{-- <div class="col-12 text-center mb-3 mt-2">
                <button class="btn unduh-button">UNDUH LAPORAN LENGKAP</button>
            </div>
            --}}
            <div class="col-12 text-center mt-3 mb-5">
                <a href="/blog" style="text-decoration: none; color:#0090b8; font-weight: 600;">
                    PELAJARI <i>INSIGHT</i> LAIN 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>
        </div>

@endsection
