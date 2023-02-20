<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.mobile_menu')

<div id="mobile_navbar" class="noactive">
    @include('layouts.only_mobile')
    <div id="mobile_body_content">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.js')
    </div>
</div>

</body>
</html>
