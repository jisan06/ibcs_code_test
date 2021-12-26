<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailsOrder;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class orderController extends Controller
{

    public $order;

    public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }


    public function customerOrderList(Request $request)
    {
        $orders =  $this->order->customerOrderList($request);
        return response()->json([
            'orders' => $orders
        ],200);
    }

}
