<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

  
    public function author(User $user, Order $order)
    {   
        if ($order->user_id == $user->id) {
            return true;
        }else{
            return false;
        }

        //true: visualiza la orden a un authorizado
        //false:  no visualiza la orden a un no autohrizado
    }

    public function payment(User $user, Order $order)
    {   

        if ($order->status == 2) {
            return true;
        }else{
            return false;
        }

        //true: visualiza la orden a un authorizado
        //false:  no visualiza la orden a un no autohrizado
    }


}
