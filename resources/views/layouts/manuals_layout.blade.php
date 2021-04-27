<!DOCTYPE html>
<html lnag="ja">
    <head>
        <meta charset="utf-8">
        <title>CareManual</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ケアマニュアル">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        {{-- header --}}
        @if (Auth::check())
            @component('components.header', ['name' => $user->name, 'role' => $user->role])
            @endcomponent
        @else
            @component('components.header', ['name' => 'sample', 'role' => 'member'])
            @endcomponent
        @endif

        {{-- title --}}
        <div class="top-title wrapper">
            <h2 class="page-title">@yield('title')</h2>
            <p>@yield('description')</p>
        </div>

        {{-- home --}}
        <div class="home-content wrapper">

            @yield('content')

            @yield('side')

        </div>

        {{-- footer --}}
        @component('components.footer')
        @endcomponent

    </body>
</html>