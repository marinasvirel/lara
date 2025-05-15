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
  <x-info>некоторый текст</x-info>
  <x-logo>
    <x-slot:alt>
      атрибут alt картинки
    </x-slot>
    <x-slot:title>
      атрибут title картинки
    </x-slot>
     путь к картинке логотипа
    </x-logo>
</body>

</html>