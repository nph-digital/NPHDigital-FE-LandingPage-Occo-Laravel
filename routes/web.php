<?php

use Illuminate\Support\Facades\Route;

use \App\Livewire\Page\Home;
use \App\Livewire\Page\PrivacyPage;
use \App\Livewire\Page\ServiceAgreement;
use \App\Livewire\Page\Contact;
use \App\Livewire\Page\AboutUs;

Route::get("/", Home::class)->name("home");
Route::get("/ve-chung-toi", AboutUs::class)->name("about");
Route::get("/chinh-sach-bao-mat", PrivacyPage::class)->name("privacy");
Route::get("/thoa-thuan-dich-vu", ServiceAgreement::class)->name("service-agreement");
Route::get("/lien-he", Contact::class)->name("contact");

