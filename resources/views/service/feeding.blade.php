@extends('layouts.manuals_layout')

@section('title', '食事介助')
@section('description', '食事介助一覧')

@section('content')
    
<div class="select-block">
    @foreach ($customers as $customer)
        @foreach ($customer->services as $service)
            @if ($service->feeding)
                <h2>{{ $customer->name }}</h2>
                @break
            @endif
        @endforeach

        @foreach ($customer->services as $service)
            @if ($service->feeding)
                <div class="hidden-box">
                    <input type="checkbox" id="{{$service->id}}" />
                    <label for="{{$service->id}}"></label>
                    @foreach ($customer->services as $service)
                        @if ($service->feeding)
                            <div class="list-style hidden-show">
                                <p>{{ $service->feeding }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
                @break
            @endif
        @endforeach
    @endforeach

    {{-- side --}}
    @section('side')
        @component('components.add-side2')
        @endcomponent
    @endsection
</div>

@endsection