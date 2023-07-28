<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Klinik</title>
    @include('includes.frontend.layouts.includes.styles')
</head>

<body>
    {{-- Header --}}
    @include('includes.frontend.layouts.includes.header')
    {{-- Header - End --}}

    {{-- Content --}}
    <section id="app" class="main-content">
        @yield('content')
    </section>
    {{-- Content - End --}}

    {{-- Footer --}}
    @include('includes.frontend.layouts.includes.footer')
    {{-- Footer - End --}}

    @include('includes.frontend.layouts.includes.scripts')
</body>

</html>