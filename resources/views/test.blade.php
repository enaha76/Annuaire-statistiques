
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('statistics') }}" method="GET">
        <select name="selectedYear" >
            @foreach($years as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>
    <label for="criteria1">Select Criteria 1:</label>
    <select name="criteria1" id="criteria1">
        @foreach ($criteriaList as $criteria)
            <option value="{{ $criteria }}">{{ $criteria }}</option>
        @endforeach
    </select>

    <label for="criteria2">Select Criteria 2:</label>
    <select name="criteria2" id="criteria2">
        @foreach ($criteriaList as $criteria)
            <option value="{{ $criteria }}">{{ $criteria }}</option>
        @endforeach
    </select>

    <button type="submit">Submit</button>
</form>

</body>
</html>
