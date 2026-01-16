<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\RegisterRequest;

Route::get('/', function () {
	return view('user.create');
})->name('user.create');


Route::post('/user', function (RegisterRequest $request) {
	$validated = $request->validated();

	dd($validated);
})->name('user.store')->middleware('throttle:3,1');
