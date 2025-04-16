<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomePageController extends Controller
{
    //fungsi untuk menampilkan halaman homepage
    public function index()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'pria',
                'slug' => 'Pakaian Pria',
                'description' => 'Ini adalah produk pakaian pria',
                'image' => 'https://example.com/image1.jpg',
            ],
            [
                'id' => 2,
                'name' => 'wanita',
                'slug' => 'Pakaian Wanita',
                'description' => 'Ini adalah produk pakaian wanita',
                'image' => 'https://example.com/image2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'anak-anak',
                'slug' => 'Pakaian Anak-Anak',
                'description' => 'Ini adalah produk pakaian anak-anak',
                'image' => 'https://example.com/image3.jpg',
            ],
            [
                'id' => 4,
                'name' => 'aksesori',
                'slug' => 'Aksesori',
                'description' => 'Ini adalah produk aksesori',
                'image' => 'https://example.com/image4.jpg',
            ],
            [
                'id' => 5,
                'name' => 'sepatu',
                'slug' => 'Sepatu',
                'description' => 'Ini adalah produk sepatu',
                'image' => 'https://example.com/image5.jpg',
            ]
        ];

        $categories = Categories::all();

        return view('web.homepage', [
            'categories' => $categories,
        ]);
    }

    public function products()
    {
        return view('web.products');
    }

    public function tes_variabel()
    {
        $siswa1 = "siswa satu";
        $siswa2 = "ini adalah siswa dua";
        $siswa3 = "ini adalah siswa tiga";

        return view('web.testing', ['siswa1' => $siswa1, 'siswa2' => $siswa2, 'siswa3' => $siswa3]);
    }

    public function category($slug)
    {
        $category = Categories::find($slug);
        return view('web.category_by_slug', [
            'slug' => $slug,
            'category' =>
                $category
        ]);
    }
}
