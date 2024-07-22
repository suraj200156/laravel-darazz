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

        header {
            max-height: 80px;
            width: 100%;
            display: flex;
            position: fixed;
            align-items: center;
            justify-content: space-between;
            background-color: #ffffff;
            padding: 20px 5%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .logo {
            width: 200px;
        }



        header .navmenu {
            display: flex;
        }

        header .navmenu a {
            color: black;
            font-size: 20px;
            text-transform: capitalize;
            padding: 10px 20px;
        }

        header .navmenu a:hover {
            color: #00847d;
        }

        header .navmenu li {
            transition: transform 1s ease;
        }

        header .navmenu li:hover {
            transform: scale(1.1);
        }

        header .searca_and_icon .search {
            background-color: #f5f5f7;
            border: 1px solid #ccc;
            width: 250px;
            padding: 8px;
            border-radius: 30px;
        }

        header input {
            padding-left: 10px;
            background: transparent;
            border: 0px;
            outline: 0px;
            width: 210px;
            font-size: 15px;
        }

        .searca_and_icon .search img {
            max-width: 15px;
            height: auto;
            transition: transform .5s ease;
        }

        .searca_and_icon .search button {
            background: transparent;
            border: 0px;
        }

        .searca_and_icon {
            display: flex;
        }

        .searca_and_icon form {
            margin-right: 10px;
        }

        .searca_and_icon .icon img {
            margin-top: 3px;
            margin-left: 8px;
            max-width: 28px;
            height: auto;
            transition: transform .5s ease;
        }

        .searca_and_icon img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <header>
        <a href=""><img class="logo" src="{{ asset('images/others/logo.PNG') }}"></a>
        <ul class="navmenu">
            <li><a href="">Home</a>
            <li><a href="">Products</a>
            <li><a href="">About Us</a>
        </ul>

        <div class="searca_and_icon">
            <form class="search" action="" method="post">
                <input type="text" placeholder="Type to search" name="searchText">
                <button><img src="{{ asset('images/icons/search.png') }}"></button>
            </form>
            <div class="icon">
                <a href=""><img src="{{ asset('images/icons/shopping-bag.png') }}"></a>
                <a href=""><img src="{{ asset('images/icons/user.png') }}"></a>
            </div>
        </div>
    </header>
</body>

</html>