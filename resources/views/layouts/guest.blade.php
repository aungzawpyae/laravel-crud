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
        {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" > --}}
        {{-- <link rel="stylesheet" href="{{}}"> --}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        

        <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    </head>
    <body>
        <div class="font-sans antialiased text-gray-900 ">

            @include('ui.navigation-menu')

             {{ $slot }}
            

            @include('ui.footer')

           

        </div>

        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
        <script>
            // let value = document.querySelector('#filter option:checked');

            // console.log(value);

        </script>

        
    </body>
</html>
