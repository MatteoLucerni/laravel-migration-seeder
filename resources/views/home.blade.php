<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Train Table</title>

    @vite('resources/js/app.js')
</head>

<style>
    tbody tr:nth-child(odd) {
        background-color: rgb(250, 248, 248) !important
    }

    tbody td {
        background-color: transparent !important;
    }
</style>

<body>
    <div class="container my-5 border p-5 border-info">
        <h1>TRENI</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Treno Cancellato</th>
                    <th scope="col">Stato</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                    <tr scope="row">
                        <td>
                            {{ $train->train_code }}
                        </td>
                        <td>
                            {{ $train->agency }}
                        </td>
                        <td>
                            {{ $train->departure_station }}
                        </td>
                        <td>
                            {{ $train->arrival_station }}
                        </td>
                        <td>
                            {{ $train->departure_time }}
                        </td>
                        <td>
                            {{ $train->arrival_time }}
                        </td>
                        <td>
                            @if ($train->cancelled)
                                <strong class="text-danger">
                                    SI
                                </strong>
                            @else
                                <p class="text-success">
                                    NO
                                </p>
                            @endif
                        </td>
                        <td>
                            @if ($train->on_time)
                                <strong class="text-warning">
                                    IN RITARDO
                                </strong>
                            @else
                                <p class="text-success">
                                    IN ORARIO
                                </p>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr scope="row" class="text-danger">Nessun treno disponibile</tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
