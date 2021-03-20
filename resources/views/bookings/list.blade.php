<x-app-layout class="container mx-16">
    
    @foreach($bookings as $booking)
    <div>
        <p>
        Id:
        {{$booking->id}}
        </p>
        <p>
        Home Id:
        {{$booking->home_id}}
        </p>
        <p>
        CheckIn
        {{date('d-m-Y', strtotime($booking->checkIn)) }}
        </p>
        <p>
        Checkout
        {{date('d-m-Y', strtotime($booking->checkOut)) }}
        </p>
    </div>
    @endforeach


    </x-layouts.app>