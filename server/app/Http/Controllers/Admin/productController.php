<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\SessionExpiredException;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Products\productRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;

class productController extends AppBaseController
{
    private $productRepo;
    private $product;
    private $paginate;


    public function __construct(ProductRepository $repository)
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);

        $this->productRepo = $repository;
        $this->product = new Product();
        $this->paginate = $repository->paginateNum;

    }

    public function index()
    {
        $products = $this->product->paginate($this->paginate);
        return view($this->productRepo->viewPrefix . 'index', compact('products'));
    }

    public function create()
    {
        return view($this->productRepo->viewPrefix . 'create');
    }


    public function store(productRequest $request)
    {
        $product = $this->productRepo->createProduct($request);
        if ($product) {
            session()->put('create-product', $product);
        }
        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $product = $this->productRepo->find($id);
        return view($this->productRepo->viewPrefix . 'edit',
            compact('product'));

    }

    public function update(productRequest $request, $id)
    {
         $product = $this->productRepo->updateProduct($request, $id);
        return redirect(route('product.index'));
    }

    public function destroy($id)
    {
        $product = $this->productRepo->destroy($id);
        return $this->productRepo->passViewAfterDeleted($product, 'products');
    }


}
