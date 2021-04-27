@extends('layouts.manuals_layout')

@section('title', $customer->name.' 様')  
@section('description', 'サービス内容の編集')

@section('content')

<div class="select-block-edit">
    <h2>起床</h2>
    @foreach ($customer->services as $service)
        @if ( $service->getWakeup() )
            <div class="selected">
                <div class="list-style selected-main">
                    <p>{{ $service->getWakeup() }}</p>
                </div>
                <div class="list-style selected-edit">
                    <p><a href="/service/edit?id={{ $service->getId() }}&cate=wake"><img src="{{ asset('image/edit.png') }}" alt="編集"></a></p>
                </div>
                <div class="list-style selected-edit">
                    <p><a href="/service/del?id={{ $service->getId() }}&cate=wake"><img src="{{ asset('image/dustbox.png') }}" alt="削除"></a></p>
                </div>
            </div>
        </form>
        @endif  
    @endforeach
    <p class="selected-add"><a href="/service/create?id={{ $customer->id }}&cate=wake"><img src="{{ asset('image/plus.png') }}" alt="追加"></a></p>

    <h2>就寝</h2>
    @foreach ($customer->services as $service)
        @if ( $service->getBedtime() )
            <div class="selected">
                <div class="list-style selected-main">
                    <p>{{ $service->getBedtime() }}</p>
                </div>
                <div class="list-style selected-edit">
                    <p><a href="/service/edit?id={{ $service->getId() }}&cate=bed"><img src="{{ asset('image/edit.png') }}" alt="編集"></a></p>
                </div>
                <div class="list-style selected-edit">
                    <p><a href="/service/del?id={{ $service->getId() }}&cate=bed"><img src="{{ asset('image/dustbox.png') }}" alt="削除"></a></p>
                </div>
            </div>
        @endif
    @endforeach
    <p class="selected-add"><a href="/service/create?id={{ $customer->id }}&cate=bed"><img src="{{ asset('image/plus.png') }}" alt="追加"></a></p>

    <h2>食事</h2>
    @foreach ($customer->services as $service)
        @if ( $service->getFeeding() )
        <div class="selected">
            <div class="list-style selected-main">
                <p>{{ $service->getFeeding() }}</p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/edit?id={{ $service->getId() }}&cate=feed"><img src="{{ asset('image/edit.png') }}" alt="編集"></a></p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/del?id={{ $service->getId() }}&cate=feed"><img src="{{ asset('image/dustbox.png') }}" alt="削除"></a></p>
            </div>
        </div>
        @endif
    @endforeach
    <p class="selected-add"><a href="/service/create?id={{ $customer->id }}&cate=feed"><img src="{{ asset('image/plus.png') }}" alt="追加"></a></p>

    <h2>入浴</h2>
    @foreach ($customer->services as $service)
        @if ( $service->getBathing() )
        <div class="selected">
            <div class="list-style selected-main">
                <p>{{ $service->getBathing() }}</p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/edit?id={{ $service->getId() }}&cate=bath"><img src="{{ asset('image/edit.png') }}" alt="編集"></a></p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/del?id={{ $service->getId() }}&cate=bath"><img src="{{ asset('image/dustbox.png') }}" alt="削除"></a></p>
            </div>
        </div>
        @endif
    @endforeach
    <p class="selected-add"><a href="/service/create?id={{ $customer->id }}&cate=bath"><img src="{{ asset('image/plus.png') }}" alt="追加"></a></p>

    <h2>その他</h2>
    @foreach ($customer->services as $service)
        @if ( $service->getOthers() )
        <div class="selected">
            <div class="list-style selected-main">
                <p>{{ $service->getOthers() }}</p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/edit?id={{ $service->getId() }}&cate=other"><img src="{{ asset('image/edit.png') }}" alt="編集"></a></p>
            </div>
            <div class="list-style selected-edit">
                <p><a href="/service/del?id={{ $service->getId() }}&cate=other"><img src="{{ asset('image/dustbox.png') }}" alt="削除"></a></p>
            </div>
        </div>
        @endif
    @endforeach
    <p class="selected-add"><a href="/service/create?id={{ $customer->id }}&cate=other"><img src="{{ asset('image/plus.png') }}" alt="追加"></a></p>

    {{--button--}}
    <div class="button button-service-create button-selected">
        <a href="/customer">利用者選択に戻る</a>
        <a href="{{ url('/manuals') }}">トップに戻る</a>
    </div>
</div>

@endsection
