<?php

use App\Livewire\RadioButton;
use Illuminate\Support\Facades\Route;

Route::get('/', RadioButton::class)->name('radio.button');
