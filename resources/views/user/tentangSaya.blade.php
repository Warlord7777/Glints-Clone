@extends('layouts.mainUser')
@push('style')
    <link rel="stylesheet" href="{{asset('css/auto.css')}}">
@endpush
@section('content')
    <div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <span style="text-align: left;"> 
                        <h4> <b > TENTANG SAYA</b></h4> 
                    </span> 
                    <a href="/user/profil" class="btn" style="border:none;">
                        <svg  data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="grey" viewBox="0 0 100 100"><path d="M100 10L90 0 50 40 10 0 0 10l40 40L0 90l10 10 40-40 40 40 10-10-40-40z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style=" text-align: center;">
            <div class="col" >
                <div class="box">
                    <P>Beritahu tentang dirimu sehingga perusahaan lebih mudah memahamimu.</P>
                    <form action="/user/tentang-saya" method="POST">
                        @csrf
                        @method('put')
                        <div class="input-group">
                            <textarea class="form-control" name="description" style="width:100%;" aria-label="With textarea" placeholder="Tambahkan pengantar tentang dirimu">
                                {{$description}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-2" style="border-top: 1px solid black; padding-bottom: 30px;">
                    <br>
                    
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary right-button">Simpan</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection