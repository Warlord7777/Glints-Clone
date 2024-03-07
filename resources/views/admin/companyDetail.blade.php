@extends('layouts.admin')
@section('content')
    	<main class="content">
				<div class="container-fluid p-0">

                    <button type="button" class="btn btn-info" onclick="window.location.href = '/admin/companies';">
                        <div data-feather="arrow-left" ></div><span>
                            back
                        </span>
                    </button>

					<div class="mb-3">
                        <h1 class="text-center" style="font-weight: bold;">Company Detail Information</h1>

                    </div>

                    <div class="row justify-content-between">
                        
                        <table class="table" style="background-color: white;">
                            <tbody>
                                <tr>
                                    <th>Company ID</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_id}}</td>
                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company name</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_name}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Logo</th>
                                    <td class="d-none d-xl-table-cell text-center"><img src="{{asset('storage/'.$company->logo_company)}}" style="width: 80px; height: 60px;" alt="company_logo"></td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Banner</th>
                                    <td class="d-none d-xl-table-cell text-center"><img src="{{asset('storage/'.$company->banner)}}" style="width: 200px; height: 70px;" alt="company_banner"></td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Field</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_field}}</td>

                                </tr>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Industry</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_industry}}</td>

                                </tr>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Location</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_location}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Size</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_size}}</td>

                                </tr>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Address</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_address}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Website</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->company_website}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Description</th>
                                    <td class="d-none d-xl-table-cell text-center">{!!$company->company_description!!}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Created at</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->created_at}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Updated at</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$company->updated_at}}</td>
                                </tr>
                            </tbody>


                        </table>

                    </div>

				</div>
			</main>

@endsection