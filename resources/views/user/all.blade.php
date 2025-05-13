<x-layout>
  <div class="container">
    @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach
  </div>

  {{ $users->links() }}
</x-layout>