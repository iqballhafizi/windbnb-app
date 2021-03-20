<div class="pt-6">
    <h1 class="text-3xl">Stay In </h1>
    <div class="grid gap-4 grid-cols-3 pt-12 ">
        @foreach($apartments as $apartment)
        <div>
            <a href="{{ url('/home/'.$apartment['id'])}}">
                <img src="{{ asset($apartment->image)}}" />
            </a>
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
        @endforeach
    </div>
</div>