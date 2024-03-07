@extends('layouts.mainUser')
@push('style')
    <link rel="stylesheet" href="{{asset('css/auto.css')}}">
    <style> 
   .box {
            margin: 10px 0px;
            text-align: center;
        }
        
        .container {
            max-width: 50%;
        }
        
        .lowongan {
            height: 50px;
            width: 500px;
            text-align: left;
            border: 2px solid black;
            transition: border-color 0.3s;
        }
        
        .lowongan.selected {
            border-color: green;
        }
        
        .custom-radio {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #000;
            border-radius: 50%;
            outline: none;
            cursor: pointer;
            position: relative;
        }
        
        .custom-radio:checked {
            background-color: green;
        }
        
        .custom-radio:checked::before {
            content: '\2713';
            color: #fff;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
</style>
@endpush
@section('content')
       <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col">
                <div class="box">
                    <div class="segment">
                        <p style="margin-top: 20px; text-align: left;">
                            <h4><b>Informasi Dasar</b></h4>
                            <a href="/user/profil">
                                <button type="button" style="position: relative; top: -30px; float: right;"
                                    class="btn-close" aria-label="Close"></button>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <button class="lowongan" onclick="toggleButton(this)">
                                <input type="radio" id="option1" name="switch" class="custom-radio">
                                <label for="option1">Saya tidak menerima lowongan</label>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-">
                    <div class="box">
                        <button class="lowongan" onclick="toggleButton(this)">
                            <input type="radio" id="option2" name="switch" class="custom-radio">
                            <label for="option2">Saya terbuka untuk lowongan</label>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="box">
                        <button class="lowongan" onclick="toggleTampilan()">
                            <input type="radio" id="option3" name="switch" class="custom-radio">
                            <label for="option3">Saya sedang aktif mencari pekerjaan</label>
                        </button>
                    </div>
                </div>
            </div>
            <div id="tampilan" style="display: none;" class="tampilan">
                <div class="col">
                    <div class="pilihan">
                        <br>
                        <br>
                        <p style="color: rgb(183, 181, 181);">Kapan kamu bisa memulai pekerjaan baru?*</p>
                        <p>
                            <input type="radio" id="option4" name="switch">
                            <label for="option4">Saya Bisa Mulai Segera</label>
                        </p>
                        <p>
                            <input type="radio" id="option5" name="switch">
                            <label for="option5">Saya Bisa Memulai Setelah Tanggal:</label>
                            <input type="date">
                        </p>
                        <p>
                            <input type="radio" id="option6" name="switch">
                            <label for="option6">Belum Tau Pasti</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
            <br>
            <div class="button-container" style="text-align: right;">
                <div class="d-grid gap-2 d-md-block">
                    <a href="pages-profile.html">
                        <button class="btn btn-primary me-1" style="border-radius: 7px;" type="button"><b>HAPUS</b></button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary" style="border-radius: 7px;" type="button"><b>SIMPAN</b></button>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection