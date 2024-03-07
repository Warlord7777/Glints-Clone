@extends('layouts.blog')
@push('style')
    <link rel="stylesheet" href="{{asset('css/styleBlog.css')}}">
@endpush
@section('content')
        <div style="width: auto;background-color: yellow; height: 350px;position: relative; ">
        <br><br><br><br>
        <div >
        <b><h2 class="titleText" align="center" > Glints Blog </h2></b>
        <p class="title-text" align="center" >
        <b>Artikel karier dan pengembangan diri</b>
        <form class="search-form" method="GET" action="/blog/list">
            @csrf
            <input type="text" placeholder="Cari artikel" name="search" class="search-input">
            <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-search"></i></button>
          </form>
         </div>
         </div>
    </div>
</div>
</body>
<br><b><h2 align ="left">Rekomendasi Glints</h2></b>

<div class="cards-container">
    @foreach($recommendations as $rec)
<!--POST 1--> 
<div class="card mx-1" style="width: 25rem;">
    <img src="{{asset('storage/'.$rec->cover)}}" style="width: 360px; height: 250px;" class="card-img-top" alt="...">
    <div class="card-body">
        <h2 class="category">{{$rec->blog_topic}}</h2>   
        <a href="/blog/post/{{$rec->blog_id}}" class="post-title">{{$rec->blog_title}}</a>
        <span class="post-create">{{$rec->Admin->User->first_name}} {{$rec->Admin->User->last_name}}</span>
        <span class="post-date">{{$rec->created_at->format('d M Y')}}</span>
        <p class="card-text"><small class="text-body-secondary">Dibaca {{ceil(str_word_count($rec->content)/250)}} menit</small></p> 
    </div>
  </div>
    @endforeach
<!--POST 2--> 
</div>

<br><h2 align="left">Artikel Terbaru</h2>

    <div class="container-fluid ">
      <!--ART 1--> 
          <div class="row d-flex justify-content-between">
            <div class="col-6">
                @foreach($latest as $blog)
              <div class="card my-3" style="width: 30rem;">
                <img src="{{asset('storage/'.$blog->cover)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h2 class="category">{{$blog->blog_topic}}</h2>
                    <a href="/blog/post/{{$blog->blog_id}}" class="post-title">{{$blog->blog_title}}</a>
                    <span class="post-create">{{$blog->Admin->User->first_name}} {{$blog->Admin->User->last_name}}</span>
                    <span class="post-date">{{$blog->created_at->format('d M Y')}}</span>
                    <p class="card-text"><small class="text-body-secondary">Dibaca {{ceil(str_word_count($blog->content)/250)}} menit</small></p> 
                  </div>
              </div>
              @endforeach
              <div>
                <h3><b>Pilih topik</b></h3>               
              </div>
            </div> 
            <div class="col-6"> 
              <div class="d-flex justify-content-end">
                <img src="https://glints.com/id/lowongan/wp-content/uploads/2023/03/Homepage-Banner-career_switch.png" alt="" class="img-fluid w-75"> 
              </div>
              @if(!$glints->isEmpty())
              <div class="ms-auto w-75">
                <h2>Dari Glints</h2>
            <!--paling banayk 1-->
            @foreach($glints as $blog)
                <div class="card mb-3" style="max-width:550px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('storage/'.$blog->cover)}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="category">{{$blog->blog_topic}}</h2>
                          <a href="/post/blog/{{$blog->blog_id}}" class="post-title">{{$blog->blog_title}}</a>
                          <p class="card-text">{{$blog->Admin->User->first_name}} {{$blog->Admin->User->last_name}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
            @endif
            <!--paling banyak 2-->
            @foreach($random as $rd)
              <div class="card mb-3" style="max-width:550px; margin-left: 200px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('storage/'.$rd->cover)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 class="category">{{$rd->topic}}</h2>
                      <a href="/blog/post/{{$rd->blog_id}}" class="post-title">{{$rd->blog_title}}</a>
                      <p class="card-text">{{$rd->admin->user->first_name}} {{$rd->admin->user->last_name}}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
                {{-- <!--paling banyak 3-->
                <div class="card mb-3" style="max-width:550px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/pb3.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="category">MENGAWALI KARIER</h2>
                          <a href="post2.html" class="post-title">Apa Jawaan yang Tepat untuk Alasan Melamar Pekerjaan</a>
                          <p class="card-text">Shely Napitupulu</p>
                        </div>
                      </div>
                    </div>
                  </div>
            
                <!--paling banyak 4-->
                <div class="card mb-3" style="max-width:550px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/pb4.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="category">MENGAWALI KARIER</h2>
                          <a href="post2.html" class="post-title">12 contoh Jawaban Pertanyaan Motivasi Saat Kerja dalam Interview</a>
                          <p class="card-text">Alyssa Melita Rahmat</p>
                        </div>
                      </div>
                    </div>
                  </div>
            
                <!--paling banyak 5-->
                <div class="card mb-3" style="max-width:550px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/pb5.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="category">MENGAWALI KARIER</h2>
                          <a href="post2.html" class="post-title">Strategi Menjawab Pertanyaan: "Mengapa Anda Ingin Bekerja Perusahaan Kami?</a>
                          <p class="card-text">Irene Anindyaputri</p>
                        </div>
                      </div>
                    </div>
                  </div>
            
                <!--paling banyak 6-->
                <div class="card mb-3" style="max-width:550px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="img/pb6.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h2 class="category">DUNIA KERJA</h2>
                          <a href="post2.html" class="post-title">13 Alasan Resign Masuk Akal yang Bisa Kamu Gunakan</a>
                          <p class="card-text">Chrissila Jessica</p>
                        </div>
                      </div>
                    </div>
                </div> --}}
              </div>
            </div>
          </div><br><br>
          <div class="container-fluid">

            <div class="row d-flex justify-content-center">
              <div class="col-8">
                <div class="row justify-content-around">
                  <button class="col-5" style="padding-right: 100px; padding-left: 100px; padding-top: 10px; padding-bottom: 10px; border-bottom: 10px; border-width: 5px; border-style: solid; border-top: 0px; border-right: 0px; border-left: 0px; border-color: red; " > <a href="/blog/kategori/Bidang Profesi">Bidang Profesi</a> </button>
                  <button class="col-5" style="padding-right: 116px; padding-left: 116px; padding-top: 10px; padding-bottom: 10px; border-bottom: 10px; border-width: 5px; border-style: solid; border-top: 0px; border-right: 0px; border-left: 0px; border-color: gray; "><a href="/blog/kategori/Tips Karier">Tips Karier</a> </button>
                </div>
                <div class="row mt-3 justify-content-around">
                  <button class="col-5" style="padding-right: 97px; padding-left: 97px; padding-top: 10px; padding-bottom: 10px; border-bottom: 10px; border-width: 5px; border-style: solid; border-top: 0px; border-right: 0px; border-left: 0px; border-color: yellow; "><a href="/blog/kategori/Konten Eksklusif">Konten Ekslusif</a> </button>
                  <button class="col-5" style="padding-right: 116px; padding-left: 116px; padding-top: 10px; padding-bottom: 10px; border-bottom: 10px; border-width: 5px; border-style: solid; border-top: 0px; border-right: 0px; border-left: 0px; border-color: gray; "><a href="/blog/kategori/Dari Glints">Dari Glints</a> </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-center mt-3">
                <a href="/blog/kategori/all">
                  <button class="other-btn centered">
                    Lihat lainnya
                    <i class="fas fa-arrow-right" aria-hidden=""></i>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div><br><br>
    </div>
@endsection