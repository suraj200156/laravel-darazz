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

    <h2>Category table</h2>

    <table style="width:100%">
        <tr>
            <th>Category id</th>
            <th>category name</th>

        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        </tr>

        @endforeach

    </table>

</body>

</html>