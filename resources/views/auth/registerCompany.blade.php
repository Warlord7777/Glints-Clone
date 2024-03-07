{{-- REGISTER USER --}}
  
  <!DOCTYPE html>
  <html lang="pt-br">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
      <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
      <title>Company Register Page</title>
  </head>

  <body>
      <div class="container">
          <div class="wrapper">
              <h1 class="fw-bold text-center">Daftar Perusahaan</h1>
              <form action="/register/company" method="POST" class="inputs">
                  @csrf
                  <div class="error"></div>
                  <label class="sr-only" for="first_name">Nama depan</label>
                  <input type="text" placeholder="Nama depan perwakilan" id="first_name" name="first_name"
                      minlength="4" autocomplete="none" />
                    @error('first_name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                  <div class="mt-4 error"></div>
                  <label class="sr-only" for="last_name">Nama belakang</label>
                  <input type="text" placeholder="Nama belakang perwakilan" id="last_name" name="last_name"
                      minlength="4" autocomplete="none" />
                    @error('last_name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                  <label class="sr-only" for="email">Email</label>
                  <input class="mt-4 mb-0" type="email" placeholder="Email bisnis" id="email" name="email"
                      autocomplete="none" />
                    @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror

                  <label class="sr-only" for="password">Password</label>
                  <input type="password" class="mt-4" style="rem" placeholder="Password" id="password" name="password"
                      minlength="6" />
                    @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                  <div class="show-password-area @error('password') mt-4 @enderror">
                      <input type="checkbox" id="show-password" />
                      <label for="show-password">Tampilkan Sandi</label>
                  </div>
                  <button type="submit">Daftar</button>
              </form>
              <div class="register">
                  <p>Sudah punya akun?</p>
                  <a href="/login">masuk</a>
              </div>
          </div>
      </div>

  </body>

  </html>
