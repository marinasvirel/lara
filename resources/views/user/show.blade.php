<x-layout>
  <table>
    <tr>
      <th>Id</th>
      <th>Имя</th>
      <th>Email</th>
      <th>Возраст</th>
      <th>Зарплата</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->age }}</td>
      <td>{{ $user->salary }}</td>
    </tr>
    @endforeach
  </table>
</x-layout>