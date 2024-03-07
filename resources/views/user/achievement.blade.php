@extends('layouts.mainUser')
@push('style')
    <link rel="stylesheet" href="{{asset('css/auto.css')}}">
@endpush
@section('content')
       <div class="container" style="padding-top: 80px;">
                <div class="row">
                    <div class="col">
                        <div class="box" style="padding: 15px;">
                            <h3 style="border-bottom: 1px solid black; padding-bottom: 30px;"> <b> TAMBAH PENGHARGAAN</b></h3><a href="/user/profil"> <button  type="button"  style="position: relative; top:-60px; float: right;" class="btn-close" aria-label="Close"></button> </a>
                        </div>
                    </div>
                </div>
                <form action="/user/achievement" class="d-block" method="POST" >
                <div class="row">
                    <div class="col">
                        <div class="box" style="padding: 19px;">
                            <div class="input-group input-group-lg">
                                    @csrf
                                <input type="text" class="form-control @error('nama_penghargaan') is-invalid @enderror" aria-label="Sizing example input" name="nama_penghargaan" aria-describedby="inputGroup-sizing-lg" placeholder="Nama Penghargaan">
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box" style="padding: 19px;">
                            <div class="input-group input-group-lg">
                                
                                <input type="text" name="judul_presentasi" class="form-control @error('judul_presentasi') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Judul Presentasi atau Kontribusi">
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col">
                        <div class="box">
                            <p style="font-size: small; margin-bottom: 3px;">&nbsp;</p>
                            <select class="form-select form-select-lg mb-3 @error('tahun') is-invalid @enderror" name="tahun" aria-label=".form-select-lg example">
                              <option value="" selected>Tahun</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            @error('tahun')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                          </div>
                          
                    </div>
                </div>
                
                
                
                <div class="row">
                </div>
                <br>
                <br>
                
                <div class="row">
                    <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
                        <br>
                        
                        <div class="button-container">
                            <button type="submit" class="right-button btn btn-primary">Simpan</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
@endsection