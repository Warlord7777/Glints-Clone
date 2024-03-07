@extends('layouts.expertClass') 

@section('content')
     <div class="container" style="padding-top: 70px;">       
        <div class="row">
            <div class="col-12">
                <div class="mt-5 d-flex" style="justify-content: center; align-items: center; height: 60vh;">
                    <img src="{{asset('img/businessman-working-on-laptop.png')}}" style="width: 18%;" alt="businessman-working">
                    <div class="ms-2 alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done, {{auth()->user()->UserDesc->User->first_name}}!</h4>
                        @if (session()->has('successregis'))
                            {!!session('successregis')!!}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <a href="/expertclass" class="btn btn-primary w-50">Balik ke halaman Expertclass</a>
            </div>
        </div> 
    </div>
@endsection