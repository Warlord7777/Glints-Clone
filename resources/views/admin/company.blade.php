@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="text-center" style="font-weight: bold;">Company List</h1>

            </div>
            <div class="row justify-content-center card">
                <table class="table table-hover my-0 text-center border">
                    <thead>
                        <tr class="border">
                            <th>Company ID</th>
                            
                            <th class="d-none d-xl-table-cell">Company Name</th>
                            <th class="d-none d-xl-table-cell">Logo</th>
                            <th class="d-none d-xl-table-cell">Company Field</th>
                            <th class="d-none d-xl-table-cell">Company Industry</th>
                            <th class="d-none d-xl-table-cell">Detail</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{$company->company_id}}</td>
                                <td class="d-none d-xl-table-cell">{{$company->company_name}}</td>
                                
                                
                                <td class="d-none d-xl-table-cell">
                                    @if($company->logo_company)
                                        <img src="{{asset('storage/'.$company->logo_company)}}" style="width: 80px; height: 60px;" alt="company_logo">
                                    @else
                                        No company logo yet..
                                    @endif
                                </td>

                                <td class="d-none d-xl-table-cell">{{$company->company_field}}</td>

                                <td class="d-none d-xl-table-cell">{{$company->company_industry}}</td>

                                <td class="d-none d-xl-table-cell">
                                    <button type="button" class="btn btn-info" onclick="window.location.href = '/admin/company/detail/{{$company->company_id}}'">
                                        <div data-feather="edit"></div>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </main>
@endsection