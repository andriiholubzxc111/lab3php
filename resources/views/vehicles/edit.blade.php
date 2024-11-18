<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
</head>
<body>
<h1>Edit Vehicle</h1>

<form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="code">Code:</label>
    <input type="text" name="code" id="code" value="{{ $vehicle->code }}" required>
    <br>

    <label for="owner">Owner:</label>
    <input type="text" name="owner" id="owner" value="{{ $vehicle->owner }}" required>
    <br>

    <label for="brand">Brand:</label>
    <input type="text" name="brand" id="brand" value="{{ $vehicle->brand }}" required>
    <br>

    <label for="number">Number:</label>
    <input type="text" name="number" id="number" value="{{ $vehicle->number }}" required>
    <br>

    <label for="color">Color:</label>
    <input type="text" name="color" id="color" value="{{ $vehicle->color }}" required>
    <br>

    <button type="submit">Update Vehicle</button>
</form>

<a href="{{ route('vehicles.index') }}">Back to Vehicles</a>
</body>
</html>
