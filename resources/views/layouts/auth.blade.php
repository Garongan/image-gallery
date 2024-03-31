<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery - {{ $title }}</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- my style css --}}
    <style>
        .form-login .form-floating:focus-within,
        .form-register .form-floating:focus-within {
            z-index: 2;
        }

        .form-login input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-login input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-register input {
            margin-bottom: -1px;
            border-radius: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            -ms-border-radius: 0px;
            -o-border-radius: 0px;
        }

        body {
            background: #f4f4f4;
        }

        .banner {
            background: #a770ef;
            background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
            background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
        }
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="flex min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #9A616D;">
        {{-- /content --}}
        @yield('container')
        {{-- /content --}}
    </div>
</body>

</html>