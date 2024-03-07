@extends('layouts.admin')
@section('content') 
    	<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="text-center" style="font-weight: bold;">User List</h1>

					</div>
                    <div class="row justify-content-center card">
						<table class="table table-hover my-0 text-center border">
							<thead>
								<tr class="border">
									<th>User ID</th>
									
									<th class="d-none d-xl-table-cell">First Name</th>
									<th class="d-none d-xl-table-cell">Last Name</th>
                                    <th class="d-none d-xl-table-cell">Email</th>
									<th class="d-none d-xl-table-cell">Created at</th>
                                    <th class="d-none d-xl-table-cell">Updated at</th>
									
								</tr>
							</thead>
							<tbody>
                                @foreach($users as $user)
								<tr>
									<td>{{$user->user_id}}</td>
									<td class="d-none d-xl-table-cell">{{$user->User->first_name}}</td>
									
									<td class="d-none d-xl-table-cell">{{$user->User->last_name}}</td>

									<td class="d-none d-xl-table-cell">{{$user->User->email}}</td>

                                    <td class="d-none d-xl-table-cell">{{$user->created_at}}</td>

									<td class="d-none d-xl-table-cell">{{$user->updated_at}}</td>
                                  
								</tr>
                                @endforeach
							</tbody>
						</table>

					</div>

				</div>
			</main>
@endsection