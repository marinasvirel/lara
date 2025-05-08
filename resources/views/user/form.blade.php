<x-layout>
  <form action="/result" method="POST">
    @csrf
    <input type="text" name="name" placeholder="имя">
    <input type="number" name="age" placeholder="возраст">
    <input type="number" name="salary" placeholder="зарплата">
    <input type="submit">
  </form>
</x-layout>