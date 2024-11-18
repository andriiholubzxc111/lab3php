<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Vehicle</title>
</head>
<body>
<h1>Create New Vehicle</h1>

<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf
    <label for="code">Code:</label>
    <input type="text" name="code" id="code" required>
    <br>

    <label for="owner">Owner:</label>
    <input type="text" name="owner" id="owner" required>
    <br>

    <label for="brand">Brand:</label>
    <input type="text" name="brand" id="brand" required>
    <br>

    <label for="number">Number:</label>
    <input type="text" name="number" id="number" required>
    <br>

    <label for="color">Color:</label>
    <input type="text" name="color" id="color" required>
    <br>

    <button type="submit">Create Vehicle</button>
</form>

<a href="{{ route('vehicles.index') }}">Back to Vehicles</a>
</body>
</html>
