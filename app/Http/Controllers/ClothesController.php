<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function index()
    {
        $clothes = [
            [
                "id" => 1,
                "name" => "Tshirt",
                "price" => 500
            ],
            [
                "id" => 2,
                "name" => "Jeans",
                "price" => 1200
            ],
            [
                "id" => 3,
                "name" => "Jacket",
                "price" => 3000
            ],
            [
                "id" => 4,
                "name" => "Sweater",
                "price" => 800
            ],
            [
                "id" => 5,
                "name" => "Dress",
                "price" => 1500
            ]
        ];

        return view('clothes', compact('clothes'));
    }

    public function show($id)
    {
        $clothes = [
            1 => [
                "name" => "Tshirt",
                "price" => 500,
                "description" => "Cotton Tshirt"
            ],
            2 => [
                "name" => "Jeans",
                "price" => 1200,
                "description" => "Denim jeans"
            ],
            3 => [
                "name" => "Jacket",
                "price" => 3000,
                "description" => "Leather jacket with zip code closure"
            ],
            4 => [
                "name" => "Sweater",
                "price" => 800,
                "description" => "Wool sweater"
            ],
            5 => [
                "name" => "Dress",
                "price" => 1500,
                "description" => "Party dress"
            ]
        ];

        $cloth = $clothes[$id];

        return view('cloth-details', compact('cloth'));
    }
}