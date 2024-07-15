<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>

    <h2>Product table</h2>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>stocks</th>
            <th>description</th>
            <th>category_id</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stocks}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category_id}}</td>

        </tr>
        @endforeach

    </table>

</body>

</html>