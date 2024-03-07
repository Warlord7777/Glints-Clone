@extends('layouts.mainUser')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/lamaransaya.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
            <div class="col-3" style="margin-top: 80px">
              <div class="ms-4">
                <h3>Hi, {{auth()->user()->first_name}}!</h3>
                <p class="fs-5">Anda telah bergabung dengan Glints sejak <b>{{auth()->user()->created_at->format('d M Y')}}</b>,<br>
                  dan melamar pekerjaan sebanyak <b>{{$applications->count()}} pekerjaan</b></p>
                </div>
            </div>
            <div class="col-9 mt-5">
              <div class="me-4">
              <div class="text-center mb-2 mt-4">
                <h3><b>Lamaran Anda</b> </h3>
            </div>
              <table class="table table-hover my-0 text-center border" style="box-shadow: 0px 3px 10px #bfbaba;">
                <thead>
                    <tr class="border" style="background-color: #007acc; color:white">
                        <th class="border">Company Name</th>
                        
                        <th class="border d-none d-xl-table-cell">Location</th>
                        <th class="border d-none d-xl-table-cell">Position</th>
                        <th class="border d-none d-xl-table-cell">Salary</th>
                        <th class="border d-none d-xl-table-cell">Status</th>    
                        <th class="border d-none d-xl-table-cell">Time</th>    
                    </tr>
                </thead>
                <tbody>
                  @foreach($applications as $application)
                    <tr class="border">
                        <td>{{$application->Company->company_name}}</td>
                        <td class="d-none d-xl-table-cell border">{{$application->Company->company_location}}</td>
                        <td class="d-none d-xl-table-cell border">{{$application->Job_vacancy->job_position}}</td>
                        <td class="d-none d-xl-table-cell border">IDR {{number_format($application->Job_vacancy->estimated_salary, 0, ',', '.')}}</td>
                      
                        <td class="d-none d-xl-table-cell">
                          <span class="badge 
                              @if($application->status == 0)
                                bg-warning
                              @elseif($application->status == 1)
                                bg-warning
                              @elseif($application->status == 2)
                                bg-success
                              @elseif($application->status == -1)
                                bg-danger
                              @endif
                              ">
                            @if($application->status == 0)
                                Pending
                              @elseif($application->status == 1)
                                Interview
                              @elseif($application->status == 2)
                                Hired!
                              @elseif($application->status == -1)
                                Rejected
                            @endif
                          </span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          {{$application->created_at->format('d M Y')}}
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
            </div>
        </div>

    </div>
@endsection
