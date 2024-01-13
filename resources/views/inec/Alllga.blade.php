<html>
<head>
    <title>Results</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>

@vite(['resources/js/app.js'])
</head>
<body>
<div class="card" style=" background-color:black">
        <div class="card-header" style=" color:white">
            <h4 class="card-title">All LOCAL GOVERNEMT</h4>
            <P>Please check the box to check the total sum of party_score in each LGA</p>
        </div>
        <div class="card-body" style=" background-color:white">


    
<form action="{{route('totalResult')}}" method="POST">
    @csrf
    @foreach($lgas as $lga)
        <label>
            <input type="checkbox" name="lga_name[]" value="{{ $lga->lga_name }}">
            {{ $lga->lga_name }}
        </label><br>
    @endforeach
    <button type="submit" class="btn btn-dark">Check Total LGA PU Result</button>
</form>
</div>

</body>
</html>