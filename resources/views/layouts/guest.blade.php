<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        $white: #fff;
        $google-blue: #4285f4;
        $button-active-blue: #1669F2;

        .google-btn {
            width: 184px;
            height: 42px;
            background-color: $google-blue;
            border-radius: 2px;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .25);

            .google-icon-wrapper {
                position: absolute;
                margin-top: 1px;
                margin-left: 1px;
                width: 40px;
                height: 40px;
                border-radius: 2px;
                background-color: $white;
            }

            .google-icon {
                position: absolute;
                margin-top: 11px;
                margin-left: 11px;
                width: 18px;
                height: 18px;
            }

            .btn-text {
                float: right;
                margin: 11px 11px 0 0;
                color: $white;
                font-size: 14px;
                letter-spacing: 0.2px;
                font-family: "Roboto";
            }

            &:hover {
                box-shadow: 0 0 6px $google-blue;
            }

            &:active {
                background: $button-active-blue;
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:500);

    </style>
</head>

<body>
    <div class="font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>
</body>

</html>
