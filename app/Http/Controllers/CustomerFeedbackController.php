<?php

namespace App\Http\Controllers;

use App\Models\CustomerFeedback;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = CustomerFeedback::with(['user', 'booking'])->latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    public function create(Booking $booking)
    {
        $this->authorize('createFeedback', $booking);
        return view('feedback.create', compact('booking'));
    }

    public function store(Request $request, Booking $booking)
    {
        $this->authorize('createFeedback', $booking);

        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:1000',
        ]);

        CustomerFeedback::create([
            'user_id' => Auth::id(),
            'booking_id' => $booking->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Thank you for your feedback!');
    }
}