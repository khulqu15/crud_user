<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jurusan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light mb-5">
        <a class="navbar-brand" href="{{ url('jurusan') }}">Jurusan</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#jurusanNavId" aria-controls="jurusanNavId"
            aria-expanded="false" aria-label="Jurusan Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="jurusanNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('jurusan') }}">Get All Data <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('jurusan/create') }}">Add Data</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
</body>
</html>
