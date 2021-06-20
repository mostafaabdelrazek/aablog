<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    @include('layout.nav')

<div>
    @include('layout.messages')
    @yield('content')
</div>

@include('layout.footer')
@include('layout.scripts')
@yield('scripts')
</body>

</html>