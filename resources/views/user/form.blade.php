<x-layout>
  <p>город: {{ $city }}</p>
  <p>страна: {{ $country }}</p>
  <form action="" method="POST">
    @csrf
    <input type="text" name="city" placeholder="город">
    <input type="text" name="country" placeholder="страна">
    <input type="submit">
  </form>
</x-layout>