<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    protected $now;

    public function index(Request $request)
    {
        $this->now = new \DateTime();

        $products = \DB::table('product')->orderBy('order_by')->get();
        // $products = \DB::table('product')->orderBy('price')->paginate(9);

        $dataProducts = [];
        $sem = [];
        foreach ($products as $key => $value) {
            $key++;
            $sem [] = $value;
            if($key % 3 == 0 || $key == count($products)){
                $dataProducts [] = $sem;
                $sem = [];
            }
        }
        return view('index', [
            'products'   => $dataProducts,
            // 'paginate'   => $products,
        ]);
    }
}
