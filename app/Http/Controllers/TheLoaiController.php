<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TheLoaiController extends Controller
{
    public function getDanhSach(){
        $theloai = Category::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem(){

    }

    public function getSua(){

    }
}
