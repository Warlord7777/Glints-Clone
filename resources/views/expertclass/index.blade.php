@extends('layouts.expertClass')

@section('content')
    <div class="container-fluid" style="padding-top: 100px;">
      @if (session()->has('successpayment'))
        <div class="alert alert-success alert-dismissible fade show mx-5 px-5" role="alert">
          <strong>Pembayaran Anda Berhasil!</strong> {{session('successpayment')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif  
      @if (session()->has('createclass'))
        <div class="alert alert-success alert-dismissible fade show mx-5 px-5" role="alert">
          <strong>Kelas Anda Berhasil Dibuat!</strong> {{session('createclass')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    <!-- search bar -->
      <div class="flex-container">
        <div class="flex-item">
          <h2><b>Terus Berkembang di Mana Saja, Kapan Saja!</b></h2>
          <h1>Pilih kelas online terbaik untuk pengembangan diri serta kariermu dan dapatkan <i> e-sertifikat!</i></h1>
          <form method="GET" action="/expertclass/list" class="search-form">
            @csrf
            <input type="text" placeholder="Digital marketing" name="search" class="search-input">
            <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
  
<!-- SECTION KATEGORI POPULER -->

    <div class="kategoripopuler-container" id="kategoripopuler">
      <h2 class="kategoripopuler text-center">Kategori Populer</h2>

<!-- CARD 1 -->

      <div class="card-container">

        <a href="/expertclass/category/marketing" style="color: rgb(1, 126, 183);" >
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://glints.com/images/events/categories/top-1.png" class="img-fluid rounded-start"
                alt="...">
            </div>
            <div class="col-md-6 d-flex">
              <div class="card-body">
                <h5 class="card-title">Marketing</h5>
                <p class="card-text">{{$marketing}} kelas</p>
              </div>
            </div>
          </div>
        </div>
      </a>

        <!-- CARD 2 -->

        <a href="/expertclass/category/human resource" style="color: rgb(1, 126, 183);" >
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://glints.com/images/events/categories/top-2.png" class="img-fluid rounded-start"
                alt="...">
            </div>
            <div class="col-md-6 d-flex">
              <div class="card-body">
                <h5 class="card-title">Human Resources</h5>
                <p class="card-text">{{$human_resource}} kelas</p>
              </div>
            </div>
          </div>
        </div>
        </a>

<!-- CARD 3 -->

        <a href="/expertclass/category/finance" style="color: rgb(1, 126, 183);" >
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="https://glints.com/images/events/categories/top-3.png" class="img-fluid rounded-start"
                  alt="...">
              </div>
              <div class="col-md-6 d-flex">
                <div class="card-body">
                  <h5 class="card-title">Finance</h5>
                  <p class="card-text">{{$finance}} kelas</p>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
        </a>

<!-- LATEST CLASS SECTION -->

    <div style="display: flex; justify-content: center;" class="latestclass">
      <img
        src="https://images.glints.com/unsafe/1920x0/filters:quality(100)/glints-dashboard.s3.amazonaws.com/expert-class-banner/ea599d5f1f5948d3c5576a0a28d73a14.png"
        style="flex-grow: 1; max-width: 87.5%; position: relative; ">
    </div>
    <div>
      <h2 class="kategoripopuler">Latest Class</h2>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card2">
          <div class="card-body">
            <h1 class="card-title">{{$shorten_name}}</h1>
            <p class="card-text">{!!$shorten_description!!}
            </p>
            <a href="/expertclass/detail/{{$featured->class_id}}" class="btn">Pelajari Selengkapnya <i class="fas fa-arrow-right"
                style="color: #ffffff;"></i>
            </a>

          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 d-flex justify-content-center">
        <a href="/expertclass/detail/{{$featured->class_id}}" style="text-decoration: none; color: black; ">
          <div>
            <div class="card3i"
              style="width: 538.67px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2); ">
              <img
                src="{{asset('storage/'.$featured->class_image)}}"
                class="card-img-top" alt="..."
                style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
              <div class="card-body ps-5 pt-4" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$featured->class_title}}</b></h2>
                <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                    src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                        ;"> {{$featured->date_time}}</p>
                <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                    src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                          ;"> {{ucfirst($featured->class_type)}}</p>
                <div style="display: flex; align-items: left; width: 800px; ">
                  <img
                    src="{{'storage/'.$featured->UserDesc->profile_picture}}" alt="" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                  <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                    <p style="margin-bottom: 0; font-weight: 500; ">{{$featured->UserDesc->User->first_name}} {{$featured->UserDesc->User->last_name}}</p>
                    <p style="margin-top: 0; font-size: 14px; position: absolute; ">{{$featured->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$featured->UserDesc->ExpertclassApplication->perusahaan}}
                  </div>
                  <p style="text-align: end; margin-top: 70px;  margin-right: 350px; font-size: 25px; height: auto; width: auto;" ><b>IDR {{number_format($featured->price, 0,',', '.')}}</b></p>
                  
                </div>
              </div>
            </div>
        </a>
      </div>
    </div>


    <!-- HOT DEALS SECTION -->

    <div class="row" id="hotdeals">
      <div class="col-12">
        <div>
          <div>
            <h2 class="kategoripopuler fs-3 text-center" style="margin-bottom: 20px;">Hot Deals</h2>
          </div>
          <div class="container">
            <div class="row d-flex">
              @foreach($hotDeals as $deals)
                <div class="col d-flex justify-content-center my-3">
                  <div>
                    <a href="/expertclass/detail/{{$deals->class_id}}" style="text-decoration: none; color: black; ">
                        <div>
                          <div class="card3 "
                          style="width: 538.67px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; margin-top: 10px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);  ">
                            <img
                              src="{{asset('storage/'.$deals->class_image)}}"
                              class="card-img-top" alt="..."
                              style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
                            <div class="card-body  ps-5 pt-4" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                              <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$deals->class_title}}</b></h2>
                              <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                  src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                                      ;"> {{$deals->date_time}}</p>
                              <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                  src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                                        ;"> {{ucfirst($deals->class_type)}}</p>
                              <div style="display: flex; align-items: left; width: 800px; ">
                                <img
                                  src="{{asset('storage/'.$deals->UserDesc->profile_picture)}}" alt="" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                                <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                                  <p style="margin-bottom: 0; font-weight: 500; ">{{$deals->UserDesc->User->first_name}} {{$deals->UserDesc->User->last_name}}</p>
                                  <p style="margin-top: 0; font-size: 14px; position: absolute; ">{{$deals->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$deals->UserDesc->ExpertclassApplication->perusahaan}}
                                </div>
                                <p style="text-align: end; margin-top: 70px;  margin-right: 350px; font-size: 25px; height: auto; width: auto;" ><b>IDR {{number_format($deals->price, 0,',', '.')}}</b></p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
            
          <div id="specialprogram">
            <h2 class="kategoripopuler fs-3 text-center" style="margin-bottom: 20px;">Special Program</h2>
          </div>

          <div class="container">
            <div class="row d-flex">
              @foreach($specialclass as $special)
                <div class="col d-flex justify-content-center my-3">
                  <div>
                    <a href="/expertclass/detail/{{$special->class_id}}" style="text-decoration: none; color: black; ">
                        <div>
                          <div class="card3 "
                          style="width: 538.67px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; margin-top: 10px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);  ">
                            <img
                              src="{{asset('storage/'.$special->class_image)}}"
                              class="card-img-top" alt="..."
                              style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
                            <div class="card-body  ps-5 pt-4" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                              <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$special->class_title}}</b></h2>
                              <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                  src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                                      ;"> {{$special->date_time}}</p>
                              <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                  src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                                        ;"> {{ucfirst($special->class_type)}}</p>
                              <div style="display: flex; align-items: left; width: 800px; ">
                                <img src="{{asset('storage/'.$special->UserDesc->profile_picture)}}" alt="" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                                <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                                  <p style="margin-bottom: 0; font-weight: 500; ">{{$special->UserDesc->User->first_name}} {{$special->UserDesc->last_name}}</p>
                                  <p style="margin-top: 0; font-size: 14px; position: absolute; ">{{$special->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$special->UserDesc->ExpertclassApplication->perusahaan}}
                                </div>
                                  <p style="text-align: end; margin-top: 70px;  margin-right: 350px; font-size: 25px; height: auto; width: auto;" ><b>IDR {{number_format($special->price, 0, ',', '.')}}</b></p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
            <!-- DISCOVER EXPERT CLASSES SECTION -->

          <div id="discoverexpertclasses">
            <h2 class="kategoripopuler fs-3 text-center" style="margin-bottom: 20px;">Discover Expert Classes</h2>
          </div>

          <div class="container">
            <div class="row d-flex">
              @foreach($discoverclass as $discover)
              <div class="col d-flex justify-content-center my-3">
                <div>
                  <a href="/expertclass/detail/{{$discover->class_id}}" style="text-decoration: none; color: black; ">
                      <div>
                        <div class="card3 "
                        style="width: 538.67px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; margin-top: 10px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);  ">
                          <img
                            src="{{asset('storage/'.$discover->class_image)}}"
                            class="card-img-top" alt="..."
                            style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
                          <div class="card-body  ps-5 pt-4" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                            <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$discover->class_title}}</b></h2>
                            <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                                    ;"> {{$discover->date_time}}</p>
                            <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                                      ;"> {{ucfirst($discover->class_type)}}</p>
                            <div style="display: flex; align-items: left; width: 800px; ">
                              <img
                                src="{{asset('storage/'.$discover->UserDesc->profile_picture)}} alt="" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                              <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                                <p style="margin-bottom: 0; font-weight: 500; ">{{$discover->userDesc->User->first_name}} {{$discover->userDesc->User->last_name}}</p>
                                <p style="margin-top: 0; font-size: 14px; position: absolute; ">{{$discover->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$discover->UserDesc->ExpertclassApplication->perusahaan}}
                              </div>
                              <p style="text-align: end; margin-top: 70px;  margin-right: 350px; font-size: 25px; height: auto; width: auto;" ><b>IDR {{number_format($discover->price, 0,',', '.')}}</b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </a>
                </div>
              </div>
              @endforeach
            </div>
          </div>


                <a href="/expertclass/list">
                  <p style="color: rgb(1, 126, 183); text-align: center; margin-top: 50px;"> <B>TEMUKAN LEBIH BANYAK
                      KELAS </B><img style="width: 15px; margin-bottom: 2px;"src="{{asset('img/arrow-right.svg')}}" alt="arrow-right"></p>
                </a>


                <div id="apakatamereka">
                  <h2 class="kategoripopuler text-center fs-4" style="margin-bottom: 30px; ">Apa kata mereka</h2>
                </div>

                <div style="display: flex; justify-content: space-evenly;">
                  <div class="card4"
                    style="width: 18rem; text-align: center;  font-family: 'Poppins', sans-serif; line-height: 24px; background-color: #ffffff; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2); border-top: 4px solid orange; display: flex; flex-direction: column; width: 350px; padding: 25px; ">
                    <div class="card-body pt-4">
                      <h5 class="title" style="font-size: 18px; font-weight: 700; "><b>Glints solusi yang smart!</b>
                      </h5>
                      <p class="card4-text" style="font-size: 15px; color: rgb(45, 45, 45); font-weight: 400;"><i>Dari
                          Glints saya berkesempatan belajar di waktu yang singkat, harga yang murah, topik yang updated,
                          dan expert yang eligible.</i></p>

                          
                    </div>


                  </div>

                  <div class="card4"
                    style="width: 18rem; text-align: center;  font-family: 'Poppins', sans-serif; line-height: 24px; background-color: #ffffff; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2); border-top: 4px solid orange; display: flex; flex-direction: column; width: 350px; padding: 25px; ">
                    <div class="card-body pt-4">
                      <h5 class="title" style="font-size: 18px;"><b>Membantu aku memulai karir!</b></h5>
                      <p class="card4-text" style="font-size: 15px; color: rgb(45, 45, 45); font-weight: 400;"><i>Glints
                          ExpertClass sangat membantuku untuk memulai karir. Dari topik yang membahas career starter
                          pack sampai topik spesifik bikin aku jadi tahu banyak hal dan bisa diimplementasikan.</i></p>
                    </div>
                  </div>

                  <div class="card4"
                    style="width: 18rem; text-align: center;  font-family: 'Poppins', sans-serif; line-height: 24px; background-color: #ffffff; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2); border-top: 4px solid orange; display: flex; flex-direction: column; width: 350px; padding: 25px; ">
                    <div class="card-body pt-4">
                      <h5 class="title" style="font-size: 18px;"><b>Glints solusi yang smart!</b></h5>
                      <p class="card4-text" style="font-size: 15px; color: rgb(45, 45, 45); font-weight: 400;"><i>Aku
                          jadi bisa pelajarin hal baru lewat webinar yang topicnya aku belum pernah tau - Terima kasih
                          Glints!</i></p>
                    </div>
                  </div>
                </div>
                @auth
                @if(auth()->user()->UserDesc->expert == 0 && auth()->user()->UserDesc->ExpertclassApplication == null)
                   <div style="display: flex; align-items: center; margin-top: 100px; justify-content:center;" class="text-center">
                      <div class="col-sm-6" style="display: inline-block; font-family: 'Poppins', sans-serif;">
                        <div class="card2">
                          <div class="card-body pt-4">
                            <h2 class="card-title" style="font-size: 32px; font-weight: 500;"> <b>Alasan kenapa harus jadi
                                expert di Glints ExpertClass? </b> </h2>
                            <p class="card-text" style="font-size: 24px; font-weight: 100px; ">Kamu dapat menciptakan <b>personal brand</b> -mu,
                              mendapatkan <b>extra income</b> , <b>memberikan dampak positif</b> , dan juga <b>kesempatan untuk lebih
                                berkembang</b> !

                              <b>Ini saatnya kamu jadi expert!</b> 
                            </p>
                            <a href="/expertclass/register-form" class="btn py-3 px-5">Daftar Sekarang
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                @elseif(auth()->user()->UserDesc->expert == 0 && isset(auth()->user()->UserDesc->ExpertclassApplication) && auth()->user()->UserDesc->ExpertclassApplication->status == 0)
                  <div style="display: flex; align-items: center; margin-top: 100px; justify-content:center;" class="text-center">
                    <div class="col-sm-6" style="display: inline-block; font-family: 'Poppins', sans-serif;">
                      <div class="card2">
                        <div class="card-body pt-4">
                          <h2 class="card-title" style="font-size: 32px; font-weight: 500;"> <b>Alasan kenapa harus jadi
                              expert di Glints ExpertClass? </b> </h2>
                          <p class="card-text" style="font-size: 24px; font-weight: 100px; ">Kamu dapat menciptakan <b>personal brand</b> -mu,
                            mendapatkan <b>extra income</b> , <b>memberikan dampak positif</b> , dan juga <b>kesempatan untuk lebih
                              berkembang</b> !

                            <b>Ini saatnya kamu jadi expert!</b> 
                          </p>
                          <div class="alert alert-primary" role="alert">Aplikasi Anda Sedang Ditinjau Oleh Glints, Jika Mempunyai Pertanyaan, Silahkan Hubungi +62 813-6257-6933</div>
                        </div>
                      </div>
                    </div>
                  </div>
                @elseif(auth()->user()->UserDesc->expert == 1 && isset(auth()->user()->UserDesc->ExpertclassApplication) && auth()->user()->UserDesc->ExpertclassApplication->status == 1)
                <h4 class="text-center mt-5">Selamat! Registrasi Anda Berhasil, Anda Dapat Mulai Membuat Kelas!</h4>
                <div class="text-center mt-4 mb-5">
                  <a href="/expertclass/create" class="btn btn-success w-25">Buat Kelas</a>
                </div>
                @else
                   <div style="display: flex; align-items: center; margin-top: 100px; justify-content:center;" class="text-center">
                      <div class="col-sm-6" style="display: inline-block; font-family: 'Poppins', sans-serif;">
                        <div class="card2">
                          <div class="card-body pt-4">
                            <h2 class="card-title" style="font-size: 32px; font-weight: 500;"> <b>Alasan kenapa harus jadi
                                expert di Glints ExpertClass? </b> </h2>
                            <p class="card-text" style="font-size: 24px; font-weight: 100px; ">Kamu dapat menciptakan <b>personal brand</b> -mu,
                              mendapatkan <b>extra income</b> , <b>memberikan dampak positif</b> , dan juga <b>kesempatan untuk lebih
                                berkembang</b> !

                              <b>Ini saatnya kamu jadi expert!</b> 
                            </p>
                            <a href="/expertclass/register-form" class="btn py-3 px-5">Daftar Sekarang
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                @endif
                @else
                     <div style="display: flex; align-items: center; margin-top: 100px; justify-content:center;" class="text-center">
                    <div class="col-sm-6" style="display: inline-block; font-family: 'Poppins', sans-serif;">
                      <div class="card2">
                        <div class="card-body pt-4">
                          <h2 class="card-title" style="font-size: 32px; font-weight: 500;"> <b>Alasan kenapa harus jadi
                              expert di Glints ExpertClass? </b> </h2>
                          <p class="card-text" style="font-size: 24px; font-weight: 100px; ">Kamu dapat menciptakan <b>personal brand</b> -mu,
                            mendapatkan <b>extra income</b> , <b>memberikan dampak positif</b> , dan juga <b>kesempatan untuk lebih
                              berkembang</b> !
                            <b>Ini saatnya kamu jadi expert!</b> 
                          </p>
                          <a href="/expertclass/register-form" class="btn py-3 px-5 mb-5">Daftar Sekarang <i class="fas fa-arrow-right"
                              style="color: #ffffff;"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endauth
              </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')

@endsection