<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $service_id = $request->query('service_id');
        $selected_service = Service::find($service_id);
        $services = Service::all();
        return view('orders', compact('services', 'selected_service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'quantity' => 'required|integer|min:1',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required|date_format:H:i',
        ]);

        $service = Service::find($request->service_id);
        $total_price = $service->price * $request->quantity;

        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'service_id' => $request->service_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
            'pickup_date' => $request->pickup_date,
            'pickup_time' => $request->pickup_time,
        ]);

        return redirect()->route('orders.show', $order->id);
    }

    public function show($id)
    {
        $order = Order::with('service')->findOrFail($id);
        return view('show', compact('order'));
    }

    public function pay(Request $request, $id)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'payment_details' => 'required|string',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'payment_method' => $request->payment_method,
            'payment_details' => $request->payment_details,
            'payment_status' => 'completed',
        ]);

        return redirect()->route('orders.history')->with('success', 'Payment successful!');
    }

    public function history()
    {
        $orders = Order::where('payment_status', 'completed')->get();
        return view('history', compact('orders'));
    }
}
