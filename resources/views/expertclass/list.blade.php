@extends('layouts.expertClass')

@section('content')
    <div class="container-fluid" style="padding-top: 100px;">
        <div class="row">
            <div class="col-12">
                <form class="search-form" method="GET" action="/expertclass/list">
                  @csrf
                    <input type="text" placeholder="Input Keyword..." name="search" class="search-input">
                    <button type="submit" class="btn btn-primary ml-auto"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
       <div class="container mt-5">
            <div class="row d-flex justify-content-around">
              @if ($classes !== null)
                @foreach($classes as $class)
                <div class="col d-flex justify-content-start my-3">
                  <div>
                    <a href="/expertclass/detail/{{$class->class_id}}" style="text-decoration: none; color: black; ">
                      <div>
                        <div class="card3 "
                        style="width: 538.67px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; margin-top: 10px; box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);  ">
                          <img
                            src="{{asset('storage/'.$class->class_image)}}"
                            class="card-img-top" alt="..."
                            style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
                          <div class="card-body ps-5 pt-4" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                            <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$class->class_title}}</b></h2>
                            <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                                    ;">{{$class->date_time}}</p>
                            <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                                      ;"> {{$class->class_type}} &#9679;</p>
                            <div style="display: flex; align-items: left; width: 800px; ">
                              <img
                                src="https://images.glints.com/unsafe/160x160/glints-dashboard.s3.amazonaws.com/profile-picture-default/14.jpg" alt="gambar" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                              <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                                <p style="margin-bottom: 0; font-weight: 500; ">{{$class->UserDesc->User->first_name}} {{$class->UserDesc->User->last_name}}</p>
                                <p style="margin-top: 0; font-size: 14px; position: absolute; ">{{$class->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$class->UserDesc->ExpertclassApplication->perusahaan}}</p>
                              </div>
                              <p style="text-align: end; margin-top: 70px;  margin-right: 350px; font-size: 25px; height: auto; width: auto;" ><b>IDR {{number_format($class->price, 0,',', '.')}}</b></p>
                            </div>
                          </div>
                        </div>
                    </a>
                  </div>
                  </div>
                </div>
                @endforeach
              @endif
            </div>
          </div>

    </div>
@endsection