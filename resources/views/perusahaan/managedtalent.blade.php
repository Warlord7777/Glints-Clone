@push('style')
    <link rel="stylesheet" href="{{asset('css/mt.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Glints Managed Talent: Kelola Talenta dengan Mudah')

@section('content')
    <div class="row section-1">
            <div class="col-12 text-center" style="margin-top: 20%;">
                <div class="fs-1">
                    Glints Managed Talent
                </div>
                <div class="fs-4">
                    Kelola tim dari mana saja lebih mudah bersama Glints
                </div>
                <button class="mt-5 btn btn-mulairekrut w-25 py-2" onclick="location.href = '/perusahaan/page/konsultasi'">
                    KONSULTASI SEKARANG
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-color: #132647; color:white;">
                <div class="container">
                    <div class="row text-center align-items-center p-5">
                        <div class="col-12 col-md-4 fs-3">
                            Kelola Talenta Regional dengan Mudah
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="section-2-title">
                                6
                            </div>
                            <div>
                                Kumpulan talenta dari Indonesia, Vietnam, Singapura, Taiwan, Malaysia, dan Filipina
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="section-2-title">
                                1000+
                            </div>
                            <div>
                                Talenta jarak jauh aktif dari berbagai wilayah
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-12 fs-3" style="color: #0090b8">
                        Kembangkan Tim Regional Lebih Mudah
                    </div>
                    <div class="col-12 fw-bold mt-3 fs-5">
                        Tim ahli Glints akan membantu Anda untuk:
                    </div>
                </div>
                <div class="row px-5 mx-5 mt-5 row-cols-lg-4 row-cols-md-3 d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-1')}}.webp" alt="Rekrut Kandidat Offshore">
                        </div>
                        <div class="text-center mt-2">
                            Rekrut Kandidat <i>Offshore</i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-2')}}.webp" alt="Pengelolaan Kontrak Kerja">
                        </div>
                        <div class="text-center mt-2">
                            Pengelolaan Kontrak Kerja
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-3')}}.webp" alt="Sistem Gaji dan Pajak">
                        </div>
                        <div class="text-center mt-2">
                            Sistem Gaji dan Pajak
                        </div>
                    </div>
                    <div class="col mt-md-5 mt-lg-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-4')}}.webp" alt="Pemberian Asuransi">
                        </div>
                        <div class="text-center mt-2">
                            Pemberian Asuransi
                        </div>
                    </div>
                    <div class="col mt-md-5 mt-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-5')}}.webp" alt="Pengaturan Absensi">
                        </div>
                        <div class="text-center mt-2">
                            Pengaturan Absensi
                        </div>
                    </div>
                    <div class="col mt-md-5 mt-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-6')}}.webp" alt="Dukungan Komunitas">
                        </div>
                        <div class="text-center mt-2">
                            Dukungan Komunitas
                        </div>
                    </div>
                    <div class="col mt-md-5 mt-0">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('img/mt-7')}}.webp" alt="Fasilitas Kantor">
                        </div>
                        <div class="text-center mt-2">
                            Fasilitas Kantor
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="mx-auto">
                                <button class="px-5 py-2 fw-bold" style="border: 3.5px solid #0090b8; color: #0090b8; background-color: transparent; border-radius: 5px;">
                                    Lihat Struktur Biaya
                                </button>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mx-auto my-5">
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
                        <div class="col-12 col-lg-6 px-5">
                            <div>
                                <div class="fs-2 mb-3" style="color:#0090b8; margin-top: 15%;">
                                    Ekspansi Bisnis Anda Kini Lebih Mudah
                                </div>
                                <div class="mb-5">
                                    Glints dapat membantu Anda merekrut talenta jarak jauh dari Asia Tenggara dan Taiwan secara legal dan dalam hitungan hari, tanpa memerlukan legalitas entitas bisnis Anda.
                                </div>
                                <div class="mb-2">
                                   <button class="btn px-5" onclick="location.href = '/perusahaan/page/dashboard'" style="border: 3.5px solid #0090b8; color: #0090b8; background-color: transparent; border-radius: 5px; font-weight: 600;">PELAJARI SELENGKAPNYA</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <img src="{{asset('img/mt-8')}}.webp" alt="mt" class="img-fluid">
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
                            Glints Managed Talent
                        </div>
                        <div class="text-center fs-4" style="color: white; font-weight: 800;">
                            Kelola Talenta Lebih Mudah Tanpa Batas Lokasi
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around row-cols-md-4 row-cols-1">
                        <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/1.png);">
                            <div class="fw-bold mt-3" style="font-size: 1.4em;">
                                Ceritakan Kebutuhan Rekrutmen Anda
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Tim ahli Glints akan membantu mengidentifikasi kebutuhan manajemen kandidat Anda
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/2.png);">
                            <div class="fw-bold mt-3" style="font-size: 1.4em;">
                                Tinjau Perjanjian Rekrutmen
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Talenta jarak jauh menandatangani kontrak kerja dan surat persetujuan dengan Glints
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/3.png);">
                            <div class="fw-bold mt-3" style="font-size: 1.4em;">
                                Fokus Pada Bisnis Anda
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Glints mengelola sistem gaji bulanan dan talenta jarak jauh Anda
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/4.png);">
                            <div class="fw-bold mt-3" style="font-size: 1.4em;">
                                Pembayaran Bulanan
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Selesaikan pembayaran operasional HR talenta Anda setiap 1 bulan
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <button class="btn w-25 btn-mulairekrut" onclick="location.href = '/perusahaan/page/konsultasi'">
                            KONSULTASI SEKARANG
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #efefef;">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <img src="{{asset('img/mt-9')}}.png" alt="mt" class="img-fluid">
                        </div>
                        <div class="col-12 col-lg-6 px-5">
                            <div>
                                <div class="fs-2 mb-3" style="color:#0090b8; margin-top: 15%;">
                                    Mulai Kelola Talenta Jarak Jauh Anda
                                </div>
                                <div class="mb-3">
                                    Kami menyadari pentingnya memberi dukungan dan menjaga hubungan dengan talenta untuk memastikan produktivitas kerja mereka.
                                </div>
                                <div>
                                    <ul>
                                        <li>Akomodasi</li>
                                        <li>Tunjangan Fasilitas</li>
                                        <li>Dukungan Komunitas</li>
                                        <li>Pelatihan</li>
                                        <li>Tunjangan Kerja</li>
                                        <li>Tinjauan Bulanan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none d-lg-flex">
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
                                        </div>
                                        <div class="carousel-inner" style="height: 400px; " id="#carousel-inside">
                                            <div class="carousel-item active">
                                            <img src="{{asset('img/mt-cs')}}-1.png" class="d-block w-100" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="{{asset('img/mt-cs')}}-2.png" class="d-block w-100" alt="slide2">
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
                                <div class="col-12" id="insight">
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
