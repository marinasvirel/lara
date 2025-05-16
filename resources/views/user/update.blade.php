<x-layout>
  <x-slot:title>update</x-slot>
  <form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="имя">
    <input type="submit">
  </form>
</x-layout>