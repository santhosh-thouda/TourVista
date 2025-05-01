@foreach($wishlists as $wishlist)
    <div class="package">
        <h3>{{ $wishlist->package->name }}</h3>
        <form action="{{ route('wishlist.destroy', $wishlist) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit">Remove</button>
        </form>
    </div>
@endforeach