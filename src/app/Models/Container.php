<?php

namespace App\Models;

class Container {
  
  public function create($value) {

    $movement = new Movement();

    $movement->test($value);
  }

}