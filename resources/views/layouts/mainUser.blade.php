<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.webp')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleUser.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/426dd50368.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/nzpr75jtk6erwwob2fb2urtlhgnuttp6si1pu7ffjtutfuz6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- footer --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.4.0/css/all.css" integrity="sha384-........"
    crossorigin="anonymous" />
    <script src="https://pro.fontawesome.com/releases/v6.4.0/js/all.js" integrity="sha384-........"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/styleFooter.css')}}">

    @stack('style')
</head>

<body>

    @include('partials.navbarUser')
    
    @yield('content')

    <script src="{{asset('js/popper.min.js')}}"></script>
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