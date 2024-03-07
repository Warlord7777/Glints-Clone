@push('style')
    <link rel="stylesheet" href="{{asset('css/feestructure.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Glints for Employers - Struktur Biaya')
 
@section('content')
    <div class="row section-1">
            <div class="col-12 text-center" style="margin-top: 20%;">
                <div class="fs-1">
                    Tingkatkan Efektifitas Rekrutmen Anda
                </div>
                <div class="fs-4">
                    Minimalisir resiko dan biaya berlebih melalui layanan rekrutmen lengkap Glints
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5 fs-1 text-center" style="background-color: #132647; color:#f5e940;">
                Mulai Sekarang, Tanpa Beban Resiko
            </div>
        </div>
        <div class="row py-5 section-3">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-8" style="margin-top: 24%;">
                        <div class="row text-center fs-4" style="color: #0090b8; background-color: #efefef; height: 130px;">
                            <div class="col-4 tabs h-100 px-4 py-3 d-flex align-items-center justify-content-center">
                                Glints Recruitment
                            </div>
                            <div class="col-4 tabs h-100 px-4 py-3 d-flex align-items-center justify-content-center">
                                Glints Managed Talent
                            </div>
                            <div class="col-4 tabs h-100 px-4 py-3 d-flex align-items-center justify-content-center">
                                Glints Jobsearch
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center" id="recruitment" style="background-color: white;">
                            <div class="col-12 text-center pt-3">
                                <div class="fs-3" style="color:#0090b8;">
                                    Glints Recruitment
                                </div>
                                <div class="fs-4" style="font-weight: 600;">
                                    Rekrut kandidat secara lokal maupun jarak jauh lebih mudah
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="container">
                                    <div class="row mt-4 mb-5 d-flex justify-content-around">
                                        <div class="col-12 col-md-4 text-center section-3-card">
                                            <div>
                                                <img src="{{asset('img/fs-3.webp')}}" alt="fs-3">
                                            </div>
                                            <div>
                                                Bayar saat rekrutmen berhasil
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 my-4 my-md-0 text-center section-3-card">
                                            <div>
                                                <img src="{{asset('img/fs-4.webp')}}" alt="fs-4">
                                            </div>
                                            <div>
                                                Rekomendasi dan penilaian kandidat tanpa biaya
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 text-center section-3-card">
                                            <div>
                                                <img src="{{asset('img/fs-5.webp')}}" alt="fs-5">
                                            </div>
                                            <div>
                                                Gratis garansi 90 hari
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center pt-2 pb-4">
                                <button class="btn-konsultasi py-2" onclick="location.href = '/perusahaan/page/konsultasi'">
                                    Konsultasi Sekarang
                                </button>
                            </div>
                        </div>
                        <div class="row d-none justify-content-center" id="managedtalent" style="background-color: white;">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center pt-3">
                                        <div class="fs-3" style="color:#0090b8;">
                                            Glints Managed Talent
                                        </div>
                                        <div class="fs-4" style="font-weight: 600;">
                                            Bangun tim jarak jauh tak lagi sulit!
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4 mb-5 px-4">
                                        <div class="row d-flex justify-content-around">
                                            <div class="col-6 card-1 px-5">
                                                <div class="row">
                                                    <div class="col-12 text-center fw-bold fs-5 pt-4">
                                                        Perekrutan Kandidat Lainnya
                                                    </div>
                                                    <div class="col-12 text-center px-5 mb-3">
                                                        Kompleks, kurang efisien, dan memakan banyak waktu.
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Entitas Legal</li>
                                                            <li>Orientasi Pekerja</li>
                                                            <li>Kepatuahan & Pajak</li>
                                                            <li>Ruang Kantor</li>
                                                            <li>Asuransi</li>
                                                            <li>Manajemen Pekerja</li>
                                                            <li>Pendistribusian Gaji</li>
                                                            <li>Talent Engagement</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 card-2">
                                                <div class="row">
                                                    <div class="col-12 text-center fw-bold fs-5 pt-4">
                                                        Manajemen Talenta oleh Glints
                                                    </div>
                                                    <div class="col-12 text-center px-5 mb-3" style="color: #dbe959;">
                                                        Pembayaran mudah dalam 1 bulan mencakup semua layanan.
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row ps-5 mb-4">
                                                            <div class="col-2 d-flex align-items-center">
                                                                <img src="{{asset('img/fs-6.webp')}}" alt="fs-6" class="img-fluid">
                                                            </div>
                                                            <div class="col-8">
                                                                Kepatuhan penuh tanpa kewajiban penyiapan entitas
                                                            </div>
                                                        </div>
                                                        <div class="row ps-5">
                                                            <div class="col-2">
                                                                <img src="{{asset('img/fs-7.webp')}}" alt="fs-7" class="img-fluid">
                                                            </div>
                                                            <div class="col-10">
                                                                Seluruh proses rekrutmen dan operasional HR akan ditangani
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center fs-5 fw-bold">
                                        Mudah dan bebas hambatan!
                                    </div>
                                    <div class="col-12 d-flex justify-content-center pt-2 pb-2">
                                        <button class="btn-konsultasi py-2" onclick="location.href = '/perusahaan/page/konsultasi'">
                                            JADWALKAN KONSULTASI
                                        </button>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center pt-2 pb-4" onclick="location.href = '/perusahaan/page/remotehiring'">
                                        <button class="btn-pelajari py-2 px-4">
                                            PELAJARI TENTANG REMOTE HIRING
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none justify-content-center" id="jobsearch" style="background-color: white;">
                            <div class="col-12 text-center pt-3">
                                <div class="fs-3" style="color:#0090b8;">
                                    Glints JobSearch
                                </div>
                                <div class="fs-4" style="font-weight: 600;">
                                    Buat, terima, dan kelola lamaran kerja dalam satu waktu
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="container">
                                    <div class="row mt-4 mb-5 d-flex justify-content-around">
                                        <div class="col-12 text-center">
                                            <div class="d-flex justify-content-center ms-5 ps-5">
                                                <img src="{{asset('img/fs-8.webp')}}" alt="fs-8" class="img-fluid">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 fw-bold fs-4 text-center mb-3">
                                Mulai rekrutmen Anda sekarang, gratis!
                            </div>
                            <div class="col-12 d-flex justify-content-center pt-2 pb-4" onclick="location.href = '/perusahaan/page/dashboard'">
                                <button class="btn-konsultasi py-2">
                                    UNGGAH LOWONGAN KERJA
                                </button>
                            </div>
                        </div>  
                    </div>
                    
                </div>
            </div>
        </div>
        
@include('partials.formPerusahaan')

@push('script')
    <script src="{{asset('js/feestructure.js')}}"></script> 
@endpush

@endsection
