<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Public legal pages for TradeHive Social. The social networks' app reviews
// (Meta, TikTok, Google, LinkedIn, Pinterest) require these to be reachable
// without signing in.
Route::view('privacy', 'legal.privacy')->name('legal.privacy');
Route::view('terms', 'legal.terms')->name('legal.terms');
Route::view('data-deletion', 'legal.data-deletion')->name('legal.data-deletion');
