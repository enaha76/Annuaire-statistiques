
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div>
        <canvas id="chart"></canvas>
    </div>
    @if (isset($criteria1) && isset($criteria2) && isset($results))
    <table>
        <thead>
            <tr>
                <th>{{ $criteria1 }}</th>
                <th>{{ $criteria2 }}</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->{'inscrire_'.$criteria1} ?? $result->{'etudiants_'.$criteria1} }}</td>
                <td>{{ $result->{'inscrire_'.$criteria2} ?? $result->{'etudiants_'.$criteria2} }}</td>
                <td>{{ $result->count }}</td>
            </tr>
        @endforeach
        
        
        </tbody>
    </table>
@endif
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Get the data for the chart from the PHP variable
    var chartData = {!! json_encode($chartData) !!};

    // Get the canvas element
    var ctx = document.getElementById('chart').getContext('2d');

    // Create the chart
    var chart = new Chart(ctx, {
        type: 'bar', // Choose the desired chart type (e.g., bar, line, pie)
        data: chartData,
        options: {
            // Configure additional chart options (e.g., labels, colors, tooltips)
        }
    });
</script>

</body>
</html>
 