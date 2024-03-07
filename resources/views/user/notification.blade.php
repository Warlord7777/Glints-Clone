@extends('layouts.mainUser')
@section('content')
    <div class="container" style="padding-top: 70px; padding-bottom:400px">
        <div class="row justify-content-center">
            <div class="col-9">
                <table class="table table-hover my-0 text-left mt-4 border" style="box-shadow: 0px 5px 15px #bfbaba;">
                    <thead>
                        <tr class="border">
                            <th class="border">
                                <h2>Your Notification</h2>
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notifications as $notif)
                            <tr class="border">
                                <td>
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="mt-3 bi bi-caret-right-fill" viewBox="0 0 16 16">
                                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                          </svg>
                                          
                                        <div class="mt-1 ms-2">
                                            {!! $notif->notification_message !!}
                                        </div>
                                    </div>

                                </td>

                            </tr>
                        @endforeach

                        {{-- @foreach ($notifications as $notif)
                        <tr class="border">
                            <td>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="mt-2 bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <div class="mt-1 ms-2">
                                        
                                    </div>
                                </div>

                            </td>


                        </tr>
                        @endforeach --}}

                        {{-- <tr class="border">
                            <td>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        fill="currentColor" class="mt-2 bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    <div class="mt-1 ms-2">
                                        <span class="">User <b>(Nama user yang beli kelas)</b> dengan email <b>nama
                                                email</b> telah membeli tiket Expert Class anda <b>"".</b> Jangan lupa untuk
                                            mengirim detail informasi kelas anda minimal satu hari sebelum kelas dimulai.
                                        </span>
                                        <p class="text-muted">17-02-2004</p>
                                    </div>
                                </div>

                            </td>


                        </tr> --}}

                        {{-- <tr class="border">
                            <td>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="mt-2 bi bi-building" viewBox="0 0 16 16">
                                        <path
                                            d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                        <path
                                            d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                                    </svg>
                                    <div class="mt-1 ms-2">
                                        <span class="">Perusahaan <b>nama perusahaan</b> telah menerima lamaran anda
                                            dan akan menjadwalkan interview dengan anda pada <b>tanggal</b> melalui
                                            media.</span>
                                        <p class="text-muted">17-02-2004</p>
                                    </div>
                                </div>


                            </td>


                        </tr> --}}
{{-- 
                        <tr class="border">
                            <td>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                        fill="currentColor" class="mt-2 bi bi-person-vcard" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                    </svg>
                                    <div class="mt-1 ms-2">
                                        <span class="">Selamat, <b>Nama user,</b> anda diterima bekerja di perusahaan
                                            <b>(nama perusahaan)</b> dengan posisi <b>(posisi pekerjaan).</b> Pihak
                                            perusahaan akan menghubungi anda untuk memberikan informasi detail mengenai
                                            pekerjaan anda.</span>
                                        <p class="text-muted">17-02-2004</p>
                                    </div>
                                </div>

                            </td>


                        </tr> --}}


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include ('partials.footer')
@endsection
