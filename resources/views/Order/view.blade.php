<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .main-content {
            margin-left: 256px;
            flex: 1;
        }

        .navbar {
            width: calc(100% - 256px);
            height: 60px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 256px;
            top: 0;
            z-index: 1000;
        }

        .navbar .title {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

        .navbar .right {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-left: auto;
        }

        .navbar .notification {
            font-size: 24px;
            cursor: pointer;
        }

        .navbar .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .content {
            padding: 80px 20px 20px 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f4f4f4;
            border-bottom: 1px solid #ddd;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .header .search {
            margin-right: auto;
            margin-left: 20px;
        }

        .header .search input {
            padding: 5px;
            font-size: 16px;
        }

        .header .add-user {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            background-color: #14867f;
        }

        .table-container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: none;
        }

        th {
            background-color: #f4f4f4;
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        .user-name img {
            width: 40px;
            height: auto;
            border-radius: 10px;
            margin-right: 10px;
        }

        .user-name {
            display: flex;
            align-items: center;
        }

        td.action a {
            text-decoration: none;
            color: #333;
            font-size: 23px;
            transition: color 0.3s;
        }

        td.action a .ph-pencil {
            color: #4caf50;
        }

        td.action a .ph-trash {
            color: #f44336;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('./Admin/sidebar')
        <div class="main-content">
            <div class="navbar">
                <div class="title">User</div>
                <div class="right">
                    <i class="ph ph-bell notification"></i>
                    <div class="user-image">
                        <img src="{{ asset('images/user/suraj.jpg') }}" alt="Us Profile" class="profile-pic">
                    </div>
                </div>
            </div>
            <div class="content">


                <div class="header">
                    <div class="search">
                        <input type="text" placeholder="Search products...">
                    </div>
                    <a class="add-user" href="{{ route('product.create')}}">Add Products</a>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders->orderItems as $order)
                            <tr>
                                <td class="user-name">
                                    <img src="{{ asset('images/products/' . $order->product_image_url	) }}" alt="User Image" class="user-image">

                                    {{ $order->name }}
                                </td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->quantity * $order->price }}</td>
                                <td>{{ $order->order_date }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>
</body>

</html>