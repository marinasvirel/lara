<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
</head>

<body>
  <header></header>
  <main>
    {{ $slot }}
  </main>
  <aside class="aside-left"></aside>
  <aside class="aside-right"></aside>
  <footer></footer>
</body>

</html>