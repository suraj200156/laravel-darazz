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

    <h2>Review table</h2>

    <table style="width:100%">
        <tr>
            <th>id</th>
            <th>rating</th>
            <th>comment</th>
            <th>user_id</th>
            <th>product_id</th>
        </tr>

        @foreach($reviews as $review)
        <tr>
            <td>{{$review->id}}</td>
            <td>{{$review->rating}}</td>
            <td>{{$review->comment}}</td>
            <td>{{$review->user_id}}</td>
            <td>{{$review->product_id}}</td>
        </tr>

        @endforeach


    </table>

</body>

</html>