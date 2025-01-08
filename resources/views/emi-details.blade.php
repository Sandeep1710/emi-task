<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic EMI Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            table-layout: auto; /* Let the columns expand based on content */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-align: center; /* Center header text */
        }

        td {
            text-align: center; /* Center table data text */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .no-data {
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dynamic EMI Details</h1>

        @if(empty($emiDetails))
            <p class="no-data">No EMI details found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <!-- Loop through the first row of $emiDetails to display the column headers -->
                        @foreach($emiDetails[0] as $key => $item)
                            <th>{{ $key }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through all rows of $emiDetails to display the actual values -->
                    @foreach($emiDetails as $values)
                        <tr>
                            @foreach($values as $key => $item)
                                <td>{{ $item }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
