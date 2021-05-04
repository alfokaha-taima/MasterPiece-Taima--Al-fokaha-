<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Admin;


class dashboardController extends Controller
{
   
public function index() {
        $userCount = User::count();
        $adminCount = Admin::count();
        $categoryCount = Category::count();
        $productCount = Product::count();

        return view('dashboard.dashboard', compact('userCount','adminCount','categoryCount', 'productCount'));
  }
}
