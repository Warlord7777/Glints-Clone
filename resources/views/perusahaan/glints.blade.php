@push('style')
    <link href="{{asset('css/glints.css')}}" rel="stylesheet">
@endpush
<!-- content  -->
@extends('layouts.mainPerusahaan')

@section('title', 'Glints')

@section('content')
<div class="row main-title" style="background-image: linear-gradient(to bottom right, #165b7f, #24c2ef);">
    <div class="col-12 col-lg-6 my-auto" style="color:white;">
        <div class="fs-4 fw-bold">
            Rekrut Lebih Mudah Bersama Kami
        </div>
        <br>
        <div class="fs-4">
            Glints adalah partner rekrutmen terpercaya untuk temukan kandidat berkualitas di Asia Tenggara & Taiwan.
        </div>
        <a class="nav-item mx-2 my-4 konsultasi" href="#form-submission" style="font-size: 1em; background-color: yellow; border-radius: 10px; color:black; border: none; text-decoration:none;">
            JADWALKAN KONSULTASI
        </a>
    </div>
    <div class="col-12 col-lg-6" style="height: 100%;">
        <img src="{{asset('img/img.webp')}}" alt="gambar" class="w-h-100" style="object-fit: cover;">
    </div>
</div>

<div class="row my-5">

    <div class="col-12 col-lg-3 text-center align-items-center justify-content-center d-flex fw-bold">
        Partner global kami
    </div>
    <div class="col-12 col-lg-9">
        <div class="row w-100">
            <div class="col"><img class="partner-company-logo" src="{{asset('img/kawanlama.webp')}}" alt="kawan lama"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/geto.webp')}}" alt="geto"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/kkday.webp')}}" alt="kkday"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/julo.webp')}}" alt="julo"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/gameloft.webp')}}" alt="gameloft"></div>
        </div>
        <div class="row w-100">
            <div class="col"><img class="partner-company-logo" src="{{asset('img/koinworks.webp')}}" alt="koinworks"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/pintu.webp')}}" alt="pintu"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/bcadigital.webp')}}" alt="bca"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/finance.webp')}}" alt="finance"></div>
            <div class="col"><img class="partner-company-logo" src="{{asset('img/aia.webp')}}" alt="aia"></div>
        </div>
    </div>
</div>

<div class="row section_3">
    <div class="col-12">
        <div class="row">
            <div class="col-12 text-center" style="font-size: 1.95em; margin-top: 3%; color: #1b9bbf;">
                Kami Membantu Tim Anda Berkembang
            </div>
        </div>
        <div class="row mx-5 my-5" style="color: #132647;">
            <div class="col-lg-4 col-12 text-center">
                <div class="section-3-title">4 Juta+</div> 
                <div><i style="font-weight: 500;">Database</i> talenta profesional</div>
            </div>
            <div class="col-lg-4 col-12 text-center my-5 my-lg-0">
                <div class="section-3-title">50,000+</div>
                <div>Klien perusahaan</div>
            </div>
            <div class="col-lg-4 col-12 text-center">
                <div class="section-3-title">5,000</div>
                <div>Kandidat direkrut oleh perusahaan</div>    
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-12 fs-2 text-center my-5" style="color:#1b9bbf; ">
                Mengapa Glints?
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <img src="{{asset('img/4-1.png')}}" alt="Bagian 4-1">
                </div>
                <div class="col-xl-6 col-12 d-flex">
                    <div class="my-auto">
                        <div class="section_4_title my-3">
                            Hindari Kesulitan Mencari Kandidat
                        </div>
                        <div>
                            Akses 4 juta <i>database</i> kandidat aktif kami dari Asia Tenggara dan Taiwan lewat <i>marketplace</i> pengembangan karir Glints.
                        </div>
                        <a href="/perusahaan/page/recruitment" style="text-decoration: none; color:#017eb7;">
                            <div class="my-4">
                                PELAJARI LEBIH LANJUT TENTANG <i>RECRUITMENT</i> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12 d-flex">
                    <div class="my-auto">
                        <div class="section_4_title my-3">
                            Bangun Tim Anda Dari Mana Saja
                        </div>
                        <div>
                            Tim talent manager Glints akan membantu Anda merekrut kandidat remote di kawasan Asia Tenggara secara legal dan cepat, serta mengatur operasional HR mereka.
                            <br>
                            Mengapa Anda harus mempertimbangkan remote hiring?
                        </div>
                        <a href="/perusahaan/page/remotehiring" style="text-decoration: none; color:#017eb7;">
                            <div class="my-4">
                                PELAJARI LEBIH LANJUT TENTANG <i>REMOTE HIRING</i>  
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </div> 
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <img src="{{asset('img/4-2.png')}}" alt="Bagian 4-2">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <img src="{{asset('img/4-3.png')}}" alt="Bagian 4-3">
                </div>
                <div class="col-xl-6 col-12 d-flex">
                    <div class="my-auto">
                        <div class="section_4_title my-3">
                            Bebas Biaya di Muka & Tanpa Resiko
                        </div>
                        <div>
                            Anda hanya perlu membayar untuk kandidat yang direkrut. Setiap matches sudah disertai jaminan kandidat pengganti selama 90 hari.
                        </div>
                        <a href="/perusahaan/page/feestructure" style="text-decoration: none; color:#017eb7;">
                            <div class="my-4">
                                LIHAT STRUKTUR BIAYA 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row" style="background-image: linear-gradient(to bottom, #24c2ef,#165b7f);">
    <div class="col-12">
        <div class="row my-5 p-5">
            <div class="col-12 col-lg-6 d-flex"><img class="mx-auto" src="{{asset('img/bagian-5.webp')}}" alt="gambar bagian 5" style="height: 100%; width: 70%;"></div>
            <div class="col-12 col-lg-6 my-auto p-5" style="color:white;">
                <div class="fs-1">Solusi Yang Sesuai Kebutuhan Unik Anda</div>
                <div>Layanan HR komprehensif Glints dapat mendukung pengembangan bisnis skala kecil, menengah, maupun besar.</div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="row d-flex justify-content-around px-5 mb-5">
                    <div class="col-12 col-lg-4">
                        <div class="card mt-auto">
                            <div class="row" style="height:80%;">
                                <div class="col-md-4 d-flex my-3">
                                    <img src="{{asset('img/card-1.webp')}}" class="img-fluid rounded-start w-50 h-50 mx-auto" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-5-title">Glints JobSearch</h5>
                                        <p class="card-text">Unggah lowongan kerja Anda dan dapatkan akses database serta manajemen kandidat dalam satu platform.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 w-100">
                                        <a href="/perusahaan/page/jobsearch" class="d-flex text-decoration-none">
                                            <div class="nav-item mx-auto card-5 px-5 py-2 my-3 mb-5">
                                                PELAJARI LEBIH LANJUT
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    
                    <div class="col-12 col-lg-4 my-4 my-lg-0">
                        <div class="card mt-auto">
                            <div class="row" style="height:80%;">
                                <div class="col-md-4 d-flex my-3">
                                    <img src="{{asset('img/card-2.webp')}}" class="img-fluid rounded-start w-50 h-50 mx-auto" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-5-title">Glints Recruitment</h5>
                                        <p class="card-text">Temukan talenta yang tepat dengan waktu dan biaya yang efisien.</p>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-12 w-100">
                                    <a href="/perusahaan/page/recruitment" class="d-flex text-decoration-none">
                                            <div class="nav-item mx-auto card-5 px-5 py-2 my-3 mb-5">
                                                PELAJARI LEBIH LANJUT
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="card mt-auto">
                            <div class="row" style="height:80%;">
                                <div class="col-md-4 d-flex my-3">
                                    <img src="{{asset('img/card-3.webp')}}" class="img-fluid rounded-start w-50 h-50 mx-auto" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-5-title">Glints Managed Talent</h5>
                                        <p class="card-text">Ekspansi secara cepat tanpa perlu memikirkan entity setup.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 w-100">
                                    <a href="/perusahaan/page/managedtalent" class="d-flex text-decoration-none">
                                        <div class="nav-item mx-auto card-5 px-5 py-2 my-3 mb-5">
                                            PELAJARI LEBIH LANJUT
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>

            </div>
        </div>
    </div>
</div>

<div class="row" style="background-color: #132647; color:white;">
    <div class="col-12">
        <div class="row">
            <div class="col-12 fw-bold text-center mt-5" style="font-size: 2em;">
                Punya pertanyaan soal solusi yang sesuai kebutuhan Anda?
            </div>
            <div class="col-12 text-center mb-4">
                Jadwalkan konsultasi gratis dengan rekruter ahli kami!  
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <a href="#form-submission" class="d-flex text-decoration-none">
                    <div class="nav-item mx-auto section_6_button px-5 py-3 my-3 mb-5 w-25" >
                        JADWALKAN KONSULTASI
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row px-5 img-container-7">
    <div class="col-12 px-5 container-7 mb-5">
        <div class="row">
            <div style="font-size: 1.95em; margin-top: 3%; color: #1b9bbf;">
                Ekosistem talenta terdepan di Asia Tenggara
            </div>
            <div class="mb-5">
                Glints didukung oleh investor teknologi dan sumber daya manusia ternama di dunia
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row w-100 row-cols-lg-5 row-cols-sm-3 row-cols-2 row-cols-md-4">
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-1.webp')}}" alt="7-1"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-2.webp')}}" alt="7-2"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-3.webp')}}" alt="7-3"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-4.webp')}}" alt="7-4"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-5.webp')}}" alt="7-5"></div>
                </div>
                <div class="row w-100 row-cols-lg-5 row-cols-sm-3 row-cols-2 row-cols-md-4">
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-6.webp')}}" alt="7-6"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-7.webp')}}" alt="7-7"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-8.webp')}}" alt="7-8"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-9.webp')}}" alt="7-9"></div>
                    <div class="col"><img class="investor-logo" src="{{asset('img/7-10.webp')}}" alt="7-10"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row px-5 mt-5" style="background-color: #f8f6f6;">
    <div class="fw-bold fs-4 px-5 my-3" style="color: #009cc6">
        Di Media
    </div>
    <div class="col-12 col-lg-4 mt-3 mt-lg-0">
        <div class="card h-100">
            <img src="{{asset('img/media-1.webp')}}" class="card-img-top" alt="media-1">
            <div class="card-body">
                <img src="{{asset('img/media-1-1')}}.webp" class="px-5 img-8 img-fluid" alt="media-1-1">
                <hr>
                <h6 class="card-title fw-bold">Singapore’s fastest-growing companies in 2022</h6>
            </div>
            <div class="card-footer mt-5">
                <a href="https://www.straitstimes.com/fastest-growing-companies-2022" style="text-decoration: none; color:#009cc6;">
                    <small>
                        LEARN MORE
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </small>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 my-5 my-lg-0">
            <div class="card h-100">
            <img src="{{asset('img/mediia-2.webp')}}" class="card-img-top" alt="media-2">
            <div class="card-body">
                <img src="{{asset('img/media-2-2')}}.webp" class="px-5 img-8 img-fluid" alt="media-2-2">
                <hr>
                <h6 class="card-title fw-bold">Glints bags $50m series D funding after doubling revenue and gross profits</h6>
            </div>
            <div class="card-footer mt-5">
                <a href="https://www.techinasia.com/glints-series-d-funding" style="text-decoration: none; color:#009cc6;">
                    <small>
                        LEARN MORE
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </small>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card h-100">
            <img src="{{asset('img/media-3.webp')}}" class="card-img-top" alt="media-3">
            <div class="card-body">
                <img src="{{asset('img/media-3-3.webp')}}" class="px-5 img-8 img-fluid" alt="media-3-3">
                <hr>
                <h6 class="card-title fw-bold">Glints bags $50m series D funding after doubling revenue and gross profits</h6>
            </div>
            <div class="card-footer mt-5">
                <a href="https://www.ft.com/high-growth-asia-pacific-ranking-2022" style="text-decoration: none; color:#009cc6;">
                    <small>
                        LEARN MORE
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </small>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-center my-4">
            <div style="color: #009cc6; font-weight: 600;">
                LIHAT BLOG 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </div>
        </div>
    </div>
</div>


@include('partials.formPerusahaan')
@endsection
