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

  <h2>Carts table</h2>

  <table style="width:100%">
    <tr>
      <th>id</th>
      <th>user_id </th>
    </tr>
    @foreach($carts as $cart)
    <tr>
      <td>{{$cart-> id }}</td>
      <td>{{$cart-> user_id}}</td>
    </tr>
    @endforeach
  </table>

</body>

</html>