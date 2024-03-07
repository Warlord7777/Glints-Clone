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
                    <a href="/perusahaan/page/job-detail/{{$id[0]}}" class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg>
                     Kembali</a>
                </div>
            </div>
            <div class="col-12 mt-5">

                <div class="row justify-content-center mt-3 card mb-5">
                    <table class="table table-hover my-0 text-center border" style="box-shadow: 0px 5px 15px #bfbaba;">
                        <thead>
                            <tr class="border">
                                <th class="border d-none d-xl-table-cell">Application Letter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {!! $letter[0] !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection