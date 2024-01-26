<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Monitoring Report</title>
    <!-- Include your styles here -->
</head>
<body>
    <style>
        /* Include your styles here */
    </style>

    <h1>Pet Monitoring Report</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pet Name</th>
                <th>Status</th>
                <th>Condition</th>
                <th>Notes</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>

        <tbody>
            @forelse ($petMonitoring as $monitoring)
            <tr>
                <td>{{ $monitoring->id }}</td>
                <td>{{ $monitoring->pet->pet_name }}</td>
                <td>{{ $monitoring->status }}</td>
                <td>{{ $monitoring->condition }}</td>
                <td>{{ $monitoring->notes }}</td>
                <!-- Add more columns as needed -->
            </tr>
            @empty
            <tr>
                <td colspan="5">No pet monitoring records available.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        <nav>
            <ul>
                {{-- Include your pagination links here --}}
            </ul>
        </nav>
    </div>
</body>
</html>
