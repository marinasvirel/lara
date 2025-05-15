<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
</head>

<body>
  <x-header />
  <main>
    <x-main.menu.nav />
    {{ $slot }}
  </main>
  <x-aside />
  <x-footer />
  <x-footer.info />
  <x-info-block />
  <x-sidebar.info-block />
  <x-sidebar.left.info-block />
</body>

</html>