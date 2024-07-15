<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'jost', sans-serif;
            list-style: none;
            text-decoration: none;
        }

        .layout {
            display: flex;
        }

        .content_container {
            margin-left: 250px;
            width: 80%;
            margin-top: 90px;
        }

        .profile_pic {
            width: 90%;
            display: flex;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px 3%;
            margin: 20px 5% 15px 5%;
            align-items: center;
            justify-content: space-between;
        }

        .profile_pic_and_name {
            display: flex;
            align-items: center;
        }

        .profile_pic img {
            margin-right: 15px;
            width: 80px;
            border-radius: 50%;
            border: 1px solid #ccc;
        }

        .profile_pic h1 {
            color: #333;
            font-size: 35px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .profile_pic p {
            font-size: 25px;
            font-weight: 500;
            color: #676767;
        }

        .profile_pic button {
            margin-right: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #00847d;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .user_information {
            width: 90%;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(53, 44, 44, 0.1);
            padding: 20px 3%;
            margin: 10px 5%;
            align-items: center;
        }

        .user_information h1 {
            color: #333;
            font-size: 35px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .user_information p {
            font-size: 20px;
            margin-bottom: 10px;
            color: red;
        }

        .user_information .row {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .user_information .column {
            flex: 1;
        }

        .user_information label {
            display: block;
            margin-bottom: 5px;
            color: #3B3C36;
            font-size: 25px;
            font-weight: 100;
            margin-bottom: 10px;
        }

        .user_information input[type="text"],
        .user_information input[type="email"] {
            width: 100%;
            padding: 13px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 20px;
            color: #676767;
        }

        .user_information button {
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
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="profile_pic">
            <div class="profile_pic_and_name">
                <img src="{{ asset('images/userOne.JPG') }}" alt="Description">
                <!-- 
                <img src="./userOne.JPG"> -->
                <div class="user">
                    <h1>Uplode a New photo</h1>
                    <p>{{$user -> user_name}}</p>
                </div>
            </div>

            <button>Uplode</button>
        </div>

        <div class="user_information">
            <h1>Change User Information here</h1>
            <form action="${pageContext.request.contextPath}/ProfileServlet" method="post">

                <div class="row">
                    <div class="column">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" value="{{$user -> first_name}}" required>
                        <label for="userName">Gender</label>
                        <input type="text" name="gender" value="{{$user -> gender}}" required>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$user -> email}}" required>
                    </div>
                    <div class="column">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" value="{{$user -> last_name}}" required>
                        <label for="gender">Address</label>
                        <input type="text" name="address" value="{{$user -> address}}" required>
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" name="phoneNumber" value="{{$user -> phone_number}}" required>
                    </div>

                </div>

                <div>
                    <button>Update</button>
                </div>



            </form>



        </div>


    </div>

</body>

</html>