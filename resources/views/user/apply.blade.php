@extends('layouts.mainUser')

@section('title', 'Apply Now!')

@section('content')
     <div class="container" style="position:relative; top: 80px;">
        <div class="row d-flex justify-content-center w-100">
            <div class="col-6 border mt-3 px-4 py-3">
                <div class="div">
                    <h5>Hi {{auth()->user()->first_name}}!</h5>
                </div>
                <div class="d-flex">
                    <p>Kamu akan melamar ke <b>{{$job->company->company_name}}</b> sebagai <b>{{$job->job_name}}</b></p>
                </div>
                <form action="/lamar" method="POST" class="d-block" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2">
                        <p>
                            <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI"
                                width="1em" height="1em" fill="currentColor" viewBox="0 0 100 100">
                                <path
                                    d="M54.072 34.976h27.765L54.072 7.452v27.524zM19.096 0H59.24l30.048 30.048v60.096c0 2.725-1.001 5.048-3.004 6.971C84.28 99.038 81.917 100 79.192 100H19.096c-2.724 0-5.088-.962-7.091-2.885C10.002 95.192 9 92.87 9 90.145l.24-80.29c0-2.724.962-5.047 2.885-6.97C14.048.962 16.372 0 19.096 0z">
                                </path>
                            </svg>
                            &nbsp;Resume <span style="color:red;">*</span>
                        </p>
                    </div>
                    <div class="d-flex">
                        <div class="col-6">
                            <input style="color:black;" type="file" class="form-control @error('resume') is-invalid @enderror" name="resume">
                        </div>
                    </div>
                    <div>
                        <span><small class="text-muted">Upload file dalam format PDF maks 5MB.</small></span>
                    </div>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror


                    <div class=" mt-2">
                        <div class="d-flex">
                            Phone Number
                            <div class="ms-1" style="color: red;">
                                *
                            </div>
                        </div>
                        <input type="hidden" name="job_vacancy_id" value="{{$job->job_vacancy_id}}">
                        <div class="mt-1">
                            <input type="tel" class="@error('phone_number') is-invalid @enderror form-control" style="width: 100%; height: 44px;" placeholder="Add your phone number"
                                name="phone_number" id="phone">
                                @error('phone_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            <span><small class="text-muted">Harap gunakan nomor telepon yang valid. Contoh:
                                0813 6258 6969
                                </small></span><br>
                            <span><small class="text-muted">Perusahaan memerlukan informasi ini untuk menghubungimu
                                    lebih cepat.
                                </small></span>
                        </div>
                    </div>
                   
                    <div class=" mt-3">
                        <div class="d-flex">
                            Application Letter
                            <div class="ms-1" style="color: red;">
                                *
                            </div>
                        </div>
                        <div class="mt-2">
                            <textarea name="application_letter" id="desc"
                                style="width: 100%; height: 100px;"></textarea>
                        </div>
                        @error('application_letter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" style="width: 100%; background-color: #007acc; color: white; font-weight: bold;" class="btn">LAMAR SEKARANG</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection