<!DOCTYPE html>
<html lang="en">
@include('theme.admin.head')
<body>
    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">\
            @include('theme.admin.aside')
            @include('theme.admin.header')
            {{ $slot }}
            @include('theme.admin.footer')
        </div>
    </div>
    @include('theme.admin.js')
</body>
</html>