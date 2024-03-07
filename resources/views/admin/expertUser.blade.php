@extends('layouts.admin')
@section('content')
    		<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="text-center" style="font-weight: bold;">Confirm Expert Users</h1>

					</div>
					<div class="row justify-content-center card">
						<table class="table table-hover my-0 text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th class="d-none d-xl-table-cell">Job Position</th>
									<th class="d-none d-xl-table-cell">Job Level</th>
									<th class="d-none d-md-table-cell">Company</th>
									<th class="d-none d-xl-table-cell">Company Size</th>
									<th class="d-none d-xl-table-cell">Job Experience</th>
									<th class="d-none d-md-table-cell">LinkedIn Profile</th>
									<th>Status</th>
									<th></th>

								</tr>
							</thead>
							<tbody>
								@foreach($experts as $expert)
								<tr>
									<td>{{$expert->UserDesc->User->first_name}} {{$expert->UserDesc->User->last_name}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->pekerjaan}}</td>
									<td class="d-none d-xl-table-cell">{{ucfirst($expert->level_pekerjaan)}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->perusahaan}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->ukuran_perusahaan}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->pengalaman_kerja}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->linked_in}}</td>
									<td>	<span class="badge
										@if($expert->status == 0)
											bg-warning
										@elseif($expert->status == 1)
											bg-success	
										@else
											bg-danger
										@endif
										">	@if($expert->status == 0)
											Pending
										@elseif($expert->status == 1)
											Approved	
										@else
											Rejected
										@endif
										</span></td>
										@if ($expert->status == 0)
											<td>
												<div class="d-flex">
													<form action="/admin/expert-user" class="d-flex" method="POST">
														@method('PUT')
														@csrf
														<input type="hidden" name="application_id" value="{{$expert->application_id}}">
														<input type="hidden" name="user_id" value="{{$expert->user_id}}">
														<button type="submit" class="btn btn-success me-2"
														name="approve" value="approve">
															<div data-feather="check"></div>
														</button>
														<button type="submit" class="btn btn-danger" value="reject"
														 name="reject">
															<div data-feather="x"></div>
														</button>
													</form>
												</div>

											</td>
										@endif
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>

				</div>
			</main>
@endsection