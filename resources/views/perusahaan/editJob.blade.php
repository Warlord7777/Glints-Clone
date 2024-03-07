@extends('layouts.MainPerusahaan')

@push('style')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endpush

@push('script')
    <script>

    </script>
@endpush
@section('title', 'Edit Job')
@section('content')
@php
$availableSkills = [
        "Copywriting",
        "Social Media",
        "Content Creation",
        "Fashion",
        "Content Management",
        "Branding",
        "Content Development",
        "Content Tiktok",
        "Content Strategy",
        "Negotiation Skills",
        "Microsoft Office",
        "Good Communication Skills",
        "Analytical Skills",
        "Problem-Solving Skills",
        "Creativity",
        "Time Management",
        "Leadership",
        "Teamwork",
        "Graphic Design",
        "Video Editing",
        "SEO",
        "Market Research",
        "Public Relations",
        "Event Planning",
        "Interpersonal Skills",
        "Leadership Skills",
        "Marketing"
    ];
    $skills = explode(',', $job->job_skills);
@endphp
    <form action="/perusahaan/edit-job/{{$job->job_vacancy_id}}" method="POST">
        @method('put')
        @csrf
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-8">
                <div class="row border rounded">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mt-3 mb-2 fw-bold">
                                    Detail & Jenis Pekerjaan <span style="color: red;">*</span>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="jobrole" class="fw-bold">Job Role</label>
                                    <input type="text" name="jobrole" id="jobrole" class="form-control w-50 @error('jobrole') is-invalid @enderror" value="{{$job->job_name}}">
                                    @error('jobrole')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3 mb-2">
                                    <label for="posisi" class="fw-bold">Posisi Pekerjaan</label>
                                    <input type="text" name="posisi" id="posisi" class="form-control w-50 @error('posisi') is-invalid @enderror" value="{{$job->job_position}}">
                                    @error('posisi')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3 mb-2">
                                    <span class="fw-bold">
                                        Jenis Kontrak
                                    </span>
                                    <div class="mt-1">
                                        <input type="radio" name="kontrak" id="penuh" value="Penuh" {{$job->job_type == 'Penuh' ? 'checked' : ''}} class="form-check-input  @error('kontrak') is-invalid @enderror">
                                        <label for="penuh" class="form-check-label ms-1">Penuh</label>
                                    
                                        <input type="radio" name="kontrak" id="paruh" value="Paruh" {{$job->job_type == 'Paruh' ? 'checked' : ''}} class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
                                        <label for="paruh" class="form-check-label ms-1">Paruh</label>

                                    
                                        <input type="radio" name="kontrak" id="magang" value="Magang" {{$job->job_type == 'Magang' ? 'checked' : ''}} class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
                                        <label for="magang" class="form-check-label ms-1">Magang</label>
                                    
                                        <input type="radio" name="kontrak" id="proyek" value="Proyek" {{$job->job_type == 'Proyek' ? 'checked' : ''}} class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
                                        <label for="proyek" class="form-check-label ms-1">Proyek</label>
                                    </div>
                                    @error('kontrak')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row mt-5 border rounded">
                    <div class="col-12">
                        <div class="container">

                            <div class="row">
                                <div class="col-12 py-3 fw-bold">
                                    Lokasi <span style="color: red;">*</span>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span class="fw-bold">
                                        Sistem Kerja
                                    </span>
                                    <div class="mt-1">
                                        <input type="radio" name="sistem" id="kantor" value="wfo" {{$job->job_system == 'wfo' ? 'checked' : ''}} class="form-check-input @error('sistem') is-invalid @enderror">
                                        <label for="kantor" class="form-check-label ms-1">Di Kantor</label>
                    
                                        <input type="radio" name="sistem" id="remote" value="remote" {{$job->job_system == 'remote' ? 'checked' : ''}} class="form-check-input ms-3 @error('sistem') is-invalid @enderror">
                                        <label for="remote" class="form-check-label ms-1">Remote / Dari Rumah</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <span class="fw-bold">
                                        Lokasi
                                    </span>
                                    <div class="col-12 mt-2 mb-2">
                                        <label for="negara">Negara</label>
                                        <input type="text" name="negara" id="negara" value="{{$job->country}}" class="form-control w-50 @error('negara') is-invalid @enderror">
                                        @error('negara')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
    
                                    <div class="col-12 mt-3 mb-2">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" value="{{$job->city}}" class="form-control w-50 @error('jobrole') is-invalid @enderror">
                                        @error('kota')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 border rounded">
                    <div class="col-12">
                        <div class="container">

                            <div class="row">
                                <div class="col-12 py-3 fw-bold">
                                    Deskripsi Pekerjaan <span style="color: red;">*</span>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 pb-3">
                                  <textarea name="deskripsi">
                                    {{$job->description}}
                                  </textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="row mt-5 border rounded">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 py-3 fw-bold">
                                    Gaji <span style="color: red;">*</span>
                                </div>
                                <hr>
                            </div>
                            <div class="row mb-3">
                                <span class="fw-bold">Berapa Gaji Bulanannya?</span>
                                <div class="col-12 mt-3 mb-2">
                                    <label for="gaji" class="fw-bold">Gaji Bulanan</label>
                                    <div>

                                        IDR <input type="text" name="gaji" value="{{$job->estimated_salary}}" id="gaji" class="form-control w-50 @error('gaji') is-invalid @enderror">
                                    </div>
                                    @error('gaji')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="row mt-5 border rounded">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 py-3 fw-bold">
                                    Persyaratan Kerja <span style="color: red;">*</span>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3 mb-2">
                                    <label for="skill" class="fw-bold">Skill Yang Dibutuhkan</label>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        @foreach($availableSkills as $index => $skill)
                                            @if($index < 9)
                                                <input {{ in_array($skill, $skills) ? 'checked' : '' }} class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="{{ $skill }}" id="{{ str_replace(' ', '-', strtolower($skill)) }}">
                                                <label class="form-check-label" for="{{ str_replace(' ', '-', strtolower($skill)) }}">{{ $skill }}</label><br>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div>
                                        @foreach($availableSkills as $index => $skill)
                                            @if($index >= 9 && $index < 18)
                                                <input {{ in_array($skill, $skills) ? 'checked' : '' }} class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="{{ $skill }}" id="{{ str_replace(' ', '-', strtolower($skill)) }}">
                                                <label class="form-check-label" for="{{ str_replace(' ', '-', strtolower($skill)) }}">{{ $skill }}</label><br>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div>
                                        @foreach($availableSkills as $index => $skill)
                                            @if($index >= 18)
                                                <input {{ in_array($skill, $skills) ? 'checked' : '' }} class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="{{ $skill }}" id="{{ str_replace(' ', '-', strtolower($skill)) }}">
                                                <label class="form-check-label" for="{{ str_replace(' ', '-', strtolower($skill)) }}">{{ $skill }}</label><br>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <label for="pengalaman" class="fw-bold mt-3">Pengalaman Kerja Yang Dibutuhkan</label>
                                    <select class="form-select @error('experience') is-invalid @enderror" id="pengalaman" aria-label="Default select example" name="experience">
                                        <option value="" selected>Belum Dipilih</option>
                                        <option {{$job->job_experience == '<1' ? 'selected' : ''}} value="<1">< 1 Tahun</option>
                                        <option {{$job->job_experience == '1-2' ? 'selected' : ''}} value="1-2">1 - 2 Tahun</option>
                                        <option {{$job->job_experience == '3-5' ? 'selected' : ''}} value="3-5">3 - 5 Tahun</option>
                                        <option {{$job->job_experience == '5-7' ? 'selected' : ''}} value="5-7">5 - 7 Tahun</option>
                                        <option {{$job->job_experience == '>7' ? 'selected' : ''}} value=">7">> 7 Tahun</option>
                                    </select>
                                    @error('experience')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn konfirmasi w-25">Konfirmasi Loker</button>
                    </div>
                </div>

            </div>
        </div>
        
    </form>
        @endsection