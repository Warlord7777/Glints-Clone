@extends('layouts.mainUser')
@push('style')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endpush
@section('content')
     <div class="container" style="padding-top: 80px;">
        @if (session()->has('rejected'))
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('rejected')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif  
        <div class="row">
                <div class="col-8">
                    <div class="box" style="height: 100vh;">
                        <div class="row">
                            <div class="col-2">
                                <div class="index">
                                    <label for="upload" class="upload-label">
                                        <div class="profile-picture-container">
                                          <img src="{{asset('storage/'.auth()->user()->UserDesc->profile_picture)}}" alt="gambar" class="profile-picture">
                                          <div class="overlay">
                                            <i class="fas fa-camera"></i>
                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt2" width="30" height="30" fill="#017EB7" viewBox="0 0 100 100">
                                                <path d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z">
            
                                                </path></svg>
                                          </div>
                                        </div>
                                        <form action="/user/update-profile" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="oldImage" value="{{auth()->user()->UserDesc->profile_picture}}">
                                            <input type="file" name="profile_picture" id="upload" class="upload-button" onchange="form.submit()">
                                        </form>
                                      </label>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-9" style="text-align: left;">
                                <div class="indexp">
                                <p style=" margin-top: 19px;"> <b>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</b></p>
                                <a href="/user/pengaturan">
                                <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt2" width="15" height="15" fill="#017EB7" viewBox="0 0 100 100">
                                    <path d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z">

                                    </path></svg>
                                Edit Info Dasar
                                </a>

                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-9">


                                    <div class="row">
                                        <div class="col-6">
                                            <p class="blur-text">PHONE  </p>
                                            <div class="{{auth()->user()->UserDesc->telephone == null ? 'text-danger' : ''}}">
                                                {{auth()->user()->UserDesc->telephone == null ? 'Anda Belum Memasukkan Nomor Telepon' : auth()->user()->UserDesc->telephone}}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="blur-text">EMAIL</p>
                                            {{auth()->user()->email}}
                                       
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="blur-text">LOKASI</p>
                                            <div class="{{auth()->user()->UserDesc->location == null ? 'text-danger' : ''}}">
                                                {{auth()->user()->UserDesc->location == null ? 'Anda Belum Memasukkan lokasi' : ucfirst(auth()->user()->UserDesc->location)}}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="blur-text">USIA, JENIS KELAMIN.</p>
                                            <div class="{{auth()->user()->UserDesc->age== null ? 'text-danger' : ''}}">
                                                {{auth()->user()->UserDesc->age == null ? 'Anda Belum Memasukkan Usia' : auth()->user()->UserDesc->age}}, {{auth()->user()->UserDesc->gender == null ? 'Anda Belum Memasukkan Jenis Kelamin' : ucfirst(auth()->user()->UserDesc->gender)}}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="blur-text">STATUS KEPENDUDUKAN</p>
                                            <div class="{{auth()->user()->UserDesc->residence_status == null ? 'text-danger' : ''}}">
                                                {{auth()->user()->UserDesc->residence_status == null ? 'Anda Belum Memasukkan Status Kependudukan' : ucfirst(auth()->user()->UserDesc->residence_status)}}
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="blur-text">NATIONALITY</p>
                                            <div class="{{auth()->user()->UserDesc->nationality == null ? 'text-danger' : ''}}">
                                                {{auth()->user()->UserDesc->nationality == null ? 'Anda Belum Memasukkan Nasionalitas' : auth()->user()->UserDesc->nationality}}
                                            </div>
                                            
                                        </div>
                                    </div>
                                    </div>
                                   

                                </div>
                            </div>
                        </div>



                       
                    </div>
                </div>
                <div class="col-4">
                    <div class="box " style="height: 100vh;">
                        <div class="row">
                    {{-- <div class="col-12">
                        <div class="layout" style="text-align: left;">
                            <div class="index">
                            STATUS PEKERJAAN
                            </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="terbuka">
                                        <a href="/user/status">
                                    <button type="button" class="bton "> Terbuka Untuk Lowongan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                                             <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100">
                                                <path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z">
                                            </path>
                                        </svg>
                                    </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="layout" style="text-align: left;">
                                        PILIHAN CEPAT
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    
                                                    <div class="col-12">
                                                        <a href="/user/pengaturan">
                                                        <button type="button" class="bton ">
                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="2em" height="2em" fill="currentColor" viewBox="0 0 100 100"><path d="M92.857 49.143c-5.301-8.203-12.556-15.235-21.261-19.699A24.802 24.802 0 0 1 75 42c0 13.783-11.217 25-25 25S25 55.783 25 42c0-4.408 1.172-8.761 3.404-12.556-8.705 4.464-15.96 11.496-21.261 19.699 9.542 14.732 24.944 25 42.857 25s33.315-10.268 42.857-25zM52.68 27.714c0-1.45-1.228-2.678-2.679-2.678-9.32 0-16.964 7.645-16.964 16.964 0 1.45 1.227 2.679 2.678 2.679 1.451 0 2.679-1.228 2.679-2.679 0-6.362 5.245-11.607 11.607-11.607 1.45 0 2.679-1.228 2.679-2.679zM100 49.143c0 1.395-.446 2.678-1.116 3.85C88.616 69.902 69.81 81.286 50 81.286S11.384 69.846 1.116 52.993C.446 51.821 0 50.538 0 49.143s.446-2.679 1.116-3.85C11.384 28.44 30.19 17 50 17s38.616 11.44 48.884 28.292c.67 1.172 1.116 2.456 1.116 3.85z"></path></svg>
                                                        Lihat Profil Saya
                                                        
                                                        </button>
                                                    </a>
                                                    
                                                

                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="layout">
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12">                                            
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="pojectprofil">
                                                                <div class="row">
                                                                    <div class="col-8">
                                                                        <br>
                                                                        <p>&nbsp&nbsp&nbsp&nbspPerlengkapan Profil <b>{{floor($percent)}}%</b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="progress" >
                                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuemin="0" aria-valuemax="100" style="width: {{$percent}}%"></div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/pengaturan">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspInformasi Dasar</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    
                                                                    </div>
                                                                </div> 
                                                                
                                                                
                                                            
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/experience">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspPengalaman Kerja</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/education">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspPendidikan</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/skill">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspSkill</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/interest">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspMinat & Preferensi Pekerjaan</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/tentang-saya">
                                                                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                        </path></svg>
                                                                        <span>&nbsp&nbspTentang Saya</span>
                                                                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/portfolio">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspPortofolio</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/achievement">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspPenghargaan</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
                                                                            </a>
                                                                            </div>
                                                                    </div>
                                                                </div> 
                                                                
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="isiicon">
                                                                            <a href="/user/organization">
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt1" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M100 56.563H56.562V100H43.438V56.562H0V43.438h43.438V0h13.124v43.438H100z">
                                                                            </path></svg>
                                                                            <span>&nbsp&nbspPengalaman Organisasi & Relawan</span>
                                                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="12" height="12" fill="currentColor" viewBox="0 0 100 100"><path d="M19 88.4L57.4 50 19 11.8 30.8 0l50 50-50 50z"></path></svg>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="segmentcontent">
                                        <div class="segment">
                                            <p> <h4> <b> TENTANG SAYA  </b></h4></p>

                                        </div>
                                        @if($user->description == null)
                                        <p style="text-align: center;">Beritahu perusahaan apa yang membuatmu unggul untuk dipekerjakan</p>
                                        
                                       <a href="/user/tentang-saya"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN DESKRIPSI TENTANG SAYA
                                        @else
                                        <div>
                                            {!! $user->description !!}
                                        </div>
                                        @endif
                                    </button></a>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                    <div class="segment">
                                        <p> <h4> <b> PENGALAMAN KERJA </b></h4></p>

                                    </div>
                                                                    
                                    @if($user->Experience->isEmpty())
                                        <p style="text-align: center;">77,9% perusahaan menganggap pengalaman kerja sebagai hal penting dalam lamaran. Jadi pastikan bagian ini terisi untuk meningkatkan peluangmu mendapatkan wawancara!</p>
                                        
                                        <a href="/user/experience"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGALAMAN KERJA
                                        </button></a>
                                    @else
                                    @php
                                        $i = 1
                                    @endphp
                                    <table class="table">
                                        <tr class="text-center">
                                            <th>
                                                No.
                                            </th>
                                            <th>
                                                Posisi
                                            </th>
                                            <th>
                                                Perusahaan
                                            </th>
                                            <th>
                                                Waktu Mulai
                                            </th>
                                            <th>
                                                Waktu Berakhir
                                            </th>
                                            <th>
                                                Hapus
                                            </th>
                                        </tr>
                                        @foreach($user->Experience as $ex)
                                        <div>
                                            <tr class="text-center">
                                                <td>{{$i}}</td>
                                                <td>{{$ex->posisi}}</td>
                                                <td>{{$ex->perusahaan}}</td>
                                                <td>{{$ex->waktu_mulai}}</td>
                                                <td>{{$ex->waktu_berakhir}}</td>
                                                <td>
                                                        <form action="/user/experience/delete" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="hidden" name="experience_id" value="{{$ex->id}}">
                                                            <button type="submit" name="delete" class="btn btn-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                </td>
                                            </tr>
                                        </div>
                                            @php
                                                $i = $i + 1;
                                                @endphp
                                        @endforeach
                                        </table>    
                                             <a href="/user/experience"><button type="button" class="mt-5 btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGALAMAN KERJA
                                        </button></a>
                                    @endif
                                <br>
                                <div class="segment">
                                    <p> <h4> <b> PENDIDIKAN </b></h4></p>

                                </div>
                                @if($user->Education->isEmpty())
                                <p style="text-align: center;">Latar belakangmu dilihat perusahaan. Beritahu latar pendidikanmu untuk mendapatkan 23% wawancara lebih banyak.</p>
                                
                               <a href="/user/education"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                TAMBAHKAN PENDIDIKAN
                            </button></a>
                            @else
                            @php
                                $i = 1
                            @endphp
                            <table class="table">
                                <tr class="text-center">
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Institusi
                                    </th>
                                    <th>
                                        Gelar 
                                    </th>
                                    <th>
                                        Bidang
                                    </th>
                                    <th>
                                        Waktu Mulai
                                    </th>
                                    <th>
                                        Waktu Berakhir
                                    </th>
                                    <th>
                                        Hapus
                                    </th>
                                </tr>
                                @foreach($user->Education as $ex)
                                <div>
                                    <tr class="text-center">
                                        <td>{{$i}}</td>
                                        <td>{{$ex->institusi}}</td>
                                        <td>{{$ex->gelar}}</td>
                                        <td>{{$ex->bidang}}</td>
                                        <td>{{$ex->waktu_mulai}}</td>
                                        <td>{{$ex->waktu_berakhir}}</td>
                                        <td>
                                                <form action="/user/education/delete" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="hidden" name="education_id" value="{{$ex->id}}">
                                                    <button type="submit" name="delete" class="btn btn-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                        </td>
                                    </tr>
                                </div>
                                    @php
                                        $i = $i + 1;
                                        @endphp
                                @endforeach
                                </table>  
                                <a href="/user/education"><button type="button" class="mt-5 btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                TAMBAHKAN PENDIDIKAN
                            </button></a>
                            @endif
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="segment">
                                <p> <h4> <b>SKILLS </b></h4></p>
                            </div>
                            @if($user->skills == null)
                            <p style="text-align: center;">Sekarang bukan waktunya untuk merendah. Beritahu apa yang kamu kuasai untuk menarik perusahaan-perusahaan top.</p>
                            
                           <a href="/user/skill"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                            TAMBAHKAN SKILL
                        </button></a>
                        @else
                        <div class="d-flex">
                            @foreach(explode(',',$user->skills) as $skill)
                                 <div>
                                    <span class="badge rounded-pill text-bg-light badgeskills mx-1 mt-2"
                                        style="display: flex; justify-content: center; align-items: center;">{{$skill}}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                         <a href="/user/skill"><button type="button" class="mt-5 btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                            TAMBAHKAN SKILL
                        </button></a>      </div>
                      
                        @endif
                        <br>
                        <br>
                        <br>
                        <br>
                
                            @if($user->interest == null || $user->preferred_location == null)
                            <div class="segment">
                                            <p> <h4> <b>MINAT & PREFERENSI PEKERJAAN</b></h4></p>   
                                        </div>
                                        <p class="text-center">
                                            Adding your job interests and preferences helps us in recommending suitable jobs for you.
                                        </p>
                                        <a href="/user/interest"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                TAMBAHKAN MINAT & PREFERENSI PEKERJAAN
                            </button></a>
                            @else
                                <div class="segment">
                                <p> <h4> <b>MINAT & PREFERENSI PEKERJAAN</b></h4>
                                    <button type="button" onclick="location.href='/user/interest'" class="btn btn-light" style="float: right;">
                                        EDIT <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z"></path></svg>
                                    </button>
                                </p>   
                            </div>
                            <div class="row">
                                <table class="table">
                                    <tr>
                                        <th>
                                            Bidang Minat
                                        </th>
                                        <td>
                                            @foreach(explode(',',$user->interest) as $job)
                                            <div class="joblist">
                                                <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#787878" viewBox="0 0 100 100"><path d="M29.831 43.661L42.91 57.202l37.07-45.97c1.249-1.467 3.415-1.64 4.831-.432 1.416 1.294 1.583 3.536.417 5.002L45.825 64.706A3.762 3.762 0 0 1 43.326 66h-.166a3.28 3.28 0 0 1-2.416-1.035L25 48.664c-1.333-1.38-1.333-3.623 0-5.003a3.337 3.337 0 0 1 4.831 0zM76.4 7.64c1.637 1.033 2.154 3.185 1.12 4.82-1.034 1.636-3.189 2.152-4.826 1.119C55.63 2.99 33.826 5.487 19.52 19.69 2.8 36.389 2.8 63.675 19.52 80.374c16.72 16.7 44.039 16.7 60.758 0 14.306-14.289 16.805-36.152 6.033-53.196-1.035-1.635-.517-3.787 1.12-4.82 1.637-1.033 3.792-.517 4.826 1.119 12.496 19.798 9.652 45.277-6.98 61.89A49.965 49.965 0 0 1 49.941 100a49.965 49.965 0 0 1-35.334-14.633c-19.477-19.454-19.477-51.216 0-70.67C31.155-1.83 56.578-4.757 76.4 7.639z">
        
                                                </path></svg>
                                               {{$job}}
                                            </div>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Preferensi Tipe Kerja
                                        </th>
                                        <td>
                                            @foreach(explode(',',$user->preferred_job_type) as $jo)
                                              <div class="joblist">
                                                <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#787878" viewBox="0 0 100 100"><path d="M29.831 43.661L42.91 57.202l37.07-45.97c1.249-1.467 3.415-1.64 4.831-.432 1.416 1.294 1.583 3.536.417 5.002L45.825 64.706A3.762 3.762 0 0 1 43.326 66h-.166a3.28 3.28 0 0 1-2.416-1.035L25 48.664c-1.333-1.38-1.333-3.623 0-5.003a3.337 3.337 0 0 1 4.831 0zM76.4 7.64c1.637 1.033 2.154 3.185 1.12 4.82-1.034 1.636-3.189 2.152-4.826 1.119C55.63 2.99 33.826 5.487 19.52 19.69 2.8 36.389 2.8 63.675 19.52 80.374c16.72 16.7 44.039 16.7 60.758 0 14.306-14.289 16.805-36.152 6.033-53.196-1.035-1.635-.517-3.787 1.12-4.82 1.637-1.033 3.792-.517 4.826 1.119 12.496 19.798 9.652 45.277-6.98 61.89A49.965 49.965 0 0 1 49.941 100a49.965 49.965 0 0 1-35.334-14.633c-19.477-19.454-19.477-51.216 0-70.67C31.155-1.83 56.578-4.757 76.4 7.639z">

                                                </path></svg>
                                                {{$jo}}
                                            </div>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Ekspektasi Gaji Bulanan
                                        </th>
                                        <td>
                                            IDR {{number_format($user->expected_salary, 0, ',', '.')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Preferensi Kota Kerja
                                        </th>
                                        <td>
                                               <div class="joblist">
                                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#787878" viewBox="0 0 100 100"><path d="M29.831 43.661L42.91 57.202l37.07-45.97c1.249-1.467 3.415-1.64 4.831-.432 1.416 1.294 1.583 3.536.417 5.002L45.825 64.706A3.762 3.762 0 0 1 43.326 66h-.166a3.28 3.28 0 0 1-2.416-1.035L25 48.664c-1.333-1.38-1.333-3.623 0-5.003a3.337 3.337 0 0 1 4.831 0zM76.4 7.64c1.637 1.033 2.154 3.185 1.12 4.82-1.034 1.636-3.189 2.152-4.826 1.119C55.63 2.99 33.826 5.487 19.52 19.69 2.8 36.389 2.8 63.675 19.52 80.374c16.72 16.7 44.039 16.7 60.758 0 14.306-14.289 16.805-36.152 6.033-53.196-1.035-1.635-.517-3.787 1.12-4.82 1.637-1.033 3.792-.517 4.826 1.119 12.496 19.798 9.652 45.277-6.98 61.89A49.965 49.965 0 0 1 49.941 100a49.965 49.965 0 0 1-35.334-14.633c-19.477-19.454-19.477-51.216 0-70.67C31.155-1.83 56.578-4.757 76.4 7.639z">

                                            </path></svg>
                                            {{$user->preferred_location}}
                                        </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endif
                                <br>
                                   
                                    
                                    
                                </div>

                                    
                                </div>
                                <br>
                               
                                <br>
                                <br>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div class="segment">
                                            <p> <h4> <b>PORTOFOLIO</b></h4></p>
        
                                        </div>
                                        @if($user->portfolio == null)
                                        <p style="text-align: center;">Profil lengkap menggandakan peluangmu mendapatkan pekerjaan terbaik.</p>
                                        
                                       <a href="/user/portfolio"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PORTOFILIO
                                    </button></a>
                                        @else
                                        <div class="text-center mt-4">
                                            Portfolio Anda Sudah Diupload!
                                            <br>
                                            <a href="/download/{{$user->portfolio}}" class="w-25 mb-4 mt-2 btn btn-success">Download Portofolio</a>
                                        </div>
                                        <div class="text-center mb-4">
                                            Ingin Mengganti Portofolio?
                                        </div>
                                        <a href="/user/portfolio"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        GANTI PORTOFOLIO
                                    </button></a>
                                        @endif
                                            <br>
                                            <br>
                                    </div>
                                </div>
                               
                             
                                <br>
                                <br>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div class="segment">
                                            <p> <h4> <b> PENGHARGAAN </b></h4></p>
        
                                        </div>
                                        @if($user->Achievements->isEmpty())
                                        <p style="text-align: center;">Beritahu prestasimu dengan menambahkan daftar penghargaan.</p>
                                        
                                       <a href="/user/achievement"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGHARGAAN
                                    </button></a>
                                        @else
                                        <table class="table">
                                            <tr class="text-center">
                                                <th>
                                                    No.
                                                </th>
                                                <th>
                                                    Penghargaan
                                                </th>
                                                <th>
                                                    Judul Kontribusi
                                                </th>
                                                <th>
                                                   Tahun
                                                </th>
                                                <th>
                                                    Hapus
                                                </th>
                                            </tr>
                                            <tr>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach($user->Achievements as $ac)
                                                 <tr class="text-center">
                                                    <td>{{$i}}</td>
                                                    <td>{{$ac->penghargaan}}</td>
                                                    <td>{{$ac->judul_kontribusi}}</td>
                                                    <td>{{$ac->tahun}}</td>
                                                    <td>
                                                        <form action="/user/achievement/delete" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="hidden" name="achievement_id" value="{{$ac->id}}">
                                                            <button type="submit" name="delete" class="btn btn-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @php
                                                    $i = $i + 1;
                                                @endphp
                                                @endforeach 
                                                
                                            </tr>
                                        </table>
                                         <a href="/user/achievement"><button type="button" class="mt-3 btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGHARGAAN
                                    </button></a>
                                        @endif
                                            <br>
                                            <br>
                                    </div>
                                </div>
                                
                               
                                <br>
                                <br>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div class="segment">
                                            <p> <h4> <b> PENGALAMAN ORGANISASI & RELAWAN</b></h4></p>
        
                                        </div>
                                        @if($user->Organization->isEmpty())
                                        <p style="text-align: center;">Adakah kegiatan ekstrakurikuler yang ingin kamu tampilkan ke perusahaan?</p>
                                        
                                       <a href="/user/organization"><button type="button" class="btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGALAMAN
                                    </button></a>
                                    @else
                                         <table class="table">
                                            <tr class="text-center">
                                                <th>
                                                    No.
                                                </th>
                                                <th>
                                                    Nama Organisasi
                                                </th>
                                                <th>
                                                    Posisi
                                                </th>
                                                <th>
                                                   Waktu Mulai
                                                </th>
                                                <th>
                                                   Waktu Berakhir
                                                </th>
                                                <th>
                                                    Hapus
                                                </th>
                                            </tr>
                                            <tr>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach($user->Organization as $or)
                                                 <tr class="text-center">
                                                    <td>{{$i}}</td>
                                                    <td>{{$or->nama_organisasi}}</td>
                                                    <td>{{$or->posisi}}</td>
                                                    <td>{{$or->waktu_mulai}}</td>
                                                    <td>{{$or->waktu_berakhir}}</td>
                                                    <td>
                                                        <form action="/user/organization/delete" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="hidden" name="organization_id" value="{{$or->id}}">
                                                            <button type="submit" name="delete" class="btn btn-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @php
                                                    $i = $i + 1;
                                                @endphp
                                                @endforeach 
                                                
                                            </tr>
                                        </table>
                                         <a href="/user/achievement"><button type="button" class="mt-3 btn btn-light"> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#027EB7" viewBox="0 0 100 100"><path d="M79.167 54.167v-8.334c0-2.278-1.888-4.166-4.167-4.166H58.333V25c0-2.279-1.888-4.167-4.166-4.167h-8.334c-2.278 0-4.166 1.888-4.166 4.167v16.667H25c-2.279 0-4.167 1.888-4.167 4.166v8.334c0 2.278 1.888 4.166 4.167 4.166h16.667V75c0 2.279 1.888 4.167 4.166 4.167h8.334c2.278 0 4.166-1.888 4.166-4.167V58.333H75c2.279 0 4.167-1.888 4.167-4.166zM100 50c0 27.604-22.396 50-50 50S0 77.604 0 50 22.396 0 50 0s50 22.396 50 50z"></path></svg>
                                        TAMBAHKAN PENGHARGAAN
                                    </button></a>
                                    @endif
                                    
                                            <br>
                                            <br>
                                    </div>
                                </div>

                            </div>
                        </div>
@endsection