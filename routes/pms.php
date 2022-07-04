<?php

use App\Http\Controllers\PmsRatingScaleMatrixController;
use Illuminate\Support\Facades\Route;


Route::get('/rating-scale-matrix', [PmsRatingScaleMatrixController::class, 'index']);
