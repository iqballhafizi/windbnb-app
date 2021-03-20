<x-app-layout>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <form method="POST" action="{{url('home') }}" enctype="multipart/form-data">
        @csrf
        <!-- Name -->
        <div>
            <x-label for="description" :value="__('Description')" />
            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <!-- Location -->
        <div>
            <x-label for="location" :value="__('Location')" />
            <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
            @error('location')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <x-label for="beds" :value="__('Beds')" />
            <x-input id="beds" class="block mt-1 w-full" type="text" name="beds" :value="old('beds')" required autofocus />
            @error('beds')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <x-label for="image" :value="__('Image')" />
            <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
            @error('image')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4">
                {{ __('Add') }}
            </x-button>
        </div>
    </form>
    </div>
</div>
   
</x-app-layout>