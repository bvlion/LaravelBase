<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  return [
    'server' => date('Y-m-d H:i:s T'),
    'db' => DB::select('SELECT NOW() AS time')[0]->time,
  ];
});