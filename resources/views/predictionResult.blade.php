<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediction Result</title>
</head>
<body>
    <h2>Prediction Result</h2>
    
    @if(isset($prediction) && is_array($prediction))
        <p>Annual Rainfall: {{ $prediction['input'] }}</p>
        <p>Predicted Flood: {{ $prediction['prediction'] == 1 ? 'Flood Expected' : 'Flood not expected' }}</p>
    @else
        <p>No prediction available.</p>
    @endif

    <a href="{{ route('flood-predictions') }}">Back to Prediction Form</a>
</body>
</html>
