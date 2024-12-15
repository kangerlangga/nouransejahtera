<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class PublikController extends Controller
{
    //Fungsi untuk halaman home
    public function home()
    {
        return view('pages.public.home', [
            'judul' => 'Home',
            'cHS' => HomeSlider::where('visib_home_sliders', 'Showing')->count(),
            'HomeSlider' => HomeSlider::where('visib_home_sliders', 'Showing')->orderBy('created_at', 'asc')->get(),
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
            'cP' => Product::where('visib_products', 'Showing')->count(),
            'Product' => Product::where('visib_products', 'Showing')->orderBy('page_products', 'asc')->get(),
        ]);
    }

    //Fungsi untuk halaman contact
    public function contact()
    {
        return view('pages.public.contact', [
            'judul' => 'Contact Us',
        ]);
    }

    //Fungsi untuk halaman coming
    public function coming()
    {
        return view('pages.public.coming', [
            'judul' => 'Coming Soon',
        ]);
    }
}
