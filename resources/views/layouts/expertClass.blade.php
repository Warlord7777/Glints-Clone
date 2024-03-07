<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expert Class</title>
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.webp')}}">
  @stack('style')
  <link rel="stylesheet" href="{{asset('css/expertclass.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <script src="https://kit.fontawesome.com/426dd50368.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://cdn.tiny.cloud/1/nzpr75jtk6erwwob2fb2urtlhgnuttp6si1pu7ffjtutfuz6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  {{-- footer --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.4.0/css/all.css" integrity="sha384-........"
  crossorigin="anonymous" />
  <script src="https://pro.fontawesome.com/releases/v6.4.0/js/all.js" integrity="sha384-........"
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/styleFooter.css')}}">
</head>
<body>
  @include('partials.navbarUser')
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
  @stack('script')
</body>
</html>