<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
return view('profile'); 
})->name('profile'); 

Route::get('/laboratorium', function () { 
return view('laboratorium'); 
})->name('laboratorium'); 

Route::get('/kontak', function () { 
return view('kontak'); 
})->name('kontak');

Route::get('/pengajar', function () { 
return view('pengajar'); 
})->name('pengajar');