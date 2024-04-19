<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Inertia::setRootView('Layouts.Checkpoint');
Route::inertia('/checkpoint', 'Checkpoint/Home');

//Route::get('/checkpoint', 'Checkpoint/Home');
