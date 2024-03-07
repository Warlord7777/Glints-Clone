<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.webp')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @stack('style')
    <script src="https://cdn.tiny.cloud/1/nzpr75jtk6erwwob2fb2urtlhgnuttp6si1pu7ffjtutfuz6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/426dd50368.js" crossorigin="anonymous"></script>
</head>
<body>
  @auth
    @include('partials.navbarPerusahaan')
    <div class="container-fluid" style="position: relative; top: 80px;">
        @yield('content')
    </div>    
  @else
    @include('partials.navbarPerusahaan')

    <!-- content -->
    <div class="container-fluid" style="position:relative; top: 55px;">    
        @yield('content')
    </div>

  @endauth
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @stack('script')
    <script>
    tinymce.init({
      selector: 'textarea',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
    <script>
    function previewImage(){
        const image = document.querySelector('#upload');
        const preview = document.querySelector('.preview');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function (oFREvent){
            preview.src = oFREvent.target.result;
        }
    }
</script>
</body>
</html>