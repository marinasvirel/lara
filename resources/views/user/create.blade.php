<x-layout2>
  <x-slot:title>create</x-slot>
  <x-slot:desc>Описание страницы</x-slot>
  <form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="имя">
    <input type="submit">
  </form>
</x-layout2>