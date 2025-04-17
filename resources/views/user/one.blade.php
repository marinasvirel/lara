<x-layout>
  <table>
    <tr>
      <th>Имя</th>
      <th>Email</th>
      <th>Возраст</th>
      <th>Зарплата</th>
    </tr>
    @foreach ($user as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->age }}</td>
      <td>{{ $item->salary }}</td>
    </tr>
    @endforeach
  </table>
</x-layout>