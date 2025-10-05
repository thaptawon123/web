<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is a minimal api.php to satisfy framework expectations. Add API
| routes here when needed.
|
*/

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});
