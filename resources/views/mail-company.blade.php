<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('public/css/styleUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    @php
    $dateString = $consultation->scheduled_time;
    $scheduled_time = new DateTime($dateString);
    $formattedTime = $scheduled_time->format('d M Y G:i A');
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center mt-4">
                <h2>Consultation Schedule</h2>
            </div>
            <div class="col-12 cards border mt-3"
                style="border-radius: 7px; background-color: #f9f9f9; border-color: grey !important ; box-shadow: 0px 1px 5px grey">
                <b>Hello, {{$company->company_name}}.</b>
                <h5>This is your consultation schedule with <b>Team Glints</b></h5>
                <p style="color: rgb(105, 105, 105); font-size: 16px; margin-bottom: 0px;"><img
                        src="https://glints.com/images/events/icons/new-calendar.svg" alt="" style="height: 17px
                                    ;"> {{$formattedTime }}</p>
                <p style="color: rgb(105, 105, 105); font-size: 16px;"><img
                        src="https://glints.com/images/events/icons/event-type.svg" alt="" style="height: 17px
                                      ;"> {{$consultation->media}}</p>
                <div class="mb-2" style="display: flex; align-items: left; width: 800px; ">
                    <p>The link for your consultation will be sent an hour before the consultation.</p>
                </div>


            </div>

        </div>
    </div>
    </div>

</body>

</html>