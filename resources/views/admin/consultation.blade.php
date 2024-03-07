@extends('layouts.admin')
@section('content')
    <main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="text-center" style="font-weight: bold;">Consultation</h1>
					</div>
					<div class="row justify-content-center card">
						<table class="table table-hover my-0 text-center">
							<thead>
								<tr>
									<th>Company Name</th>
									<th class="d-none d-xl-table-cell">Request Date</th>
									<th class="d-none d-xl-table-cell">Schedule Date</th>
									<th class="d-none d-xl-table-cell">Detail Information</th>	
									<th class="d-none d-xl-table-cell">Status</th>	
									{{-- <th></th> --}}
								</tr>
							</thead>
							<tbody>
								@if(!$consultations->isEmpty())
								@foreach($consultations as $consultation)
									<tr>
										@php
											$dateString = "$consultation->scheduled_time";
											$scheduled_time = new DateTime($dateString);
										@endphp
										<td>{{$consultation->Company->company_name}}</td>
										<td class="d-none d-xl-table-cell">{{$consultation->created_at->format('d M Y G:i A')}}</td>									
										<td class="d-none d-xl-table-cell">
											@if ($consultation->scheduled_time == null)
												<i>Admin hasn't scheduled consultation yet...</i>
											@else
												{{$scheduled_time->format('d M Y g:i A')}}
											@endif
										</td>

										<td>
											<button type="button" class="btn btn-info" onclick="window.location.href = '/admin/consultation/{{$consultation->id}}';">
												<div data-feather="edit"></div>
											</button>
										</td>
										<td>
												<span class="badge
												@if($consultation->status == -1)
													bg-danger
												@elseif($consultation->status == 0)
													bg-warning
												@elseif($consultation->status == 1)
													bg-success	
												@endif
												">
													@if ($consultation->status == -1)
														Rejected
													@elseif($consultation->status == 0)
														Pending
													@elseif($consultation->status == 1)
														Schedule Sent!
													@endif
												</span>
										</td>

{{-- 
										<td> 
											<form action="" method="POST">
												@method('delete')
												@csrf
												<button type="submit" name="delete" class="btn btn-warning" onclick="deleteProject(event)">
													<div data-feather="trash"></div>
												</button>
											</form>
										</td> --}}
									</tr>
								@endforeach
								@else
								<tr>
									<td colspan="6">
										No consultation has been requested yet..
									</td>
								</tr>

								@endif

							</tbody>
						</table>

					</div>

				</div>
			</main>
@endsection