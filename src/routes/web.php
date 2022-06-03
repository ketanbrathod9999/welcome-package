<?php

use KBR\Welcome\Http\Controllers\WelcomeController;

// Route::get('pkg-welcome',function(){
//     return view("welcome::welcome_view");
// });

Route::group(['namespace'=>'KBR\Welcome\Http\Controllers'],function(){
    Route::get('pkg-welcome',[WelcomeController::class,'index']);
});