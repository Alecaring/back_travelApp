<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Payment::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'BookingID' => 'required|unsignedBigInteger',
            'Amount' => 'required|decimal|10, 2',
            'PaymentDate' => 'required|dateTime',
        ]);

        $payment = Payment::create($validatedData);

        return response()->json($payment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::findOrFail($id);

        return response()->json($payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = Payment::findOrFail($id);

        $validatedData = $request->validate([
            'BookingID' => 'required|unsignedBigInteger',
            'Amount' => 'required|decimal|10, 2',
            'PaymentDate' => 'required|dateTime',
        ]);

        $payment->update($validatedData);

        return response()->json($payment, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::findOrFail($id);

        $payment->delete();

        return response()->json(null, 204);
    }
}
