@extends('layouts.blog')

@push('style')
    <link rel="stylesheet" href="{{asset('css/blogWriter.css')}}">
@endpush

@section('content')
     <div id="div-CABEC37A">
        <div class="profile">
            <div class="frame">
                <img src="{{asset('storage/'.$writer->profile_picture)}}" width="64" height="64">
            </div>
            <div class="description">
                <b>{{$writer->User->first_name}} {{$writer->User->last_name}}</b>
            </div>
        </div>
        <h3>Kumpulan Artikel {{$writer->User->first_name}} {{$writer->User->last_name}}</h3>
        <hr>
        <ul>
            @foreach($blogs as $blog)
            <a href="/blog/post/{{$blog->blog_id}}">
                <li class="carouselItem">
                    <div class="frame" aria-label="Blog Cover" style="background-image: url('{{asset('storage/'.$blog->cover)}}'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        {{$blog->topic}}
                    </i>
                    <b>
                        {{$blog->blog_title}}                    
                    </b>
                    <div>
                        <span>
                            {{$writer->User->first_name}} {{$writer->User->last_name}}                        
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
            {{-- <a href="post2.html">
                <li class="carouselItem">
                    <div class="frame" style="background-image: url('https://glints.com/id/lowongan/wp-content/uploads/2023/05/sick-asian-glasses-male-adult-feel-wrist-pain-hand-touch-wrist-muscle-with-stressful-tension-white-background-office-syndrome-ideas-concept.jpg'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        Kesehatan Kerja                    
                    </i>
                    <b>
                        Sakit Pergelangan Tangan: Cara Mengobati dan Mencegahnya                    
                    </b>
                    <div>
                        <span>
                            M. Ichsan Medina                        
                        </span>
                        <span>
                            20 Mei 2023                        </span>
                    </div>
                    <p>
                        Dibaca 5 mnt
                    </p>
                </li>
            </a>
            <a href="post2.html">
                <li class="carouselItem">
                    <div class="frame" style="background-image: url('https://glints.com/id/lowongan/wp-content/uploads/2023/05/mitos-soal-CV.jpg'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        CV/Portofolio                    </i>
                    <b>
                        8 Mitos soal CV yang Bikin Kamu Susah Dapat Kerja                    </b>
                    <div>
                        <span>
                            M. Ichsan Medina                        </span>
                        <span>
                            17 Mei 2023                        </span>
                    </div>
                    <p>
                        Dibaca 5 mnt
                    </p>
                </li>
            </a>
            <a href="post2.html">
                <li class="carouselItem">
                    <div class="frame" style="background-image: url('https://glints.com/id/lowongan/wp-content/uploads/2023/04/menolak-dengan-sopan.jpg'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        Dunia Kerja                    </i>
                    <b>
                        6 Cara Menolak dengan Sopan di Kantor dan Contohnya                    </b>
                    <div>
                        <span>
                            M. Ichsan Medina                        </span>
                        <span>
                            14 Mei 2023                        </span>
                    </div>
                    <p>
                        Dibaca 5 mnt
                    </p>
                </li>
            </a>
            <a href="post2.html">
                <li class="carouselItem">
                    <div class="frame" style="background-image: url('https://glints.com/id/lowongan/wp-content/uploads/2023/05/lumbar-pain-1.jpg'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        Kesehatan Kerja                    </i>
                    <b>
                        10 Cara Cepat Menghilangkan Sakit Pinggang untuk Pekerja</b>
                    <div>
                        <span>
                            M. Ichsan Medina</span>
                        <span>
                            12 Mei 2023</span>
                    </div>
                    <p>
                        Dibaca 5 mnt
                    </p>
                </li>
            </a>
            <a href="post2.html">
                <li class="carouselItem">
                    <div class="frame" style="background-image: url('https://glints.com/id/lowongan/wp-content/uploads/2023/05/pexels-ketut-subiyanto-4429053.jpg'); background-size: cover; background-position: center center;">
                    </div>
                    <i>
                        Kesehatan Kerja</i>
                    <b>
                        Peregangan Dinamis: Arti, Cara, dan Waktu Tepat Melakukannya</b>
                    <div>
                        <span>
                            M. Ichsan Medina
                        </span>
                        <span>
                            11 Mei 2023
                        </span>
                    </div>
                    <p>
                        Dibaca 5 mnt
                    </p>
                </li>
            </a> --}}
        </ul>
    </div>
    {{-- <div class="pagination">
        <a href="" class="next">Sebelumnya <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
    </div> --}}
@endsection