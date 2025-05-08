<x-layout>
  @if(!empty($data))
  <ul>
    <li>{{ $data['name']}}</li>
    <li>{{ $data['login']}}</li>
  </ul>
  @endif

  <form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="имя">
    <input type="text" name="surname" placeholder="фамилия">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="login" placeholder="логин">
    <input type="password" name="password" placeholder="пароль">
    <input type="submit">
  </form>
</x-layout>