<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Screamous Celana Board Short Mitrov Green',
                'price' => 120000,
                'discount' => 59,
                'sold' => '4rb+',
                'rating' => 4.9,
                'store' => 'Screamous Clothing_NEW',
                'bonus' => 'Hemat s.d 1% Pakai Bonus',
                'image' => 'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?q=80&w=2070&auto=format&fit=crop',
            ],
            [
                'name' => 'HIMASIUM Exclusive T-Shirt 2024 Black',
                'price' => 85000,
                'discount' => 15,
                'sold' => '1rb+',
                'rating' => 4.8,
                'store' => 'HIMASIUM official',
                'bonus' => 'Voucher Diskon Rp5.000',
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=2080&auto=format&fit=crop',
            ],
            // [
            //     'name' => 'Tote Bag HIMASIUM Canvas Edition',
            //     'price' => 45000,
            //     'discount' => null,
            //     'sold' => '500+',
            //     'rating' => 5.0,
            //     'store' => 'HIMASIUM official',
            //     'bonus' => 'Gratis Sticker Pack',
            //     'image' => 'https://images.unsplash.com/photo-1544816153-12ad5d713312?q=80&w=1974&auto=format&fit=crop',
            // ],
            [
                'name' => 'Hoodie HIMASIUM Navy Blue Premium',
                'price' => 175000,
                'discount' => 20,
                'sold' => '800+',
                'rating' => 4.9,
                'store' => 'HIMASIUM official',
                'bonus' => 'Hemat s.d 5% Pakai Bonus',
                'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?q=80&w=1974&auto=format&fit=crop',
            ],
            [
                'name' => 'Bucket Hat HIMASIUM Embroidered',
                'price' => 60000,
                'discount' => 10,
                'sold' => '200+',
                'rating' => 4.7,
                'store' => 'HIMASIUM official',
                'bonus' => 'Voucher Rp2.000',
                'image' => 'https://images.unsplash.com/photo-1589831377283-33cb1cc6bd5d?q=80&w=1974&auto=format&fit=crop',
            ],
            [
                'name' => 'Lanyard HIMASIUM Black & Blue',
                'price' => 25000,
                'discount' => null,
                'sold' => '2rb+',
                'rating' => 4.9,
                'store' => 'HIMASIUM official',
                'bonus' => 'Hemat dengan Bundle',
                'image' => 'https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?q=80&w=1972&auto=format&fit=crop',
            ],
        ];

        return view('pages.product.index', [
            'products' => json_decode(json_encode($products)) // To object so I can use -> attr
        ]);
    }
}
