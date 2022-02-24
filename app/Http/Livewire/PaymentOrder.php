<?php

namespace App\Http\Livewire;



use App\Models\Order;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResumenMailable;

class PaymentOrder extends Component
{
    use AuthorizesRequests;
    

    public $order;

    protected $listeners = ['payOrder'];

    public function mount(Order $order){
        $this->order = $order;
    }

    public function store(Request $request){


        

    }

    public function payOrder(){
        $this->authorize('author', $this->order);

        $this->order->status = 2;
       $this->order->save();

        return redirect()->route('orders.show', $this->order);
    }
    // cambie estso
    public function create_order(){
        $this->order->status = 2;
        $this->order->save();

        $correo = new ResumenMailable(null);
        Mail::to( auth()->user()->email)->send($correo);

        return redirect()->route('orders.show', $this->order);
    }

        



    public function render()
    {
        // $this->authorize('payment', $this->order);
        $this->authorize('author', $this->order);
        $items = json_decode($this->order->content);
        $envio = json_decode($this->order->envio);


        return view('livewire.payment-order', compact('items', 'envio'));
    }
}
