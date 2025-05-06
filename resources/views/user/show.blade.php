<x-layout>
  <table>
    <tr>
      <th>Id</th>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Email</th>
      <th>Логин</th>
      <th>Пароль</th>
      <th>user_id</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user['id'] }}</td>
      <td>{{ $user['login'] }}</td>
      <td>{{ $user['password'] }}</td>
      <td>{{ $user['name'] }}</td>
      <td>{{ $user['surname'] }}</td>
      <td>{{ $user['email'] }}</td>
      <td>{{ $user['user_id'] }}</td>
    </tr>
    @endforeach
  </table>
</x-layout>