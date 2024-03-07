@extends('layouts.mainPerusahaan')
@push('style')
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
@endpush
@push('script')
     <script>
      feather.replace()
    </script>
@endpush
@section('content')
    <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col-12">
                  <div class="row justify-content-between">
                    
                    <table class="table" style="box-shadow: 0px 5px 15px #bfbaba; border-radius: 7px;">
                        
                        <tbody>
                            <tr>
                                <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">Applicant Name</th>
                                <td class="d-none d-xl-table-cell text-center">{{$application->UserDesc->User->first_name}} {{$application->UserDesc->User->last_name}}</td>
                            </tr>

                            <tr>
                                <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">Location</th>
                                <td class="d-none d-xl-table-cell text-center">{{ucfirst($application->UserDesc->location)}}</td>
                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Age, Gender</th>
                                <td class="d-none d-xl-table-cell text-center">{{$application->UserDesc->age}}, {{ucfirst($application->UserDesc->gender)}}</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Nationality</th>
                                <td class="d-none d-xl-table-cell text-center">{{$application->UserDesc->nationality}}</td>

                            </tr>

                            <tr>
                                <th class="d-none d-xl-table-cell border">Experience</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    @foreach($application->UserDesc->Experience as $ex)
                                    <div>
                                        <b>{{$ex->posisi}}</b> di <b>{{$ex->perusahaan}}</b> dari <b>{{$ex->waktu_mulai}}</b> sampai <b>{{$ex->waktu_berakhir}}</b>.
                                    </div>
                                    @endforeach
                                </td>

                            </tr>
                            <tr>
                                <th class="d-none d-xl-table-cell border">Education</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    @foreach($application->UserDesc->Education as $ed)
                                        <div>
                                            Mengambil gelar <b>{{$ed->gelar}}</b>, di bidang <b>{{$ed->bidang}}</b>, di institusi <b>{{$ed->institusi}}</b> dari <b>{{$ed->waktu_mulai}}</b> sampai <b>{{$ed->waktu_berakhir}}</b>.
                                        </div>
                                    @endforeach
                                </td>

                            </tr>
                            <tr>
                                <th class="d-none d-xl-table-cell border">Skills</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    <div class="d-flex justify-content-center">
                                        @foreach(explode(',',$application->UserDesc->skills) as $skill)
                                        <span class="badge rounded-pill bg-success badgeskills px-2 py-2 mx-1 mt-2"
                                        style="display: flex; justify-content: center; align-items: center;">
                                        {{$skill}}
                                         </span>
                                        @endforeach
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th class="d-none d-xl-table-cell border">Achievements</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    @foreach($application->UserDesc->Achievements as $ac)
                                        Meraih Penghargaan <b>{{$ac->penghargaan}}</b>, dari karya yang berjudul <b>{{$ac->judul_kontribusi}}</b>, di tahun <b>{{$ac->tahun}}</b>. 
                                    @endforeach
                                </td>
                            </tr>
                             <tr>
                                <th class="d-none d-xl-table-cell border">Organization</th>
                                <td class="d-none d-xl-table-cell text-center">
                                    @foreach($application->UserDesc->Organization as $or)
                                        Aktif di <b>{{$or->nama_organisasi}}</b> sebagai <b>{{$or->posisi}}</b> dari <b>{{$or->waktu_mulai}}</b> sampai <b>{{$or->waktu_berakhir}}</b>.
                                    @endforeach
                                </td>
                            </tr>

                        </tbody>


                    </table>

                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table" style="box-shadow: 0px 5px 15px #bfbaba; border-radius: 7px;">       
                    <tbody>
                        <tr class="text-center">
                            @if($application->status == 0 || $application->status == 1)
                            <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">
                                Interview
                            </th>
                            @endif
                            <th style="border-bottom: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;">Status</th>
                        </tr>
                        <tr class="text-center">
                            @if($application->status == 0)
                                <td class="d-none d-xl-table-cell border">
                                    <button type="button" class="btn w-50 py-2" style="background-color: #007acc; color:white;" onclick="window.location.href = '/perusahaan/page/interview/{{$application->id}}';">
                                        <span class="me-3">Send Interview</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                            </svg>  
                                    </button>
                                </td>
                                @elseif($application->status == 1)
                                <td class="d-none d-xl-table-cell border">
                                Confirm After Interview
                                        <form action="/perusahaan/applicant-status" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="application_id" value="{{$application->id}}">
                                            <input type="hidden" name="user_id" value="{{$application->UserDesc->user_id}}">
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success w-25 me-2"
                                                name="approve" value="approve">
                                                    <div data-feather="check"></div>
                                                </button>
                                                <button type="submit" value="reject" name="reject" class="w-25 btn btn-danger">
                                                    <div data-feather="x"></div>
                                                </button>
                                            </div>
                                        </form>
                                </td>
                            @endif    
                            <td class="d-none d-xl-table-cell">
                                <span class="badge py-3 px-3
                                    @if($application->status == 0)
                                        bg-warning
                                    @elseif($application->status == 1)
                                        bg-warning	
                                    @elseif($application->status == 2)
                                        bg-success w-50
                                    @else
                                        bg-danger w-50
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection