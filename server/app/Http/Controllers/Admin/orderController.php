<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailsOrder;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class orderController extends Controller
{
    private $order;
    /**
     * @var OrderRepository
     */
    private $orderRepo;

    public function __construct(OrderRepository $repository)
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update', 'status']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy', 'detailDestroy', 'status']]);

        $this->order = new Order();
        $this->orderRepo = $repository;
    }


    public function index()
    {
        if (Cache::has('orders')) {
            $orders = Cache::get('orders');
        } else {
            $orders = $this->order->with(['users'])->paginate(15);
        }
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $this->orderRepo->checkId($id);
        $order = $this->order->with(['users', 'detailsOrder'])->where('order_id', $id)->first();
        return view('admin.orders.show', compact('order'));

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $order = $this->orderRepo->destroy($id);
        return $this->orderRepo->passViewAfterDeleted($order, 'orders');
    }

    public function detailDestroy($id)
    {
        $this->orderRepo->checkId($id);
        $d_order = DetailsOrder::findOrFail($id)->delete();
        return $this->orderRepo->passViewAfterDeleted($d_order, 'detailsOrders');

    }

    public function status(Request $request,$id)
    {
        $order = $this->orderRepo->updateStatus($request, $id);
        return redirect(route('order.index'));
    }
}
