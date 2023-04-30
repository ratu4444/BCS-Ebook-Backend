<!DOCTYPE html>
<html lang="en">
@include('custom-layouts.header')
<body>

<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
            @include('custom-layouts.navbar')
            @include('custom-layouts.sidebar')

            <div class="main-content">
                @yield('main-content')
            </div>

    </div>
</div>

@include('custom-layouts.footer')
</body>
</html>
