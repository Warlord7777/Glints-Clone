<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('public/css/styleUser.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center w-100">

            <div class="col-6 border" style="box-shadow:  0px 3px 10px #c1c1c1; border-radius: 7px; margin-top:15%">
                @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('status'))
                    <div class="alert alert-success mt-2">
                        {{ session()->get('status') }}
                    </div>
                @endif

                <h4>Forgot your password?</h4>
                <p>No problem, just let us know your email address, and we will email you a password reset link that
                    will allow you to choose a new one.</p>
                <form action="{{ route('password.email') }}" method="post" class="d-block">
                    <div class="mt-2">
                        <div class="mt-4">
                            @csrf
                            <label for="email">Email</label>
                        </div>
                        <div class="mt-1 d-flex justify-content-center">

                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit"
                            style="width: 30%; margin-right: 1%; background-color: #007acc; color: white; font-weight: bold;"
                            class="btn share mb-3">SEND EMAIL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
