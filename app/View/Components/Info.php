	<?php

  namespace App\View\Components;

  use Illuminate\View\Component;

  class Info extends Component
  {
    public function render()
    {
      return view('components.info', ['str1', 'str2', 'str3']);
    }
  }
