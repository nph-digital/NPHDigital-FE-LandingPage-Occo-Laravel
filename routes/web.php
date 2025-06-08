<?php

use Illuminate\Support\Facades\Route;

use \App\Livewire\Page\Home;
use \App\Livewire\Page\PrivacyPage;

Route::get("/", Home::class)->name("home");
Route::get("/chinh-sach-bao-mat", PrivacyPage::class)->name("privacy");

