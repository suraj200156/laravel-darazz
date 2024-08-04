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

        .sidebar {
            width: 256px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            padding: 24px;
            gap: 20px;
            position: fixed;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .head {
            display: flex;
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f6f6f6;
        }





        .logo {
            width: 200px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
        }

        .logo img {
            width: 100%;
            object-fit: cover;
        }

        .user-image {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-image img {
            width: 100%;
            object-fit: cover;
        }

        .title,
        .menu .title {
            font-size: 10px;
            font-weight: 500;
            color: #757575;
            text-transform: uppercase;
            margin-bottom: 10px;
        }


        .menu ul li {
            list-style: none;
            margin-bottom: 5px;
        }

        .menu ul li a {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 500;
            color: #757575;
            text-decoration: none;
            padding: 12px 8px;
        }

        .menu ul li a:hover,
        .menu ul li.active a {
            color: #000;
            background-color: #f6f6f6;
        }

        .menu ul li .text {
            flex: 1;
        }

        .menu .sub-menu {
            display: none;
            margin-left: 20px;
            padding-left: 20px;
            padding-top: 5px;
            border-left: 1px solid #f6f6f6;
        }

        .menu .sub-menu li a {
            padding: 10px 8px;
            font-size: 12px;
        }

        .account-menu {
            margin-top: auto;
        }

        .main-content {
            margin-left: 256px;
            /* space for the sidebar */
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
            /* space for the sidebar */
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

        table,
        th,
        td {
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('./Admin/sidebar')
        <div class="main-content">
            <div class="navbar">
                <div class="title">Dashboard</div>
                <div class="right">
                    <i class="ph ph-bell notification"></i>
                    <div class="user-image">
                        <img src="{{ asset('images/user/suraj.jpg') }}" alt="User Profile" class="profile-pic">
                    </div>
                </div>
            </div>
            <div class="content">





            </div>
        </div>
    </div>
</body>

</html>