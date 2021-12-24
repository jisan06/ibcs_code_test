<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Repositories\CheckoutRepository;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class checkOutController extends Controller
{

    private $checkout;
    public function __construct(CheckoutRepository $checkout)
    {
        $this->checkout = $checkout;

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|regex:^[a-zA-Z]^',
            'phone' => 'string|required',
            'email' => 'email|required',
            'address' => 'string|required',
        ]);
        return $this->checkout->checkout($request);
    }
}
