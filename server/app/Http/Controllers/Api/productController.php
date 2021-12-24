<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\SessionExpiredException;
use App\Http\Controllers\AppBaseController;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class productController extends AppBaseController
{
    private $productRepo;
    private $product;


    public function __construct(ProductRepository $repository)
    {
        $this->productRepo = $repository;
        $this->product = new Product();

    }

    public function allProducts()
    {
        $products = $this->productRepo->all();
        return response()->json([
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = $this->productRepo->find($id);
        return response()->json([
            'product' => $product
        ]);
    }

    public function search(Request $request)
    {
        $products = $this->productRepo->searchProduct($request);
        return response()->json([
            'products' => $products
        ]);

    }
}
