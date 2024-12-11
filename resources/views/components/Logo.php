<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Logo extends Component
{
  public $size;

  public function __construct($size = null) 
  {
    $this->size = $size;
  }

  public function render()
  {
    return view('components.logo');
  }
}
