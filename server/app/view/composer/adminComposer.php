<?php

namespace App\view\composer;

use App\Models\Order;
use App\Models\Product;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Laravelista\Comments\Comment;

class adminComposer
{

    /**
     * @param View $view
     */
    public function compose(View $view)
    {

    }

    /**
     * uses on sub menu in admin panel
     * @param View $view
     */
    public function menuCount(View $view)
    {
        $menu_count = Cache::remember('menu_count',1440, function () {
            return $menu_count = [
                'orders' => Order::count(),
                'users' => User::count(),
                'products' => Product::count(),
            ];
        });
        $view->with([
            'menu_count' => $menu_count
        ]);
    }

}
