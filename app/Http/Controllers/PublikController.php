<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikController extends Controller
{
    //Fungsi untuk halaman home
    public function home()
    {
        return view('pages.public.home', [
            'judul' => 'Home',
            // 'cHS' => HomeSlider::where('visib_home_sliders', 'Showing')->count(),
            // 'HomeSlider' => HomeSlider::where('visib_home_sliders', 'Showing')->orderBy('created_at', 'asc')->get(),
            // 'cP' => Product::where('stock_products', '>', 0)->count(),
            // 'Product' => Product::where('stock_products', '>', 0)->latest()->limit(3)->get(),
            // 'cC' => Comment::where('visib_comments', 'Showing')->count(),
            // 'Comment' => Comment::where('visib_comments', 'Showing')->latest()->get(),
        ]);
    }

    //Fungsi untuk halaman about
    public function about()
    {
        return view('pages.public.about', [
            'judul' => 'About Us',
        ]);
    }

    //Fungsi untuk halaman product
    public function product()
    {
        return view('pages.public.product', [
            'judul' => 'Our Product',
            // 'cP' => Product::where('stock_products', '>', 0)->count(),
            // 'Product' => Product::where('stock_products', '>', 0)->latest()->get(),
        ]);
    }

    //Fungsi untuk halaman contact
    public function contact()
    {
        return view('pages.public.contact', [
            'judul' => 'Contact Us',
        ]);
    }
}
