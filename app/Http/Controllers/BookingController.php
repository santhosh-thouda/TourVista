<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('package')->where('user_id', Auth::id())->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create($packageId)
    {
        $package = Package::findOrFail($packageId);
        return view('bookings.create', compact('package'));
    }

    public function store(Request $request)
{
    $request->validate([
        'package_id' => 'required|exists:packages,id',
        'travel_date' => 'required|date|after:today',
        'persons' => 'required|integer|min:1',
    ]);

    $booking = Auth::user()->bookings()->create([
        'package_id' => $request->package_id,
        'travel_date' => $request->travel_date,
        'persons' => $request->persons,
        'special_requests' => $request->special_requests,
        'status' => 'confirmed',
        'total_amount' => Package::find($request->package_id)->price * $request->persons
    ]);

    return redirect()->route('bookings.show', $booking)
        ->with('success', 'Booking confirmed!');
}

    public function show(Booking $booking)
    {
        $this->authorize('view', $booking);
        return view('bookings.show', compact('booking'));
    }

    public function cancel(Booking $booking)
    {
        $this->authorize('update', $booking);
        $booking->update(['status' => 'cancelled']);
        return back()->with('success', 'Booking cancelled successfully!');
    }
}