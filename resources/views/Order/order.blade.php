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

    <h2>Order table</h2>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>user_id</th>
            <th>total_amount</th>
            <th>status</th>
        </tr>

        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->total_amount}}</td>
            <td>{{$order->status}}</td>
        </tr>

        @endforeach


    </table>

</body>

</html>