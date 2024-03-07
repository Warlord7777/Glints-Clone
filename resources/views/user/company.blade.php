@extends('layouts.mainUser')

@push('script')
  <script src="{{asset('js/explore.js')}}"></script>
@endpush

@section('title', 'Perusahaan')

@section('content')
    <div class="container-fluid pt-2 px-0">
        <!-- search starts -->
        <nav class="navbar bg-body-tertiary container" style="padding-top: 70px;">
            <div class="container-fluid navbar"> 
              <form method="GET" class="w-100" role="search" method="/company">
                <input class="form-control me-3 w-50 searchLogo" name="search" type="text" placeholder="Cari Perusahaan" aria-label="Search">
                <button class="btn btn-outline-success me-3" style="width: 100px;" type="submit">Cari</button>
              </form>
            </div>
        </nav>
        <!-- search ends -->
        <!-- card starts -->
        <div class="container" style="padding-top:120px;">
        @if($companies->count() > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($companies as $company)    
                <div class="col">
                    <div class="card mb-4 mx-2 cardStyle d-flex" onclick="location.href = '/companies/detail/{{$company->company_id}}'" style="width: 420px; height: 100%;">
                        <div class="row g-0 h-100">
                            <div class="col-12 pt-3 d-flex">
                                <div class="container-fluid">
                                    <div class="row w-100">
                                        <div class="col-3">
                                            <img src="{{asset('storage/'.$company->logo_company)}}" style="width: 50px;" alt="...">
                                        </div>
                                        <div class="col-9 d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title title">{{$company->company_name}}</h5>
                                                <p style="color: #777777;">{{$company->company_location}}</p>
                                            </div>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card-body fs-6">
                                <div>
                                    <div>
                                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#777777" viewBox="0 0 100 100"><path d="M100,0 L100,100 L73.9128906,100 L73.9128906,69.5652344 L56.5216797,69.5652344 L56.5216797,100 L0,100 L0,36.9564453 L30.4347656,36.9564453 L30.4347656,0 L100,0 Z M30.4347656,43.4783203 L6.52167969,43.4783203 L6.52167969,93.4783203 L30.4347656,93.4783203 L30.4347656,43.4783203 Z M23.9130859,69.5652344 L23.9130859,78.2609375 L13.0435547,78.2609375 L13.0435547,69.5652344 L23.9130859,69.5652344 Z M50,69.5652344 L41.3042969,69.5652344 L41.3042969,78.2609375 L50,78.2609375 L50,69.5652344 Z M89.1304688,69.5652344 L80.4347656,69.5652344 L80.4347656,78.2609375 L89.1304688,78.2609375 L89.1304688,69.5652344 Z M23.9130859,52.1738281 L23.9130859,60.8695312 L13.0435547,60.8695312 L13.0435547,52.1738281 L23.9130859,52.1738281 Z M50,52.1738281 L41.3042969,52.1738281 L41.3042969,60.8695312 L50,60.8695312 L50,52.1738281 Z M69.5652344,52.1738281 L60.8695312,52.1738281 L60.8695312,60.8695312 L69.5652344,60.8695312 L69.5652344,52.1738281 Z M89.1304688,52.1738281 L80.4347656,52.1738281 L80.4347656,60.8695312 L89.1304688,60.8695312 L89.1304688,52.1738281 Z M50,34.7826172 L41.3042969,34.7826172 L41.3042969,43.4783203 L50,43.4783203 L50,34.7826172 Z M69.5652344,34.7826172 L60.8695312,34.7826172 L60.8695312,43.4783203 L69.5652344,43.4783203 L69.5652344,34.7826172 Z M89.1304688,34.7826172 L80.4347656,34.7826172 L80.4347656,43.4783203 L89.1304688,43.4783203 L89.1304688,34.7826172 Z M50,17.3914063 L41.3042969,17.3914063 L41.3042969,26.0869141 L50,26.0869141 L50,17.3914063 Z M69.5652344,17.3914063 L60.8695312,17.3914063 L60.8695312,26.0869141 L69.5652344,26.0869141 L69.5652344,17.3914063 Z M89.1304688,17.3914063 L80.4347656,17.3914063 L80.4347656,26.0869141 L89.1304688,26.0869141 L89.1304688,17.3914063 Z"></path></svg>
                                        <span>{{$company->company_field}}</span>
                                    </div>
    
                                    <div class="d-flex">
                                        <svg data-testid="icon-svg" class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmtI" width="1em" height="1em" fill="#777777" viewBox="0 0 100 100"><path d="M37.4726562,59.9636719 L37.4726562,68.8853516 C37.4726562,69.8521484 37.8257812,70.6894531 38.5320313,71.3945313 C39.1841346,72.0473558 39.9467409,72.3982942 40.8209256,72.4484219 L41.0417969,72.4546875 L58.8857422,72.4546875 C59.8523437,72.4546875 60.6892578,72.1017578 61.3957031,71.3945313 C62.0470853,70.7435096 62.3985785,69.979988 62.4488,69.106117 L62.4550781,68.8853516 L62.4550781,59.9636719 L99.9271484,59.9636719 L99.9271484,86.7300781 C99.9271484,89.1832031 99.0542969,91.2832031 97.3064453,93.0302734 C95.6386009,94.6981179 93.6488261,95.5699457 91.3378006,95.6457568 L91.0054688,95.6511719 L8.92226563,95.6511719 C6.46855469,95.6511719 4.36777344,94.7775391 2.62070312,93.0302734 C0.95267223,91.3626154 0.0811918905,89.373383 0.0054127499,87.0624064 L0,86.7300781 L0,59.9636719 L37.4726562,59.9636719 Z M57.1019531,59.9636719 L57.1019531,67.1013672 L42.8253906,67.1013672 L42.8253906,59.9636719 L57.1019531,59.9636719 Z M66.0236328,5 C67.5101562,5 68.7748047,5.52070312 69.8148437,6.56113281 C70.8560547,7.60214844 71.3761719,8.86582031 71.3761719,10.3529297 L71.3761719,10.3529297 L71.3761719,21.2753906 L91.0052734,21.2753906 C93.4583984,21.2753906 95.5591797,22.1486328 97.30625,23.8960938 C99.0542969,25.6433594 99.9269531,27.7429688 99.9269531,30.1966797 L99.9269531,30.1966797 L99.9269531,51.6099609 L0,51.6099609 L0,30.1966797 C0,27.7429688 0.873242188,25.6433594 2.62070313,23.8960938 C4.36796875,22.1486328 6.46875,21.2753906 8.92226563,21.2753906 L8.92226563,21.2753906 L28.5509766,21.2753906 L28.5509766,10.3529297 C28.5509766,8.865625 29.0710938,7.6015625 30.1123047,6.56113281 C31.1535156,5.52070312 32.4173828,5 33.9041016,5 L33.9041016,5 Z M64.2390625,12.1373047 L35.6884766,12.1373047 L35.6884766,21.2753906 L64.2390625,21.2753906 L64.2390625,12.1373047 Z"></path></svg>
                                        <object class="d-flex flex-column justify-content-center ms-1">
                                            <a href="/companies/{{$company->company_id}}">{{$rowCount[$company->company_id]}} lowongan</a>
                                        </object>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer mt-3 fs-6" style="background-color:white !important; border:none;">
                                <p class="card-text"><small class="text-muted">Diperbarui {{$company->updated_at->format('d M Y g:i A')}}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    
        </div>
        @else
        <h4 class="mt-5 text-center">Tidak ada Perusahaan dengan nama "{{request('search')}}"</h4>
        @endif
        <div class="mt-5 d-flex justify-content-center">
            {{$companies->links()}}
        </div>
        <!-- card ends -->

    </div>
    @include('partials.footer')

@endsection