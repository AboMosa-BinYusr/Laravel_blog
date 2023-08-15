<?php 
use App\Http\Controllers\UserController;


Route::prefix('user_name')->controller(UserController::class)->group(function(){
    Route::get('', function() {
        return 'You do be user fr fr';
    });
    Route::get('/fr', 'mainLadsName');
    Route::get('/frfr', 'soko')->middleware('auth');
    Route::get('/HoBlAh/{name}', 'go_to_hoblah');
});
