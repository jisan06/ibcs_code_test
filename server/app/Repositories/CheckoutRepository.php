<?php

namespace App\Repositories;

use App\Models\DetailsOrder;
use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version January 24, 2020, 4:35 pm +0330
*/

class CheckoutRepository extends BaseRepository
{


    public function getFieldsSearchable()
    {

    }

    public function model()
    {
        return Order::class;
    }

    public function checkout($input)
    {
        DB::beginTransaction();
        try {
            $user = JWTAuth::parseToken()->authenticate();
            $order = new $this->model();
            $order->user_id = $user->user_id;
            $order->client_name = $input['name'];
            $order->client_phone = $input['phone'];
            $order->client_email = $input['email'];
            $order->address = $input['address'];
            $order->total_price = $input['total'];
            $order->save();

            foreach ($input['items'] as $item){
               $order_details = new DetailsOrder();
                $order_details->order_id = $order->order_id;
                $order_details->product_id  = $item['product'];
                $order_details->product_price  = $item['price'];
                $order_details->quantity  = $item['quantity'];
                $order_details->save();
            }

            DB::commit();
            return response()->json(['success' => 'ok']);
        }catch (\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
