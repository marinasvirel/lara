<x-layout>
  @foreach($countries as $country)
  <div>
    <h2> {{ $country->name }}</h2>
    <ul>
      @foreach ($country->cities as $city)
      <li> {{ $city->name }}</li>
      @endforeach
    </ul>
  </div>
  @endforeach
</x-layout>