@extends('layouts.expertClass')

@section('content')
    
<div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="Box__StyledBox-sc-pr7b7l-0 dLaMEa mt-2">
                    <a class="ButtonStyle__Button-sc-jyb3o2-0 ButtonStyle__LinkBtn-sc-jyb3o2-8 gmJUyh hAhkIz aries-linkbtn"
                        style="text-decoration: none;"
                        href="/expertclass/detail/{{$class[0]->class_id}}"><span
                            class="ButtonStyle__StartIconContainer-sc-jyb3o2-9 jpVXxd"><svg data-testid="icon-svg"
                                class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 100 100">
                                <path d="M81 88.4L42.6 50 81 11.8 69.2 0l-50 50 50 50z"></path>
                            </svg>
                        </span>Kembali</a>
                </div>
                <div class="d-flex mt-3" style="background-color: #e6f3ff;">
                    <div class="ms-2 mt-2">
                        <svg data-testid="icon-svg"
                            class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI AlertBox__InfoSolidIcon-sc-zoup-1 kkwBdZ"
                            width="1em" height="1em" fill="#017EB7" viewBox="0 0 100 100">
                            <path
                                d="M99.997 49.33c.148 13.839-4.576 25.668-14.174 35.49-9.597 9.82-21.315 14.879-35.153 15.177-13.839.148-25.668-4.576-35.49-14.174C5.36 76.226.302 64.508.004 50.67-.145 36.83 4.58 25.002 14.177 15.18 23.774 5.36 35.492.302 49.33.004 63.17-.145 74.998 4.58 84.82 14.177c9.82 9.597 14.879 21.315 15.177 35.153zM55.134 19.868c-1.34-1.34-3.05-2.009-5.134-2.009-2.083 0-3.794.67-5.134 2.01-1.339 1.338-2.008 3.05-2.008 5.133s.67 3.794 2.008 5.133c1.34 1.34 3.05 2.01 5.134 2.01 2.083 0 3.794-.67 5.134-2.01 1.339-1.339 2.008-3.05 2.008-5.133s-.67-3.795-2.008-5.134zm4.687 61.157v-2.456h-4.91V40.18H40.178v2.679h4.91v35.711h-4.91v2.456h19.642z">
                            </path>
                        </svg>
                    </div>
                    <div class="ms-2 mt-2">
                        <p>Setelah pembayaran berhasil, tiket akan dikirimkan ke email Anda selambatnya 5 jam sebelum
                            acara dimulai.</p>
                    </div>
                </div>

                <div class="mt-4">
                    <p><b>Detail acara</b></p>
                </div>
                <div class="border" style="border-radius: 7px;">
                    <div class="ms-2 mt-2">
                        <h6>{{$class[0]->class_title}}</h6>
                        <div class="d-flex">
                            <div class="Box__StyledBox-sc-pr7b7l-0 hzArF"><svg data-testid="icon-svg"
                                    class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em"
                                    fill="#777777" viewBox="0 0 100 100">
                                    <path
                                        d="M24.491 10.268C31.485 3.423 39.893 0 49.714 0c9.822 0 18.23 3.423 25.224 10.268 6.994 6.845 10.49 15.104 10.49 24.777 0 7.738-2.976 17.038-8.928 27.901-5.952 10.864-11.905 19.792-17.857 26.786L49.714 100c-1.041-1.042-2.343-2.493-3.906-4.353-1.562-1.86-4.39-5.468-8.482-10.826-4.092-5.357-7.701-10.565-10.826-15.625-3.125-5.06-5.99-10.788-8.594-17.187C15.302 45.61 14 39.955 14 35.045c0-9.673 3.497-17.932 10.491-24.777zm16.072 33.705c2.53 2.381 5.58 3.572 9.151 3.572 3.572 0 6.585-1.228 9.04-3.683 2.456-2.456 3.684-5.395 3.684-8.817 0-3.423-1.228-6.362-3.684-8.817-2.455-2.456-5.468-3.683-9.04-3.683-3.571 0-6.585 1.227-9.04 3.683-2.455 2.455-3.683 5.394-3.683 8.817 0 3.422 1.19 6.398 3.571 8.928z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ms-2" style="margin-top: 2px;">
                                <span>{{ucfirst($class[0]->class_type)}}</span>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div>
                                <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI"
                                    width="1em" height="1em" fill="#777777" viewBox="0 0 100 100">
                                    <path
                                        d="M7.683 93.137h16.072V77.066H7.683v16.071zm19.643 0h17.857V77.066H27.326v16.071zM7.683 73.494h16.072V55.637H7.683v17.857zm19.643 0h17.857V55.637H27.326v17.857zM7.683 52.066h16.072V35.994H7.683v16.072zm41.072 41.071h17.857V77.066H48.755v16.071zM27.326 52.066h17.857V35.994H27.326v16.072zm42.857 41.071h16.072V77.066H70.183v16.071zM48.755 73.494h17.857V55.637H48.755v17.857zM29.112 25.28V9.209c0-.95-.837-1.786-1.786-1.786h-3.571c-.949 0-1.786.837-1.786 1.786V25.28c0 .949.837 1.786 1.786 1.786h3.571c.949 0 1.786-.837 1.786-1.786zm41.071 48.214h16.072V55.637H70.183v17.857zM48.755 52.066h17.857V35.994H48.755v16.072zm21.428 0h16.072V35.994H70.183v16.072zM71.97 25.28V9.209c0-.95-.837-1.786-1.786-1.786h-3.571c-.949 0-1.786.837-1.786 1.786V25.28c0 .949.837 1.786 1.786 1.786h3.571c.95 0 1.786-.837 1.786-1.786zm21.429-3.571v71.428c0 3.906-3.237 7.143-7.143 7.143H7.683c-3.906 0-7.142-3.237-7.142-7.143V21.71c0-3.907 3.236-7.143 7.142-7.143h7.143V9.209c0-4.911 4.018-8.929 8.929-8.929h3.571c4.911 0 8.929 4.018 8.929 8.929v5.357h21.428V9.209c0-4.911 4.018-8.929 8.929-8.929h3.571c4.911 0 8.929 4.018 8.929 8.929v5.357h7.143c3.906 0 7.143 3.236 7.143 7.143z">
                                    </path>
                                </svg>
                            </div>

                            <div class="ms-2 mb-2" style="margin-top: 2px;">
                                <span>{{date('l \, d F Y\, h:i ', strtotime($class[0]->date_time))}}</span>
                            </div>
                        </div>

                    </div>
                </div>

                <p class="mt-4"><b>Detail pesanan</b></p>
                <div class="border"
                    style="border-radius: 7px; background-color: #e6f3ff; border-color: #004f99 !important ;">
                    <div class="d-flex mt-2 ms-2 justify-content-between">
                        <div>
                            <p class="text-muted">Harga Awal</p>
                        </div>

                        <div class="me-2">
                            IDR {{number_format($class[0]->price, 0, ',', '.')}}
                        </div>
                    </div>
                    <div class="d-flex mt-2 ms-2 justify-content-between" style="border-bottom: 1px solid #004f99;">
                        <div>
                            <p class="text-muted">Diskon</p>
                        </div>

                        <div class="me-2">
                            {{$class[0]->Discount->discount * 100}}%
                        </div>
                    </div>
                    <div class="d-flex mt-2 ms-2 justify-content-between">
                        <div>
                            <p>Total</p>
                        </div>

                        <div class="me-2">
                            <p style="font-weight: bolder;">IDR {{number_format((1 - $class[0]->Discount->discount)*$class[0]->price, 0, ',', '.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="mt-4">
                        <form action="">
                            <button type="button" onclick="window.location.href = '/expertclass/payment/{{$class[0]->class_id}}';"
                                style="width: 100%; background-color: #007acc; color: white; font-weight: bold;"
                                class="btn">LANJUTKAN KE PEMBAYARAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

