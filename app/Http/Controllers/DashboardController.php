<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(4);

        return view('pages.dashboard', compact('products'));
    }
}
