<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .nav-tabs {
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
        }

        .nav-link {
            color: #555;
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-link:hover {
            background-color: #f8f9fa;
        }

        .nav-link.active {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .tab-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .tab-pane {
            display: block;
            min-height: 200px;
        }

        .tab-pane h3 {
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Admin Dashboard</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="loan-details-tab" href="{{ route('loan.details') }}" role="tab" aria-controls="loan-details" aria-selected="true">Loan Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="process-data-tab" href="{{ route('process.data') }}" role="tab" aria-controls="process-data" aria-selected="false">Process Data</a>
            </li>
        </ul>

        

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
