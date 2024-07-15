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
            font-family: 'Poppins', sans-serif;
            list-style: none;
            text-decoration: none;
        }

        .product {
            text-align: center;
            width: 280px;
            height: 510px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            transform: all 0.3s;
            margin-bottom: 30px;
        }

        .product img {
            width: 100%;
            transition: all 1s;
            padding: 15px 15px 15px 15px;
            cursor: pointer;
        }

        .product img:hover {
            scale: 1.05;
        }

        /* .product_info {
            overflow: hidden;
        } */

        .product .product_info h4 {
            text-align: center;
            margin-top: 30px;
            font-size: 26px;
            font-weight: 600;
        }

        .product .product_info h3 {
            width: 280px;
            height: 20px;
            overflow: hidden;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            margin-top: 20px;
            padding: 0px 20px 0px 30px;

        }

        .product .product_info p {
            margin-top: 20px;
            font-weight: 600;
        }

        .product a:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <!-- @foreach ($products as $product) -->
    <div class="product">
        <img src="{{ asset('images/iPhone 15 Pro.JPEG') }}" alt="Description">
        <div class="product_info">
            <h4>
                {{ $product->name }}
            </h4>
            <h3>
                {{ $product->description }}
            </h3>
            <p class="product-price">RS: {{ $product->price }}
            </p>
        </div>
        <!-- @endforeach -->
</body>

</html>