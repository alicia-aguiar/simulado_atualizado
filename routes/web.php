<?php

use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', ProdutoIndex::class);
