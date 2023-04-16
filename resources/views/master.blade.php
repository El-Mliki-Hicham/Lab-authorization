<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('layouts.head')
    </header>
    <div class="content">
        <div class="container-fluid">

    <main>
        @yield('content')
    </main>

</div>
</div>
    <footer>
        <!-- Footer content goes here -->
    </footer>
</body>
</html>
