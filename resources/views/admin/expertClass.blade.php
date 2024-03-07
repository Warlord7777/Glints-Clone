@extends('layouts.admin')
@push('script')
	<script src="{{asset('js/zooming.min.js')}}"></script>
	<script>
		new Zooming().listen('img');
	</script>
@endpush
@section('content')
    	<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="text-center" style="font-weight: bold;">Expert Class List</h1>

					</div>
                    <div class="row justify-content-center card">
						<table class="table table-hover my-0 text-center border">
							<thead>
								<tr class="border">
									<th>Class ID</th>
									
									<th class="d-none d-xl-table-cell">Class Title</th>
									<th class="d-none d-xl-table-cell">Class Type</th>
                                    <th class="d-none d-xl-table-cell">Created By</th>
									<th class="d-none d-xl-table-cell">Date & Time</th>
                                    <th class="d-none d-xl-table-cell">Price</th>
									<th class="d-none d-xl-table-cell"></th>
									
								</tr>
							</thead>
							<tbody>
								@foreach ($classes as $class)		
									<tr>
										<td>{{$class->class_id}}</td>
										<td class="d-none d-xl-table-cell">{{$class->class_title}}</td>
										
										
										<td class="d-none d-xl-table-cell">{{ucfirst($class->class_type)}}</td>

										<td class="d-none d-xl-table-cell">{{$class->UserDesc->User->first_name}} {{$class->UserDesc->User->last_name}}</td>

										<td class="d-none d-xl-table-cell">
											{{$class->date_time}}
										</td>

										<td class="d-none d-xl-table-cell">
											IDR {{number_format($class->price, 0, '.', ',')}}
										</td>

										<td>
											<form action="/admin/expert-class" method="POST">
												@method('delete')
												@csrf
												<input type="hidden" name="class_id" value="{{$class->class_id}}">
												<button type="submit" name="delete" value="delete" class="btn btn-warning" onclick="deleteProject(event)">
													<div data-feather="trash"></div>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>

					</div>

                    <div class="mb-3 mt-5">
						<h1 class="text-center" style="font-weight: bold;">Expert Class Payment</h1>

					</div>
					<div class="row justify-content-center mt-3 card">
						<table class="table table-hover my-0 text-center border">
							<thead>
								<tr class="border">
									<th>User Name</th>	
									<th class="d-none d-xl-table-cell">Payment Method</th>
									<th class="d-none d-xl-table-cell">ATM Number</th>
									<th class="d-none d-xl-table-cell">Proof of Transaction</th>
                                    <th class="d-none d-xl-table-cell">Status</th>
									<th class="d-none d-xl-table-cell"></th>
									
								</tr>
							</thead>
							<tbody>
								@if(!$payments->isEmpty())	
									@foreach($payments as $payment)
										<tr>
											<td>{{$payment->UserDesc->User->first_name}} {{$payment->UserDesc->User->last_name}}</td>
											<td class="d-none d-xl-table-cell">{{strtoupper($payment->payment_method)}}</td>
											
											
											<td class="d-none d-xl-table-cell">{{$payment->bank_number}}</td>

											<td class="d-none d-xl-table-cell"><img style="width: 210px; height: 180px;" src="{{asset('storage/'.$payment->proof)}}" alt="proof"></td>


										<td>	<span class="badge
												@if($payment->status == 0)
													bg-warning
												@elseif($payment->status == 1)
													bg-success	
												@else
													bg-danger
												@endif
												">	@if($payment->status == 0)
													Pending
												@elseif($payment->status == 1)
													Approved	
												@else
													Rejected
												@endif
												</span></td>
												@if ($payment->status == 0)
													<td>
														<div class="d-flex">
															<form action="/admin/expert-class" class="d-flex" method="POST">
																@method('put')
																@csrf
																<input type="hidden" name="order_id" value="{{$payment->order_id}}">
																<button type="submit" onclick="confirm('Do you want to approve this payment?')" class="btn btn-success me-2"
																name="approve" value="approve">
																	<div data-feather="check"></div>
																</button>
																<button type="submit" class="btn btn-danger" value="reject"
																	onclick="confirm('Do you want to reject the payment?')" name="reject">
																	<div data-feather="x"></div>
																</button>
															</form>
														</div>
		
													</td>
												@endif
										</tr>
									@endforeach
								@else
									<tr>
										<td class="d-none d-xl-table-cell" colspan="5">
											No order has been made yet..
										</td>
									</tr>
								@endif

							</tbody>
						</table>

					</div>

				</div>
			</main>
@endsection