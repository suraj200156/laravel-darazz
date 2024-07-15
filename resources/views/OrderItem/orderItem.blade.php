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

    <h2>Order Item table</h2>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>quantity</th>
            <th>price</th>
            <th>order_id</th>
            <th>product_id</th>
        </tr>

        @foreach($orderItems as $orderItem)
        <tr>
            <td>{{$orderItem->id}}</td>
            <td>{{$orderItem->quantity}}</td>
            <td>{{$orderItem->price}}</td>
            <td>{{$orderItem->order_id}}</td>
            <td>{{$orderItem->product_id}}</td>
        </tr>
        @endforeach

    </table>

</body>

</html>