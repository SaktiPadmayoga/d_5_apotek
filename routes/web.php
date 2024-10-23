<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if ($credentials['email'] === 'user1@gmail.com' && $credentials['password'] === 'password') {
        session(['user' => [
            'name' => 'User',
            'role' => 'user'
        ]]);
        return redirect('/');
    } elseif ($credentials['email'] === 'admin1@gmail.com' && $credentials['password'] === 'adminpass') {
        session(['user' => [
            'name' => 'Admin', 
            'role' => 'admin'
        ]]);
        return redirect('/admin/dashboard'); // Ensure this route exists
    }

    // Handle failed login
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/admin/navAdmin', function () {
    return view('admin.navAdmin');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/manage-products', function () {
    return view('admin.manage-products');
});

Route::get('/product/produk-view', function () {
    return view('product.produk-view');
});

Route::get('/product/produk-checkout', function () {
    return view('product.produk-checkout');
});

Route::get('/product/produk-cart', function () {
    return view('product.produk-cart');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});
