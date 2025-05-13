<x-layout>
  <table border="1">
    <tr>
      <th>id</th>
      <th>Имя</th>
    </tr>
     @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td><a href="/user/del/{{$user->id}}">Удалить</a></td>
      <td><a href="/user/update/{{$user->id}}">Редактировать</a></td>
    </tr>
    @endforeach
  </table>
  {{ $users->links() }}
</x-layout>