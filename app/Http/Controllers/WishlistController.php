<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Auth::user()->wishlists()->with('package')->get();
        return view('wishlist', compact('wishlists'));
    }

    public function store(Request $request)
    {
        $request->validate(['package_id' => 'required|exists:packages,id']);

        Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'package_id' => $request->package_id
        ]);

        return back()->with('success', 'Added to wishlist!');
    }

    public function destroy(Wishlist $wishlist)
    {
        $this->authorize('delete', $wishlist);
        $wishlist->delete();
        return back()->with('success', 'Removed from wishlist!');
    }
}