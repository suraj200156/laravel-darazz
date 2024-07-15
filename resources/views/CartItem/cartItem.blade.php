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

    <h2>Cart Item table</h2>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>quantity</th>
            <th>cart_id</th>
            <th>product_id</th>
        </tr>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem-> id }}</td>
            <td>{{$cartItem-> quantity}}</td>
            <td>{{$cartItem-> cart_id }}</td>
            <td>{{$cartItem-> product_id}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>