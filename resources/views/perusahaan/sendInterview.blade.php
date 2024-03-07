@extends('layouts.mainPerusahaan')

@section('content')
    <div class="container">
         <div class="row d-flex justify-content-center w-100">
            <div class="col-7 border mt-3" style="border-radius: 10px; box-shadow: 0px 5px 8px 5px #bfbaba;">
                <div class="text-center mb-3">
                    <h3>Send an Interview</h3>
                </div>
                <form action="/perusahaan/send-interview" class="d-block" method="POST">
                    @csrf
                    <input type="hidden" name="job" value={{$job->id}}>
                    <div class=" mt-3">
                        <label for="date"><b>Date</b></label>
                        <div class="mt-1">
                            <input class="form-control" type="datetime-local" name="date" id="date">
                        </div>
                    </div>
                    <div class=" mt-3">
                        <label for="media"><b>Media</b></label>
                        <div class="mt-1">
                            <select name="media" id="media" class="form-select">
                                <option selected>Select the media for your meet</option>
                                <option value="Marketing">Zoom</option>
                                <option value="Digital Marketing">Google Meet</option>
                               
                            </select>

                        </div>
                    </div>

                    <div class=" mt-3">
                        <label for="link"><b>Link</b> </label>
                        <div class="mt-1">
                            <input class="form-control" type="text" style="width: 100%;" id="link" name="link"
                                placeholder="Add your media link" required>

                        </div>

                    </div>

                    <div class=" mt-3">
                        <label for="notes"><b>Notes</b> </label>
                        <div class="">
                            <textarea class="form-control" name="notes" id="notes"
                                placeholder="Add Notes"
                                style="width: 100%; height: 100px;"></textarea>
                        </div>
                    </div>


                    <div class="mt-4">
                        <button type="submit"
                            style="width: 100%; background-color: #007acc; color: white; font-weight: bold;"
                            class="btn">SEND INTERVIEW</button>
                    </div>



            </div>
        </div>
    </div>
@endsection