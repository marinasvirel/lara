<x-layout>
  @if(!empty($data))
  <ul>
    <li>{{ $data['city']}}</li>
    <li>{{ $data['country']}}</li>
  </ul>
  @endif

  <form action="" method="POST">
    @csrf
    <input type="text" name="city" placeholder="город">
    <input type="text" name="country" placeholder="страна">
    <input type="submit">
  </form>
</x-layout>