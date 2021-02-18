<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layout.head')
</head>
<body>
    @include('layout.nav')
    <div class="container-fluid">
        @yield('content')
    </div>
    
    @include('layout.script')
</body>
</html>
