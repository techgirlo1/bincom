<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>

@vite(['resources/js/app.js'])
</head>
<body class="bg-dark">
    <div class='row'>
        <div class="col-md-12">
            <h1 style="color:white" class="text-center py-5">WELCOME TO BINCOM INEC PAGE<h1>
            <p style="color:white" class="text-center py-2">Please Select an Option</p>
            <div class="col-md-12">
                <ul>
       <li style="color:white;margin-left:10px;font-size:15px;padding:15px 0px"><a href="{{route('pollingresult')}}"  style="text-decoration:none;color:white;margin:50px;font-size:15px">CHECK ALL POLLING UNIT RESULT</a><br></li>
       
       <li style="color:white;margin-left:10px;font-size:15px"><a href="{{route('lga')}}" style="text-decoration:none;color:white;margin:50px; font-size:15px"> CHECK SUM OF ALL POLLING UNIT RESULT IN EACH LGA</a></li>
</ul>
</div>
</div>
</div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
    </body>
</html>
