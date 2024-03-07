@push('style')
<link rel="stylesheet" href="{{asset('css/userLandingPage.css')}}">
@endpush

@push('script')
<script src="{{asset('js/user-index.js')}}"></script>
@endpush

@extends('layouts.mainUser')

@section('title', 'Glints: Situs Lowongan Kerja Terbaik di Indonesia')

@section('content')
  <div class="container-fluid border mb-4" style="background-color: #fff240; padding-top: 70px;">
      <div class="row text-center py-4">
        <div class="col-12">
            <div class="col-12 mt-4">
                <h4>Jelajahi <b>5000+</b> pekerjaan baru setiap bulan!</h4>
            </div>
  
            <!-- navbar starts -->
            <div class="col-12 bg-body-tertiary container mb-4">
                <div class="container-fluid navbar">
                    <form class="w-100" role="search" action="/explore">
                        @csrf
                        <input class="form-control me-3 w-50 searchLogo" name="keyword" type="search" placeholder="Cari Lowongan"
                            aria-label="Search">
                        <input class="form-control me-3 w-50 locationNav" name="location" type="search"
                            placeholder="Indonesia" aria-label="Search">
                        <button type="submit"
                            style="width: 10%; background-color: #007acc; color: white; font-weight: bold;"
                            class="btn">CARI</button>
                    </form>
                </div>
            </div>
        </div>
          <!-- navbar ends -->
      </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="d-flex flex-column align-items-center text-center" style="margin-top: 100px;">
              <h3 class="fs-2" style="font-weight: 800;"><b>TEMPAT PENGEMBANGAN KARIER TERBAIK UNTUKMU</b> </h3>
              <p style="font-size: 1.3em;" class="py-5 w-50">Buat keputusan terbaik untuk kariermu dan bangun karier impianmu!</p>
          </div>
          <div class="row">
              <div class="d-flex" style="justify-content: center; align-items: center;">
                  <a href="/expertclass">
                      <div class="border me-3 d-flex share2" style="border-radius: 10px; width: 500px; height: 150px;">
                          <div class="SectionOneStopsc__CardImage-sc-1yooqnv-6 ibtGMq">
                              <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="150px" height="130px"
                                  viewBox="0 0 50 50">
                                  <path
                                      d="M50 30.957V4.395C50 1.97 48.029 0 45.605 0H4.395C1.97 0 0 1.971 0 4.395v44.14C0 49.345.656 50 1.465 50H50v-2.93c0-2.346-.956-4.56-2.69-6.233-.595-.574-1.255-1.055-1.96-1.442 1.058-1.061 1.72-2.493 1.72-4.043 0-.084-.003-.167-.007-.25C48.772 34.499 50 32.869 50 30.957zM5.86 47.07c0-3.23 2.628-5.86 5.859-5.86 3.23 0 5.86 2.63 5.86 5.86H5.858zm2.93-11.718c0-1.616 1.313-2.93 2.929-2.93 1.615 0 2.93 1.314 2.93 2.93 0 1.615-1.315 2.93-2.93 2.93-1.616 0-2.93-1.315-2.93-2.93zm10.253 6.866c-.781-1.175-1.837-2.152-3.075-2.839.997-1.05 1.61-2.468 1.61-4.027 0-3.231-2.628-5.86-5.86-5.86-3.23 0-5.859 2.629-5.859 5.86 0 1.559.614 2.976 1.61 4.027-2.704 1.5-4.54 4.385-4.54 7.691V28.027c0-4.038 3.286-7.324 7.325-7.324h18.22c.672 0 1.258-.457 1.421-1.11l2.375-9.499c.195-.779.985-1.266 1.777-1.066.783.196 1.261.993 1.066 1.777l-2.93 11.718c-.163.653-.748 1.11-1.421 1.11h-8.79c-.808 0-1.464.656-1.464 1.465 0 9.741-.025 9.155.057 9.442-.25 1.803.34 3.561 1.553 4.84-1.239.686-2.294 1.663-3.075 2.838zM8.789 13.378c0-2.422 1.971-4.394 4.395-4.394 2.423 0 4.394 1.972 4.394 4.395 0 2.423-1.971 4.394-4.394 4.394-2.424 0-4.395-1.97-4.395-4.394zM20.508 47.07c0-3.23 2.628-5.86 5.86-5.86 3.23 0 5.859 2.63 5.859 5.86h-11.72zm2.93-11.718c0-1.616 1.314-2.93 2.93-2.93 1.615 0 2.929 1.314 2.929 2.93 0 1.615-1.314 2.93-2.93 2.93-1.615 0-2.93-1.315-2.93-2.93zm10.253 6.866c-.78-1.175-1.836-2.152-3.074-2.839.996-1.05 1.61-2.468 1.61-4.027h2.93c0 1.559.613 2.976 1.609 4.027-1.238.687-2.294 1.664-3.075 2.839zm13.38 4.852H35.155c0-3.23 2.629-5.86 5.86-5.86 3.282 0 6.054 2.684 6.054 5.86zm-8.985-11.718c0-1.616 1.314-2.93 2.93-2.93 1.664 0 3.125 1.369 3.125 2.93 0 1.56-1.46 2.93-3.125 2.93-1.616 0-2.93-1.315-2.93-2.93zm8.984-4.395c0 .611-.376 1.136-.91 1.355-1.078-1.677-3.003-2.82-5.144-2.82-2.164 0-4.057 1.18-5.071 2.93h-4.507c-1.014-1.75-2.907-2.93-5.07-2.93-1.068 0-2.068.288-2.93.788v-3.718h7.324c2.02 0 3.773-1.368 4.263-3.329l2.93-11.718c.587-2.352-.847-4.742-3.193-5.328-2.349-.594-4.741.832-5.334 3.196l-2.097 8.39h-8.292c.922-1.225 1.469-2.747 1.469-4.394 0-4.039-3.286-7.324-7.324-7.324-4.039 0-7.325 3.285-7.325 7.324 0 1.807.66 3.463 1.749 4.741-1.802.482-3.41 1.443-4.678 2.739V4.395c0-.808.657-1.465 1.465-1.465h41.21c.808 0 1.465.657 1.465 1.465v26.562z">
                                  </path>
                              </svg>
                          </div>
                          <div class="SectionOneStopsc__CardText-sc-1yooqnv-7 fRYMaV d-flex ">
                              <div class="SectionOneStopsc__CardTitle-sc-1yooqnv-8 kKOqvt "
                                  style="color: black; margin-top: 20%;">
                                  <h4 style="font-weight: bold; font-size: xx-large;" class="text-color">BELAJAR</h4>
                              </div>
                              <div style="color: black; margin-top: 23%;">
                                  <h6 class="text-color">&nbsp; DI EXPERT CLASS</h6>
                              </div>
                          </div>
                      </div>
                  </a>

                  <a href="/opportunities">
                      <div class="border ms-3 d-flex share2" style="border-radius: 10px; width: 500px; height: 150px;">
                          <div class="SectionOneStopsc__CardImage-sc-1yooqnv-6 ibtGMq">
                              <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="150px" height="130px"
                                  viewBox="0 0 50 47">
                                  <path
                                      d="M48.535 20.522h-17.68c.922-1.225 1.47-2.747 1.47-4.394 0-.81-.657-1.465-1.466-1.465H18.022c-1.676 0-3.182.93-3.93 2.429l-1.311 2.62c-.25.5-.752.81-1.31.81H1.465c-.81 0-1.465.656-1.465 1.465v17.578c0 .809.656 1.465 1.465 1.465h14.14l4.15 4.15c1.176 1.176 2.882 1.585 4.46 1.074L38.16 42.33c.829-.233 1.545-.688 2.09-1.3h8.285c.81 0 1.465-.656 1.465-1.465V21.987c0-.81-.656-1.465-1.465-1.465zM5.86 38.1H2.93V23.452h2.93V38.1zm32.528.37c-.064.244-.291.834-1.02 1.04-.055.015-13.989 3.935-14.042 3.952-.53.177-1.104.041-1.5-.354l-4.578-4.579c-.275-.275-.648-.429-1.036-.429H8.789V23.452h2.682c1.675 0 3.181-.931 3.93-2.43l1.31-2.62c.25-.5.752-.82 1.31-.82h11.123c-.605 1.706-2.234 2.94-4.144 2.94h-1.119c-1.675 0-3.181.93-3.93 2.43l-4.46 8.92c-.18.359-.205.776-.068 1.154.137.377.423.682.791.843 3.571 1.559 7.734.048 9.478-3.44l.56-1.118h3.394c.391 0 .76.152 1.036.429l7.323 7.324c.536.536.446 1.162.382 1.406zm2.726-1.847c-.215-.6-.563-1.158-1.036-1.63l-7.324-7.325c-.83-.83-1.933-1.287-3.107-1.287h-4.3c-.555 0-1.062.314-1.31.81l-.964 1.928c-.801 1.602-2.45 2.51-4.144 2.427l3.643-7.285c.25-.5.752-.81 1.31-.81h17.232v13.172zM47.07 38.1h-3.027V23.452h3.027V38.1zM25 .014c-.809 0-1.465.656-1.465 1.465v4.395c0 .809.656 1.464 1.465 1.464s1.465-.655 1.465-1.464V1.479C26.465.67 25.809.014 25 .014zM17.247 9.232l-2.93-2.93c-.572-.571-1.5-.571-2.071 0-.573.573-.573 1.5 0 2.072l2.93 2.93c.571.572 1.499.572 2.07 0 .573-.572.573-1.5 0-2.072zM37.755 6.303c-.572-.572-1.5-.572-2.072 0l-2.93 2.93c-.572.571-.572 1.499 0 2.07.572.573 1.5.573 2.072 0l2.93-2.929c.572-.572.572-1.5 0-2.071z"
                                      transform="translate(0 -2) translate(0 2)"></path>
                              </svg>
                          </div>
                          <div class="SectionOneStopsc__CardText-sc-1yooqnv-7 fRYMaV d-flex">
                              <div class="SectionOneStopsc__CardTitle-sc-1yooqnv-8 kKOqvt "
                                  style="color: black; margin-top: 20%;">
                                  <h4 style="font-weight: bold; font-size: xx-large;" class="text-color">LAMAR</h4>
                              </div>
                              <div style="color: black; margin-top: 23%;">

                                  <h6 class="text-color">&nbsp; PEKERJAAN IMPIANMU</h6>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>

          <div class="row">
              <div class="text-center mt-5 ">
                  <img sizes="(min-width: 768px) 808px, 100vw"
                      src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png"
                      srcset="https://images.glints.com/unsafe/160x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 160w, https://images.glints.com/unsafe/360x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 360w, https://images.glints.com/unsafe/480x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 480w, https://images.glints.com/unsafe/768x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 768w, https://images.glints.com/unsafe/960x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 960w, https://images.glints.com/unsafe/1024x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 1024w, https://images.glints.com/unsafe/1440x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 1440w, https://images.glints.com/unsafe/1920x0/glints-dashboard.s3.amazonaws.com/images/landing/one-stop.png 1920w"
                      loading="lazy">
              </div>
          </div>


      </div>



  </div>

  <div class="container-fluid" style="background-color: rgb(242, 248, 250);">
      <div class="col-12">
          <div class="row">
              <div class="col-8">
                 <div class="row">
                    <div class="col-12">
                        <div class="py-5 px-2">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    @foreach($classes as $class)
                                    @php
                                        $dateString = $class->date_time;
                                        $dateTime = new DateTime($dateString);
                                    @endphp
                                    <div class="card carouselCard" style="width: 18rem; height: 22rem;" onclick="location.href='/expertclass/detail/{{$class->class_id}}'">
                                        <img src="{{asset('storage/'.$class->class_image)}}" style="width: 286px; height: 170px;" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="card-title">{{$class->class_title}}</h5>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3 text-center" style="border-right: 2px solid gray; color:rgb(1, 126, 183); font-weight: 500; font-size: 1.3em;"> 
                                                    {{$dateTime->format('M')}} 
                                                    <span style="color:black;">
                                                        {{$dateTime->format('d')}}
                                                    </span>
                                                </div>
                                                
                                                <div class="col-9 d-flex flex-column justify-content-center">
                                                    <span class="badge bg-secondary w-75 mb-2">{{ucfirst($class->category)}}</span>
                                                    <p class="card-text"><i class="fa-solid fa-location-dot" style="color: #c9c9c9;"></i> &nbsp;{{ucfirst($class->class_type)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination"></div> --}}
                        </div>
                    </div>
                 </div>
              </div>

              <div class="col-4 mt-5">
                  <h2><b> BELAJAR LANGSUNG<br> DARI EXPERT</b></h2>
                  <div class="col-2 mt-4 mb-4" style="border-bottom: 5px solid yellow;">
                  </div>
                  <div class="col-10">
                      <p style="font-size: larger;">Belajar dari para praktisi dan tingkatkan keterampilanmu di bidang
                          digital marketing, desain, coding, data, dan lainnya.</p>
                  </div>
                  <a href="/expertclass">
                  <div class="mb-4" style="color: #007acc;"><span><b>Cari dan ikut Expertclass</b></span> 
                      <svg data-testid="icon-svg" class="ms-2 IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100"><path d="M5.83742757,43.7842786 L80.1831175,43.7842786 L52.2063422,16.8436802 C50.9974631,15.7211497 50.3930327,14.3827679 50.3930327,12.8284949 C50.3930327,11.2742218 50.9327027,9.91425326 52.012059,8.74854846 C53.0914153,7.58284366 54.4082103,7 55.9624833,7 C57.5167564,7 58.8983117,7.51808325 60.1071908,8.55426529 L98.1866905,45.3385439 C99.3955695,46.4610745 100,47.821043 100,49.4184903 C100,51.0159376 99.3955695,52.3759062 98.1866905,53.4984367 L59.8481466,90.4122375 C58.725616,91.4484195 57.4304079,91.9665028 55.9624833,91.9665028 C54.3218618,91.9665028 52.9403064,91.3620723 51.8177759,90.1531933 C50.6952453,89.0306627 50.1555753,87.692281 50.1987495,86.1380079 C50.2419238,84.5837349 50.8247674,83.2453531 51.947298,82.1228226 L79.9240733,55.1822241 L5.70790546,55.1822241 C4.2399809,55.1822241 2.94477277,54.6641409 1.82224222,53.6279588 C0.699711677,52.5917768 0.0952812177,51.3397423 0.00893271403,49.8718177 C-0.0774157896,48.2311961 0.462254263,46.8064672 1.62795906,45.5975881 C2.79366386,44.3887091 4.196806,43.7842786 5.83742757,43.7842786 Z"></path></svg>
                  </div>
              </a>
              </div>
          </div>
      </div>
  </div>

    @if(!Auth::check())
  <div class="container-fluid" style="background-color:rgb(1, 126, 183);">
      <div class="text-center mt-5">
          <h1 style="color: white;">Mulai bangun</h1>
          <h1 style="color: white;"><b>KARIER IMPIANMU</b></h1>
        <a href="/register" type="button" style="background-color: white; border-radius: 0%; color: #007acc; width: 80%;" class="btn mt-4 mb-5 py-3"><b style="font-size: larger;">DAFTAR SEKARANG</b></a>

      </div>
  </div>
  @endif
@include('partials.footer')

@endsection