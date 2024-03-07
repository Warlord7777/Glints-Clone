 @extends('layouts.mainUser')
 @section('content')
 <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col">
                <div class="box" style="padding: 15px;">
                    <div class="segment">
                        <p style="  margin-top: 20px; text-align: left;" > <h4 > <b > PORTOFOLIO</b></h4> <a href="/user/profil"> <button  type="button"  style="position: relative; top: -30px; float: right;" class="btn-close" aria-label="Close"></button> </a>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="box" style="padding: 10px;">
                    <p>Upload proyek atau sampel pekerjaan (Hanya PDF diterima), file harus lebih kecil dari 10 MB</p>

                </div>
            </div>
        </div>
        <form action="/user/upload/portfolio" class="d-block" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col">
                    <div class="box" style="padding: 10px;">
                        <input type="file" class="@error('portfolio') is-invalid @enderror form-control w-100" id="uploadbtn" name="portfolio">
                        @error('portfolio')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <label for="uploadbtn"><i class="fa- fa-upload">Upload CV-mu</i> </label>
            <br>
            <br>
            <div class="row">
                <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
                    <br>
                    <div class="button-container" style="text-align: right;">
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" style="border-radius: 7px;" type="submit"><b>SIMPAN</b></button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </form>
        
        @endsection