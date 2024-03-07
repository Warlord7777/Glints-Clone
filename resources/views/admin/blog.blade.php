@extends('layouts.admin')
@section('content')
    	<main class="content">
				<div class="container-fluid p-0">
					

					
					<div class="row justify-content-center">
						<div class="col-12 col-lg-10">
							<div class="mb-3">
								<h1 class="text-center" style="font-weight: bold;">Blog List</h1>
		
							</div>
							<div class="row justify-content-center card">
								<table class="table table-hover my-0 text-center border">
									<thead>
										<tr class="border">
											<th>Blog ID</th>
											
											<th class="d-none d-xl-table-cell">Blog Title</th>
											<th class="d-none d-xl-table-cell">Writer</th>
											<th class="d-none d-xl-table-cell">Topic</th>
											<th class="d-none d-xl-table-cell">Upload Date</th>
											<th class="d-none d-xl-table-cell"></th>
											
										</tr>
									</thead>
									<tbody>
										@if (!$blogs->isEmpty())	
										@foreach ($blogs as $blog)
											
											<tr>
												<td class="d-none d-xl-table-cell">{{$blog->blog_id}}</td>
												<td>{{$blog->blog_title}}</td>
												<td class="d-none d-xl-table-cell">{{$blog->Admin->User->first_name}} {{$blog->Admin->User->last_name}}</td>
												
												
												<td class="d-none d-xl-table-cell">{{$blog->topic}}</td>
			
												<td class="d-none d-xl-table-cell">{{$blog->created_at}}</td>
			
												<td>
													<form action="/admin/blog" method="POST">
														@method('delete')
														@csrf
														<input type="hidden" name="blog_id" value="{{$blog->blog_id}}">
														<button type="submit" class="btn btn-warning" name="delete">
															<div data-feather="trash"></div>
														</button>
													</form>
												</td>
											</tr>
											
										@endforeach
										@else
											<tr>
												<td class="d-none d-xl-table-cell" colspan="6">No blog has been written yet..</td>
											</tr>
										@endif
		
									</tbody>
								</table>
		
							</div>

							<div class="mb-3 mt-5">
								<h1 class="text-center" style="font-weight: bold;">Make a Blog</h1>
		
							</div>

							<form action="/admin/blog" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Title</h5>
									</div>
									<div class="card-body">
										<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Add your blog's title">
										@error('title')
											<div class="invalid-feedback">
												{{$message}}
											</div>
										@enderror
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Topic</h5>
									</div>
									<div class="card-body">
										<select class="form-select mb-3 @error('topic') is-invalid @enderror" name="topic" id="topic">
											<option value="" selected>Choose your blog topic</option>
											<option value="marketing">Marketing</option>
											<option value="tech & data">Tech & Data</option>
											<option value="media & communications">Media & Communications</option>
											<option value="business dev & sales">Business Dev & Sales</option>
											<option value="technology">Technology</option>
											<option value="product">Product</option>
											<option value="design">Design</option>
											<option value="mengawali karier">Mengawali Karier</option>
											<option value="dunia kerja">Dunia Kerja</option>
											<option value="panduan">Panduan</option>
											<option value="laporan">Laporan</option>
											<option value="campaign berlangsung">Campaign Berlangsung</option>
											<option value="kabar produk">Kabar Produk</option>
											<option value="kabar glints">Kabar Glints</option>
										</select>
										@error('topic')
											<div class="invalid-feedback">
												{{$message}}
											</div>
										@enderror
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Cover</h5>
									</div>
									
									<div class="card-body">
										<input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover">
										@error('cover')
											<div class="invalid-feedback">
												{{$message}}
											</div>
										@enderror
									</div>
									<div class="card-body">
										<span><small class="text-muted">Acceptable Formats :</small></span>
										<b style="font-weight: 600; color: #666666; font-size: small;">jpg, jpeg, png</b> <br>
										<span><small class="text-muted">Recommended Size &nbsp;:</small></span>
										<b style="font-weight: 600; color: #666666; font-size: small;">120px x 120px</b>
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<h5 class="card-title mb-0">Content</h5>
									</div>
									<div class="card-body">
										<textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="100"
											placeholder="Let's start writing!" ></textarea>
										@error('content')
											<div class="invalid-feedback">
												{{$message}}
											</div>
										@enderror
									</div>
								</div>

								<div class="mt-4">
									<button type="submit" name="buttonUpload" id="buttonUpload" style="width: 100%; background-color: #3b3f42; color: white; font-weight: bold; border-radius: 10px;" class="btn">UPLOAD YOUR BLOG</button>
								</div>
							</form>

						</div>

					</div>

				</div>
			</main>
@endsection