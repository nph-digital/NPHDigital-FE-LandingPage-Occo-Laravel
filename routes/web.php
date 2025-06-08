<?php

use Illuminate\Support\Facades\Route;

use \App\Livewire\Page\Home;
use \App\Livewire\Page\PrivacyPage;
use \App\Livewire\Page\ServiceAgreement;

Route::get("/", Home::class)->name("home");
Route::get("/chinh-sach-bao-mat", PrivacyPage::class)->name("privacy");
Route::get("/thoa-thuan-dich-vu", ServiceAgreement::class)->name("service-agreement");

