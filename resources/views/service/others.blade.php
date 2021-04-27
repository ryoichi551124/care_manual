@extends('layouts.manuals_layout')

@section('title', 'その他')
@section('description', 'その他一覧')

@section('content')
    
<div class="select-block">
    @foreach ($customers as $customer)
        @foreach ($customer->services as $service)
            @if ($service->others)
                <h2>{{ $customer->name }}</h2>
                @break
            @endif
        @endforeach

        @foreach ($customer->services as $service)
            @if ($service->others)
                <div class="hidden-box">
                    <input type="checkbox" id="{{$service->id}}" />
                    <label for="{{$service->id}}"></label>
                    @foreach ($customer->services as $service)
                        @if ($service->others)
                            <div class="list-style hidden-show">
                                <p>{{ $service->others }}</p>
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