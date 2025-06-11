<h2>Top 5</h2>
<ol>
  @foreach ($posts as $post)
  <li>
    <a href="/post/{{$post->id}}">{{$post->title}}</a>
    {{$post->likes}}
  </li>
  @endforeach
</ol>