<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $desc }}"> 
  <title>{{ $title }}</title>
</head>

<body>
  <header>header</header>
  <main>
    {{ $slot }}
  </main>
  <footer>footer</footer>
</body>

</html>