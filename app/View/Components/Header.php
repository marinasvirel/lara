<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
	public function render()
	{
		return view('components.header', [
			'var1' => 1,
			'var2' => 2,
		]);
	}
}
