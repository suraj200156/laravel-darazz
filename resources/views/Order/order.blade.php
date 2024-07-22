<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0px;
    }

    h2 {
        color: #333;
    }

    h4 {
        color: #666;
        margin: 5px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #4CAF50;
        color: white;
    }

    .container {
        padding-top: 100px;
        margin: 20px;
    }
</style>

<body>

    @include('HeaderAndFooter/header')

    <div class="container">
        <table>
            <tr>
                <th>Order Id</th>
                <th>User name</th>
                <th>order date</th>
                <th>status</th>
                <th>Action</th>
            </tr>

            @foreach($order as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->user_name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->status}}</td>
                <td><a href="{{ route('orders.view', $item->id)}}" target="_blank">view</a></td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>