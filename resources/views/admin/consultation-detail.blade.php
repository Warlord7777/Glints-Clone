@extends('layouts.admin')
@section('content')
        <main class="content">
                <div class="container-fluid p-0">
                    <button type="button" class="btn btn-info" onclick="window.location.href = '/admin/consultation';">
                        <div data-feather="arrow-left" ></div><span>
                            back
                        </span>
                    </button>
                    <div class="mb-3">
                        <h1 class="text-center" style="font-weight: bold;">Detail Information</h1>

                    </div>

                    <div class="row justify-content-between">
                        <table class="table">
                            <thead>
                                <tr class="">
                                    <th class="">Name</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$consultation->first_name}} {{$consultation->last_name}}</td>
                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Job Position</th>
                                    <td class="d-none d-xl-table-cell text-center">{{ucfirst($consultation->position)}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Note</th>
                                    <td class="d-none d-xl-table-cell text-center">{!!$consultation->note!!}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Company</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$consultation->Company->company_name}}</td>

                                </tr>
                                <tr>
                                    <th class="d-none d-xl-table-cell">Company Size</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$consultation->company_size}} karyawan</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Country</th>
                                    <td class="d-none d-xl-table-cell text-center">{{$consultation->country}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Business Requirement</th>
                                    <td class="d-none d-xl-table-cell text-center">{{ucfirst($consultation->business_requirement)}}</td>

                                </tr>

                                <tr>
                                    <th class="d-none d-xl-table-cell">Status</th>
                                    <td class="text-center"><span class="badge 
                              @if($consultation->status == 0)
                                bg-warning
                              @elseif($consultation->status == 1)
                                bg-success
                              @elseif($consultation->status == -1)
                                bg-danger
                              @endif
                              ">
                            @if($consultation->status == 0)
                                Pending
                              @elseif($consultation->status == 1)
                                Schedule Sent!
                              @elseif($consultation->status == -1)
                                Rejected
                            @endif
                          </span></td>
                                </tr>
                            </thead>


                        </table>

                    </div>
                    @if($consultation->status == 0)
                        <form class="mt-3" action="/admin/consult" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{$consultation->id}}">
                            <input type="hidden" name="user_id" value="{{$consultation->client_id}}">
                        <div>
                            <label for="ScheduleConsult"><b>Schedule your consultation</b> </label><br>
                            <input type="datetime-local" class="mt-3" name="scheduled_time" id="ScheduleConsult" class=""><br>
                        </div>
                        <div class="mt-3 mb-4">
                            <select name="media" id="media" class="form-select w-25">
                                <option value="" selected>Choose Meeting Media</option>
                                <option value="Meet">Google Meet</option>
                                <option value="Zoom">Zoom</option>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-secondary"><b>SEND CONSULTATION SCHEDULE</b></button>
                        </form>
                    @endif




                </div>
            </main>
@endsection