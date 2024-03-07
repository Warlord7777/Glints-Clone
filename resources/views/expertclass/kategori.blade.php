@push('style')
    <link rel="stylesheet" href="{{asset('css/kategori.css')}}">
@endpush

@push('script')
    <script src="{{asset('js/kategori.js')}}"></script>
@endpush

@extends('layouts.expertClass')

@section('content')
    <div class="container-fluid" style="padding-top: 100px;">
        <div class="content-container">
            <div class="column-left position-sticky top-0" style="height: 100px;">
            <div class="card">
                <div class="card-content">
                
                <button id="filterAllBtn" class="filter-btn">All</button> <br> <br>
                <b>Price</b> <br>
                <button class="low-high button-blue my-3" id="sortLowToHighBtn">Low to High</button>
                <button class="high-low button-blue" id="sortHighToLowBtn">High to Low</button>
                <br>  <b>Class</b>
                <br> <button class="filter-btn my-3" id="filterWebinarBtn">Webinar</button>
                <button class="filter-btn" id="filterMentorshipBtn">Mentorship</button> 
                </div>
            </div>
            </div>
 

            <div class="column-right">
            <h5 class="text-center fs-4">Kelas dan Kursus {{ucfirst($category)}}</h5>
            <!-- 2 cards row 1 -->
            <div id="cardContainer" class="row row-cols-3">
                @foreach($classes as $class)
                <div class="col mt-3 d-flex justify-content-start">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-horizontal">
                                <a href="/expertclass/detail/{{$class->class_id}}" style="text-decoration: none; color: black;">
                                <div>
                                    <div class="card3 all" data-price="{{$class->price}}" data-class="{{$class->class_type}}"
                                    style="width: 340px; height: auto; font-family:'Poppins', sans-serif; border-radius: 15px; overflow: hidden; margin-top: 10px; margin-left: 0px; left: 0px;  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);">
                                    <img
                                        src="img/{{$class->class_image}}"
                                        class="card-img-top" alt="{{$class->class_title}}"
                                        style="height: 65%; object-fit: cover; object-position: 20% 30%; width: 100%; height: 150px">
                                    <div class="card-body px-3 py-3" style="background-color: #ffffff; border-radius: 0 0 20px 20px;">
                                        <h2 class="card3-text" style="font-size: 16px; margin-bottom: 12px;"><b>{{$class->class_title}}</b></h2>
                                        <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                            src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px;">
                                        {{date('l \, d F Y\, h:i ', strtotime($class->date_time))}}</p>
                                        <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                            src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px;">
                                        {{ucfirst($class->class_type)}}</p>
                                        <div style="display: flex; align-items: left; width: 800px;">
                                        <img
                                            src="{{asset('storage/'.$class->UserDesc->profile_picture)}}"
                                            alt="" style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                                        <div style="text-align: left; margin-left: 10px; width: auto; flex: auto;">
                                            <p style="margin-bottom: 0; font-weight: 500;">{{$class->UserDesc->User->first_name}} {{$class->UserDesc->last_name}}</p>
                                            <p style="margin-top: 0; font-size: 14px; position: absolute;">{{$class->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$class->UserDesc->ExpertclassApplication->perusahaan}}</b></p>
                                        </div>
                                        </div>
                                        <div
                                        style="display: flex; align-items: flex-end; justify-content: flex-start; display: inline; padding-top: 90px;">
                                        <div style="display: flex; align-items: center;">
                                            <div style="display: flex; align-items: center;">
                                            <div style="display: flex; position: absolute; align-items: center; margin-top: 90px;">
                                                <button
                                                style="background-color: yellow; height: 20px; width: 45px; border-color: none; border: none; text-align: center; font-size: 13px;"><b>{{$class->Discount->discount * 100}} %</b></button>
                                                &nbsp; <span style="text-decoration: line-through; color: gray; font-size: 11px;"> IDR {{number_format($class->price, 0,',', '.')}}</span>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div
                                        style="display: flex; align-items: center; justify-content: flex-end; margin-top: 25px; margin-bottom: 0px;">
                                        <p style="font-size: 20px; margin-right: 10px;"><b>IDR {{number_format((1 - $class->Discount->discount)*$class->price, 0, ',', '.')}}</b></p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection