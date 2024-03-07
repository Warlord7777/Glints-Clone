@extends('layouts.expertClass')

@section('content')
     <div class="container " style="padding-top: 80px;">
        <div class="row d-flex justify-content-center">
            <div class="col-8 border mt-3 py-3 px-5" style="border-radius: 10px; background-color: white;">
                <div class="row">
                    <div class="text-center mt-3">
                        <h4>Hi, {{auth()->user()->UserDesc->User->first_name}}</h4>
                        <span>Selamat anda telah menjadi seorang Expert. Kini anda telah memiliki akses dalam membuat Expert Class, ayo mulai kelasmu sekarang!</span>
                    </div>
                </div>

                <div class="row">
                    <div style="margin-top: 50px;">
                        <p style="font-weight: bold;">Silahkan isi form di bawah ini untuk membuat Expert Class</p>
                        <form action="/expertclass/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="class_title">Class Title</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('class_title') is-invalid @enderror" type="text" style="width: 100%; height: 44px;" placeholder="Add your class title"
                                    name="class_title" id="class_title">
                                    @error('class_title')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <label class="mt-3" for="image">Class Image</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" style="width: 100%;"
                                    name="image" id="image">
                                     @error('image')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <div class="text-muted">Accepted Types: jpg, png, jpeg</div>
                                <div class="text-muted">Max Size: 10 Mb</div>

                                <label class="mt-3" for="class_time">Class Date and Time</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('class_time') is-invalid @enderror" type="datetime-local" style="width: 100%; height: 44px;"
                                    placeholder="Add your class date" name="class_time" id="class_time">
                                    @error('class_time')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <label class="mt-3" for="class_category">Class Category</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <select class="form-select @error('class_category') is-invalid @enderror" name="class_category" id="class_category"
                                    aria-label="Default select example"
                                    style="border-radius: 0%; height: 44px; border-color: #808080;">
                                    <option value="" selected>Which industry does your class belong to?</option>
                                    <option value="Finance">Finance, Banking & Professionals</option>
                                    <option value="Manufacturing">Industrial - Manufacturing</option>
                                    <option value="Marketing">Media, Marketing & Advertising</option>
                                    <option value="Retail">Retail & FMCG</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Economy">New Economy (Mining, Oil & Gas, Waste Collection, etc)</option>
                                    <option value="Others">Others</option>
                                </select>
                                    @error('class_category')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <label class="mt-3" for="class_type">Class Type</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <select class="form-select @error('class_type') is-invalid @enderror" name="class_type" id="class_type"
                                    style="border-radius: 0%; height: 44px; border-color: #808080;">
                                    <option value="" selected>Which type does your class belong to?</option>
                                    <option value="webinar">Webinar</option>
                                    <option value="mentorship">Mentorship</option>
                                </select>
                                 @error('class_type')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                <label class="mt-3" for="class_price">Class Price</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('class_price') is-invalid @enderror" type="text"  style="width: 100%; height: 44px;" placeholder="Add your class price"
                                    name="class_price" id="class_price">
                                     @error('class_price')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror

                                <label class="mt-3 " for="class_description ">Class Description</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <br>
                                <textarea name="class_description" id="class_description"></textarea>
                                <br>
                                 @error('class_description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror

                                <label class="mt-3" for="facility">Class Facility</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('facility') is-invalid @enderror" type="text" style="width: 100%; height: 44px;" placeholder="Add your class facility"
                                    name="facility" id="facility">
                                    @error('facility')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror

                                <label class="mt-3" for="discount">Discount</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('discount') is-invalid @enderror" type="text" style="width: 100%; height: 44px;" placeholder="Add your class discount"
                                    name="discount" id="discount">
                                    @error('discount')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    <div class="text-muted">
                                        Masukkan Diskon dalam angka desimal. Cth: 0.02 = 2%
                                    </div>

                                <label class="mt-3" for="starting_time">Discount Starting Time</label>
                                <input class="form-control " type="datetime-local" style="width: 100%; height: 44px;"
                                    placeholder="Add your class date" name="starting_time" id="starting_time">
                                <div class="text-muted">Ignore if discount is 0</div>
                                <label class="mt-3" for="ending_time">Discount Ending Time</label>
                                <input class="form-control" type="datetime-local" style="width: 100%; height: 44px;"
                                    placeholder="Add your class date" name="ending_time" id="ending_time">
                                <div class="text-muted">Ignore if discount is 0</div>

                                <label class="mt-3" for="language">Language</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <input class="form-control @error('language') is-invalid @enderror" type="text" style="width: 100%; height: 44px;" placeholder="Add your class language"
                                    name="language" id="language">
                                    @error('language')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <div class="mt-4 mb-3">
                                    <button type="submit" style="width: 100%; background-color: #007acc; color: white; font-weight: bold;" class="btn">UPLOAD MY CLASS</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection