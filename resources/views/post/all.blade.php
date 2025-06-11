<x-layout>
  <x-slot:title>all</x-slot>
  <x-slot:desc>Описание страницы</x-slot>
  <ul>
     @foreach ($posts as $post)
    <li>
      <a href="/post/{{$post->id}}">{{ $post->title }}</a>
    </li>
    @endforeach
  </ul>
</x-layout>