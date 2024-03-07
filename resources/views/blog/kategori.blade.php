@extends('layouts.blog')

@push('style')
    <link rel="stylesheet" href="{{asset('css/kategoriBlog.css')}}">
@endpush

@section('content')
<div class="container-fluid">

</div>
    <div id="article">
        <div class="post-container">
            <div class="breadcrumb">
                <a href="/blog" rel="category tag">Go Back</a>
            </div>
        <div class="category-picker">
            <h3>Pilih Kategori</h3>
          <div class="row d-flex justify-content-center">
            <div class="col-8">
            <div class="row row-cols-4">
                @php
                    $shownCategories = [];
                @endphp

                @foreach($all->slice(0, 16) as $blog)
                    @if(!in_array($blog->topic, $shownCategories))
                        <a class="border" href="/blog/kategori/{{$blog->topic}}">
                            <div class="py-3 mt-2">{{$blog->topic}}</div>
                        </a>
                        
                        @php
                            $shownCategories[] = $blog->topic;
                        @endphp
                    @endif
                @endforeach
                {{-- <a class="border" href=""><div class="py-3 mt-2">Karyawan Baru</div> </a>
                <a class="border" href=""><div class="py-3 mt-2">Melamar kerja</div> </a>
                <a class="border" href=""><div class="py-3 mt-2">Prospek Karier</div> </a>
                <a class="border" href=""><div class="py-3 mt-2">Tes Karier</div> </a>
                <a class="border" href=""><div class="py-3 mt-2">Tips Interview</div> </a> --}}
            </div>
            </div>
        </div></div></div>
        <div class="levels">
            <div class="current">
                Show: <b>{{$category}}</b>
            </div><br>
        </div>
        </div>
                <br><br>
    </div>
    <div class="posts">
    <div class="tab-content show" >
    <ul>
        <div class="posts">
        <div class="tab-content show">
        <ul>
            @if(!$blogs->isEmpty())
            <!--post 1-->
            @foreach($blogs as $blog)
            <a href="/blog/post/{{$blog->blog_id}}">
                <li class="carouselItem">
                    <div class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;{{asset('storage/'.$blog->cover)}}&quot;);" data-ll-status="loaded">
                    </div>
                    <i>
                        {{$blog->blog_topic}}                            
                    </i>
                    <b>
                        {{$blog->blog_title}}                            
                    </b>
                    <div>
                        <span>
                            {{$blog->Admin->User->first_name}} {{$blog->Admin->User->last_name}}                                
                        </span>
                        <span>
                            {{$blog->created_at->format('d M Y')}}
                        </span>
                    </div>
                    <p>
                        Dibaca {{ceil(str_word_count($blog->content)/250)}} menit
                    </p>
                </li>
            </a>
            @endforeach
            @else
            <h4 class="text-center mb-5">
                Tidak Ada Blog Yang Tersedia
            </h4>
            @endif
        {{-- <!--post 2-->
        <a href="post2.html">
            <li class="carouselItem">
                <div data-bg="https://glints.com/id/lowongan/wp-content/uploads/2021/12/portrait-beautiful-young-asian-sport-woman-ready-exercise-yellow.jpg" class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;https://glints.com/id/lowongan/wp-content/uploads/2021/12/portrait-beautiful-young-asian-sport-woman-ready-exercise-yellow.jpg&quot;);" data-ll-status="loaded">
                </div>
                <i>
                    Mengawali Karier                            
                </i>
                <b>
                    5 Olahraga sebelum Interview yang Patut Dicoba agar Lebih Rileks                           
                </b>
                <div>
                    <span>
                        Nadiyah Rahmalia                                
                    </span>
                    <span>
                        21 Mei 2023                                
                    </span>
                </div>
                <p>
                    Dibaca 6 mnt
                </p>
            </li>
        </a>
        <!--post 3-->
        <a href="post2.html">
        <li class="carouselItem">
            <div data-bg="https://glints.com/id/lowongan/wp-content/uploads/2023/05/rsz_two-asian-kids-sitting-classroom-smiling-teacher-glasses-talking-boy.jpg" class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;https://glints.com/id/lowongan/wp-content/uploads/2023/05/rsz_two-asian-kids-sitting-classroom-smiling-teacher-glasses-talking-boy.jpg&quot;);" data-ll-status="loaded">
            </div>
            <i>
                Mengawali Karier                            
            </i>
            <b>
                Guru Privat: Definisi, Tugas, Skill yang Dibutuhkan, dan Gaji                           
            </b>
            <div>
                <span>
                    Joshua Renaldo                                
                </span>
                <span>
                    21 Mei 2023                                
                </span>
            </div>
            <p>
                Dibaca 7 mnt
            </p>
        </li>
    </a>
    <!--post 4-->
    <a href="post2.html">
        <li class="carouselItem">
            <div data-bg="https://glints.com/id/lowongan/wp-content/uploads/2023/05/cabin-crew-air-hostess-working-airplane_31965-9224.webp" class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;https://glints.com/id/lowongan/wp-content/uploads/2023/05/cabin-crew-air-hostess-working-airplane_31965-9224.webp&quot;);" data-ll-status="loaded">
            </div>
            <i>
                Mengawali Karier                            
            </i>
            <b>
                Ini Dia 8 Sekolah Pramugari yang Ada di Indonesia                            
            </b>
            <div>
                <span>
                    Joshua Renaldo                                
                </span>
                <span>
                    20 Mei 2023                                
                </span>
            </div>
            <p>
                Dibaca 8 mnt
            </p>
        </li>
    </a>
    <!--post 5-->
    <a href="post2.html">
        <li class="carouselItem">
            <div data-bg="https://glints.com/id/lowongan/wp-content/uploads/2023/01/rsz_1corinne-kutz-tmi2_-r5nfo-unsplash.jpg" class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;https://glints.com/id/lowongan/wp-content/uploads/2023/01/rsz_1corinne-kutz-tmi2_-r5nfo-unsplash.jpg&quot;);" data-ll-status="entered">
            </div>
            <i>
                Melamar Kerja                            
            </i>
            <b>
                5 Tips Menulis Cover Letter Business Analyst                            
            </b>
            <div>
                <span>
                    Joshua Renaldo                                
                </span>
                <span>
                    20 Mei 2023                                
                </span>
            </div>
            <p>
                Dibaca 5 mnt
            </p>
        </li>
    </a>
    <!--post 6-->
    <a href="post2.html">
    <li class="carouselItem">
        <div data-bg="https://glints.com/id/lowongan/wp-content/uploads/2023/05/nurses-are-well-good-taken-care-elderly-woman-patients-hospital-bed-patients-feel-happiness-medical-.webp" class="frame rocket-lazyload entered lazyloaded" style="background-size: cover; background-position: center center; background-image: url(&quot;https://glints.com/id/lowongan/wp-content/uploads/2023/05/nurses-are-well-good-taken-care-elderly-woman-patients-hospital-bed-patients-feel-happiness-medical-.webp&quot;);" data-ll-status="entered">
        </div>
        <i>
            Mengawali Karier                            
            </i>
        <b>
            Profesi Ners: Apa Itu, Tanggung Jawab, &amp; Skill yang Dibutuhkan                            
            </b>
        <div>
            <span>
                Joshua Renaldo                                
            </span>
            <span>
                20 Mei 2023                                
            </span>
        </div>
        <p>
            Dibaca 8 mnt
        </p>
    </li>
    </a> --}}
    </ul>
    </div>
    </div>      
    {{-- <div class="pagination">
    <a href="mengawali2.html" class="next">Sebelumnya <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </div> --}}
    </div>
@endsection