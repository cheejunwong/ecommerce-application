<?php

namespace App\Http\Controllers\Site;

use Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class CheckoutController extends Controller
{

    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        $order = $this->orderRepository->storeOrderDetails($request->all());
        if ($order) {
            return header("Location: /checkout/{$order->order_number}/complete/");
        }

        return redirect()->back()->with('message','Order not placed');
    }

    public function complete(Request $request, $orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->first();
        $order->status = 'processing';
        $order->payment_status = 1;
        $order->payment_method = 'PayPal -'.Uuid::uuid4();
        $order->save();

        Cart::clear();
        return view('site.pages.success', compact('order'));
    }
}
