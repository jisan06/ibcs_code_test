<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailsOrder;
use App\Models\Order;
use App\Models\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    private $order;
    private $product;


    public function __construct()
    {
        $this->middleware('checkRole');
        $this->middleware('permission:see-dashboard', ['only' => ['index']]);
        $this->order = new Order();
        $this->product = new Product();
    }

    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search_kind' => 'required',
            'search' => 'string|nullable'
        ]);
        if ($request->search_kind == 'orders') {
            $orders = $this->order
                ->Where('order_id', $request->search)->paginate(10);
            $view = view('admin.orders._data', compact('orders'))->render();

        } else {
            $products = $this->product
                ->Where('product_name', 'like', '%' . $request->search . '%')
                ->orWhere('sku', $request->search)
                ->paginate(10);
            $index_categories = true;
            $view = view('admin.products._data', compact('products', 'index_categories'))->render();
        }

        if ($request->ajax()) {
            return response()->json(['html' => $view]);
        }

    }
}
