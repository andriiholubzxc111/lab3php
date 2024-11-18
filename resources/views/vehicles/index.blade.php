<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>
</head>
<body>
<h1>Vehicles</h1>
<a href="{{ route('vehicles.create') }}">Add Vehicle</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <thead>
    <tr>
        <th>Code</th>
        <th>Owner</th>
        <th>Brand</th>
        <th>Number</th>
        <th>Color</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->code }}</td>
            <td>{{ $vehicle->owner }}</td>
            <td>{{ $vehicle->brand }}</td>
            <td>{{ $vehicle->number }}</td>
            <td>{{ $vehicle->color }}</td>
            <td>
                <a href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
