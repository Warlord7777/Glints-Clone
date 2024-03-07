@extends('layouts.MainPerusahaan')

@push('style')
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endpush

@section('title', 'Create Job')
@section('content')
    <form action="/perusahaan/page/createJob" method="POST">
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
                                    <input type="text" name="jobrole" id="jobrole" class="form-control w-50 @error('jobrole') is-invalid @enderror">
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
                                    <input type="text" name="posisi" id="posisi" class="form-control w-50 @error('posisi') is-invalid @enderror">
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
                                        <input type="radio" name="kontrak" id="penuh" value="Penuh" class="form-check-input  @error('kontrak') is-invalid @enderror">
                                        <label for="penuh" class="form-check-label ms-1">Penuh</label>
                                    
                                        <input type="radio" name="kontrak" id="paruh" value="Paruh" class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
                                        <label for="paruh" class="form-check-label ms-1">Paruh</label>

                                    
                                        <input type="radio" name="kontrak" id="magang" value="Magang" class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
                                        <label for="magang" class="form-check-label ms-1">Magang</label>
                                    
                                        <input type="radio" name="kontrak" id="proyek" value="Proyek" class="form-check-input ms-3 @error('kontrak') is-invalid @enderror">
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
                                        <input type="radio" name="sistem" id="kantor" value="wfo" class="form-check-input @error('sistem') is-invalid @enderror">
                                        <label for="kantor" class="form-check-label ms-1">Di Kantor</label>
                    
                                        <input type="radio" name="sistem" id="remote" value="remote" class="form-check-input ms-3 @error('sistem') is-invalid @enderror">
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
                                        <input type="text" name="negara" id="negara" class="form-control w-50 @error('negara') is-invalid @enderror">
                                        @error('negara')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
    
                                    <div class="col-12 mt-3 mb-2">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control w-50 @error('jobrole') is-invalid @enderror">
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
                                  <textarea name="deskripsi"></textarea>
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
                                    (IDR) <input type="text" name="gaji" id="gaji" class="form-control w-50 @error('gaji') is-invalid @enderror">
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
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Copywriting" id="copywriting">
                                        <label class="form-check-label" for="copywriting">Copywriting</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Social Media" id="social-media">
                                        <label class="form-check-label" for="social-media">Social Media</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Content Creation" id="content-creation">
                                        <label class="form-check-label" for="content-creation">Content Creation</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Fashion" id="fashion">
                                        <label class="form-check-label" for="fashion">Fashion</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Content Management" id="content-management">
                                        <label class="form-check-label" for="content-management">Content Management</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Branding" id="branding">
                                        <label class="form-check-label" for="branding">Branding</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Content Development"
                                            id="content-development">
                                        <label class="form-check-label" for="content-development">Content Development</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Content Tiktok" id="content-tiktok">
                                        <label class="form-check-label" for="content-tiktok">Content Tiktok</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Content Strategy" id="content-strategy">
                                        <label class="form-check-label" for="content-strategy">Content Strategy</label><br>
                                    </div>
                                    <div>
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Negotiation Skills" id="negotiation-skills">
                                        <label class="form-check-label" for="negotiation-skills">Negotiation Skills</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Microsoft Office" id="microsoft-office">
                                        <label class="form-check-label" for="microsoft-office">Microsoft Office</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Good Communication Skills" id="communication-skills">
                                        <label class="form-check-label" for="communication-skills">Good Communication Skills</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Analytical Skills" id="analytical-skills">
                                        <label class="form-check-label" for="analytical-skills">Analytical Skills</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Problem-Solving Skills" id="problem-solving-skills">
                                        <label class="form-check-label" for="problem-solving-skills">Problem-Solving Skills</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Creativity" id="creativity">
                                        <label class="form-check-label" for="creativity">Creativity</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Time Management" id="time-management">
                                        <label class="form-check-label" for="time-management">Time Management</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Leadership" id="leadership">
                                        <label class="form-check-label" for="leadership">Leadership</label><br>
                                        
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Teamwork" id="teamwork">
                                        <label class="form-check-label" for="teamwork">Teamwork</label><br>                                
                                    </div>

                                    <div>
                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Graphic Design" id="graphic-design">
                                        <label class="form-check-label" for="graphic-design">Graphic Design</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Video Editing" id="video-editing">
                                        <label class="form-check-label" for="video-editing">Video Editing</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="SEO" id="seo">
                                        <label class="form-check-label" for="seo">SEO</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Market Research" id="market-research">
                                        <label class="form-check-label" for="market-research">Market Research</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Public Relations" id="public-relations">
                                        <label class="form-check-label" for="public-relations">Public Relations</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Event Planning" id="event-planning">
                                        <label class="form-check-label" for="event-planning">Event Planning</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Interpersonal Skills"
                                            id="interpersonal-skills">
                                        <label class="form-check-label" for="interpersonal-skills">Interpersonal Skills</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Leadership Skills" id="leadership-skills">
                                        <label class="form-check-label" for="leadership-skills">Leadership Skills</label><br>

                                        <input class="form-check-input @error('skills') is-invalid @enderror" type="checkbox" name="skills[]" value="Marketing" id="leadership-skills">
                                        <label class="form-check-label" for="leadership-skills">Marketing</label><br>

                                    </div>
                                    @error('skills')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <label for="pengalaman" class="fw-bold mt-3">Pengalaman Kerja Yang Dibutuhkan</label>
                                    <select class="form-select @error('experience') is-invalid @enderror" id="pengalaman" aria-label="Default select example" name="experience">
                                        <option value="" selected>Belum Dipilih</option>
                                        <option value="<1">< 1 Tahun</option>
                                        <option value="1-3">1 - 3 Tahun</option>
                                        <option value="3-5">3 - 5 Tahun</option>
                                        <option value="5-10">5 - 10 Tahun</option>
                                        <option value=">10">> 10 Tahun</option>
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