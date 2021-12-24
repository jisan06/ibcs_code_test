<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\BaseRepository;
use Tymon\JWTAuth\Facades\JWTAuth;


class OrderRepository extends BaseRepository
{

    public function getFieldsSearchable()
    {

    }


    public function model()
    {
        return Order::class;
    }

    public function destroy($id)
    {
        $order = $this->model()::where('order_id',$id)->first();
        $order->detailsOrder()->delete();
        return $order->delete();
    }

    public function updateStatus($object ,$id )
    {
        $order = $this->model()::where('order_id',$id)->first();
        $order->update([
            'order_status' => $object['order_status']
        ]);
        return $order;
    }

    public function customerOrderList($object)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $orders = $this->model()::with('detailsOrder','detailsOrder.products')->where('user_id', $user->user_id)->get();
        return response()->json($orders);
    }
}
