<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/privacyPolicy.css')}}">
    <link rel="stylesheet" href="{{asset('css/termsCondition.css')}}">
    
    
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row px-5 py-3">
            <div class="col-md-7" style="display:flex; flex-direction:column; justify-content:center;">
                <p>Hello! In order to save your time and to show you the most relevant
                    campaigns, we use cookies.</p>
            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <a class="btn btn-warning px-4">I understand!</a>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-12 myHeader" style="">
            <img src="{{asset('images/logo-yellow.png')}}" height="64px" width="140px" alt="" srcset="">
        </div>
    </div>

    @yield('content')

    <div class="mb-4">
        <div class="myFooter" style="">
            <div class="row my-2 d-flex justify-content-center">
                <div class="col-md-12 d-inline text-center" style="color:white;">
                    <a class="pr-3 mr-2" style="border-right:1px solid white;" href="{{ url('about') }}">about us</a>
                    <a class="pr-3 mr-2" style="border-right:1px solid white;" href="{{ url('term-conditions') }}">Terms and conditions</a>
                    <a class="pr-3 mr-2" style="border-right:1px solid white;" href="{{ url('privacy') }}">privacy policy</a>
                    <a class="pr-3 mr-2" style="border-right:1px solid white;" href="{{ url('') }}">Contact Us</a>
                    {{-- <a class="pr-3 mr-2" style="border-right:1px solid white;">newsletter subscription</a> --}}
                    {{-- <a>Donate</a> --}}
                </div>
            </div>
            <div class="row my-2 d-flex justify-content-center">
                <div class="col-md-12 d-inline text-center" style="color:white;">
                    Copyright © 2020 declic.ro, all rights reserved
                </div>
            </div>
        </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>