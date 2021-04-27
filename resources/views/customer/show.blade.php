@extends('layouts.manuals_layout')

@section('title', $customer->name.' 様')  
@section('description', '介助方法一覧')

@section('content')

<div class="select-block">

    @foreach ($customer->services as $service)
        @if ($service->getWakeup())
            <h2>起床</h2>
            @break
        @endif
    @endforeach
    @foreach ($customer->services as $service)
        @if ( $service->getWakeup() )
            <div class="list-style">
                <p>{{ $service->getWakeup() }}</p>
            </div>
        @endif
    @endforeach

    @foreach ($customer->services as $service)
        @if ($service->getBedtime())
            <h2>就寝</h2>
            @break
        @endif
    @endforeach
    @foreach ($customer->services as $service)
        @if ( $service->getBedtime() )
            <div class="list-style">
                <p>{{ $service->getBedtime() }}</p>
            </div>
        @endif
    @endforeach

    @foreach ($customer->services as $service)
        @if ($service->getFeeding())
            <h2>食事</h2>
            @break
        @endif
    @endforeach
    @foreach ($customer->services as $service)
        @if ( $service->getFeeding() )
            <div class="list-style">
                <p>{{ $service->getFeeding() }}</p>
            </div>
        @endif
    @endforeach

    @foreach ($customer->services as $service)
        @if ($service->getBathing())
            <h2>入浴</h2>
            @break
        @endif
    @endforeach
    @foreach ($customer->services as $service)
        @if ( $service->getBathing() )
            <div class="list-style">
                <p>{{ $service->getBathing() }}</p>
            </div>
        @endif
    @endforeach

    @foreach ($customer->services as $service)
        @if ($service->getOthers())
            <h2>その他</h2>
            @break
        @endif
    @endforeach
    @foreach ($customer->services as $service)
        @if ( $service->getOthers() )
            <div class="list-style">
                <p>{{ $service->getOthers() }}</p>
            </div>
        @endif
    @endforeach
    
    {{-- side --}}
    @section('side')
        @component('components.add-side')
        @endcomponent
    @endsection

</div>


@endsection