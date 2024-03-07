@extends('layouts.mainPerusahaan')
@push('style')
    <style>
        .badgeskills{
            width: fit-content;
            height: 35px;
            border:1px solid #bfbfbf;
            font-size: 14px;
            font-weight: normal;
        }
    </style>
@endpush
@section('content')
     <div class="container">   
        <div class="row mt-4">
            <div class="row">
                <div class="d-flex">
                    <a href="/perusahaan/page/dashboard" class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg>
                     Kembali</a>
                </div>
                
            </div>
            <div class="col-12 mt-5">
                <div class="text-center mb-3">
                    <h3><b>DETAIL INFORMATION</b> </h3>
                </div>
                <div class="row justify-content-between">
                    
                    <table class="table" style="box-shadow: 0px 5px 15px #bfbaba; border-radius: 7px;">
                        
                        <tbody>
                            <tr>
                                <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">Job Name</th>
                                <td class="d-none d-xl-table-cell text-center">{{$job->job_name}}</td>
                            </tr>

                            <tr>
                                <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">Job Position</th>
                                <td class="d-none d-xl-table-cell text-center">{{$job->job_position}}</td>
                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Job Type</th>
                                <td class="d-none d-xl-table-cell text-center">{{$job->job_type}}</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Salary</th>
                                <td class="d-none d-xl-table-cell text-center">IDR {{number_format($job->estimated_salary, 0, ',', '.')}}</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Location</th>
                                <td class="d-none d-xl-table-cell text-center">{{$job->city}}, {{$job->country}}</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Skills Required</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    <div class="d-flex justify-content-center">
                                        @foreach (explode(',',$job->job_skills,) as $skill)
                                            <div class="">
                                                <span class="badge rounded-pill text-bg-light badgeskills mx-1"style="display: flex; justify-content: center; align-items: center;">{{$skill}}</span>
                                            </div>
                                        @endforeach

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th class="d-none d-xl-table-cell border">Experience Required</th>
                                <td class="d-none d-xl-table-cell text-center">{{$job->job_experience}} tahun</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell" style="border-bottom: 0px; border-right: 1px solid #e6e6e6;">Job Description</th>
                                <td class="d-none d-xl-table-cell text-left text-center" style="border-bottom: 0px;">{!!$job->description!!}</td>

                            </tr>

                        </tbody>


                    </table>

                </div>

                <div class="text-center mb-2 mt-4">
                    <h3><b>APPLICANTS</b> </h3>
                </div>
                <div class="row justify-content-center mt-3 card mb-5">
                    <table class="table table-hover my-0 text-center border" style="box-shadow: 0px 5px 15px #bfbaba;">
                        <thead>
                            <tr class="border">
                                <th class="border">Nama</th>
                                <th class="border d-none d-xl-table-cell">Resume</th>
                                <th class="border d-none d-xl-table-cell">Phone Number</th>
                                <th class="border d-none d-xl-table-cell">Application Letter</th>
                                <th class="border d-none d-xl-table-cell">Detail</th>
                                <th class=" border d-none d-xl-table-cell">Status</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$applications->isEmpty())
                            @foreach($applications as $application)
                            <tr class="border">
                                <td>{{$application->UserDesc->User->first_name}}</td>
                                <td class="d-none d-xl-table-cell border"><a class="btn btn-primary" href="/download/{{$application->resume}}">Download Resume</a></td>
                                
                                
                                <td class="d-none d-xl-table-cell border"><i>{{$application->phone_number}}</i></td>

                                <td class="d-none d-xl-table-cell border">
                                    <a href="/perusahaan/page/application/letter/{{$application->id}}" class="btn btn-success">Check Letter</a>
                                </td>
                                <td class="d-none d-xl-table-cell border">
                                    <a class="btn btn-info" style="color:white;" href="/perusahaan/page/applicant-detail/{{$application->id}}">Detail</a>
                                </td>
                             
                                <td class="d-none d-xl-table-cell">
                                    <span class="badge
										@if($application->status == 0)
											bg-warning
										@elseif($application->status == 1)
											bg-warning	
                                        @elseif($application->status == 2)
											bg-success	
										@else
											bg-danger
										@endif
										">	@if($application->status == 0)
											Pending
										@elseif($application->status == 1)
											Interviewing
                                        @elseif($application->status == 2)
											Accepted
										@else
											Rejected
										@endif
                                    </span>
                                </td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">
                                    Belum ada yang melamar pekerjaan..
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection