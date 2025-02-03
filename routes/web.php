<?php

use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackFormController;

require __DIR__.'/admin.php';


Route::get("/", [HomePageController::class,"index"])->name("home.index");

Route::get("/contacts", [ContactController::class,"index"])->name("contact.index");

Route::get("/medical-price", [PriceController::class,"medical"])->name("medical.index");

Route::get("/veterinary-price", [PriceController::class,"veterinary"])->name("veterinary.index");

Route::get("/food-price", [PriceController::class,"food"])->name("food.index");

Route::get("/price-download", [PriceController::class,"priceDownload"])->name("price.download");

Route::get("/team",[TeamController::class, "team"])->name("team.index");

Route::post("/feedback",[FeedbackFormController::class,"store"])->name("feedback.store");












