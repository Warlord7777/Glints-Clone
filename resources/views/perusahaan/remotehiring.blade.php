@extends('layouts.mainPerusahaan')

@push('style')
    <link rel="stylesheet" href="{{asset('css/rh.css')}}">   
@endpush

@section('title', 'Remote Hiring: Temukan Talenta Terbaik tanpa Batas Lokasi')

@section('content')
    <div class="row section-1">
        <div class="col-12 text-center" style="margin-top: 20%;">
            <div class="fs-1">
                Bangun Tim Terbaik tanpa Batas Wilayah
            </div>
            <div class="fs-4">
                Mulai perjalanan rekrutmen talenta jarak jauh Anda bersama Glints
            </div>
            <button class="mt-5 btn btn-mulairekrut w-25 py-2" onclick="location.href = '/perusahaan/page/dashboard'">
                MULAI REKRUT SEKARANG
            </button>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center fs-3 my-4" style="color:#0090b8;">
                        Mengapa Anda Perlu Membangun Tim Berskala Regional?
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('img/tp-31.webp')}}" alt="tp-31" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <div class="fw-bold fs-4 mb-3">
                                    Hemat Biaya
                                </div>
                                <div>
                                    Pangkas biaya rekrutmen Anda hingga lebih dari 70% dengan merekrut kandidat jarak jauh berskala regional.
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('img/tp-32.webp')}}" alt="tp-32" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <div class="fw-bold fs-4 mb-3">
                                    Profil Kandidat Beragam
                                </div>
                                <div>
                                    Akses kandidat dengan ragam kemampuan bahasa dan keterampilan teknis yang relevan dengan posisi yang Anda butuhkan
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('img/tp-33.webp')}}" alt="tp-33" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <div class="fw-bold fs-4 mb-3">
                                    Produktivitas Lebih Tinggi
                                </div>
                                <div>
                                    Nikmati fleksibilitas tanpa batas dengan merekrut jarak jauh untuk proses rekrutmen yang lebih efisien.
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('img/tp-34.webp')}}" alt="tp-34" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <div class="fw-bold fs-4 mb-3">
                                    Adopsi Lintas Budaya
                                </div>
                                <div>
                                    Memiliki tim multikultural akan menghadirkan ragam sudut padang untuk meningkatkan pangsa pasar dan membuka pasar baru.
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <div class="col-12 text-center my-5">
                        <button class="btn-mulairekrut px-5 py-2" onclick="location.href = '/perusahaan/page/dashboard'">
                            BANGUN TIM REGIONAL SEKARANG
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #efefef;">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="fs-2 text-center mt-3" style="color:#0090b8;">
                        Mengenal Kandidat Regional Glints
                    </div>
                    <div class="text-center fs-4 fw-bold mt-3">
                        Rekrut talenta dengan keahlian yang sedang diminati untuk posisi strategis Anda!
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 justify-content-center d-flex">
                    <img src="{{asset('img/tp-35.webp')}}" alt="tp-35" class="img-fluid" width="90%">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="text-center fs-2 mt-5" style="color:#0090b8">
                <i>Insight</i> Menarik untuk Anda!
            </div>
        </div>
        <div class="col-12">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-12 fs-4 fw-bold" style="color:#0090b8">
                                Panduan Rekrutmen Jarak Jauh untuk <i>Startup</i>
                            </div>
                            <div class="col-12 mt-4 mb-3 fs-5" style="font-weight:600;">
                                Temukan mengapa tim jarak jauh adalah solusi layak namun terjangkau untuk <i>startup</i> yang ingin meningkatkan kapabilitas digital mereka.
                            </div>
                            <div class="col-12" id="insight">
                                <ul>
                                    <li>Pelajari kelebihan dan kelemahan perekrutan jarak jauh dan motivasi di balik keputusan perusahaan untuk membentuk tim <i>remote</i>
                                    </li>
                                    <li class="my-3">Ketahui lebih dalam mengenai kelebihan dan budaya kerja pekerja di Indonesia, Taiwan, dan Vietnam
                                    </li>
                                    <li>Temukan <i>insight</i> tentang cara membangun kedekatan dengan tim jarak jauh dari berbagai kawasan
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <img src="{{asset('img/insight-startup.webp')}}" alt="insight" class="img-fluid w-75">
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
