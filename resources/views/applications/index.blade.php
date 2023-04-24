<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Applications in the view: </h1>
    @foreach ($applications as $application)
        <div style="background-color: lightgray; padding: 15px; margin: 10px; width: 50%; border-radius: 15px;">
            <p>{{$application->name}}</p>
            <p>{{$application->email}}</p>
            <p>{{$application->creditscore}}</p>
            @if ($application->creditscore <= 450)
                <p style="color: red; font-weight: 700;">Status: Rejected</p>
            @else
                <p style="color: green; font-weight: 700;">Status: Accepted</p>
            @endif
        </div>
    @endforeach

</body>

</html>
