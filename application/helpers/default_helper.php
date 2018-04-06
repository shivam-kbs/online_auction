<?php

if (!function_exists('carbon')) {    
  function carbon(...$args) {
    return new Carbon\Carbon(...$args);
  }
}