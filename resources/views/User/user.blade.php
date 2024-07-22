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

    <h2>Users table</h2>

    <table style="width:100%">
        <tr>
            <th>User id</th>
            <th>user_name</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>email </th>
            <th>phone_number</th>
            <th>address</th>
            <th>user_type</th>
            <th>password</th>
            <th>use_image_url</th>
        </tr>


        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->user_name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->user_type}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->use_image_url}}</td>
        </tr>

        @endforeach


    </table>

</body>

</html>