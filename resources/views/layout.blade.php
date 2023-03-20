<!DOCTYPE html>
<html lang="en">

<head>

    <title> BLOGS </title>
    <link rel="stylesheet" href="/app.css">
</head>
{{-- <ul>
        <li><a href="/">Home </a></li>
        <li><a href="/category">Home </a></li>

    </ul> --}}


<body>

    <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/category">category</a></li>
        <li><a href="/user">Authers</a></li>
        {{-- <li><a href="#about">About</a></li> --}}
    </ul>
    @yield('main')

</body>

</html>
