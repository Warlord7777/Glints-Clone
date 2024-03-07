<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}" />
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Login Page</title>
</head>
<body>
  <div class="container flex-column">
    @if(session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
                {{session('success')}}
            </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('error'))
      <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
          {{session('error')}}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="wrapper">  
      <h1>Login</h1>
      <form action="/login" method="POST" class="inputs">
        @csrf
        <label class="sr-only" for="email">Email</label>
        <input
          type="email"
          required
          placeholder="Email"
          id="email"
          name="email"
          autocomplete="none"
        />
        <label class="sr-only" for="password">Password</label>
        <input
          type="password"
          required
          placeholder="Password"
          id="password"
          name="password"
          minlength="6"
        />
        <div class="show-password-area">
          <input type="checkbox" id="show-password" />
          <label for="show-password">Tampilkan kata Sandi</label>
        </div>
        <div class="forgot-password">
          <a href="forgotpassword">Forgot your password?</a>
        </div>
        <br>
        <button type="submit">Masuk</button>
      </form>
      <div class="register">
        <div class="d-flex justify-content-center">
          <p>Belum punya akun?</p>
          <a href="/register">Daftar Sekarang</a>
        </div>
        <div class="d-flex justify-content-center">
          <p>Belum punya akun perusahaan?</p>
          <a href="/register/company">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
      <script>
        $(document).ready(function() {
            $("#show-password").on("click", function() {
                const passwordInput = $("#password");
                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                } else {
                    passwordInput.attr("type", "password");
                }
            });
        });
    </script>
</body>
</html>