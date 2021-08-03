<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- google fonts --}}

    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>

    <title>Laravel Task - Air Index</title>
    <style>
        * {
            font-family: 'Dosis', sans-serif;
        }

        .container {
            padding: 30px;
        }

        .show {
            width: 100%;
            height: 80vh;
            border: none;
        }

        .error {
            color: red;
        }

    </style>

    @livewireStyles
</head>

<body>
    {{ $slot }}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



    @livewireScripts
</body>

</html>
