@extends('layouts.mainUser')

@section('title', 'Detail Perusahaan')
@push('style')
    <style>
        .active{
            fill:blue;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid" style="padding-top:100px;">
        <div class="row mb-5">
            <div class="col-12">
                <img src="{{asset("storage/".$company_detail[0]->banner)}}" alt="{{$company_detail[0]->company_name}}" style="width: 1490px; height: 300px;">
            </div>
        </div>
        <div class="row" style="padding: 0px 10%;">
            <div class="col-12 border">
                <div class="row">
                    <div class="col-2">
                        <div class=" d-flex justify-content-center mt-3">
                            <img src="{{asset("storage/". $company_detail[0]->logo_company)}}" style="border: 0.5px solid lightgray; width: 150px; height: 150px;" alt="">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="mt-4">
                            <h3 style="font-weight: bolder;">{{$company_detail[0]->company_name}}</h3>
                            <p>{{$company_detail[0]->short_description}}</p>

                            <div class="row">
                                <dl class="col-5">
                                    <div>
                                        <dt style="font-weight: 600; color: #002d79">Kantor Pusat</dt>
                                        <dd>{{$company_detail[0]->company_location}}</dd>
                                    </div>

                                    <div>
                                        <dt style="font-weight: 600; color:#002d79;">Situs</dt>
                                        <dd style=""><a rel="nofollow noopener noreferrer"
                                                href="{{$company_detail[0]->company_website}}"
                                                target="_blank">{{$company_detail[0]->company_website}}</a></dd>
                                    </div>
                                </dl>

                                <dl class="col-4">
                                    <div>
                                        <dt style="font-weight: 600; color: #002d79;">Industri</dt>
                                        <dd>{{$company_detail[0]->company_industry}}</dd>
                                    </div>

                                    <div>
                                        <dt style="font-weight: 600; color: #002d79;">Ukuran Perusahaan</dt>
                                        <dd>{{$company_detail[0]->company_size}} karyawan</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 border" >
                        <div class="row d-flex justify-content-end">
                            <div class="col-4">
                                <div class="mt-2 mb-2">
                                    <a href="/companies/{{$company_detail[0]->company_id}}"><button type="button" class="share">
                                        <span>
                                            <b>LIHAT LOWONGAN DI {{$company_name}}</b>
                                        </span>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="border">
                                <div class="ms-3 mt-3">
                                <h4 style="font-weight: bolder;">Tentang {{$company_detail[0]->company_name}}</h4>
                                <h6 class="mt-4">Deskripsi</h6>
                                <p>{!!$company_detail[0]->company_description!!}</p>
                                <h6>Alamat</h6>
                                <p>{{$company_detail[0]->company_address}}</p>
                            </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="row mb-5">
                <div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="border">
                                <div class="ms-3 mt-3">
                                <h4 style="font-weight: bolder;">Lowongan Saat Ini di {{$company_detail[0]->company_name}}</h4>
                                <hr style="width: 98%;">
                                @if(!$job_vacancies->isEmpty())
                                @foreach($job_vacancies as $job)
                                
                                <a href="/job-detail/{{$job->job_vacancy_id}}">
                                    <span style="color: #017eb7;">
                                        {{$job->job_name}}
                                    </span>
                                    <p class="text-muted">{{$job->company->company_location}}</p>
                                    <p class="text-muted">{{$job->updated_at->format('d M Y g:i A')}}</p>
                                </a>
                                <hr style="width: 97%;">
                                @endforeach
                                @else
                                <h5>Belum Ada Lowongan dari {{$company_detail[0]->company_name}}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials.footer')

@endsection