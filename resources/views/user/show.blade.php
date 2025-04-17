<x-layout>
  <table>
    <tr>
      <th>Имя</th>
      <th>Email</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->user_email }}</td>
    </tr>
    @endforeach
  </table>
</x-layout>