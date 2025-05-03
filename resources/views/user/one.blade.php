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
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->surname }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->login }}</td>
      <td>{{ $user->password }}</td>
      <td>{{ $user->user_id }}</td>
    </tr>
  </table>
</x-layout>