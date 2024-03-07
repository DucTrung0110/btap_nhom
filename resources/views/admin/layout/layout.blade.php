<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">
<head>
    @include("admin.html.head")
</head>
<body>
<div id="wrapper">
    @include("admin.html.menu")
    <div class="content-page">
        @include("admin.html.nav")
    @yield('main')
        @include(("admin.html.footer"))
    </div>
</div>
@include("admin.html.theme")
@include("admin.html.script")
</body>
