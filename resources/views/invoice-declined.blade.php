<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('public/css/styleUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 border" style="border-radius: 7px; margin-top:5%; border-color: grey !important ; box-shadow: 0px 1px 5px grey">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="mt-2 mb-3 d-flex">
                            <h2 class="ms-5">Your Invoice</h2>
                        </div>
                    </div>
                </div>
                <div class="row mx-1 mt-2">
                    <div class="col-12 ">
                        <div class="row " > 

                            <div class="col-6 border" style="border-radius: 7px; background-color: #f9f9f9; border-color: grey !important ; box-shadow: 0px 1px 5px grey">
                                <b><i>Expert Class</i></b>
                                <h5>{{$order->Expertclass->class_title}}</h5>
                                <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                                        src="https://glints.com/images/events/icons/new-calendar.svg" alt=""
                                        style="height: 17px
                                    ;"> {{$order->Expertclass->date_time}}</p>
                                <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                                        src="https://glints.com/images/events/icons/event-type.svg" alt=""
                                        style="height: 17px
                                      ;"> {{$order->Expertclass->class_type}}</p>
                                <div class="mb-2" style="display: flex; align-items: left; width: 800px; ">
                                    <img src="{{asset('storage/'.$order->Expertclass->UserDesc->profile_picture)}}"
                                        alt=""
                                        style="height: 40px; border-radius: 50px; padding-top: 0px; margin-top: 0px;">
                                    <div style="text-align: left; margin-left: 10px; width: auto; flex: auto; ">
                                        <p style="margin-bottom: 0; font-weight: 500; ">{{$order->Expertclass->UserDesc->User->first_name}} {{$order->Expertclass->UserDesc->User->last_name}}</p>
                                        <p style="margin-top: 0; font-size: 14px; position: absolute; "> {{$order->Expertclass->UserDesc->ExpertclassApplication->posisi_kerja}} di {{$order->Expertclass->UserDesc->ExpertclassApplication->perusahaan}}</p>
                                    </div>
                                </div>


                            </div>

                            <div class="col-6 ">
                                <div class="justify-content-between d-flex">
                                    <div>
                                        <b>Order ID</b>
                                        <p>{{$order->order_id}}</p>
                                    </div>
                                    <div>
                                        <b>Invoice Date</b>
                                        <p>{{$order->created_at}}</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <b>Billed to</b>
                                    <p>{{$order->payment_method}} <br>
                                        {{$order->bank_number}} <br>
                                        {{$order->UserDesc->User->first_name}} {{$order->UserDesc->User->last_name}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="border mt-4"
                            style="border-radius: 7px; background-color: #f9f9f9; border-color: grey !important; box-shadow: 0px 1px 5px grey">
                            <div class="d-flex mt-2 ms-2 justify-content-between">
                                <div>
                                    <p class="text-muted">Harga Awal</p>
                                </div>
        
                                <div class="me-2">
                                    IDR {{number_format($order->Expertclass->price, 0, ',', '.')}}
                                    {{-- {{number_format($class[0]->price, 0, ',', '.')}} --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2 ms-2 justify-content-between" style="border-bottom: 1px solid grey;">
                                <div>
                                    <p class="text-muted">Diskon</p>
                                </div>
        
                                <div class="me-2">
                                    {{$order->Expertclass->Discount->discount * 100}}%
                                    {{-- {{$class[0]->Discount->discount * 100}}% --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2 ms-2 justify-content-between">
                                <div>
                                    <p>Total</p>
                                </div>
        
                                <div class="me-2">
                                    <p style="font-weight: bolder;">
                                        IDR {{number_format($order->Expertclass->price * (1-$order->Expertclass->Discount->discount))}}
                                    </p>
                                </div>

                                
                            </div>

                            <div class="d-flex mt-2 ms-2 justify-content-between">
                                <div>
                                    <p>Status</p>
                                </div>
        
                                <div class="me-2">
                                    <span class="badge bg-danger">
                                       Declined</span>
                                </div>

                                
                            </div>
                        </div>

                        <div class="row mt-4">
                            <p>
                                <b>Dear, {{$order->UserDesc->User->first_name}}</b><br>
                                It looks like there's something wrong with your payment. <br>
                                Please try again, and make sure to provide valid proof of transaction.
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
