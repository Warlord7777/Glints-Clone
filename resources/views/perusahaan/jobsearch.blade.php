@push('style')
    <link rel="stylesheet" href="{{asset('css/jobsearch.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Glints JobSearch: Pasang Iklan Lowongan Kerja Gratis')

@section('content')
    <div class="row section-1">
            <div class="col-12 text-center" style="margin-top: 20%;">
                <div class="fs-1">
                    Glints JobSearch: Pasang Iklan Lowongan Kerja Gratis
                </div>
                <div class="fs-4">
                    Pasang dan unggah lowongan kerja gratis selamanya di Glints. Glints memiliki 4 juta talenta setiap bulannya yang siap melamar ke lowongan Anda.
                </div>
                <button class="mt-5 btn btn-mulairekrut w-25 py-2" onclick="location.href = '/register/company'">
                    DAFTAR GLINTS JOBSEARCH - GRATIS
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-color: #132647; color:white;">
                <div class="container">
                    <div class="row text-center align-items-center p-5">
                        <div class="col-12 col-md-3 fs-4">
                            Temukan Kandidat Terbaik di Kawasan Anda
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                8,000+
                            </div>
                            <div>
                                Lowongan kerja diunggah setiap bulan
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                6
                            </div>
                            <div>
                                Pasar tenaga kerja di Indonesia, Singapura, Vietnam, Taiwan, Malaysia dan Filipina
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="section-2-title">
                                50,000+
                            </div>
                            <div>
                                Perusahaan menggunakan Glints JobSearch
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-12 fs-2" style="color: #0090b8">
                        Temukan Kandidat yang Tepat Secara Cepat
                    </div>
                </div>
                <div class="row px-5 mx-5 mt-5">
                    <div class="col-12 col-md-4">
                        <img src="{{asset('img/js-1.webp')}}" alt="js-1" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('img/js-2.webp')}}" alt="Profil perusahaan individu">
                                </div>
                                <div class="ms-5 mt-2 d-flex align-items-center">
                                    Profil perusahaan individu
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('img/js-3.webp')}}" alt="Unggah lowongan kerja tanpa batas">
                                </div>
                                <div class="ms-5 mt-2 d-flex align-items-center" onclick="location.href = '/perusahaan/page/dashboard'">
                                    Unggah lowongan kerja tanpa batas
                                </div>
                            </div>
                        </div>
                        <div class="row mt-md-5 mt-0">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('img/js-4.webp')}}" alt="Atur pelamar kerja langsung di platform Glints JobSearch">
                                </div>
                                <div class="ms-5 mt-2 d-flex align-items-center">
                                    Atur pelamar kerja langsung di platform Glints JobSearch
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('img/js-5.webp')}}" alt="Sesi Live Room tanpa batas - temui kandidat Anda melalui fitur virtual video chat secara langsung di platform kami">
                                </div>
                                <div class="ms-5 mt-2 d-flex align-items-center">
                                    Sesi Live Room tanpa batas - temui kandidat Anda melalui fitur virtual video chat secara langsung di platform kami
                                </div>
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
                                <div class="fs-3 mb-5" style="color:#0090b8; margin-top: 15%;">
                                    Promosikan Lowongan Kerja Anda ke 6 juta Pengunjung Bulanan Kami
                                </div>
                                <div class="mb-5">
                                    Bangun employer branding ke 52,000 profesional setiap harinya, gratis.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center">
                            <img src="{{asset('img/js-6.webp')}}" alt="js-6" class="img-fluid">
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
                            Mulai Gunakan Glints JobSearch Secara Gratis!
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around row-cols-md-3 row-cols-1">
                        <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/1.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Buat akun gratis Glints
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Daftar secara gratis pembuatan akun Glints untuk perusahaan Anda.
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/2.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Verifikasi akun Anda
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Unggah dokumen legal untuk verifikasi. Proses akan dilakukan hingga 3 hari kerja*.
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column cards-num" style="background-image: url(../img/3.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Unggah lowongan kerja
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Terima notifikasi pelamar kerja via email.
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column mt-5 cards-num" style="background-image: url(../img/4.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Seleksi kandidat anda
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Lihat dan pilih kandidat yang sesuai lewat dashboard Glints.
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-start flex-column mt-5 cards-num" style="background-image: url(../img/5.png);">
                            <div class="fw-bold mt-3 cards-num-title" style="font-size: 1.4em;">
                                Wawancara dan rekrut kandidat
                            </div>
                            <div class="fw-bold align-self-end mt-auto mb-3">
                                Jadwalkan interview dan rekrut kandidat terpilih ke tim Anda.
                            </div>
                        </div>
                         <div class="col rounded d-flex align-items-center mt-5" style="border: 1px dashed white; background-color: transparent; height: 45vh !important; width: 25vw; border-width: 5px; color:white;">
                            <div class="fw-bold">
                                Seluruh profil perusahaan dan 10 lowongan kerja pertama akan melalui proses verifikasi. Pengguna akan mendapatkan notifikasi setelah proses verifikasi selesai dalam 3 hari kerja.
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <button class="btn btn-mulairekrut" style="width: 35%;">
                            UNGGAH LOWONGAN KERJA SEKARANG
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #efefef;">
            <div class="col-12 fs-2 text-center mb-5 mt-5" style="color: #3394c1; font-weight: 500;">
                Solusi Kami Lainnya
            </div>
            <div class="col-12 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-md-4 my-4 my-md-0 mx-0 mx-md-5">
                        <div class="card h-100">
                            <img src="{{asset('img/recruitment-1.jpg')}}" class="card-img-top h-100" alt="julo">
                            <div class="card-body">
                                <h5 class="card-title fs-3 fw-bold">Glints Recruitment</h5>
                                <p class="card-text ">Temukan kandidat dengan cepat dan terjangkau.</p>
                            </div>
                            <div class="card-footer mt-3 justify-content-end d-flex">
                                <a href="/perusahaan/page/recruitment">
                                    <small style="color:#0090b8" class="fw-bold">BACA SELENGKAPNYA<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg></small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 my-4 my-md-0 mx-0 mx-md-3">
                        <div class="card h-100">
                            <img src="{{asset('img/managed-talent.jpg')}}" class="card-img-top h-100" alt="julo">
                            <div class="card-body">
                                <h5 class="card-title fs-3 fw-bold">Glints Managed Talent</h5>
                                <p class="card-text ">Kembangkan tim Anda tanpa biaya dan pendirian entitas bisnis.</p>
                            </div>
                            <div class="card-footer mt-3 justify-content-end d-flex">
                                <a href="/perusahaan/page/managedtalent">
                                    <small style="color:#0090b8" class="fw-bold">BACA SELENGKAPNYA<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg></small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@include('partials.formPerusahaan')

@endsection
