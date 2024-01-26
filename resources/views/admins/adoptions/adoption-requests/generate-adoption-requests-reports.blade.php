<!DOCTYPE html>
<html>

<head>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .metric-container {
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <h1>Missing Pets Reports</h1>

    <div class="metric-container">
        <h2>Total Missing Pets: {{ $totalMissingPets }}</h2>
    </div>

    <div class="metric-container">
        <h2>Status Distribution</h2>
        <table>
            <tr>
                <th>Status</th>
                <th>Dog Count</th>
                <th>Cat Count</th>
            </tr>
            @foreach($statusCounts as $status => $counts)
                <tr>
                    <td>{{ $status }}</td>
                    <td>{{ $counts['Dog'] ?? 0 }}</td>
                    <td>{{ $counts['Cat'] ?? 0 }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="metric-container">
        <h2>Age Distribution</h2>
        <table>
            <tr>
                <th>Age (Years)</th>
                <th>Dog Count</th>
                <th>Cat Count</th>
            </tr>
            @foreach($ageDistribution as $age => $counts)
                <tr>
                    <td>{{ $age }}</td>
                    <td>{{ $counts['Dog'] ?? 0 }}</td>
                    <td>{{ $counts['Cat'] ?? 0 }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="metric-container">
        <h2>Species Distribution</h2>
        <table>
            <tr>
                <th>Species</th>
                <th>Dog Count</th>
                <th>Cat Count</th>
            </tr>
            @foreach($speciesDistribution as $species => $counts)
                <tr>
                    <td>{{ $species }}</td>
                    <td>{{ $counts['Dog'] ?? 0 }}</td>
                    <td>{{ $counts['Cat'] ?? 0 }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
