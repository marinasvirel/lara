	<?php

  namespace App\View\Components;

  use Illuminate\View\Component;

  class User extends Component
  {
    public function render()
    {
      return view('components.user', [
        'name' => "name",
        'surname' => "surname",
        'age' => "age",
      ]);
    }
  }
