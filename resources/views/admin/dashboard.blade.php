@extends('layouts.admin')
@section('content')
		<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Users</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$user_count}}</h1>

												{{-- <div class="mb-0">
											
													<span class="text-muted"><i>Last Updated 17/01/01</i></span>
												</div> --}}
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Jobs</h5>
													</div>

												
												</div>
												<h1 class="mt-1 mb-3">{{$job_count}}</h1>
												<div class="mb-0">
													{{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span> --}}
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Companies</h5>
													</div>

												
												</div>
												<h1 class="mt-1 mb-3">{{$company_count}}</h1>
												<div class="mb-0">
													{{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span> --}}
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Blogs</h5>
													</div>

												</div>
												<h1 class="mt-1 mb-3">{{$blog_count}}</h1>
												<div class="mb-0">
													{{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span> --}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					
					</div>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Expert Classes</h5>
													</div>



												</div>
												<h1 class="mt-1 mb-3">{{$class_count}}</h1>

{{-- 												
												<div class="mb-0">
											
													<span class="text-muted"><i>Last Updated 17/01/01</i></span>
												</div> --}}
											</div>
										</div>

									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Consultations</h5>
													</div>

												
												</div>
												<h1 class="mt-1 mb-3">{{$consultation_count}}</h1>
												<div class="mb-0">
													{{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span> --}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>		
					</div>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="card flex-fill col-12">
								<div class="card-header">

									<h5 class="card-title mb-0">Expert Users</h5>
								</div>
								<table class="table table-hover my-0 text-center">
							<thead>
								<tr>
									<th>Name</th>
									<th>Job</th>
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
								@if(!$experts->isEmpty())
								@foreach ($experts as $expert)
								<tr>
									<td>{{$expert->UserDesc->User->first_name}} {{$expert->UserDesc->User->last_name}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->pekerjaan}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->posisi_kerja}}</td>
									<td class="d-none d-xl-table-cell">{{ucfirst($expert->level_pekerjaan)}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->perusahaan}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->ukuran_perusahaan}}</td>
									<td class="d-none d-xl-table-cell">{{$expert->pengalaman_kerja}}</td>
									<td class="d-none d-md-table-cell">{{$expert->linked_in}}</td>
									<td>
										<span class="badge
										@if($expert->status == -1)
											bg-danger
										@elseif($expert->status == 0)
											bg-warning
										@elseif($expert->status == 1)
											bg-success	
										@endif
										">
											@if ($expert->status == -1)
												Rejected
											@elseif($expert->status == 0)
												Pending
											@elseif($expert->status == 1)
												Accepted
											@endif
										</span>
									</td>
									
								</tr>
								@endforeach
								@else
								<tr>
									<td class="d-none d-xl-table-cell" colspan="9">
										There are no expert users yet..
									</td>
								</tr>
								@endif
							</tbody>
						</table>	
							</div>

							
						</div>
					
					</div>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="card flex-fill col-12">
								<div class="card-header">
									<h5 class="card-title mb-0">Consultation</h5>
								</div>
								<table class="table table-hover my-0 text-center">
									<thead>
										<tr>
											<th>Requester</th>
											<th class="d-none d-xl-table-cell">Request Date</th>
											<th class="d-none d-xl-table-cell">Status</th>
											<th class="d-none d-xl-table-cell">Schedule Date</th>
											<th class="d-none d-xl-table-cell">Detail Information</th>
										</tr>
									</thead>
									<tbody>
										@if(!$consultations->isEmpty())
											@foreach($consultations as $consultation)
											<tr>
												<td>{{$consultation->first_name}} {{$consultation->last_name}}</td>
												<td class="d-none d-xl-table-cell">{{$consultation->created_at}}</td>
												
												<td class="d-none d-xl-table-cell">
													<span class="badge 
														@if($consultation->status == 0)
															bg-warning
														@elseif($consultation->status == 1)
															bg-warning
														@elseif($consultation->status == -1)
															bg-danger
														@endif
														">
														@if($consultation->status == 0)
															Pending
														@elseif($consultation->status == 1)
															Schedule Sent!
														@elseif($consultation->status == -1)
															Rejected
														@endif
													</span>
												</td>
												<td class="d-none d-xl-table-cell">
													@if(!$consultation->scheduled_date == null)
												    {{$consultation->scheduled_date}}
													@else
													<i>Admin Belum Menjadwalkan Konsultasi</i>
													@endif
												</td>
			
												<td>
													<button type="button" class="btn btn-info" onclick="window.location.href = '/admin/consultation/{{$consultation->id}}';">
														<div data-feather="edit"></div>
													</button>
												</td>
											</tr>
											@endforeach
										@else
										<tr>
											<td class="d-none d-xl-table-cell" colspan="5">
												No Consultation has been requested yet..
											</td>
										</tr>
										@endif
									</tbody>
								</table>	
							</div>

							
						</div>
					
					</div>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="card flex-fill col-12">
								<div class="card-header">

									<h5 class="card-title mb-0">Blog List</h5>
								</div>
								<table class="table table-hover my-0 text-center">
									<thead>
										<tr>
											<th>Blog ID</th>
											
											<th class="d-none d-xl-table-cell">Blog Title</th>
											<th class="d-none d-xl-table-cell">Writer</th>
											<th class="d-none d-xl-table-cell">Topic</th>
											<th class="d-none d-xl-table-cell">Upload Date</th>
											
										</tr>
									</thead>
									<tbody>
										@if(!$blogs->isEmpty())
											@foreach($blogs as $blog)
											<tr>
												<td>{{$blog->blog_id}}</td>
												<td class="d-none d-xl-table-cell">{{$blog->blog_title}}</td>
												
												<td class="d-none d-xl-table-cell">{{$blog->Admin->User->first_name}} {{$blog->Admin->User->last_name}}</td>
			
												<td class="d-none d-xl-table-cell">{{ucfirst($blog->topic)}}</td>
			
												<td class="d-none d-xl-table-cell">{{$blog->created_at}}</td>
											</tr>
											@endforeach
										@else
										<tr>
											<td class="d-none d-xl-table-cell" colspan="5">
												No blog has been written yet..
											</td>
										</tr>
										@endif
									</tbody>
								</table>
							</div>

							
						</div>
					
					</div>

					<div class="row">
						<div class="col-12 d-flex">
							<div class="card flex-fill col-12">
								<div class="card-header">

									<h5 class="card-title mb-0">Expert Class List</h5>
								</div>
								<table class="table table-hover my-0 text-center">
									<thead>
										<tr>
											<th>Class ID</th>
											
											<th class="d-none d-xl-table-cell">Class Title</th>
											<th class="d-none d-xl-table-cell">Class Type</th>
											<th class="d-none d-xl-table-cell">Created By</th>
											<th class="d-none d-xl-table-cell">Date & Time</th>
											<th class="d-none d-xl-table-cell">Price</th>
											
										</tr>
									</thead>
									<tbody>
										@foreach($expertclasses as $class)
										<tr>
											<td>{{$class->class_id}}</td>
											<td class="d-none d-xl-table-cell">{{$class->class_title}}</td>
											
											
											<td class="d-none d-xl-table-cell">{{ucfirst($class->class_type)}}</td>
		
											<td class="d-none d-xl-table-cell">{{$class->UserDesc->User->first_name}} {{$class->UserDesc->User->last_name}}</td>
		
											<td class="d-none d-xl-table-cell">
												{{$class->date_time}}
											</td>
		
											<td class="d-none d-xl-table-cell">
												IDR {{number_format($class->price, 0, ',', '.')}}
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

							
						</div>
					
					</div>

				</div>
			</main>
@endsection