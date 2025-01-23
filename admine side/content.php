<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
            /* margin-left: 250px; */
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            background-color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card.blue {
            background-color: #007bff;
            color: white;
        }

        .card.green {
            background-color: #28a745;
            color: white;
        }

        .card.red {
            background-color: #dc3545;
            color: white;
        }

        .card.teal {
            background-color: #17a2b8;
            color: white;
        }

        .card h2 {
            font-size: 30px;
            margin: 10px 0;
        }

        .card p {
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="card blue">
            <h2>32</h2>
            <p>Total Customers</p>
        </div>
        <div class="card green">
            <h2>31</h2>
            <p>Total Bookings</p>
        </div>
        <div class="card red">
            <h2>2</h2>
            <p>Photos</p>
        </div>
        <div class="card teal">
            <h2>14</h2>
            <p>Blogs</p>
        </div>
    </div>
</body>

</html>