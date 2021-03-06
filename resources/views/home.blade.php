<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Trains</title>
</head>
<body>
    @foreach ($trains as $train)
    <div class="card">
        <p>
            {{ $train->azienda }}
        </p>
        <span>
            {{ $train->stazione_di_partenza }}
        </span> -   
        <span>
            {{ $train->stazione_di_arrivo }}
        </span>
    </div>
    @endforeach
</body>
</html>