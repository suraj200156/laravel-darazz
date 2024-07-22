<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: #007BFF;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Dashboard</h1>
        </header>
        <div class="main-content">
            <div class="card" id="orders">
                <h2>Orders</h2>
                <a href="{{route('order.view')}}">Go to order</a>

            </div>
            <div class="card" id="products">
                <h2>Products</h2>
                <a href="{{route('product.view')}}">Go to product</a>
            </div>
            <div class="card" id="users">
                <h2>Users</h2>
                <a href="{{route('user.view')}}">Go to user page</a>
            </div>
            <div class="card" id="categories">
                <h2>Categories</h2>
                <p>Total Categories: 10</p>
            </div>
        </div>
    </div>
</body>

</html>