<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
</head>
<body>
<h1>Vehicle Details</h1>

<p><strong>Code:</strong> {{ $vehicle->code }}</p>
<p><strong>Owner:</strong> {{ $vehicle->owner }}</p>
<p><strong>Brand:</strong> {{ $vehicle->brand }}</p>
<p><strong>Number:</strong> {{ $vehicle->number }}</p>
<p><strong>Color:</strong> {{ $vehicle->color }}</p>

<a href="{{ route('vehicles.index') }}">Back to Vehicles</a>
</body>
</html>
