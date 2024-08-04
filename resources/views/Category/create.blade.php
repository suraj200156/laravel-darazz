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

        .add-category-form {
            width: 90%;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px 3%;
            margin: 15px 5% 0 5%;

        }


        .add-category-form label {
            display: block;
            margin-bottom: 5px;
            color: #3B3C36;
            font-size: 15px;
            font-weight: 100;
            letter-spacing: 1px;

        }

        .add-category-form input {
            width: 100%;
            padding: 6px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #676767;
        }

        .add-category-form button {
            background-color: #00847d;
            color: white;
            border: none;
            margin-top: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            display: block;
            width: 100%;
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

                <div class="add-category-form">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="add-category-input">
                            <label>Category Name</label>
                            <input type="text" name="name" required>
                        </div>
                        <button type="submit">Add Category</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>

</html>