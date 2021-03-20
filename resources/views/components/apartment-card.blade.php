@if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<div class="w-full flex">
   <div class="w-6/12 px-10">
   <img src="{{ asset($apartment['image'])}}"/>
    <div class="flex">

        <p>{{$apartment['type']}}. {{$apartment['beds']}} beds </p>
        <p class="self-end">
            *
            {{$apartment['rating']}}
        </p>
    </div>
    <p>{{$apartment['description']}}</p>
    <p>{{$apartment['location']}}</p>
   </div>
   <div class="w-6/12 px-10">
   <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
              <form method="POST" action="{{url('booking') }}">
                     @csrf
                     <!-- Check In -->
                     <div>
                            <x-label for="checkin" :value="__('Check In')" />
                            <x-input id="checkin" class="block mt-1 w-full" type="date" name="checkin" :value="old('checkin')" required autofocus />
                            @error('checkin')
                            <div class="text-red-500 mt-2 text-sm">
                                   {{$message}}
                            </div>
                            @enderror
                     </div>
                     <!-- Checkout -->
                     <div>
                            <x-label for="checkout" :value="__('Checkout')" />
                            <x-input id="checkout" class="block mt-1 w-full" type="date" name="checkout" :value="old('checkout')" required autofocus />
                            @error('checkout')
                            <div class="text-red-500 mt-2 text-sm">
                                   {{$message}}
                            </div>
                            @enderror
                     </div>
                     <div>
                            <x-input id="home_id" type="hidden" name="home_id" :value="$apartment->id" required autofocus />
                     </div>
                     <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                   {{ __('Book') }}
                            </x-button>
                     </div>
              </form>
       </div>
   </div>
</div>