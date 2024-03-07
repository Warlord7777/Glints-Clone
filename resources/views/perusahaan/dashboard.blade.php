@extends('layouts.MainPerusahaan')

@push('style')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endpush

@section('title', 'Dashboard')
@section('content')
    @if(session()->has('consultsuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('consultsuccess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-between">
            @if(!auth()->user()->Company->company_name == null)
                <div class="fs-4">
                    Perusahaan: <span class="fw-bold">{{auth()->user()->Company->company_name == null ? 'Masukkan Nama Perusahaan Anda' : auth()->user()->Company->company_name}}</span>
                </div>
            @else
                
            @endif
            <div class="d-flex">
                <a href="/perusahaan/edit-profil" class="text-decoration-none">
                    <div style="color: #017eb7">
                        <i class="fa-solid fa-pencil"></i>
                        Edit Profil Perusahaan
                    </div>
                </a>
                {{-- <a href="#" class="text-decoration-none">
                    <div class="ms-4" style="color: #017eb7;">
                        <i class="fa-solid fa-user"></i>
                        Kelola Anggota Tim
                    </div>
                </a> --}}
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-between">
            
            <div class="d-flex col-12 col-md-9">
                <div class="fw-bold fs-5">
                    Daftar Lowongan Kerja
                </div>
                <a class="ms-0 ms-md-3 px-2 py-1 loker text-decoration-none" href="/perusahaan/page/createJob">
                    + Pasang Loker
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5 section-2 overflow-auto" style="height: 59vh;">
        <div class="col-2 section-2-1">
            <div class="mt-3 d-flex justify-content-between">
                <div class="d-flex align-items-center nav-link">
                     AKTIF
                </div>    
                <div class="px-2 py-2 number  {{$job_vacancy->count() > 0 ? 'bg-success' : 'disabled'}}">
                    {{$job_vacancy->count()}}
                </div>
            </div>
        </div>
        <div class="col-10">
            @if($job_vacancy->isEmpty())
                <div class="fs-4 d-flex justify-content-center align-items-center">
                    Belum ada loker yang dipasang
                </div>
            @else
                <div class="fs-4 d-flex justify-content-center align-items-center">
                    <main class="content" style="font-size: 90%">
                        <div class="container-fluid p-0">
        
                            <div class="mb-3">
                                <h1 class="text-center" style="font-weight: bold;"></h1>
        
                            </div>
                            <div class="row justify-content-center">
                                <table class="table table-hover my-0 text-center">
                                    <thead>
                                        <tr>
                                            <th class="border">Job Name</th>
                                            <th class="d-none d-xl-table-cell border">Job Type</th>
                                            <th class="d-none d-xl-table-cell border">Salary</th>
                                            <th class="d-none d-xl-table-cell border">Location</th>
                                            <th class="d-none d-xl-table-cell border">Detail Information</th>
                                            <th class="d-none d-xl-table-cell border">Edit Job</th>
                                            <th class="d-none d-xl-table-cell border">Delete</th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($job_vacancy as $job)
                                            <tr>
                                                <td class="border">{{$job->job_name}}</td>
                                                <td class="d-none d-xl-table-cell border">{{$job->job_type}}</td>									
                                                <td class="d-none d-xl-table-cell border">IDR {{number_format($job->estimated_salary, 0, ',', '.')}}</td>
                                                <td class="d-none d-xl-table-cell border">{{$job->city}}, {{$job->country}}</td>

            
                                                <td class="d-none d-xl-table-cell border">
                                                    <button type="button" class="btn" style="background-color: #007acc; color:white;" onclick="window.location.href = '/perusahaan/page/job-detail/{{$job->job_vacancy_id}}';">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M6.364 2.5a.5.5 0 0 1 .5-.5H13.5A1.5 1.5 0 0 1 15 3.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 2 13.5V6.864a.5.5 0 1 1 1 0V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H6.864a.5.5 0 0 1-.5-.5z"/>
                                                            <path fill-rule="evenodd" d="M11 10.5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1 0-1h3.793L1.146 1.854a.5.5 0 1 1 .708-.708L10 9.293V5.5a.5.5 0 0 1 1 0v5z"/>
                                                        </svg>    
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-info" onclick="location.href = '/perusahaan/edit-job/{{$job->job_vacancy_id}}'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                    </button>
                                                </td>
                                                <td class="d-none d-xl-table-cell border">
                                                    <form action="/perusahaan/page/deleteJob/{{$job->job_vacancy_id}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-warning">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                            </svg>
                                                        </button>
                                                    
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
        
                            </div>
        
                        </div>
                    </main>
                </div>
            @endif
        </div>
    </div>

@endsection