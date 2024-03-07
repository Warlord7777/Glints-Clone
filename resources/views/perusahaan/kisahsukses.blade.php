@push('style')
    <link rel="stylesheet" href="{{asset('css/kisahsukses.css')}}">   
@endpush

@extends('layouts.mainPerusahaan')
@section('title', 'Success Stories')

@section('content')
<div class="row">
            <div class="col-12">
                <div class="container">
                    <div style="font-size: 2em; font-weight: 500; margin-top: 5%;">
                        Kisah Sukses Bersama Glints
                    </div>
                    <div class="my-2" style="font-size: 1.2em;">
                        Setiap harinya, kami optimis untuk membantu perusahaan membangun tim hebat dengan menemukan talenta berkualitas. Selangkah lebih cepat untuk capai visi Anda. 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <div class="container pb-5 hero">
                    <div class="mx-auto text-center" style="padding: 5%; padding-bottom: 0; font-size: 1.7em; color:white;">
                        Bergabung dengan 50.000+ perusahaan lainnya dalam mewujudkan potensi talenta terbaik Anda!
                    </div>
                    <div>
                        <button class="nav-item mx-auto my-5 konsultasi" style="font-size: 1em; background-color: #fff240; border-radius: 10px; color:black; border: none;" onclick="location.href = '/perusahaan/page/konsultasi'">
                            KONSULTASI SEKARANG
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <div class="container">
                    <div class="px-5">
                        <div class="text-center fs-3" style="font-weight: 500; color: #0490b8;">
                            Kisah Sukses Unggulan
                        </div>
                        <div class="text-center mt-2 fs-5">
                            Dengar cerita sukses dari perusahaan terdepan yang telah mempercayai Glints menjadi partner rekrutmen.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="{{asset('img/lionparcel.webp')}}" alt="lionparcel" style="border-radius: 15px;" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                            <div class="fs-4 fw-bold">
                                Lion Parcel
                            </div>
                            <div class="fs-4 mt-2 mb-4">
                                “Glints itu yang saya suka, responsif sekali. Ketika kita <i>raise</i> permintaan, 1-2 minggu sudah dapat <i>feedback</i> sehingga bisa langsung join ke Lion Parcel. Sampai hari ini, kita tetap kerja sama untuk pemenuhan kebutuhan terlebih untuk beberapa key <i>positions</i> yang kita cari."
                            </div>
                            {{-- <div class="mt-5" style="color: #0490b8">
                                <a href="">
                                    BACA SELENGKAPNYA <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                        </svg>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <div class="row" style="background-color: #efefef;">
            <div class="col-12">
                <div class="container">

                    <div class="row">
                        <div class="col-12 fs-3 my-5" style="color: #0090b8">
                            Kisah Sukses Lainnya
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-12 col-md-4">
                            <div class="card h-100">
                                <img src="{{asset('img/amartha.png')}}" class="card-img-top h-100" alt="Amartha">

                                <div class="card-body">
                                    <h5 class="card-title fs-3 fw-bold">Amartha</h5>
                                    <p class="card-text ">Cerita fintech P2P Lending Amartha menjangkau kandidat pasif yang sesuai kualifikasi bersama Glints.</p>
                                </div>
                                {{-- <div class="card-footer justify-content-end d-flex"> 
                                    <!-- add location.href js  -->
                                    <small style="color:#0090b8" class="fw-bold" onclick="go()">BACA SELENGKAPNYA<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                        </svg></small>
                                </div> --}}
                            </div>
                        </div>  
                        <div class="col-12 col-md-4 my-4 my-md-0">
                            <div class="card h-100">
                                <img src="{{asset('img/julo.png')}}" class="card-img-top h-100" alt="julo">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 fw-bold">JULO</h5>
                                    <p class="card-text ">Cerita JULO mewujudkan visi menjadi SuperApp finansial di Indonesia dengan menemukan talenta kompeten bersama Glints.</p>
                                </div>
                                {{-- <div class="card-footer justify-content-end d-flex">
                                    <!-- add location.href js  -->
                                   <small style="color:#0090b8" class="fw-bold" onclick="go()">BACA SELENGKAPNYA<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg></small>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card h-100">
                                <img src="{{asset('img/eiger.png')}}" class="card-img-top" alt="eigerindo">
                                <div class="card-body">
                                    <h5 class="card-title fs-3 fw-bold">Eigerindo</h5>
                                    <p class="card-text ">Cerita Eigerindo merekrut posisi strategis yang kompeten dan sesuai kultur perusahiaan bersama Glints untuk mendukung ekspansi lokal dan global produk retail pegiat alam dari Indonesia.</p>
                                </div>
                                {{-- <div class="card-footer justify-content-end d-flex">
                                    <!-- add location.href js  -->
                                   <small style="color:#0090b8" class="fw-bold" onclick="go()">BACA SELENGKAPNYA<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                    </svg></small>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('partials.formPerusahaan')
@endsection
