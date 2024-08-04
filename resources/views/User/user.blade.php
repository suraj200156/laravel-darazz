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
            height: 40px;
            border-radius: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
        }

        .user-name {
            display: flex;
            align-items: center;
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
                        <img src="{{ asset('images/user/suraj.jpg') }}" alt="User Profile" class="profile-pic">
                    </div>
                </div>
            </div>
            <div class="content">


                <div class="header">
                    <div class="search">
                        <input type="text" placeholder="Search users...">
                    </div>
                    <a class="add-user" href="{{ route('user.create')}}" target="_blank">Add User</a>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="user-name">
                                    <img src="{{ asset('images/user/' . $user->use_image_url) }}" alt="User Image" class="user-image">
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->address }}</td>

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



<!-- <!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>

    <h2>Users table</h2>

    <table style="width:100%">
        <tr>
            <th>User id</th>
            <th>user_name</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>email </th>
            <th>phone_number</th>
            <th>address</th>
            <th>user_type</th>
            <th>password</th>
            <th>use_image_url</th>
        </tr>


        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->user_name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->user_type}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->use_image_url}}</td>
        </tr>

        @endforeach


    </table>

</body>

</html> -->