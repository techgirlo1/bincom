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
        <h4>Total Sum Of Scores In Each LGA</h4>
        </div>
        <div class="card-body" style=" background-color:white">


        @foreach($selectedLgas as $selectedLga)
    <h2>Party Scores for {{ $selectedLga }}:</h2>
    <ul>
        @foreach($totalResult->where('actual_lga_name', $selectedLga) as $result)
            <li>{{ $result->party_abbreviation }}: {{ $result->party_score }}</li>
        @endforeach
    </ul>
    <div>
@endforeach
</body>
</html>