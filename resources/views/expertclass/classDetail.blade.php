@push('style')
    <link rel="stylesheet" href="{{asset('css/featuredclass.css')}}">
@endpush

@extends('layouts.expertClass')

@section('content')
<div class="fixed-card container d-none d-md-block" style="z-index: 2;">
    <div class="card3" style="width: 420px; height: auto; border-radius: 15px; overflow: hidden; margin-left: 67%; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);">
        <div class="card-body" style="background-color: #ffffff;  border-radius: 0 0 20px 20px; flex: 1;">
            <div>
            <h2 class="card3-text ms-3 pt-3" style="font-size: 22px; margin-bottom: 12px;"><b>IDR {{number_format($class->price, 0, ',', '.')}}</b></h2>
            <button class="bluebutton" onclick="window.location.href = '/expertclass/buy/{{$class->class_id}}'" style="margin-left: 20px;"> <b>BELI TIKET</b> </button>
            <p class="ms-3 mt-3" style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 20px;">Sales end on {{date('d F Y\, h:i', strtotime('-3 hours', strtotime($class->date_time)))}}</p>
            <h4 class="card3-text ms-3" style="font-size: 16px; margin-bottom: 12px;"><b>Apa yang akan kamu dapatkan?</b></h4>
            <p class="px-3">
              {{$class->facility}}
            </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="position:relative; top: 0px;">
    <div class="box1">
        <div class="isibox1" style="margin-left: 65px;" >
            <h1 class="title" >{{$class->class_title}}</h1>
            <p> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100"><path d="M7.683 93.137h16.072V77.066H7.683v16.071zm19.643 0h17.857V77.066H27.326v16.071zM7.683 73.494h16.072V55.637H7.683v17.857zm19.643 0h17.857V55.637H27.326v17.857zM7.683 52.066h16.072V35.994H7.683v16.072zm41.072 41.071h17.857V77.066H48.755v16.071zM27.326 52.066h17.857V35.994H27.326v16.072zm42.857 41.071h16.072V77.066H70.183v16.071zM48.755 73.494h17.857V55.637H48.755v17.857zM29.112 25.28V9.209c0-.95-.837-1.786-1.786-1.786h-3.571c-.949 0-1.786.837-1.786 1.786V25.28c0 .949.837 1.786 1.786 1.786h3.571c.949 0 1.786-.837 1.786-1.786zm41.071 48.214h16.072V55.637H70.183v17.857zM48.755 52.066h17.857V35.994H48.755v16.072zm21.428 0h16.072V35.994H70.183v16.072zM71.97 25.28V9.209c0-.95-.837-1.786-1.786-1.786h-3.571c-.949 0-1.786.837-1.786 1.786V25.28c0 .949.837 1.786 1.786 1.786h3.571c.95 0 1.786-.837 1.786-1.786zm21.429-3.571v71.428c0 3.906-3.237 7.143-7.143 7.143H7.683c-3.906 0-7.142-3.237-7.142-7.143V21.71c0-3.907 3.236-7.143 7.142-7.143h7.143V9.209c0-4.911 4.018-8.929 8.929-8.929h3.571c4.911 0 8.929 4.018 8.929 8.929v5.357h21.428V9.209c0-4.911 4.018-8.929 8.929-8.929h3.571c4.911 0 8.929 4.018 8.929 8.929v5.357h7.143c3.906 0 7.143 3.236 7.143 7.143z"></path></svg> <span style="font-weight: 500;" > Tanggal & Waktu </span> <span>{{date('l \, d F Y\, h:i ', strtotime($class->date_time))}}</span> </p>
            <p> <img src="https://glints.com/images/events/icons/language.svg" alt=""> <span style="font-weight: 500; " >Bahasa</span> <span style="padding-left: 69px;" >{{$class->language}}</span> </p>
            <p> <img src="https://glints.com/images/events/icons/class-type.svg" alt=""> <span style="font-weight: 500;" >Tipe Kelas</span>  <span> <button style="margin-left: 50px;" >{{ucfirst($class->class_type)}}</button> </span> </p>
            <p> <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100"><path d="M23.5913639,26.8509742 C23.5913639,23.1121643 20.5897841,20.1105845 16.8509742,20.1105845 C13.1121643,20.1105845 10.1105845,23.1121643 10.1105845,26.8509742 C10.1105845,30.5897841 13.1121643,33.5913639 16.8509742,33.5913639 C20.5897841,33.5913639 23.5913639,30.5897841 23.5913639,26.8509742 Z M79.778831,57.1827278 C79.778831,58.9731438 79.0416008,60.7109005 77.8304371,61.9220642 L51.9747235,87.8304371 C50.7109005,89.0416008 48.9731438,89.778831 47.1827278,89.778831 C45.3923117,89.778831 43.654555,89.0416008 42.4433913,87.8304371 L4.79199579,50.1263823 C2.10637177,47.4934176 0,42.385466 0,38.6466561 L0,16.7403897 C0,13.0542391 3.05423907,10 6.74038968,10 L28.6466561,10 C32.385466,10 37.4934176,12.1063718 40.1790416,14.7919958 L77.8304371,52.390732 C79.0416008,53.654555 79.778831,55.3923117 79.778831,57.1827278 Z M100,57.1827278 C100,58.9731438 99.2627699,60.7109005 98.0516061,61.9220642 L72.1958926,87.8304371 C70.9320695,89.0416008 69.1943128,89.778831 67.4038968,89.778831 C64.6656135,89.778831 63.2964718,88.5150079 61.5060558,86.6719326 L86.2559242,61.9220642 C87.4670879,60.7109005 88.2043181,58.9731438 88.2043181,57.1827278 C88.2043181,55.3923117 87.4670879,53.654555 86.2559242,52.390732 L48.6045287,14.7919958 C45.9189047,12.1063718 40.8109531,10 37.0721432,10 L48.8678252,10 C52.6066351,10 57.7145866,12.1063718 60.4002106,14.7919958 L98.0516061,52.390732 C99.2627699,53.654555 100,55.3923117 100,57.1827278 Z"></path></svg>  <span style="font-weight: 500;" >Kategori </span> <span><button style="margin-left: 65px;  ">{{ucfirst($class->category)}}</button></span> </p>
        </div>
    </div>


    <div style="width: 50%; margin-left: 80px; font-size: 16px; " >
    <div class="subtitle1" >
    <p class="subtitle" >Poster kelas</p>
    <img src="{{asset('storage/'.$class->class_image)}}" alt="{{$class->class_title}}" style="width: 90%;" >
  </div>

  <div class="subtitle2">
    <h3 class="subtitle" style="margin-bottom: 20px;" >Expert di kelas ini</h3>
    <img src="{{asset('storage/'.$class->UserDesc->profile_picture)}}" alt="" style="height: 80px; width: 80px; border-radius: 50%;">
    <span style="vertical-align: top; display: inline-block; margin-left: 10px;"> <p style="font-size: 14px; margin-bottom: 11px;" > <b>{{$class->UserDesc->User->first_name}} {{$class->UserDesc->User->last_name}}</b> </p> <p style="margin-bottom: 0;" > <img src="https://images.glints.com/unsafe/1920x0/glints-dashboard.s3.amazonaws.com/images/expert-class/building.svg" alt="" style="height: 12px;" > {{$class->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$class->UserDesc->ExpertclassApplication->perusahaan}}</b> </p> <p style="margin-bottom:  0;"> <img src="https://images.glints.com/unsafe/1920x0/glints-dashboard.s3.amazonaws.com/images/expert-class/calendar.svg" alt="" style="height: 12px;"> <span style="color: rgb(1, 126, 183);"> <b><a href="#" style="color: rgb(1, 126, 183);">{{$jumlahKelasUser}} kelas dibuka </a></b>  </span> untuk kamu ikuti</p> </span>
  </div>
  

  <div class="subtitle3" >
    <p class="subtitle" >Deskripsi</p>
    <p>{!!$class->class_description!!}</p>
  </div>

  {{-- <div>
    <p>Bersama <b> Erwina Anandya - Key Opinion Leader Manager of MCN at TMG, Inc. (NASDAQ Group) | Ex Bibit.id, </b> Beliau akan membagikan beberapa wawasan mengenai:</p>
    <ul>
    <li> Memahami target audiens yang seimbang antara brand dan KOL (Key Opinion Leader)</li>
    <li>Memahami bagaimana membuat konten yang sesuai dengan persona brand maupun persona KOL</li>
    <li>Memahami bagaimana menentukan channel marketing yang tepat untuk KOL marketing</li>
    <li>Belajar dari studi kasus terbaik</li>
  </ul>
  </div> --}}

  {{-- <div class="subtitle4">
    <p class="subtitle" >Kelas ini sangat disarankan untuk: </p>
    <ul>
      <li>Profesional bidang marketing dan brand yang ingin mengembangkan atau mempelajari cara membuat strategi marketing dengan influencer dari profesi berikut:</li>
      <ul>
        <li>Pemilik bisnis dan pengusaha</li>
        <li>Digital Marketing Specialist</li>
        <li>Brand Executive</li>
        <li>Marketing Executive</li>
        <li>Campaign Manager</li>
        <li>Brand Strategist</li>
        <li>Affiliate Marketer</li>
        <li>KOL Management atau Influencer Management</li>
      </ul>
    </ul>
  </div> --}}

  <div class="subtitle5">
    <p class="subtitle" >Tentang Glints Expert Class</p>
    <p>Glints Expert Class merupakan program dari Glints untuk memfasilitasi para profesional muda yang ingin tahu dan ingin meningkatkan keahlian mereka. Kelas ini akan diadakan secara live melalui Zoom (Link Zoom dapat diakses pada e-voucher setelah pembayaran berhasil).</p>
    </div>

    <div class="subtitle6">
      <p class="subtitle" >Syarat dan Ketentuan:</p>
      <ul>
        <li>Kelas ini akan ada diadakan dengan <b> Bahasa {{$class->language}}.</b> </li>
        <li>Peserta diharuskan untuk mendaftarkan diri melalui link registrasi Zoom, maksimal 2 jam sebelum acara dimulai</li>
        <li>Link Zoom/link registrasi Zoom dapat diakses melalui akun Glints Anda pada Sesi "Tiket Saya".</li>
        <li>Kelas ini akan diadakan melalui Zoom Webinar. Anda disarankan untuk mengunduh Zoom terlebih dahulu dan masuk melalui akun Zoom Anda sebelum acara dimulai.</li>
        <li> <b> Materi presentasi akan dikirimkan kepada learners maksimal 2 hari kerja (Sabtu, Minggu, serta hari libur nasional tidak termasuk) dari berakhirnya kelas. </b></li>
        <li> <b> E-Sertifikat akan dikirimkan kepada learners yang menghadiri kelas minimal 30 menit dan akan dikirimkan kepada learners maksimal 3 hari kerja dari berakhirnya kelas. </b> </li>
        <li>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi <b> PIC kami: yusrina@glints.com </b> </li>
      </ul>
    </div>



    @if (!$similarClasses->isEmpty())
    <div>
      <h2 class="kategoripopuler">Kelas serupa</h2>
     </div>

     @foreach ($similarClasses as $similar)
      <div class="card3 mt-4" onclick="location.href = '/expertclass/detail/{{$similar->class_id}}'" style="width: 570px; height: 300px; font-family: 'Poppins', sans-serif; border-radius: none; overflow: hidden; margin-top: 10px; margin-left: 30px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2); display: flex;">
        <img src="{{asset('storage/'.$similar->class_image)}}" class="card-img-top" alt="..." >
        <div class="card-body" style="background-color: #ffffff; border-radius: 0 0 20px 20px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$similar->class_title}}</b></h2>
            <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px;"> {{date('l \, d F Y\, h:i ', strtotime($similar->date_time))}}</p>
            <p style="color: rgb(105, 105, 105); font-size: 16px;"><img src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px;"> {{ucfirst($similar->class_type)}}</p>
            <div style="display: flex; align-items: left;">
              <img src="{{asset('storage/'.$similar->UserDesc->profile_picture)}}" alt="" style="height: 50px;">
              <div style="text-align: left;">
                <p style="margin-bottom: 0;">{{$similar->UserDesc->User->first_name}} {{$similar->userDesc->User->last_name}}<span> •</span> </p>
                <p style="margin-top: 0; font-size: 14px; ">{{$similar->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$similar->UserDesc->ExpertclassApplication->perusahaan}}</p>
                <p><button style="background-color: yellow; height: 20px; width: 50px; border-color: none; 
                border: none; text-align: center; font-size: 13px;">
                <b>{{$similar->Discount->discount * 100}} %</b></button> <span style="text-decoration: line-through; color: gray; font-size: 14px; " >IDR {{number_format($similar->price, 0,',', '.')}}</span> </p>
              </div>
            </div>
          </div>
          <h2 class="me-4" style="text-align: end; font-size: 20px;"><b>IDR {{number_format((1 - $similar->Discount->discount)*$similar->price, 0, ',', '.')}}</b></h2>
        </div>
      </div>
     @endforeach
  
    @endif
    </div>

    

    
@endsection