<?php
/**
 * Created by PhpStorm.
 * User: Hoaicot
 * Date: 9/6/2017
 * Time: 4:02 PM
 */

namespace App\Http\Controllers;
use Product;


class ProductController extends  Controller
{
    public function danhsach() {
        $product = new Product();
        $product->id = 1;
        $ids = [1, 2, 3 , 4];
//        $names = ['Lua', 'Ngo', 'Khoai', 'San'];
//        $price = [10,11,12,13];
        return view('product', compact('ids'));
    }
}