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

    <h1>Order Item table</h1>

    <h3>Order Id: {{$orders->id}}</h3>
    <h3>User Name: {{$orders->user_name}}</h3>


    <table style="width:100%">
        <tr>
            <th>product id</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
        @foreach($orders->orderItems as $orderItem)
        <tr>
            <td>{{$orderItem->product_id}}</td>
            <td>{{$orderItem->quantity}}</td>
            <td>{{$orderItem->price}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>