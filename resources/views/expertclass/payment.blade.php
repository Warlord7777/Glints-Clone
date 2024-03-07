@extends('layouts.expertClass')

@section('content')
    
<div class="container" style="padding-top: 150px;">
     <div class="row d-flex justify-content-center">
            <div class="col-6 border py-4 px-5" style="border-radius: 10px; background-color:white;">
                <div class=" d-flex flex-column" style=" align-items:center ;">
                    {{-- ganti  --}}
                    <span>PAY BEFORE 19 MAY 2023 10:09AM</span>
                    <h3 style="color: #004ACC;">IDR {{number_format((1 - $class[0]->Discount->discount)*$class[0]->price, 0, ',', '.')}}</h3>
                </div>
                <div>
                   <form method="POST" action="/expertclass/payment/{{$class[0]->class_id}}" enctype="multipart/form-data">
                    @csrf
                        <div class="mt-1">
                            <label for="payment"><b>CHOOSE PAYMENT METHOD</b> </label>
                            <select class="form-select mt-2" id="payment" name="payment_method" aria-label="Default select example"
                                style="border-radius: 0%; border-color: #666666; height: 44px;">
                                <option selected>Select payment method</option>
                                <option value="bni">BNI</option>
                                <option value="bri">BRI</option>
                                <option value="mandiri">MANDIRI</option>
                                <option value="bca">BCA</option>
                                <option value="bsi">BSI</option>
                                <option value="permata">PERMATA BANK</option>
                                <option value="ovo">OVO</option>
                                <option value="dana">DANA</option>
                                <option value="shopee">SHOPEE PAY</option>
                                <option value="gopay">GO PAY</option>                
                            </select>
                            @error('payment_method')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2 text-muted">Transfer ke: +62 813-9611-6266 (DANA)</div>
                        <div class="mt-4">
                            <label for="bankNumber"><b>ADD YOUR ATM NUMBER</b></label>
                            <input type="text" style="width: 100%; height: 44px;"
                                placeholder="Add your atm number" name="bank_number" id="bankNumber">
                                @error('bank_number')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>

                        <div class="mt-4">
                            <label for="proof"><b>ADD YOUR PROOF OF TRANSACTION</b></label>
                            <div class="d-flex">
                                <div class="col-6">
                                    <input type="file" name="proof" class="form-control" id="proof">
                                    @error('proof')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <span><small class="text-muted">Acceptable Formats :</small></span>
                                <b style="font-weight: 600; color: #666666; font-size: small;">jpg, jpeg, png</b>
                                <br>
                                <span><small class="text-muted">Max Size: </small></span>
                                <b style="font-weight: 600; color: #666666; font-size: small;">5 MB</b>
                            </div>

                            <div class="mt-3 mb-4">
                                <button type="submit" style="width: 100%; background-color: #007acc; color: white; font-weight: bold;" class="btn">SUBMIT</button>
                            </div>
                                    
                        </div>
                   </form>
                </div>
            </div>
        </div>
</div>

@endsection

