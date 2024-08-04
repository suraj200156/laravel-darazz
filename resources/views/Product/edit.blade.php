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

        .add-product-form {
            width: 90%;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px 3%;
            margin: 15px 5% 0 5%;

        }

        .add-product-form .row {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .add-product-form .column {
            flex: 1;
        }

        .add-product-form label {
            display: block;
            margin-bottom: 5px;
            color: #3B3C36;
            font-size: 15px;
            font-weight: 100;
            letter-spacing: 1px;

        }

        .add-product-form input[type="text"],
        .add-product-form input[type="file"],
        .add-product-form select {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #676767;
        }

        .add-product-form .description {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #676767;
        }

        .add-product-form button {
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
                <div class="title">Add Product</div>
                <div class="right">
                    <i class="ph ph-bell notification"></i>
                    <div class="user-image">
                        <img src="{{ asset('images/user/suraj.jpg') }}" alt="User Profile" class="profile-pic">
                    </div>
                </div>
            </div>
            <div class="content">





                <div class="add-product-form">
                    <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" value="{{$product->id}}" name="id" hidden>

                        <div class="row">
                            <div class="column">
                                <label>Product Name</label>
                                <input type="text" name="name" value="{{$product->name}}" required>
                                @if ($errors->has('name'))
                                <p>{{ $errors->first('name') }}</p>
                                @endif

                                <label>Stocks</label>
                                <input type="text" name="stock" value="{{$product->stocks}}" required>
                                @if ($errors->has('stock'))
                                <p>{{ $errors->first('stock') }}</p>
                                @endif
                            </div>
                            <div class="column">
                                <label>Price</label>
                                <input type="text" name="price" value="{{$product->price}}" required>
                                @if ($errors->has('price'))
                                <p>{{ $errors->first('price') }}</p>
                                @endif

                                <label>Choose Category</label>
                                <select name="categoryId">
                                    <option value="">Choose Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('categoryId'))
                                <p>{{ $errors->first('categoryId') }}</p>
                                @endif
                            </div>
                        </div>

                        <label>Select product image</label>
                        <input type="file" name="imageUrlPath">
                        @if ($errors->has('imageUrlPath'))
                        <p>{{ $errors->first('imageUrlPath') }}</p>
                        @endif

                        <label>Description</label>
                        <textarea class="description" name="description" maxlength="500">{{$product->description}}</textarea>
                        @if ($errors->has('description'))
                        <p>{{ $errors->first('description') }}</p>
                        @endif

                        <button type="submit">Update Product</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</body>

</html>