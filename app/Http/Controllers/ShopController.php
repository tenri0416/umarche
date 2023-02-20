<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');
        $this->middleware(function ($request, $next) {
            return $next($request);
        });
    }
    public function index()
    {
        $ownerId = Auth::id(); //ログインしているid
        $shops = Shop::where('owner_id', $ownerId)->get();
        return view('owner.shops.index', compact('shops'));
    }
    public function edit($id)
    {
        // dd(Shop::where('owner_id', $id));
    }
    public function update()
    {
    }
}
