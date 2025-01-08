<!-- resources/views/loan_details/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
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
        <h1>Loan Details</h1>

        @if($loanDetails->isEmpty())
            <p class="no-data">No loan details found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Client ID</th>
                        <th>Number of Payments</th>
                        <th>First Payment Date</th>
                        <th>Last Payment Date</th>
                        <th>Loan Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loanDetails as $loanDetail)
                        <tr>
                            <td>{{ $loanDetail->clientid }}</td>
                            <td>{{ $loanDetail->num_of_payment }}</td>
                            <td>{{ \Carbon\Carbon::parse($loanDetail->first_payment_date)->format('d-m-Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($loanDetail->last_payment_date)->format('d-m-Y') }}</td>
                            <td>{{ number_format($loanDetail->loan_amount, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
