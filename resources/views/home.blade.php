<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Train Table</title>

    @vite('resources/js/app.js')
</head>

<body>
    <h1>TRENI</h1>
    <ul>
        @forelse ($trains as $train)
            <li>
                <h1>{{ $train->agency }}</h1>
            </li>
        @empty
            <h1>Nessun treno disponibile</h1>
        @endforelse
    </ul>
</body>

</html>
