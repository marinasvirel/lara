<x-layout>
  <x-slot:title>all</x-slot>
  <x-slot:desc>Описание страницы</x-slot>
  <table>
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