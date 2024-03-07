@push('style')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endpush
@extends('layouts.admin')
@section('content')
    
			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>

					</div>
					
					<div class="box" style="height: 100vh; ">

						
						<div class="row">
							<div class="col-2">
								<div class="index">
									<form action="/admin/profile" method="POST" enctype="multipart/form-data">
									@csrf
									@method('put')
									<label for="upload" class="upload-label">
										<div class="profile-picture-container">
											<img src="{{asset('storage/'.$profile->profile_picture)}}"
												alt="gambar" class="profile-picture">
											<div class="overlay">
												<i class="fas fa-camera"></i>
												<svg data-testid="icon-svg"
													class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt2" width="30"
													height="30" fill="#017EB7" viewBox="0 0 100 100">
													<path
														d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z">
	
													</path>
												</svg>
											</div>
										</div>
										<input type="hidden" name="oldImage" value="{{$profile->profile_picture}}">
										<input type="file" name="profile_picture" id="upload" class="upload-button" onchange="form.submit()">
									</label>
									</form>
								</div>
							</div>
							<div class="col-1"></div>
							<div class="col-9" style="text-align: left;">
								<div class="indexp">
									<p style=" margin-top: 19px;"> <b>{{$profile->User->first_name}} {{$profile->User->last_name}}</b></p>
									<a href="/admin/profile/update">
										<svg data-testid="icon-svg"
											class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt2" width="15" height="15"
											fill="#017EB7" viewBox="0 0 100 100">
											<path
												d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z">
	
											</path>
										</svg>
										Edit Info Dasar
									</a>
	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-2">
	
									</div>
									<div class="col-1"></div>
									<div class="col-9">
	
	
										<div class="row">
											<div class="col-6">
												<td>
													<span class="blur-text"><b>NO. HP</b></span> <br>
												</td>
												<td>
													<span>{{$profile->no_hp}}</span>
												</td>
	
	
											</div>
											<div class="col-6">
												<td>
													<span class="blur-text"><b> EMAIL</b></span> <br>
												</td>
												<td>
													<span>{{$profile->User->email}}</span>
												</td>
	
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-6">
												<td>
													<span class="blur-text"><b>ALAMAT</b></span> <br>
												</td>
												<td>
													<span>{{$profile->alamat}}</span>
												</td>
											</div>
											<div class="col-6">
												<td>
													<span class="blur-text"><b>USIA, JENIS KELAMIN</b></span> <br>
												</td>
												<td>
													<span>{{$profile->usia}}, {{ucfirst($profile->jenis_kelamin)}}</span>
												</td>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-6">
												<td>
													<span class="blur-text"><b>STATUS KEPENDUDUKAN</b></span> <br>
												</td>
												<td>
													<span>{{ucfirst($profile->status_kependudukan)}}</span>
												</td>
											</div>
											<div class="col-6">
												<td>
													<span class="blur-text"><b>KEWARGANEGARAAN</b></span> <br>
												</td>
												<td>
													<span>{{$profile->kewarganegaraan}}</span>
												</td>
											</div>
										</div>
									</div>
	
	
								</div>
							</div>
						</div>
	
	
	
	
					</div>

				</div>
			</main>
@endsection